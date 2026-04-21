<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Amira Badawy | Specialized Women's Healthcare</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Tajawal:wght@300;400;500;700&display=swap" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <!-- Favicon -->
    <link rel="icon" type="image/jpeg" href="<?php echo get_template_directory_uri(); ?>/images/logo.jpg">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Navigation -->
    <header class="site-header" id="siteHeader">
        <div class="container">
            <div class="nav-inner">
                <div class="nav-logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.jpg" alt="Amira Clinic Logo">
                </div>
                <nav class="nav-menu" id="navMenu">
                    <a href="#hero" data-en="Home" data-ar="الرئيسية">Home</a>
                    <a href="#about" data-en="About" data-ar="عن الدكتورة">About</a>
                    <a href="#services" data-en="Services" data-ar="خدماتنا">Services</a>
                    <a href="#why-us" data-en="Why Us" data-ar="لماذا نحن">Why Us</a>
                    <a href="#contact" data-en="Contact" data-ar="تواصل معنا">Contact</a>
                </nav>
                <div class="nav-actions">
                    <button class="lang-toggle" id="langToggle" onclick="toggleLang()">عربي</button>
                    <a href="#book" class="btn btn-plum" data-en="Book Appointment" data-ar="احجز موعد">Book Appointment</a>
                </div>
                <button class="nav-toggle" id="navToggle" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </header>
