<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
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
                            <h2 class="tp-section-title mb-20">Get in Touch</h2>
                            <p>Ready to transform your teaching with AI? Contact us to learn more about our training programs, <br> schedule a consultation, or join our community of AI-empowered educators.</p>
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
                                            <a href="#">Mumbai, India</a>
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
                                        <span class="mb-10 d-block">Email Address</span>
                                        <p>
                                            <a href="mailto:info@missionaim.org">aim@ipnindia.in</a> <br>
                                            <!-- <a href="mailto:support@missionaim.org">support@missionaim.org</a> -->
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
                                        <span class="mb-10 d-block">Phone Number</span>
                                        <p>
                                            <a href="tel:+91 769700123">+91 769700123</a> <br>
                                            <!-- <a href="tel:+91 769700124">+91 769700124</a> -->
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


                <div class="tp-contact-form-area  pt-130 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="tp-section-title-wrapper mb-50 wow img-custom-anim-left" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <h2 class="tp-section-title mb-20 fs-100">Start Your AI Journey</h2>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="contact-form-wrapper">
                                    <h3 class="tpform-title mb-25">Request Information</h3>
                                </div>
                                <div class="contact-form-box">
                                    <form id="contact-form" action="assets/mail.php" method="post">
                                        <div class="row">
                                            <div class="col-md-12 mb-30">
                                                <input name="name" type="text" placeholder="Full Name*">
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input name="email" type="email" placeholder="Email Address*">
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <select name="program" class="form-select">
                                                    <option value="">Select Program*</option>
                                                    <option value="basic">Basic AI Training</option>
                                                    <option value="advanced">Advanced AI Training</option>
                                                    <option value="school">School Package</option>
                                                    <option value="other">Other</option>
                                                </select>
                                            </div>
                                            <div class="col-md-12 mb-45">
                                                <textarea name="message" cols="30" rows="10" placeholder="Tell us about your teaching experience and how you'd like to integrate AI in your classroom*"></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="tp-btn">
                                                    <span class="tp-btn-wrap">
                                                        <span class="tp-btn-y-1">Send Request</span>
                                                        <span class="tp-btn-y-2">Send Request</span>
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
           <?php include "include/footer.php"; ?>
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