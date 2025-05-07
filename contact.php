<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mission AIM</title>

    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/flaticon-exdos.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    
    <!-- scroll to top  -->
    <button id="back-to-top"><i class="far fa-arrow-up"></i></button>

    <!-- preloader  -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="object" id="object_four"></div>
                <div class="object" id="object_three"></div>
                <div class="object" id="object_two"></div>
                <div class="object" id="object_one"></div>
            </div>
        </div>
    </div>


    <!-- header start  -->
   <?php include 'include/header.php'; ?>
    <!-- header end  -->

    <!-- tp header search  -->
    <div class="tp-header-search-bar d-flex align-items-center">
        <button class="tp-search-close">×</button>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="tp-search-bar text-center">
                        <h2 class="tp-search-bar-title mb-30">What are you looking for?</h2>
                        <div class="contact-form-box contact-search-form-box">
                            <form action="#">
                                <input type="text" placeholder="Search Here">
                                <button type="submit"><i class="far fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="tp-offcanvas">
        <div class="tp-offcanvas-wrapper">
            <div class="tp-offcanvas-header d-flex justify-content-between align-items-center mb-90">
                <div class="tp-offcanvas-logo">
                    <a href="index.php"><img src="assets/img/logo/logo-black.png" alt=""></a>
                </div>
                <div class="tp-offcanvas-close">
                    <button class="tp-offcanvas-close-toggle"><i class="fal fa-times"></i></button>
                </div>
            </div>
            <div class="tp-offcanvas-menu d-xl-none mb-50">
                <nav></nav>
            </div>
            <div class="tp-offcanvas-content mb-50 d-none d-xl-block">
                <h2 class="tp-offcanvas-title">Hello There!</h2>
                <p>Lorem ipsum dolor sit amet, consect etur adipiscing elit. </p>
            </div>
            <div class="tp-offcanvas-gallery mb-50">
                <a class="popup-image" href="assets/img/project/showcase-thumb-01.jpg"><img src="assets/img/project/showcase-thumb-01.jpg" alt=""></a>
                <a class="popup-image" href="assets/img/project/showcase-thumb-02.jpg"><img src="assets/img/project/showcase-thumb-02.jpg" alt=""></a>
                <a class="popup-image" href="assets/img/project/showcase-thumb-03.jpg"><img src="assets/img/project/showcase-thumb-03.jpg" alt=""></a>
                <a class="popup-image" href="assets/img/project/showcase-thumb-04.jpg"><img src="assets/img/project/showcase-thumb-04.jpg" alt=""></a>
            </div>
            <div class="tp-offcanvas-info mb-50">
                <h3 class="tp-offcanvas-sm-title">Information</h3>
                <span><a href="tel:01234567">+ 4 20 7700 1007</a></span>
                <span><a href="mailto:hello@exdos.com">hello@exdos.com</a></span>
                <span><a target="_blank" href="https://www.google.com/maps/">Avenue de Roma 158b, Lisboa</a></span>
            </div>
            <div class="tp-offcanvas-social mb-50">
                <h3 class="tp-offcanvas-sm-title">Follow Us</h3>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
    <div class="tp-offcanvas-overlay"></div>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>

                <section class="tp-breadcrumb-area tp-breadcrumb-space p-relative" data-background="assets/img/breadcrumb/breadcrumb-pattern.png" data-bg-color="#0A0E1A">
                    <div class="tp-breadcrumb-shape">
                        <img class="tp-breadcrumb-shape-1 p-absolute" src="assets/img/breadcrumb/shape-1.png" alt="">
                        <img class="tp-breadcrumb-shape-2 p-absolute" src="assets/img/breadcrumb/shape-2.png" alt="">
                        <img class="tp-breadcrumb-shape-3 p-absolute" src="assets/img/breadcrumb/shape-3.png" alt="">
                    </div>
                    <div class="container">
                        <div class="tp-breadcrumb text-center position-relative z-index-2">
                            <h1 class="tp-breadcrumb-title tp-upper tp-text-white">contact us</h1>
                            <div class="tp-breadcrumb-list">
                                <span class="active"><a href="#">Home</a></span>
                                <span class="dvir">-</span>
                                <span><a href="#">Contact Us</a></span>
                            </div>
                        </div>
                    </div>
                </section>


                <section class="tp-contact-area pt-120 pb-90">
                    <div class="container">
                        <div class="tp-section-title-wrapper mb-50 text-center">
                            <h2 class="tp-section-title mb-20">Contact information</h2>
                            <p>Per ipsum ultrices sollicitudin iaculis platea facilisi semper aliquam up <br> senectus cursus vivamus volutpat penatibus</p>
                        </div>
                        <div class="row text-center">
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="tp-contact-info mb-30  wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="tp-contact-info-icon mb-10">
                                        <span><i class="flaticon-map-location"></i></span>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <span class="mb-10 d-block">Our Location</span>
                                        <p>
                                            <a href="#">1905 Oakridge Farm Lane
                                                Waukesha, WI 53188</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="tp-contact-info mb-30 wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="tp-contact-info-icon mb-10">
                                        <span><i class="flaticon-chat"></i></span>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <span class="mb-10 d-block">email address</span>
                                        <p>
                                            <a href="mailto:example@exdosstudio.com">example@exdosstudio.com</a> <br>
                                            <a href="mailto:info@exdosstudio.com">info@exdosstudio.com</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-12">
                                <div class="tp-contact-info mb-30 wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="tp-contact-info-icon mb-10">
                                        <span><i class="flaticon-call"></i></span>
                                    </div>
                                    <div class="tp-contact-info-text">
                                        <span class="mb-10 d-block">Phone number</span>
                                        <p>
                                            <a href="tel:02(256)3253602">02 (256) 325 3602</a> <br>
                                            <a href="tel:01(541)258360">01 (541) 258 360</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="tp-map-area wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay="0.2s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d53554.75805178511!2d90.41279236249726!3d23.814422694617555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1720341133590!5m2!1sen!2sbd"  style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="tp-contact-form-area  pt-130 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="tp-section-title-wrapper mb-50 wow img-custom-anim-left" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <h2 class="tp-section-title mb-20 fs-100">Contact Us</h2>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="contact-form-wrapper">
                                    <h3 class="tpform-title mb-25">Get in touch</h3>
                                </div>
                                <div class="contact-form-box">
                                    <form id="contact-form" action="assets/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-12 mb-30">
                                                <input name="name" type="text" placeholder="Full Name*">
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input name="email" type="email" placeholder="Email Here*">
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input name="subject" type="email" placeholder="subject *">
                                            </div>
                                            <div class="col-md-12 mb-45">
                                                <textarea name="message"  cols="30" rows="10" placeholder="write note*"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="tp-btn">
                                                    <span class="tp-btn-wrap">
                                                        <span class="tp-btn-y-1">Send message</span>
                                                        <span class="tp-btn-y-2">Send message</span>
                                                    </span>  
                                                    <i></i>
                                                </button>
                                            </div>
                                        </div>
                                        <p class="ajax-response"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </main>

            <!-- footer start  -->
            <footer class="tp-theme-black-bg p-relative">

                <div class="tp-footer-shape-01 p-absolute">
                    <img src="assets/img/shape/footer/shape-01.png" alt="">
                </div>
                <div class="tp-footer-shape-02 p-absolute">
                    <img src="assets/img/shape/footer/shape-02.png" alt="">
                </div>
                <div class="tp-footer-shape-03 p-absolute">
                    <img src="assets/img/shape/footer/shape-03.png" alt="">
                </div>
                <div class="tp-footer-shape-04 p-absolute">
                    <img src="assets/img/shape/footer/shape-04.png" alt="">
                </div>

                <div class="container">
                    <div class="tp-foter-logo-area pt-130">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-3 col-md-4">
                                <div class="footer-logo mb-30">
                                    <a href="index.php"><img src="assets/img/logo/logo-white.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 col-md-4 d-none d-md-block">
                                <div class="footer-sep mb-30"></div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4">
                                <div class="tpfooter-social pl-35 mb-30">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-footer-widget-area pt-70 pb-40">
                        <div class="row">
                            <div class="col-xl-3"></div>
                            <div class="col-xl-3 col-lg-4 col-md-4">
                                <div class="tp-footer-widget tp-footer-col-2 mb-50">
                                    <h3 class="tp-footer-widget-title mb-20">California</h3>
                                    <div class="footer-content">
                                        <span>3005 Meadowview Drive  <br>
                                            Gordons, VA 22942</span>
                                    </div>
                                </div>
                                <div class="tp-footer-widget tp-footer-col-2 mb-50">
                                    <h3 class="tp-footer-widget-title mb-20">Los Angels</h3>
                                    <div class="footer-content">
                                        <span>3587 Limer Street Dalton <br>
                                            Palmar 30720</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4">
                                <div class="tp-footer-widget tp-footer-col-3 mb-50">
                                    <h3 class="tp-footer-widget-title mb-20">Quick Links</h3>
                                    <ul>
                                        <li><a href="about.php">About us</a></li>
                                        <li><a href="services.php">Services</a></li>
                                        <li><a href="team.php">Meet the team</a></li>
                                        <li><a href="blog.php">Recent news</a></li>
                                        <li><a href="portfolio.php">Our gallery</a></li>
                                        <li><a href="portfolio.php">Case studies</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-4">
                                <div class="tp-footer-widget tp-footer-col-4 mb-50">
                                    <h3 class="tp-footer-widget-title mb-20">Contact Info</h3>
                                    <div class="tp-footer-contact">
                                        <div class="tp-footer-contact-item mb-20">
                                            <span>Email us</span>
                                            <h4><a href="mailto:info@exdosstudio.com">info@exdosstudio.com</a></h4>
                                        </div>
                                        <div class="tp-footer-contact-item mb-20">
                                            <span>Phone no</span>
                                            <h4><a href="tel:2(520)632032">2 (520) 6320 32</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tp-footer-copyright-area pt-40 pb-10 p-relative z-index-1">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-4">
                                <div class="tp-footer-copyright mb-30 text-md-center text-lg-start">
                                    <p>© Copyright 2024 | Alright reserved
                                        exdos by <a href="#">ThemePure</a></p>
                                </div>
                            </div>
                            <div class="col-xl-9 col-lg-8">
                                <div class="tp-footer-menu text-md-center text-lg-end mb-30 ">
                                    <ul>
                                        <li><a href="#">Career</a></li>
                                        <li><a href="faq.php">our FAq </a></li>
                                        <li><a href="#">privacy & policy</a></li>
                                        <li><a href="contact.php">contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end  -->

        </div>
    </div>


    <script src="assets/js/jquery-3.7.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/gsap.js"></script>
    <script src="assets/js/scroll-to-plugin.js"></script>
    <script src="assets/js/scroll-trigger.js"></script>
    <script src="assets/js/scroll-smoother.js"></script>
    <script src="assets/js/split-text.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>