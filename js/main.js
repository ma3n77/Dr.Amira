/**
 * Amira Clinic — Main JavaScript
 * Handles: Language toggle, Navbar, Animations
 */

// ==========================================
// Global Language State
// ==========================================
let currentLang = 'en';

function toggleLang() {
    currentLang = currentLang === 'en' ? 'ar' : 'en';
    applyLanguage(currentLang);
}

function applyLanguage(lang) {
    const html = document.documentElement;

    // Switch direction and lang attribute
    html.setAttribute('lang', lang);
    html.setAttribute('dir', lang === 'ar' ? 'rtl' : 'ltr');

    // Update all bilingual text elements
    document.querySelectorAll('[data-en][data-ar]').forEach(el => {
        el.innerHTML = el.getAttribute(`data-${lang}`);
    });

    // Update toggle button text
    const toggleBtn = document.getElementById('langToggle');
    if (toggleBtn) {
        toggleBtn.textContent = lang === 'en' ? 'عربي' : 'EN';
    }

    // Update font family for Arabic
    document.body.style.fontFamily = lang === 'ar'
        ? "'Noto Serif Arabic', 'Manrope', sans-serif"
        : "'Manrope', 'Segoe UI', sans-serif";

    // Save preference
    localStorage.setItem('amira-lang', lang);
}

// ==========================================
// DOM Ready
// ==========================================
document.addEventListener('DOMContentLoaded', () => {

    // Restore saved language preference
    const savedLang = localStorage.getItem('amira-lang') || 'en';
    currentLang = savedLang;
    applyLanguage(currentLang);

    // ==========================================
    // Navbar scroll effect
    // ==========================================
    const header = document.getElementById('siteHeader');
    if (header) {
        window.addEventListener('scroll', () => {
            header.classList.toggle('scrolled', window.scrollY > 60);
        });
    }

    // ==========================================
    // Mobile menu toggle
    // ==========================================
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    if (navToggle && navMenu) {
        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        navMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
    }

    // ==========================================
    // Scroll reveal animations
    // ==========================================
    const revealElements = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                revealObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.15,
        rootMargin: '0px 0px -40px 0px'
    });

    revealElements.forEach((el, index) => {
        el.style.transitionDelay = `${index * 0.05}s`;
        revealObserver.observe(el);
    });

    // ==========================================
    // Smooth scroll for anchor links
    // ==========================================
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                const headerOffset = 80;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.scrollY - headerOffset;

                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });

    // ==========================================
    // Stat counter animation
    // ==========================================
    const statNums = document.querySelectorAll('.hero-stat-num');

    const animateCounter = (element, target, duration = 2000) => {
        const text = element.textContent.trim();
        const suffix = text.replace(/[0-9]/g, '').trim();
        const prefix = text.startsWith('+') ? '+' : '';
        let start = 0;
        const increment = target / (duration / 16);

        const timer = setInterval(() => {
            start += increment;
            if (start >= target) {
                element.textContent = prefix + target + suffix.replace('+', '');
                clearInterval(timer);
            } else {
                element.textContent = prefix + Math.floor(start) + suffix.replace('+', '');
            }
        }, 16);
    };

    const statsObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !entry.target.dataset.animated) {
                const text = entry.target.textContent.trim();
                const number = parseInt(text.replace(/[^0-9]/g, ''));
                if (!isNaN(number) && number > 0) {
                    entry.target.dataset.animated = 'true';
                    animateCounter(entry.target, number);
                }
            }
        });
    }, { threshold: 0.5 });

    statNums.forEach(stat => statsObserver.observe(stat));

    // Testimonial Carousel Logic
    const testimonialDots = document.querySelectorAll('.testimonial-dot');
    const testimonialItems = document.querySelectorAll('.testimonial-item');

    if (testimonialDots.length > 0 && testimonialItems.length > 0) {
        testimonialDots.forEach(dot => {
            dot.addEventListener('click', () => {
                const index = dot.getAttribute('data-index');
                
                // Remove active classes
                testimonialDots.forEach(d => d.classList.remove('active'));
                testimonialItems.forEach(item => item.classList.remove('active'));
                
                // Add active to current
                dot.classList.add('active');
                if (testimonialItems[index]) {
                    testimonialItems[index].classList.add('active');
                }
            });
        });
    }
});
