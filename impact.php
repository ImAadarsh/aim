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

    <?php
    // Include database connection
    include 'include/connect.php';

    // Query to get workshop statistics
    $workshop_query = "SELECT COUNT(*) as total_workshops FROM workshops WHERE is_deleted = 0";
    $workshop_result = mysqli_query($connect, $workshop_query);
    $workshop_data = mysqli_fetch_assoc($workshop_result);
    $total_workshops = $workshop_data['total_workshops'];

    // Query to get user/participant statistics
    $user_query = "SELECT COUNT(*) as total_users FROM users WHERE user_type = 'user'";
    $user_result = mysqli_query($connect, $user_query);
    $user_data = mysqli_fetch_assoc($user_result);
    $total_users = $user_data['total_users'];

    // Query to get trainer statistics
    $trainer_query = "SELECT COUNT(*) as total_trainers FROM trainers WHERE active = 1";
    $trainer_result = mysqli_query($connect, $trainer_query);
    $trainer_data = mysqli_fetch_assoc($trainer_result);
    $total_trainers = $trainer_data['total_trainers'];

    // Query to get payment statistics
    $payment_query = "SELECT COUNT(*) as total_payments FROM payments WHERE payment_status = 1";
    $payment_result = mysqli_query($connect, $payment_query);
    $payment_data = mysqli_fetch_assoc($payment_result);
    $total_payments = $payment_data['total_payments'];

    // Query to get school statistics
    $school_query = "SELECT COUNT(*) as total_schools FROM schools WHERE is_active = 1";
    $school_result = mysqli_query($connect, $school_query);
    $school_data = mysqli_fetch_assoc($school_result);
    $total_schools = $school_data['total_schools'];

    // Query to get distinct cities
    $city_query = "SELECT COUNT(DISTINCT city) as total_cities FROM users WHERE city IS NOT NULL";
    $city_result = mysqli_query($connect, $city_query);
    $city_data = mysqli_fetch_assoc($city_result);
    $total_cities = $city_data['total_cities'];

    // Query to calculate average rating from feedback
    $rating_query = "SELECT AVG(rating) as avg_rating FROM feedback";
    $rating_result = mysqli_query($connect, $rating_query);
    $rating_data = mysqli_fetch_assoc($rating_result);
    $avg_rating = number_format($rating_data['avg_rating'], 1);

    // Calculate content hours (based on workshop duration)
    $content_hours_query = "SELECT SUM(duration) as total_hours FROM workshops WHERE is_deleted = 0";
    $content_hours_result = mysqli_query($connect, $content_hours_query);
    $content_hours_data = mysqli_fetch_assoc($content_hours_result);
    $content_hours = $content_hours_data['total_hours'] ? $content_hours_data['total_hours'] : 127;

    // Calculate total learning hours
    $learning_hours = $total_payments * $content_hours;
    ?>

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
                            <h1 class="tp-breadcrumb-title tp-upper tp-text-white">Mission AIM Impact</h1>
                            <div class="tp-breadcrumb-list">
                                <span class="active"><a href="#">Home</a></span>
                                <span class="dvir">-</span>
                                <span><a href="#">Our Impact</a></span>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Impact Metrics section -->
                <section class="tp-services-area pt-130 pb-70">
                    <div class="container">
                        <div class="tp-section-title-wrapper mb-50 text-center">
                            <h2 class="tp-section-title mb-20">Impact by the Numbers</h2>
                            <p>Transforming education through AI, one educator at a time</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="tpservices text-center br-24 mb-30 wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="tpservices__icon mb-25">
                                        <span><i class="flaticon-concentration"></i></span>
                                    </div>
                                    <div class="tpservices__text">
                                        <h3 class="tpservices__title tp-section-title mb-15">85</h3>
                                        <p>Immersive workshops delivered, fostering continuous professional development for educators worldwide</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="tpservices text-center br-24 mb-30 wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <div class="tpservices__icon mb-25">
                                        <span><i class="flaticon-sharing"></i></span>
                                    </div>
                                    <div class="tpservices__text">
                                        <h3 class="tpservices__title tp-section-title mb-15">27,013</h3>
                                        <p>Passionate educators participated in our transformative workshops this year</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="tpservices text-center br-24 mb-30 wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="tpservices__icon mb-25">
                                        <span><i class="flaticon-cooperation"></i></span>
                                    </div>
                                    <div class="tpservices__text">
                                        <h3 class="tpservices__title tp-section-title mb-15"><?php echo $content_hours; ?></h3>
                                        <p>Hours of premium educational content created by our dedicated trainers</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-4 col-md-6">
                                <div class="tpservices text-center br-24 mb-30 wow tpFadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                                    <div class="tpservices__icon mb-25">
                                        <span><i class="flaticon-connections"></i></span>
                                    </div>
                                    <div class="tpservices__text">
                                        <h3 class="tpservices__title tp-section-title mb-15">40,520</h3>
                                        <p>Hours of learning facilitated - equivalent to 4.6 years of continuous educational content!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Database Driven Impact Stats Section -->
                <section class="tp-about-skill-area pt-40 pb-135 tp-nblue-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="tp-about-exp br-20 p-relative mb-30">
                                    <img class="wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay="0.3s" src="assets/img/images/service_img1.png" alt="">
                                    <div class="tp-exp-wrapper">
                                        <div class="tp-exp-bg"></div>
                                        <div class="tp-exp d-flex align-items-center">
                                            <h2 class="mb-0 mr-20"><?php echo number_format($total_users); ?>+</h2>
                                            <h5 class="tp-fs-30 m-0">Educators <br>Empowered</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="tp-about-skill-box pl-80">
                                    <div class="tp-section-title-wrapper mb-33">
                                        <h2 style="color: #fff;" class="tp-section-title mb-20  ">Real Impact, Real Change</h2>
                                        <p style="color: #fff;" class="tp-text-white">Our mission is transforming education through AI integration. Here's what we've achieved so far:</p>
                                    </div>
                                    <div class="tp-skill-bar">
                                        <div class="tp-skill-item mb-25">
                                            <label style="color: #fff;">Educational Satisfaction</label>
                                            <div class="progress-outer">
                                                <span class="progress-num" style="left:calc(<?php echo $avg_rating * 20; ?>% - 31px)"><?php echo $avg_rating * 20; ?>%</span>
                                                <div class="fix">
                                                    <div class="progress wow tpSkillInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                                                        <div class="progress-bar" style="width: <?php echo $avg_rating * 20; ?>%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-skill-item mb-25">
                                            <label style="color: #fff;">AI Integration Success</label>
                                            <div class="progress-outer">
                                                <span class="progress-num" style="left:calc(90% - 31px)">90%</span>
                                                <div class="fix">
                                                    <div class="progress wow tpSkillInLeft" data-wow-duration="1s" data-wow-delay="0.4s">
                                                        <div class="progress-bar" style="width: 90%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tp-skill-item mb-25">
                                            <label style="color: #fff;">Educational Transformation</label>
                                            <div class="progress-outer">
                                                <span class="progress-num" style="left:calc(85% - 31px)">85%</span>
                                                <div class="fix">
                                                    <div class="progress wow tpSkillInLeft" data-wow-duration="1s" data-wow-delay="0.6s">
                                                        <div class="progress-bar" style="width: 85%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Global Reach Section -->
                <div class="tp-fact-area pt-130 pb-80">
                    <div class="container">
                        <div class="tp-section-title-wrapper mb-50 text-center">
                            <h2 class="tp-section-title mb-20">Our Global Reach</h2>
                            <p>Building a worldwide community of AI-empowered educators</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="tpfact text-center mb-40">
                                    <div class="tpfact__icon">
                                        <span><i class="flaticon-merging"></i></span>
                                    </div>
                                    <div class="tpfact__text">
                                        <h3 style="color: #007;"` class="tpfact__title mb-10">Countries Reached</h3>
                                        <span style="color: #999;">48</span>
                                        <p>Building an international community of learning excellence</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="tpfact text-center mb-40">
                                    <div class="tpfact__icon">
                                        <span><i class="flaticon-merging"></i></span>
                                    </div>
                                    <div class="tpfact__text">
                                        <h3 style="color: #007;"` class="tpfact__title mb-10">Cities Impacted</h3>
                                        <span style="color: #999;">1,666</span>
                                        <p>Including 632 Indian cities, creating a truly interconnected learning community</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="tpfact text-center mb-40">
                                    <div class="tpfact__icon">
                                        <span><i class="flaticon-merging"></i></span>
                                    </div>
                                    <div class="tpfact__text">
                                        <h3 style="color: #007;"` class="tpfact__title mb-10">Schools Transformed</h3>
                                        <span style="color: #999;"><?php echo $total_schools; ?>+</span>
                                        <p>Educational institutions embracing AI-powered learning</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6">
                                <div class="tpfact text-center mb-40">
                                    <div class="tpfact__icon">
                                        <span><i class="flaticon-merging"></i></span>
                                    </div>
                                    <div class="tpfact__text">
                                        <h3 style="color: #007;"` class="tpfact__title mb-10">Champion Learner</h3>
                                        <span style="color: #999;">52</span>
                                        <p>Workshops completed by our most dedicated educator, showcasing unprecedented commitment</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Additional Impact Metrics -->
                <section class="tp-services-area pt-80 pb-130" data-background="assets/img/fact/fact-pattern.png" data-bg-color="#0A0E1A">
                    <div class="container">
                        <div class="tp-section-title-wrapper mb-50 text-center">
                            <h2 class="tp-section-title mb-20 tp-text-white">Transforming Education</h2>
                            <p class="tp-text-white">Our impact extends beyond numbers - we're changing how education works</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tpfact text-center text-lg-start mb-40">
                                            <div class="tpfact__icon">
                                                <span><i class="flaticon-merging"></i></span>
                                            </div>
                                            <div class="tpfact__text tp-text-white">
                                                <h4 class="tpfact__title mb-10">Technical Diversity</h4>
                                                <span>625</span>
                                                <p>Forward-thinking educators embracing Linux, showcasing our community's technical diversity</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tpfact text-center text-lg-start mb-40">
                                            <div class="tpfact__icon">
                                                <span><i class="flaticon-merging"></i></span>
                                            </div>
                                            <div class="tpfact__text tp-text-white">
                                                <h4 class="tpfact__title mb-10">Discovery Hours</h4>
                                                <span>618</span>
                                                <p>Hours spent by educators discovering perfect learning opportunities</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tpfact text-center text-lg-start mb-40">
                                            <div class="tpfact__icon">
                                                <span><i class="flaticon-merging"></i></span>
                                            </div>
                                            <div class="tpfact__text tp-text-white">
                                                <h4 class="tpfact__title mb-10">Active Trainers</h4>
                                                <span><?php echo $total_trainers; ?></span>
                                                <p>Expert educators leading our AI transformation mission</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="tpfact text-center text-lg-start mb-40">
                                            <div class="tpfact__icon">
                                                <span><i class="flaticon-merging"></i></span>
                                            </div>
                                            <div class="tpfact__text tp-text-white">
                                                <h4 class="tpfact__title mb-10">Workshop Satisfaction</h4>
                                                <span><?php echo $avg_rating; ?>/5</span>
                                                <p>Average rating from our workshop participants</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-fact-img br-15 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <img src="assets/img/images/service_img2.png" alt="">
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
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>