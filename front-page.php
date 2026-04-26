<?php get_header(); ?>

    <!-- ====== HERO ====== -->
    <section class="hero" id="hero" style="background-image: url('images/about.jpg');">
        <div class="hero-overlay"></div>
        <div class="container hero-container">
            <div class="hero-content reveal">
                <h1 class="hero-title" data-en="Specialized Women's Healthcare"
                    data-ar="رعاية صحية متخصصة للمرأة">Specialized Women's Healthcare</h1>
                <p class="hero-subtitle"
                    data-en="Prof. Dr. Amira Badawy — Professor of Obstetrics & Gynecology at Alexandria University. Over 20 years of excellence in comprehensive women's healthcare, gynecological oncology, and advanced laparoscopy."
                    data-ar="أ.د. أميرة بدوى — أستاذ أمراض النساء والتوليد بجامعة الإسكندرية، خبرة تزيد عن 20 عاماً في الرعاية الصحية المتكاملة والأورام النسائية والمناظير المتقدمة.">
                    Prof. Dr. Amira Badawy — Professor of Obstetrics & Gynecology at Alexandria University. Over 20 years of excellence in comprehensive women's healthcare, gynecological oncology, and advanced laparoscopy.
                </p>
                <div class="hero-buttons">
                    <a href="#book" class="btn btn-plum"><span class="material-symbols-outlined btn-icon">call</span> <span data-en="Book a Consultation" data-ar="احجز استشارة">Book a Consultation</span></a>
                    <a href="#about" class="btn btn-ghost" data-en="Learn More" data-ar="تعرف علينا">Learn More</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== ABOUT OVERLAP ====== -->
    <section class="about overlap-section" id="about">
        <div class="container">
            <div class="overlap-card reveal">
                <div class="about-grid">
                    <div class="about-text-content">
                        <span class="section-label" data-en="ABOUT THE DOCTOR" data-ar="عن الدكتورة">ABOUT THE DOCTOR</span>
                        <div class="about-quote"
                            data-en="Women's health is not a luxury — it is the foundation of family and community well-being."
                            data-ar="صحة المرأة ليست رفاهية.. هي أساس صحة الأسرة والمجتمع">
                            Women's health is not a luxury — it is the foundation of family and community well-being.
                        </div>
                        <p class="about-text"
                            data-en="Dr. Amira Badawy combines deep academic expertise as a professor at the Faculty of Medicine, Alexandria University, with over two decades of clinical experience handling the most intricate medical and surgical cases."
                            data-ar="تجمع الدكتورة أميرة بدوي بين الخبرة الأكاديمية العميقة كأستاذة في كلية الطب بجامعة الإسكندرية، وبين الخبرة العملية الممتدة لأكثر من عقدين في التعامل مع أدق الحالات الطبية والجراحية.">
                            Dr. Amira Badawy combines deep academic expertise as a professor at the Faculty of Medicine,
                            Alexandria University, with over two decades of clinical experience handling the most intricate
                            medical and surgical cases.
                        </p>
                        
                        <div class="hero-stats" style="padding-top: 20px; border-top: 1px solid var(--outline); margin-top: 30px;">
                            <div class="hero-stat">
                                <div class="hero-stat-num large">20+</div>
                                <div class="hero-stat-txt" data-en="Years Experience" data-ar="سنة خبرة">Years Experience</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-num">100%</div>
                                <div class="hero-stat-txt" data-en="Female Team" data-ar="فريق نسائي">Female Team</div>
                            </div>
                            <div class="hero-stat">
                                <div class="hero-stat-num">3</div>
                                <div class="hero-stat-txt" data-en="Branches" data-ar="فروع">Branches</div>
                            </div>
                        </div>
                    </div>
                    <div class="about-image">
                        <div class="about-image-frame">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/Dr.Amira.jpg" alt="Dr. Amira Badawy">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== SERVICES ====== -->
    <section class="services" id="services">
        <div class="container">
            <div class="services-header-centered reveal" style="text-align: center; margin-bottom: 60px;">
                <span class="section-label" data-en="OUR SERVICES" data-ar="خدماتنا">OUR SERVICES</span>
                <h2 data-en="Specialized Medical Services" data-ar="خدماتنا المتخصصة">Specialized Medical Services</h2>
            </div>

            <div class="services-premium-grid">
                <!-- Service 1 (Large) -->
                <div class="service-premium-card large-card reveal">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-cancer.png" alt="Cancer Detection" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Early Cancer Detection & Precision Surgery" data-ar="الكشف المبكر للأورام والجراحات الدقيقة">Early Cancer Detection & Precision Surgery</h3>
                        <p class="service-premium-desc" data-en="Utilizing the latest global technologies for early detection and advanced surgical intervention with the highest safety standards." data-ar="نستخدم أحدث التقنيات العالمية للكشف المبكر والتدخل الجراحي المتقدم بأعلى معايير الأمان">Utilizing the latest global technologies for early detection and advanced surgical intervention with the highest safety standards.</p>
                        <a href="#contact" class="btn-link" data-en="Learn More" data-ar="المزيد">Learn More <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>
                
                <!-- Service 2 (Large) -->
                <div class="service-premium-card large-card reveal" style="transition-delay: 0.1s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-laparoscopy.png" alt="Advanced Laparoscopy" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Advanced Laparoscopy" data-ar="المناظير المتقدمة">Advanced Laparoscopy</h3>
                        <p class="service-premium-desc" data-en="Same-day surgeries with the latest laparoscopic equipment for minimal pain and faster recovery." data-ar="جراحات اليوم الواحد بأحدث أجهزة المناظير لتقليل الألم وسرعة التعافي">Same-day surgeries with the latest laparoscopic equipment for minimal pain and faster recovery.</p>
                        <a href="#contact" class="btn-link" data-en="Learn More" data-ar="المزيد">Learn More <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>

                <!-- Service 3 (Standard) -->
                <div class="service-premium-card reveal">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-pregnancy.png" alt="Pregnancy Care" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Pregnancy Care" data-ar="متابعة الحمل">Pregnancy Care</h3>
                        <p class="service-premium-desc" data-en="A safe journey from day one through the moment of delivery." data-ar="رحلة آمنة من اليوم الأول وحتى لحظة الولادة">A safe journey from day one through the moment of delivery.</p>
                        <a href="#contact" class="btn-link" data-en="Learn More" data-ar="المزيد">Learn More <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>

                <!-- Service 4 (Standard) -->
                <div class="service-premium-card reveal" style="transition-delay: 0.1s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-infertility.png" alt="Infertility Treatment" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Infertility Treatment" data-ar="تأخر الإنجاب">Infertility Treatment</h3>
                        <p class="service-premium-desc" data-en="Advanced scientific solutions to help fulfill the dream of motherhood." data-ar="حلول علمية متطورة لتحقيق حلم الأمومة">Advanced scientific solutions to help fulfill the dream of motherhood.</p>
                        <a href="#contact" class="btn-link" data-en="Learn More" data-ar="المزيد">Learn More <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>

                <!-- Service 5 (Standard) -->
                <div class="service-premium-card reveal" style="transition-delay: 0.2s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-screening.png" alt="Comprehensive Screening" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Comprehensive Screening" data-ar="الفحص الشامل">Comprehensive Screening</h3>
                        <p class="service-premium-desc" data-en="Regular check-ups to monitor women's health and early detection of potential issues." data-ar="فحوصات شاملة دورية للاطمئنان على صحة المرأة وكشف مبكر">Regular check-ups to monitor women's health and early detection of potential issues.</p>
                        <a href="#contact" class="btn-link" data-en="Learn More" data-ar="المزيد">Learn More <span class="material-symbols-outlined">arrow_forward</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== WHY US ====== -->
    <section class="why-us" id="why-us">
        <div class="container why-staggered-container">
            <div class="why-us-header-staggered reveal">
                <span class="section-label" data-en="WHY CHOOSE US" data-ar="لماذا تختارين عيادتنا؟">WHY CHOOSE US</span>
                <h2 data-en="Why thousands of women trust Dr. Amira" data-ar="لماذا تثق آلاف النساء بالدكتورة أميرة">Why thousands of women trust Dr. Amira</h2>
            </div>
            
            <div class="why-staggered-list reveal">
                <div class="why-staggered-item">
                    <div class="staggered-number">100<span class="staggered-symbol">%</span></div>
                    <div class="staggered-content">
                        <h3 data-en="Female Medical Team" data-ar="فريق طبي نسائي">Female Medical Team</h3>
                        <p data-en="Complete privacy and comfort at every visit." data-ar="خصوصية تامة وراحة نفسية في كل زيارة">Complete privacy and comfort at every visit.</p>
                    </div>
                </div>
                
                <div class="why-staggered-item">
                    <div class="staggered-number">3</div>
                    <div class="staggered-content">
                        <h3 data-en="Branches in Alexandria" data-ar="فروع بالإسكندرية">Branches in Alexandria</h3>
                        <p data-en="Located in Smouha, Laurent, and Downtown to serve you." data-ar="نتواجد في سموحة ولوران ووسط البلد لخدمتكم">Located in Smouha, Laurent, and Downtown to serve you.</p>
                    </div>
                </div>
                
                <div class="why-staggered-item">
                    <div class="staggered-number">20<span class="staggered-symbol">+</span></div>
                    <div class="staggered-content">
                        <h3 data-en="Years of Expertise" data-ar="سنة خبرة">Years of Expertise</h3>
                        <p data-en="Academic and clinical experience ensuring the most accurate diagnoses." data-ar="خبرة أكاديمية وعملية تضمن لكِ أدق التشخيصات">Academic and clinical experience ensuring the most accurate diagnoses.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== TESTIMONIALS ====== -->
    <section class="testimonials">
        <div class="container">
            <div class="testimonials-header-centered reveal" style="text-align: center; margin-bottom: 40px;">
                <span class="section-label" data-en="PATIENT REVIEWS" data-ar="آراء المرضى">PATIENT REVIEWS</span>
                <h2 data-en="What Our Patients Say" data-ar="ماذا يقول مرضانا">What Our Patients Say</h2>
            </div>
            <div class="testimonial-wrap reveal">
                <div class="testimonial-quote-mark"><span class="material-symbols-outlined">format_quote</span></div>

                <div class="testimonial-carousel">
                    <!-- Review 1 -->
                    <div class="testimonial-item active">
                        <div class="testimonial-stars" style="color: var(--gold); margin-bottom: 16px; font-size: 20px;">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="testimonial-text"
                            data-en="My experience with Dr. Amira was a turning point. Exceptionally professional with an amazing ability to reassure patients and explain every medical detail simply. The clinic is very elegant and the service is top-notch."
                            data-ar="تجربتي مع د. أميرة كانت نقطة تحول، احترافية عالية جداً وقدرة مذهلة على طمأنة المريضة وشرح كل التفاصيل العلمية ببساطة. العيادة راقية جداً والتعامل قمة في الرقي.">
                            My experience with Dr. Amira was a turning point. Exceptionally professional with an amazing
                            ability to reassure patients and explain every medical detail simply. The clinic is very
                            elegant and the service is top-notch.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">S.A</div>
                            <div class="testimonial-name" data-en="Former Patient" data-ar="مريضة سابقة">Former Patient
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="testimonial-item">
                        <div class="testimonial-stars" style="color: var(--gold); margin-bottom: 16px; font-size: 20px;">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="testimonial-text"
                            data-en="Dr. Amira is an angel. She accompanied me throughout my entire pregnancy and delivered my healthy baby girl safely. Her calmness and expertise made all my fears disappear. Cannot recommend her enough."
                            data-ar="الدكتورة أميرة ملاك، تابعت معايا طوال فترة حملي وولدت بنتي بأمان تام، هدوئها وخبرتها خلوا كل مخاوفي تختفي. مستحيل أروح لدكتورة غيرها.">
                            Dr. Amira is an angel. She accompanied me throughout my entire pregnancy and delivered my
                            healthy baby girl safely. Her calmness and expertise made all my fears disappear. Cannot
                            recommend her enough.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">M.K</div>
                            <div class="testimonial-name" data-en="Mother of two" data-ar="أم لطفلين">Mother of two
                            </div>
                        </div>
                    </div>

                    <!-- Review 3 -->
                    <div class="testimonial-item">
                        <div class="testimonial-stars" style="color: var(--gold); margin-bottom: 16px; font-size: 20px;">
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="testimonial-text"
                            data-en="After years of struggling with infertility, Dr. Amira's advanced treatments and continuous support finally helped us start our family. The entire female team at the Smouha branch was wonderful."
                            data-ar="بعد سنوات من المعاناة مع تأخر الإنجاب، بفضل الله ثم علاجات الدكتورة أميرة ودعمها المستمر قدرنا أخيراً نبدأ أسرتنا. كل الطاقم النسائي في فرع سموحة رائع جداً.">
                            After years of struggling with infertility, Dr. Amira's advanced treatments and continuous
                            support finally helped us start our family. The entire female team at the Smouha branch was
                            wonderful.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-author">
                                <div class="testimonial-avatar">R.N</div>
                                <div class="testimonial-name" data-en="IVF Patient" data-ar="مريضة حقن مجهري">IVF
                                    Patient</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="testimonial-dots">
                    <span class="testimonial-dot active" data-index="0"></span>
                    <span class="testimonial-dot" data-index="1"></span>
                    <span class="testimonial-dot" data-index="2"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== CONTACT & BOOKING ====== -->
    <section class="contact-section" id="book">
        <div class="container">
            <div class="contact-grid">
                <!-- Location & Info -->
                <div class="contact-info reveal">
                    <span class="section-label" data-en="GET IN TOUCH" data-ar="تواصل معنا">GET IN TOUCH</span>
                    <h2 data-en="Visit Our Clinic" data-ar="زوروا عيادتنا">Visit Our Clinic</h2>
                    <p class="contact-desc" data-en="We are ready to provide you with the best healthcare. Book your appointment or visit us directly at our main branch." data-ar="مستعدون لتقديم أفضل رعاية صحية لكِ. احجزي موعدك أو تفضلي بزيارتنا في فرعنا الرئيسي.">
                        We are ready to provide you with the best healthcare. Book your appointment or visit us directly at our main branch.
                    </p>
                    
                    <div class="info-list">
                        <div class="info-item">
                            <span class="material-symbols-outlined icon">location_on</span>
                            <div>
                                <h4 data-en="Address" data-ar="العنوان">Address</h4>
                                <p data-en="Port Said St, Cleopatra Sq, Cleopatra Class building, Alexandria, Egypt, 21618" data-ar="شارع بورسعيد، ميدان كليوباترا، عمارة كليوباترا كلاس، الإسكندرية، مصر، 21618">Port Said St, Cleopatra Sq, Cleopatra Class building, Alexandria, Egypt, 21618</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <span class="material-symbols-outlined icon">call</span>
                            <div>
                                <h4 data-en="Phone" data-ar="الهاتف">Phone</h4>
                                <p>01220209220<br>035 466 4643</p>
                            </div>
                        </div>
                    </div>

                    <div class="map-container">
                        <iframe 
                            src="https://www.google.com/maps?q=31.219795,29.931643&hl=en&z=15&output=embed" 
                            width="100%" 
                            height="250" 
                            style="border:0;" 
                            allowfullscreen="" 
                            loading="lazy" 
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Dummy Form -->
                <div class="contact-form-wrapper reveal">
                    <div class="form-card">
                        <h3 data-en="Book an Appointment" data-ar="احجز موعد">Book an Appointment</h3>
                        <p data-en="Fill out the form below and our receptionist will contact you to confirm the date." data-ar="املي النموذج التالي وسيقوم موظف الاستقبال بالتواصل معك لتأكيد الموعد.">Fill out the form below and our receptionist will contact you to confirm the date.</p>
                        
                        <form id="dummyBookingForm" class="booking-form" onsubmit="event.preventDefault(); alert('This is a dummy form! Booking logic will be set up inside WordPress.');">
                            <div class="form-group">
                                <label data-en="Full Name" data-ar="الاسم بالكامل">Full Name</label>
                                <input type="text" required>
                            </div>
                            <div class="form-group">
                                <label data-en="Phone Number" data-ar="رقم الهاتف">Phone Number</label>
                                <input type="tel" required>
                            </div>
                            <div class="form-group">
                                <label data-en="Service Needed" data-ar="الخدمة المطلوبة">Service Needed</label>
                                <select required>
                                    <option value="" disabled selected data-en="Select a service" data-ar="اختر الخدمة">Select a service</option>
                                    <option data-en="General Checkup" data-ar="كشف عام">General Checkup</option>
                                    <option data-en="Pregnancy Follow-up" data-ar="متابعة حمل">Pregnancy Follow-up</option>
                                    <option data-en="Gynecological Oncology" data-ar="أورام نسائية">Gynecological Oncology</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-plum form-submit" data-en="Request Appointment" data-ar="طلب حجز موعد">Request Appointment</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>
