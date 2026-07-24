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

    // CSS handles font switching via [dir="rtl"] — no inline override needed
    document.body.style.fontFamily = '';

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

    // ==========================================
    // Testimonial Carousel Logic
    // ==========================================
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

    // ==========================================
    // Hero Carousel — auto-advance only
    // ==========================================
    const heroSlides = document.querySelectorAll('.hero-slide');
    const heroDotBtns = document.querySelectorAll('.hero-dot');
    const heroSection = document.getElementById('hero');

    let heroIndex = 0;
    let heroTimer = null;
    const HERO_INTERVAL = 3500; // 3.5 seconds per slide for faster switching

    function goToSlide(index) {
        const oldIndex = heroIndex;
        const newIndex = (index + heroSlides.length) % heroSlides.length;
        if (oldIndex === newIndex) return;

        heroSlides.forEach(s => s.classList.remove('prev'));
        heroSlides[oldIndex].classList.remove('active');
        heroSlides[oldIndex].classList.add('prev');
        heroDotBtns[oldIndex].classList.remove('active');

        heroIndex = newIndex;
        heroSlides[heroIndex].classList.add('active');
        heroDotBtns[heroIndex].classList.add('active');
    }

    function startHeroTimer() {
        heroTimer = setInterval(() => goToSlide(heroIndex + 1), HERO_INTERVAL);
    }

    if (heroSlides.length > 1) {
        // Pause on hover, resume on leave
        if (heroSection) {
            heroSection.addEventListener('mouseenter', () => clearInterval(heroTimer));
            heroSection.addEventListener('mouseleave', startHeroTimer);
        }
        startHeroTimer();
    }

    // ==========================================
    // Gallery Lightbox
    // ==========================================
    const galleryItems = document.querySelectorAll('.gallery-item');
    const lightbox = document.getElementById('galleryLightbox');
    const lightboxImg = document.getElementById('lightboxImg');
    const lightboxClose = document.getElementById('lightboxClose');
    const lightboxPrev = document.getElementById('lightboxPrev');
    const lightboxNext = document.getElementById('lightboxNext');

    let galleryImages = [];
    let currentGalleryIndex = 0;

    if (galleryItems.length > 0 && lightbox) {
        // Collect all gallery image sources
        galleryItems.forEach((item, index) => {
            const img = item.querySelector('img');
            if (img) {
                galleryImages.push(img.src);
                item.addEventListener('click', () => {
                    currentGalleryIndex = index;
                    openLightbox(index);
                });
            }
        });

        function openLightbox(index) {
            lightboxImg.src = galleryImages[index];
            lightbox.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeLightbox() {
            lightbox.classList.remove('active');
            document.body.style.overflow = '';
        }

        function showPrev() {
            currentGalleryIndex = (currentGalleryIndex - 1 + galleryImages.length) % galleryImages.length;
            lightboxImg.src = galleryImages[currentGalleryIndex];
        }

        function showNext() {
            currentGalleryIndex = (currentGalleryIndex + 1) % galleryImages.length;
            lightboxImg.src = galleryImages[currentGalleryIndex];
        }

        lightboxClose.addEventListener('click', closeLightbox);
        lightboxPrev.addEventListener('click', showPrev);
        lightboxNext.addEventListener('click', showNext);

        // Close on clicking outside the image
        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox || e.target.classList.contains('lightbox-content')) {
                closeLightbox();
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowLeft') showPrev();
            if (e.key === 'ArrowRight') showNext();
        });
    }

});
