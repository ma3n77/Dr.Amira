<?php get_header(); ?>

    <!-- ====== HERO ====== -->
    <section class="hero" id="hero">

        <!-- ===== CAROUSEL SLIDES =====
             Play order is 1, 3, 2, 4 on purpose. Slides 3 and 4 look too
             similar to sit next to each other, and the carousel loops, so
             slide 4 running back into slide 1 also has to be checked.
             Keep 3 and 4 separated if you reorder these. -->
        <div class="hero-carousel" id="heroCarousel">
            <div class="hero-slide active" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-slide-1.jpeg');"></div>
            <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-slide-3.png');"></div>
            <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-slide-2.png');"></div>
            <div class="hero-slide" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/hero-slide-4.png');"></div>
        </div>

        <!-- Dark overlay -->
        <div class="hero-overlay"></div>

        <!-- Dot Indicators -->
        <div class="hero-dots" id="heroDots">
            <span class="hero-dot active" data-slide="0"></span>
            <span class="hero-dot" data-slide="1"></span>
            <span class="hero-dot" data-slide="2"></span>
            <span class="hero-dot" data-slide="3"></span>
        </div>

        <!-- Content -->
        <div class="container hero-container">
            <div class="hero-content reveal">
                <h1 class="hero-title" data-en="Specialized Women's Healthcare Tailored For You"
                    data-ar="رعاية صحية متخصصة ومصممة من أجلكِ">
                    Specialized Women's Healthcare Tailored For You</h1>
                <p class="hero-subtitle"
                    data-en="Prof. Dr. Amira Badawy — Professor of Obstetrics & Gynecology at Alexandria University. Over 20 years of excellence dedicated to providing you with comprehensive healthcare, advanced laparoscopy, and complete peace of mind."
                    data-ar="أ.د. أميرة بدوى — أستاذ م. أمراض النساء والتوليد بجامعة الإسكندرية، خبرة تزيد عن 20 عاماً مكرسة لتقديم رعاية صحية متكاملة لكِ، وأحدث جراحات المناظير، ولضمان راحة بالكِ وسعادتكِ.">
                    Prof. Dr. Amira Badawy — Professor of Obstetrics & Gynecology at Alexandria University. Over 20
                    years of excellence dedicated to providing you with comprehensive healthcare, advanced laparoscopy,
                    and complete peace of mind.
                </p>
                <div class="hero-buttons">
                    <a href="#book" class="btn btn-plum"><span class="material-symbols-outlined btn-icon">call</span>
                        <span data-en="Book Your Consultation" data-ar="احجزي استشارتكِ">Book Your
                            Consultation</span></a>
                    <a href="#about" class="btn btn-ghost" data-en="Discover Our Care" data-ar="تعرفي علينا">Discover
                        Our Care</a>
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
                        <span class="section-label" data-en="ABOUT THE DOCTOR" data-ar="عن الدكتورة">ABOUT THE
                            DOCTOR</span>
                        <h2 class="about-doctor-name" data-en="Prof. Dr. Amira Badawy" data-ar="أ.د. أميرة بدوي">
                            Prof. Dr. Amira Badawy
                        </h2>

                        <ul class="about-credentials-list">
                            <li>
                                <span class="material-symbols-outlined">verified</span>
                                <span
                                    data-en="Professor of obstetrics & Gynaecology, Faculty of Medicine - Alexandria University"
                                    data-ar="أستاذ. م أمراض النساء والتوليد وعلاج العقم بكلية الطب - جامعة الإسكندرية">
                                    Professor of obstetrics & Gynaecology, Faculty of Medicine - Alexandria University
                                </span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">verified</span>
                                <span data-en="Consultant Of Gyn - Oncology & Gyn - Endoscopy"
                                    data-ar="إستشاري الأورام النسائية والمناظير">
                                    Consultant Of Gyn - Oncology & Gyn - Endoscopy
                                </span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">verified</span>
                                <span data-en="Member of ESGO / European society of Gyn. Oncologists"
                                    data-ar="عضو الجمعية الأوروبية للأورام النسائية">
                                    Member of ESGO / European society of Gyn. Oncologists
                                </span>
                            </li>
                            <li>
                                <span class="material-symbols-outlined">verified</span>
                                <span data-en="Member of ESGE / European Society of Gyn. Laparoscopists"
                                    data-ar="عضو الجمعية الأوروبية للمناظير النسائية">
                                    Member of ESGE / European Society of Gyn. Laparoscopists
                                </span>
                            </li>
                        </ul>

                        <div class="doctor-insights-grid">
                            <div class="insight-card">
                                <div class="insight-num">30+</div>
                                <div class="insight-label" data-en="Years of Experience"
                                    data-ar="سنة خبرة طبية وأكاديمية">Years of Experience</div>
                            </div>
                            <div class="insight-card">
                                <div class="insight-num">+70</div>
                                <div class="insight-label" data-en="Yearly Oncology Surgeries"
                                    data-ar="جراحة أورام سنوياً">Yearly Oncology Surgeries</div>
                            </div>
                            <div class="insight-card">
                                <div class="insight-num">+100</div>
                                <div class="insight-label" data-en="Yearly Pregnancy Cases"
                                    data-ar="حالة متابعة حمل وولادة سنوياً">Yearly Pregnancy Cases</div>
                            </div>
                            <div class="insight-card">
                                <div class="insight-num">+250</div>
                                <div class="insight-label" data-en="Yearly Laparoscopy Cases"
                                    data-ar="حالة منظار متقدم سنوياً">Yearly Laparoscopy Cases</div>
                            </div>
                        </div>
                    </div>
                    <div class="about-image">
                        <div class="about-image-frame">
                            <img src="<?php echo get_template_directory_uri(); ?>/images/dramira.jpg" alt="Dr. Amira Badawy">
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
                <span class="section-label" data-en="SERVICES FOR YOU" data-ar="خدماتنا المقدمة لكِ">SERVICES FOR
                    YOU</span>
                <h2 data-en="Specialized Care Tailored For You" data-ar="خدمات طبية متخصصة ومصممة لكِ">Specialized Care
                    Tailored For You</h2>
            </div>

            <div class="services-premium-grid">
                <!-- Service 1 -->
                <div class="service-premium-card reveal">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/oncooo Image Jul 20, 2026 at 02_47_18 AM.png" alt="Cancer Detection"
                        class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Early Cancer Detection & Precision Surgery"
                            data-ar="الكشف المبكر عن الاورام والجراحات الدقيقة">Early Cancer Detection & Precision
                            Surgery
                        </h3>
                        <p class="service-premium-desc"
                            data-en="Utilizing the latest global technologies for early detection and precise surgical intervention, ensuring your safety and complete peace of mind."
                            data-ar="نستخدم أحدث التقنيات العالمية للكشف المبكر والتدخل الجراحي الدقيق، لنضمن لكِ أعلى معايير الأمان وراحة البال.">
                            Utilizing the latest global technologies for early detection and precise surgical
                            intervention, ensuring your safety and complete peace of mind.</p>
                    </div>
                </div>

                <!-- Service 2 -->
                <div class="service-premium-card reveal" style="transition-delay: 0.1s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Gemini_Generated_Image_if92x7if92x7if92.png" alt="Advanced Laparoscopy"
                        class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Gynecological Laparoscopy" data-ar="مناظير نسائية">Gynecological Laparoscopy</h3>
                        <p class="service-premium-desc"
                            data-en="Same-day surgeries with the latest laparoscopic equipment for minimal pain and a faster recovery so you can return to your daily life quickly."
                            data-ar="جراحات اليوم الواحد بأحدث أجهزة المناظير لتقليل الألم وسرعة تعافيكِ وعودتكِ لحياتكِ الطبيعية.">
                            Same-day
                            surgeries with the latest laparoscopic equipment for minimal pain and a faster recovery so
                            you can return to your daily life quickly.</p>
                    </div>
                </div>

                <!-- Service 3 (Standard) -->
                <div class="service-premium-card reveal">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-pregnancy-hijabi.png" alt="Pregnancy Care" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Pregnancy & High-Risk Pregnancy Care" data-ar="متابعة الحمل والحمل الحرج">Pregnancy
                            & High-Risk Pregnancy Care</h3>
                        <p class="service-premium-desc"
                            data-en="We walk with you step-by-step for a safe and joyful journey from day one through the moment you embrace your baby."
                            data-ar="نرافقكِ خطوة بخطوة في رحلة حمل آمنة ومريحة من اليوم الأول وحتى لحظة احتضان طفلِك.">
                            We walk with you step-by-step for a safe and joyful journey from day one through the moment
                            you embrace your baby.</p>
                    </div>
                </div>

                <!-- Service 4 (Standard) -->
                <div class="service-premium-card reveal" style="transition-delay: 0.1s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/infertility.png" alt="Infertility Treatment" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Infertility Treatment" data-ar="تأخر الإنجاب">Infertility Treatment</h3>
                        <p class="service-premium-desc"
                            data-en="Advanced scientific solutions and compassionate support to help fulfill your dream of motherhood."
                            data-ar="نقدم لكِ أحدث الحلول العلمية والدعم المستمر لتحقيق حلمكِ الغالي في الأمومة.">
                            Advanced scientific solutions and compassionate support to help fulfill your dream of
                            motherhood.</p>
                    </div>
                </div>

                <!-- Service 5 (Standard) -->
                <div class="service-premium-card reveal" style="transition-delay: 0.2s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/shamel.png" alt="Comprehensive Screening" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Comprehensive Screening" data-ar="الفحص الشامل">Comprehensive Screening</h3>
                        <p class="service-premium-desc"
                            data-en="Regular check-ups designed specifically for your reassurance and early detection of any health issues."
                            data-ar="فحوصات شاملة ودورية مخصصة للاطمئنان على صحتكِ والكشف المبكر لحمايتكِ.">Regular
                            check-ups designed specifically for your reassurance and early detection of any health
                            issues.</p>
                    </div>
                </div>

                <!-- Service 6 (Standard) -->
                <div class="service-premium-card reveal" style="transition-delay: 0.3s;">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/service-screening-hijabi.png" alt="Family Planning" class="service-premium-bg">
                    <div class="service-premium-overlay"></div>
                    <div class="service-premium-content">
                        <h3 data-en="Family Planning" data-ar="تنظيم الاسرة">Family Planning</h3>
                        <p class="service-premium-desc"
                            data-en="Expert guidance and personalized solutions for family planning, helping you make informed decisions about your reproductive health."
                            data-ar="استشارات متخصصة وحلول مخصصة لتنظيم الأسرة، لمساعدتكِ في اتخاذ قرارات مدروسة بشأن صحتكِ الإنجابية.">
                            Expert guidance and personalized solutions for family planning, helping you make informed
                            decisions about your reproductive health.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== WHY US ====== -->
    <section class="why-us" id="why-us">
        <div class="container why-staggered-container">
            <div class="why-us-header-staggered reveal">
                <span class="section-label" data-en="WHY CHOOSE US" data-ar="لماذا تختارين عيادتنا؟">WHY CHOOSE
                    US</span>
                <h2 data-en="Why thousands of women like you trust Dr. Amira"
                    data-ar="لماذا تثق آلاف النساء بالدكتورة أميرة وتختارها لرعايتهن">Why thousands of women like you
                    trust Dr. Amira</h2>
            </div>

            <div class="why-staggered-list reveal">
                <div class="why-staggered-item">
                    <div class="staggered-number">100<span class="staggered-symbol">%</span></div>
                    <div class="staggered-content">
                        <h3 data-en="Female Medical Team" data-ar="فريق طبي نسائي">Female Medical Team</h3>
                        <p data-en="Ensuring complete privacy and psychological comfort for you at every visit."
                            data-ar="نضمن لكِ خصوصية تامة وراحة نفسية كاملة في كل زيارة.">Ensuring complete privacy and
                            psychological comfort for you at every visit.
                        </p>
                    </div>
                </div>

                <div class="why-staggered-item">
                    <div class="staggered-number">2</div>
                    <div class="staggered-content">
                        <h3 data-en="Branches in Alexandria & Damanhour" data-ar="فرعان بالإسكندرية ودمنهور">Branches in
                            Alexandria & Damanhour</h3>
                        <p data-en="Located in Alexandria and Damanhour, always ready to serve and care for you."
                            data-ar="نتواجد في الإسكندرية ودمنهور لخدمتكِ ورعايتكِ أينما كنتِ.">Located in Alexandria
                            and Damanhour, always ready to serve and care for you.</p>
                    </div>
                </div>

                <div class="why-staggered-item">
                    <div class="staggered-number">30<span class="staggered-symbol">+</span></div>
                    <div class="staggered-content">
                        <h3 data-en="Years of Expertise" data-ar="سنة خبرة">Years of Expertise</h3>
                        <p data-en="Decades of academic and clinical experience guaranteeing you the most accurate diagnosis and treatment."
                            data-ar="خبرة أكاديمية وعملية تمتد لعقود تضمن لكِ أدق تشخيص وأفضل خطة علاج.">Decades of
                            academic and clinical experience guaranteeing you the most accurate diagnosis and treatment.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ====== GALLERY ====== -->
    <section class="gallery-section" id="gallery">
        <div class="container">
            <div class="gallery-header reveal" style="text-align: center; margin-bottom: 60px;">
                <span class="section-label" data-en="PHOTO GALLERY" data-ar="معرض الصور">PHOTO GALLERY</span>
                <h2 data-en="Moments From Our Journey" data-ar="لحظات من مسيرتنا">Moments From Our Journey</h2>
            </div>

            <div class="gallery-masonry reveal">
                <div class="gallery-item gallery-tall">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/476006406_1155541305929734_4163397087387933963_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/480162347_1161150958702102_8966839008286283808_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/480792723_1168452417971956_4421397607251325835_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item gallery-tall">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/481013987_1167786988038499_2351369638145197953_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/481257822_1168452337971964_2576661979640075490_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item gallery-wide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/500263543_1233303854820145_1684490114830977359_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/500468734_1232837731533424_4605315227665020692_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item gallery-tall">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/501753436_1232837718200092_6098151282086320044_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/607122419_1404896154327580_1457827124282375165_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/607586092_1404896097660919_3061533210482965298_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item gallery-wide">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/608636417_1404895744327621_5895309337290664712_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/658909810_1491402912343570_1580444545005961320_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item gallery-tall">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/672401561_1491402942343567_4749707860985487437_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/672659376_1491394582344403_7709517649227682034_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/673623696_1491394555677739_1072307265520108451_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
                <div class="gallery-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gallery/673774146_1491402949010233_6662374577845621868_n.jpg" alt="Dr. Amira" loading="lazy">
                    <div class="gallery-hover"><span class="material-symbols-outlined">zoom_in</span></div>
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div class="gallery-lightbox" id="galleryLightbox">
            <button class="lightbox-close" id="lightboxClose">
                <span class="material-symbols-outlined">close</span>
            </button>
            <button class="lightbox-nav lightbox-prev" id="lightboxPrev">
                <span class="material-symbols-outlined">chevron_left</span>
            </button>
            <button class="lightbox-nav lightbox-next" id="lightboxNext">
                <span class="material-symbols-outlined">chevron_right</span>
            </button>
            <div class="lightbox-content">
                <img id="lightboxImg" src="" alt="Gallery Photo">
            </div>
        </div>
    </section>

    <!-- ====== TESTIMONIALS ====== -->
    <section class="testimonials">
        <div class="container">
            <div class="testimonials-header-centered reveal" style="text-align: center; margin-bottom: 40px;">
                <span class="section-label" data-en="PATIENT REVIEWS" data-ar="آراء مريضاتنا">PATIENT REVIEWS</span>
                <h2 data-en="What Women Like You Say" data-ar="ماذا تقول مريضاتنا عن تجربتهن">What Women Like You Say
                </h2>
            </div>
            <div class="testimonial-wrap reveal">
                <div class="testimonial-quote-mark"><span class="material-symbols-outlined">format_quote</span></div>

                <div class="testimonial-carousel">
                    <!-- Review 1 -->
                    <div class="testimonial-item active">
                        <div class="testimonial-stars"
                            style="color: var(--gold); margin-bottom: 16px; font-size: 20px;">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                        </div>
                        <p class="testimonial-text"
                            data-en="My experience with Dr. Amira was a turning point. She is exceptionally professional with an amazing ability to reassure you as a patient and explain every medical detail simply. The clinic is very elegant and you feel truly respected."
                            data-ar="تجربتي مع د. أميرة كانت نقطة تحول، احترافية عالية جداً وقدرة مذهلة على طمأنتكِ كمريضة وشرح كل التفاصيل الطبية ببساطة. العيادة راقية جداً والتعامل قمة في الرقي.">
                            My experience with Dr. Amira was a turning point. She is exceptionally professional with an
                            amazing ability to reassure you as a patient and explain every medical detail simply. The
                            clinic is very elegant and you feel truly respected.
                        </p>
                        <div class="testimonial-author">
                            <div class="testimonial-avatar">S.A</div>
                            <div class="testimonial-name" data-en="Former Patient" data-ar="مريضة سابقة">Former Patient
                            </div>
                        </div>
                    </div>

                    <!-- Review 2 -->
                    <div class="testimonial-item">
                        <div class="testimonial-stars"
                            style="color: var(--gold); margin-bottom: 16px; font-size: 20px;">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
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
                        <div class="testimonial-stars"
                            style="color: var(--gold); margin-bottom: 16px; font-size: 20px;">
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
                            <span class="material-symbols-outlined"
                                style="font-variation-settings: 'FILL' 1;">star</span>
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
                    <span class="section-label" data-en="GET IN TOUCH WITH US" data-ar="توتصلي معنا">GET IN TOUCH WITH
                        US</span>
                    <h2 data-en="Visit Our Clinic" data-ar="زوري عيادتنا">Visit Our Clinic</h2>
                    <p class="contact-desc"
                        data-en="We are ready to provide you with the best specialized healthcare for women. Book your appointment today or visit us directly at our main branch."
                        data-ar="نحن هنا لتقديم أفضل رعاية صحية مخصصة لكِ. احجزي موعدكِ الآن أو تفضلي بزيارتنا في فرعنا الرئيسي.">
                        We are ready to provide you with the best specialized healthcare for women. Book your
                        appointment today or visit us directly at our main branch.
                    </p>

                    <div class="info-list">
                        <!-- Call Center Dedicated Box -->
                        <div class="call-center-box">
                            <span class="material-symbols-outlined icon"
                                style="color: var(--plum); font-size: 2.2rem;">support_agent</span>
                            <div style="flex-grow: 1;">
                                <h4 data-en="Unified Call Center" data-ar="رقم مركز الاتصال الموحد (كول سنتر)"
                                    style="color: var(--plum); margin-bottom: 4px; font-weight: 700;">Unified Call
                                    Center</h4>
                                <a href="tel:01118244487"
                                    style="font-size: 1.3rem; font-weight: 700; color: var(--plum); text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                                    <span>01118244487</span>
                                    <span class="material-symbols-outlined"
                                        style="font-size: 1.1rem; color: var(--gold);">call</span>
                                </a>
                            </div>
                        </div>

                        <!-- Branches Grid (Side by Side) -->
                        <div class="branches-grid">
                            <!-- Damanhour Branch Block -->
                            <div class="branch-info-box">
                                <div style="display: flex; align-items: flex-start; gap: 14px;">
                                    <span class="material-symbols-outlined icon"
                                        style="color: var(--gold); font-size: 1.8rem; margin-top: 2px;">location_on</span>
                                    <div style="flex-grow: 1;">
                                        <h4 data-en="Damanhour Branch" data-ar="فرع دمنهور"
                                            style="font-size: 1.15rem; color: var(--plum); margin-bottom: 6px;">
                                            Damanhour Branch</h4>
                                        <a href="https://maps.app.goo.gl/WESk4rnD8iXf4FV4A" target="_blank"
                                            rel="noopener noreferrer" class="location-link">
                                            <span
                                                data-en="Abd El-Salam El-Shazly St, in front of McDonald's, Tabarak Tower, 1st Floor"
                                                data-ar="شارع عبد السلام الشاذلي - أمام ماكدونالدز - برج تبارك الدور الأول">
                                                Abd El-Salam El-Shazly St, in front of McDonald's, Tabarak Tower, 1st
                                                Floor
                                            </span>
                                        </a>
                                        <a href="https://maps.app.goo.gl/WESk4rnD8iXf4FV4A" target="_blank"
                                            rel="noopener noreferrer" class="btn-maps-link">
                                            <span class="material-symbols-outlined"
                                                style="font-size: 1.1rem;">map</span>
                                            <span data-en="Open in Google Maps ↗"
                                                data-ar="افتح الموقع على خرائط جوجل ↗">Open in Google Maps ↗</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="branch-contact-row">
                                    <div class="branch-phones">
                                        <span class="material-symbols-outlined"
                                            style="color: var(--plum); font-size: 1.2rem;">call</span>
                                        <a href="tel:01149991403">01149991403</a>
                                        <span style="color: var(--text-muted);">/</span>
                                        <a href="tel:0453338816">045-3338816</a>
                                    </div>
                                    <a href="https://wa.me/201149991403" target="_blank" rel="noopener noreferrer"
                                        class="btn-whatsapp-link">
                                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">chat</span>
                                        <span>WhatsApp</span>
                                    </a>
                                </div>
                            </div>

                            <!-- Alexandria Branch Block -->
                            <div class="branch-info-box">
                                <div style="display: flex; align-items: flex-start; gap: 14px;">
                                    <span class="material-symbols-outlined icon"
                                        style="color: var(--gold); font-size: 1.8rem; margin-top: 2px;">location_on</span>
                                    <div style="flex-grow: 1;">
                                        <h4 data-en="Alexandria Branch" data-ar="فرع الإسكندرية"
                                            style="font-size: 1.15rem; color: var(--plum); margin-bottom: 6px;">
                                            Alexandria Branch</h4>
                                        <a href="https://maps.app.goo.gl/eMN2zUhnWxKCACwH8" target="_blank"
                                            rel="noopener noreferrer" class="location-link">
                                            <span
                                                data-en="Cleopatra Sq, Port Said St, in front of Marzouk Patisserie, Cleopatra Class Bldg, 3rd Floor"
                                                data-ar="ميدان كليوباترا - شارع بورسعيد - أمام حلواني مرزوق - عمارة كليوباترا كلاس الدور الثالث">
                                                Cleopatra Sq, Port Said St, in front of Marzouk Patisserie, Cleopatra
                                                Class Bldg, 3rd Floor
                                            </span>
                                        </a>
                                        <a href="https://maps.app.goo.gl/eMN2zUhnWxKCACwH8" target="_blank"
                                            rel="noopener noreferrer" class="btn-maps-link">
                                            <span class="material-symbols-outlined"
                                                style="font-size: 1.1rem;">map</span>
                                            <span data-en="Open in Google Maps ↗"
                                                data-ar="افتح الموقع على خرائط جوجل ↗">Open in Google Maps ↗</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="branch-contact-row">
                                    <div class="branch-phones">
                                        <span class="material-symbols-outlined"
                                            style="color: var(--plum); font-size: 1.2rem;">call</span>
                                        <a href="tel:01220209220">01220209220</a>
                                        <span style="color: var(--text-muted);">/</span>
                                        <a href="tel:035466643">03-5466643</a>
                                    </div>
                                    <a href="https://wa.me/201220209220" target="_blank" rel="noopener noreferrer"
                                        class="btn-whatsapp-link">
                                        <span class="material-symbols-outlined" style="font-size: 1.1rem;">chat</span>
                                        <span>WhatsApp</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="map-container">
                        <iframe src="https://www.google.com/maps?q=31.219795,29.931643&hl=en&z=15&output=embed"
                            width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>

                <!-- Dummy Form -->
                <div class="contact-form-wrapper reveal">
                    <div class="form-card">
                        <h3 data-en="Book Your Appointment" data-ar="احجزي موعدكِ">Book Your Appointment</h3>
                        <p data-en="Fill out your details below and our female reception team will contact you promptly to confirm your appointment."
                            data-ar="سجلي بياناتكِ في النموذج التالي وسيقوم فريق الاستقبال النسائي بالتواصل معكِ لتأكيد موعدكِ.">
                            Fill out your details below and our female reception team will contact you promptly to
                            confirm your appointment.</p>

                        <form id="dummyBookingForm" class="booking-form"
                            onsubmit="event.preventDefault(); alert('This is a dummy form! Booking logic will be set up inside WordPress.');">
                            <div class="form-group">
                                <label data-en="Your Full Name" data-ar="اسمكِ بالكامل">Your Full Name</label>
                                <input type="text" required>
                            </div>
                            <div class="form-group">
                                <label data-en="Your Phone Number" data-ar="رقم هاتفِك">Your Phone Number</label>
                                <input type="tel" required>
                            </div>
                            <div class="form-group">
                                <label data-en="Select Your Service" data-ar="الخدمة التي تحتاجينها">Select Your
                                    Service</label>
                                <select required>
                                    <option value="" disabled selected data-en="Select Your Service"
                                        data-ar="اختاري الخدمة المطلوبة">
                                        Select Your Service</option>
                                    <option data-en="General Checkup" data-ar="كشف عام">General Checkup</option>
                                    <option data-en="Pregnancy Follow-up" data-ar="متابعة حمل">Pregnancy Follow-up
                                    </option>
                                    <option data-en="Gynecological Oncology" data-ar="أورام نسائية">Gynecological
                                        Oncology</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-plum form-submit" data-en="Book My Appointment Now"
                                data-ar="احجزي موعدكِ الآن">Book My Appointment Now</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php get_footer(); ?>