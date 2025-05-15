<!DOCTYPE html>
<html lang="en">
<?php include 'include/head.php'; ?>
<?php include 'include/connect.php'; ?>

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
    <?php include 'include/index_header.php'; ?>
    <!-- header end  -->

    <!-- tp header search  -->
    <?php include 'include/sidebar.php'; ?>

    <div id="smooth-wrapper">
        <div id="smooth-content">

            <main>
                <!-- tp-hero-area start -->
                <section class="tp-hero-area tp-hero-space pt-210 pb-110 p-relative "
                    style="background-image: url(assets/img/bg/hero-light-bg.jpg);">
                    <div class="tp-hero-shap">
                       <!--  <img class="tp-hero-3-shape-1 p-absolute wow img-custom-anim-right" data-wow-duration="1.5s"
                        data-wow-delay="0.4s" src="assets/img/images/circle_img.png" alt=""> -->
                        <img class="tp-hero-3-shape-2 p-absolute" src="assets/img/aim_main.svg" alt="">
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="tp-hero-wrapper d-flex">
                                    <div class="tp-hero-img ml-25 mr-70 d-none d-lg-block wow img-custom-anim-top"
                                        data-wow-duration="1.5s" data-wow-delay="0.2s">
                                       <img src="assets/img/images/circle_img.png" alt="">
                                    </div>
                                    <div class="tp-hero tp-hero-black p-relative pt-40 z-index-11" data-speed=".9">
                                        <div class="mb-35 wow img-custom-anim-left" data-wow-duration="1.5s"
                                            data-wow-delay="0.6s">
                                            <h1 class="tp-hero-title tp-hero-title-black">Empowering <br>
                                                <img src="assets/img/shape/home-3-hero.png" alt=""> 1 Million Teachers
                                                <br> with AI Excellence
                                            </h1>
                                        </div>
                                        <div class="tp-hero-black-content wow img-custom-anim-top"
                                            data-wow-duration="1.5s" data-wow-delay="0.8s">
                                            <p>Building on our legacy of impacting 30,000+ teachers and 10,000+ schools,
                                                we're scaling up to transform education through AI integration. Join us
                                                in shaping the future of teaching and learning.</p>
                                            <a class="tp-text-btn" href="about.php">Read More <i
                                                    class="far fa-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- tp-hero-area end -->

                <section class="tp-services-area pt-130 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 col-lg-12">
                                <div class="tp-section-title-wrapper mb-40">
                                    <span class="tp-section-subtitle mb-10"><i class="sub-dot-color"></i> what we
                                        offer</span>
                                    <h2 class="tp-section-title tp-upper tp_title_anim mb-20">Transform Your Teaching
                                        <br> with AI Integration</h2>
                                </div>
                                <div class="row g-0 mb-30">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="tpservices tpservices-2 d-flex  br-24">
                                            <div class="tpservices__icon mr-20 mb-25 p-relative">
                                                <span><i class="flaticon-geometric-1"></i></span>
                                                <div class="tpservices__icon-shape">
                                                    <img src="assets/img/services/shape-1.png" alt="">
                                                </div>
                                            </div>
                                            <div class="tpservices__text ">
                                                <h3 class="tpservices__title mb-15"><a href="services-details.php">AI
                                                        Skills Training</a></h3>
                                                <p>Live and recorded sessions led by global experts on AI fundamentals
                                                    and classroom applications</p>
                                                <div class="tpservices__icon_btn">
                                                    <a href="services-details.php"><i
                                                            class="flaticon-next-button"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="tpservices tpservices-2 d-flex  br-24">
                                            <div class="tpservices__icon mr-20 mb-25 p-relative">
                                                <span><i class="flaticon-geometric-1"></i></span>
                                                <div class="tpservices__icon-shape">
                                                    <img src="assets/img/services/shape-2.png" alt="">
                                                </div>
                                            </div>
                                            <div class="tpservices__text ">
                                                <h3 class="tpservices__title mb-15"><a
                                                        href="services-details.php">Capacity Building</a></h3>
                                                <p>Mentorship networks and AI learning hubs for collaborative
                                                    experimentation</p>
                                                <div class="tpservices__icon_btn">
                                                    <a href="services-details.php"><i
                                                            class="flaticon-next-button"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="tpservices tpservices-2 d-flex  br-24">
                                            <div class="tpservices__icon mr-20 mb-25 p-relative">
                                                <span><i class="flaticon-geometric-1"></i></span>
                                                <div class="tpservices__icon-shape">
                                                    <img src="assets/img/services/shape-3.png" alt="">
                                                </div>
                                            </div>
                                            <div class="tpservices__text ">
                                                <h3 class="tpservices__title mb-15"><a
                                                        href="services-details.php">Resource Development</a></h3>
                                                <p>Curated toolkits and customizable learning units for different
                                                    subjects and contexts</p>
                                                <div class="tpservices__icon_btn">
                                                    <a href="services-details.php"><i
                                                            class="flaticon-next-button"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="tpservices tpservices-2 d-flex  br-24">
                                            <div class="tpservices__icon mr-20 mb-25 p-relative">
                                                <span><i class="flaticon-geometric-1"></i></span>
                                                <div class="tpservices__icon-shape">
                                                    <img src="assets/img/services/shape-4.png" alt="">
                                                </div>
                                            </div>
                                            <div class="tpservices__text ">
                                                <h3 class="tpservices__title mb-15"><a
                                                        href="services-details.php">Certification & Recognition</a></h3>
                                                <p>Digital badges, certificates, and annual events to celebrate
                                                    AI-empowered educators</p>
                                                <div class="tpservices__icon_btn">
                                                    <a href="services-details.php"><i
                                                            class="flaticon-next-button"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12 d-lg-none d-xl-block">
                                <div class="tpservices__thumb br-20  wow img-custom-anim-top" data-wow-duration="1.5s"
                                    data-wow-delay="0.3s">
                                    <img src="assets/img/images/what_we_offer.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="tp-about-area fix pb-95 p-relative">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-6 col-md-12">
                                <div class="tp-about-thumb ml-60 mr-80 mb-40  p-relative text-center">
                                    <div class="tp-about-shape">
                                        <img class="tp-about-2-shape-1 p-absolute"
                                            src="assets/img/shape/home-3-acc-01.png" alt="">
                                        <img class="tp-about-2-shape-2 p-absolute"
                                            src="assets/img/shape/home-3-acc-02.png" alt="">
                                    </div>
                                    <img style="width: 70%;" src="assets/img/images/our_mission.png" alt="">
                                    <div class="tp-about-circle"></div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 col-md-12">
                                <div class="tp-section-title-wrapper mb-40">
                                    <span class="tp-section-subtitle mb-10"><i class="sub-dot-color"></i> our
                                        mission</span>
                                    <h2 class="tp-section-title tp-upper mb-20 wow img-custom-anim-top"
                                        data-wow-duration="1.5s" data-wow-delay="0.3s">Empowering Educators
                                        Transforming Classrooms
                                        Building Future Leaders</h2>
                                </div>
                                <div class="tp-about-faq">
                                    <div class="accordion" id="accordionExample">
                                        <div class="tp-faq-item mb-20">
                                            <h2 class="tp-faq-header">
                                                <button class="tp-faq-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    Our Mission
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="tp-accordion-collapse collapse show"
                                                data-bs-parent="#accordionExample">
                                                <div class="tp-faq-body">
                                                    <p>Our mission is to empower 1 million educators across South Asia
                                                        with AI competencies, enabling them to harness technology for
                                                        personalized learning, administrative efficiency, and enhanced
                                                        student engagement.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tp-faq-item mb-20">
                                            <h2 class="tp-faq-header">
                                                <button class="tp-faq-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Our Vision
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="tp-faq-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="tp-faq-body">
                                                    <p>To be the most trusted and valued partner for progressive schools
                                                        and teaching professionals by delivering world-class, AI-driven
                                                        training and upskilling tools that foster innovative, ethical,
                                                        and impactful teaching.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tp-faq-item mb-20">
                                            <h2 class="tp-faq-header">
                                                <button class="tp-faq-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Our Objectives
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="tp-faq-collapse collapse"
                                                data-bs-parent="#accordionExample">
                                                <div class="tp-faq-body">
                                                    <p>Equip teachers with practical AI skills, facilitate AI tool
                                                        adoption, foster collaborative networks, promote ethical AI use,
                                                        and support continuous professional development through
                                                        innovative learning formats.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="tp-about-btn mt-50 mb-40 wow img-custom-anim-top" data-wow-duration="1.5s"
                                    data-wow-delay="0.5s">
                                    <a href="about.php" class="tp-btn-orange">
                                        <span class="tp-btn-wrap">
                                            <span class="tp-btn-y-1">Discover More</span>
                                            <span class="tp-btn-y-2">Discover More</span>
                                        </span>
                                        <i></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- Progress Toward 1 Million Goal -->
                <section class="tp-progress-goal-area pt-80 pb-80 tp-nblue-bg">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-section-title-wrapper mb-30">
                                    <h2 class="tp-section-title tp-upper tp-text-white mb-20">Our Mission: 1 Million AI-Empowered Teachers</h2>
                                    <p class="tp-text-white">Join our growing community as we work toward our first milestone of 100,000 teachers on the journey to 1 million.</p>
                                </div>
                                <?php
                                // Get user count for progress visualization
                                $user_query = "SELECT COUNT(*) as total_users FROM users WHERE user_type = 'user'";
                                $user_result = mysqli_query($connect, $user_query);
                                $user_data = mysqli_fetch_assoc($user_result);
                                $total_users = $user_data['total_users'];
                                
                                // Calculate percentage toward first milestone (100K) instead of full goal
                                $first_milestone = 100000;
                                $ultimate_goal = 1000000;
                                $percentage = ($total_users / $first_milestone) * 100;
                                // Cap at 100% for display purposes if we exceed the milestone
                                $display_percentage = min($percentage, 100);
                                $formatted_percentage = number_format($display_percentage, 1);
                                $formatted_users = number_format($total_users);
                                $milestone_progress = number_format(($total_users / $ultimate_goal) * 100, 1);
                                ?>
                                <div class="tp-skill-bar mb-50">
                                    <div class="tp-skill-item">
                                        <label style="color: aliceblue;" class="tp-text-white"><?php echo $formatted_users; ?> Teachers Trained - <?php echo $formatted_percentage; ?>% to First Milestone</label>
                                        <div class="progress-outer">
                                            <div class="fix">
                                                <div class="progress wow tpSkillInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
                                                    <div class="progress-bar" style="width: <?php echo $display_percentage; ?>%; background: linear-gradient(to right, #2184e9, #6416ec);"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <small class="tp-text-white text-end d-block mt-2">First milestone: 100K teachers</small>
                                    </div>
                                </div>
                                <div class="tp-about-btn mt-10 mb-30 wow img-custom-anim-top" data-wow-duration="1s" data-wow-delay="0.3s">
                                    <a href="impact.php" class="tp-btn-orange">
                                        <span class="tp-btn-wrap">
                                            <span class="tp-btn-y-1">See Our Impact</span>
                                            <span class="tp-btn-y-2">See Our Impact</span>
                                        </span>
                                        <i></i>
                                    </a>
                                    <a href="https://ipnacademy.in/user/signup.php" class="tp-btn-orange">
                                        <span class="tp-btn-wrap">
                                            <span class="tp-btn-y-1">Join Mission AIM</span>
                                            <span class="tp-btn-y-2">Join Mission AIM</span>
                                        </span>
                                        <i></i>
                                    </a>
                                    
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tp-goal-stats p-relative">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="tpfact text-center mb-30">
                                                <div class="tpfact__icon">
                                                    <span><i class="flaticon-connections"></i></span>
                                                </div>
                                                <div class="tpfact__text tp-text-white">
                                                    <h3 class="tpfact__title mb-5">Teachers Trained</h3>
                                                    <span><?php echo $formatted_users; ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tpfact text-center mb-30">
                                                <div class="tpfact__icon">
                                                    <span><i class="flaticon-cooperation"></i></span>
                                                </div>
                                                <div class="tpfact__text tp-text-white">
                                                    <h3 class="tpfact__title mb-5">First Milestone</h3>
                                                    <span><?php echo $formatted_percentage; ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tpfact text-center mb-30">
                                                <div class="tpfact__icon">
                                                    <span><i class="flaticon-concentration"></i></span>
                                                </div>
                                                <div class="tpfact__text tp-text-white">
                                                    <h3 class="tpfact__title mb-5">To 100K Goal</h3>
                                                    <span><?php echo number_format(max(0, $first_milestone - $total_users)); ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="tpfact text-center mb-30">
                                                <div class="tpfact__icon">
                                                    <span><i class="flaticon-sharing"></i></span>
                                                </div>
                                                <div class="tpfact__text tp-text-white">
                                                    <h3 class="tpfact__title mb-5">Overall Progress</h3>
                                                    <span><?php echo $milestone_progress; ?>%</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <div class="tp-brand-area grad-bg pt-40 pb-35">
                    <div class="tp-brand-wrapper">
                        <div class="swiper tp-brand-title-active">
                            <div class="swiper-wrapper tp-slide-transtion">
                                <div class="swiper-slide tp-brand-slide-element">
                                    <div class="tp-brand-title">
                                        <h3>AI Training *</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide tp-brand-slide-element">
                                    <div class="tp-brand-title">
                                        <h3>Education *</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide tp-brand-slide-element">
                                    <div class="tp-brand-title">
                                        <h3>Innovation *</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide tp-brand-slide-element">
                                    <div class="tp-brand-title">
                                        <h3>Technology *</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide tp-brand-slide-element">
                                    <div class="tp-brand-title">
                                        <h3>Learning *</h3>
                                    </div>
                                </div>
                                <div class="swiper-slide tp-brand-slide-element">
                                    <div class="tp-brand-title">
                                        <h3>Future *</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!-- Start MISSION AIM Workshops Section -->
<section class="tp-services-area pt-130 pb-130">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-section-title-wrapper mb-40 text-center">
                    <span class="tp-section-subtitle mb-10"><i class="sub-dot-color"></i> Latest Workshops</span>
                    <h2 class="tp-section-title tp-upper tp_title_anim mb-20">MISSION AIM Workshops</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="tp-tab-wrapper">
                    <ul class="nav nav-tabs tp-tab-menu mb-50" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#upcoming" type="button" role="tab">Upcoming</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#previous" type="button" role="tab">Previous</button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="upcoming" role="tabpanel">
                            <div class="row">
                                <?php 
                                $sql = "SELECT * FROM workshops WHERE is_deleted=0 AND category_id=39 AND type=0 AND start_date > NOW() ORDER BY start_date ASC LIMIT 6";
                                $results = $connect->query($sql);
                                while ($final = $results->fetch_assoc()) {
                                ?>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100 shadow-sm border-0 tpservices-card" style="border-radius:18px; overflow:hidden; transition:box-shadow .3s;">
                                        <div class="position-relative">
                                            <a href="https://ipnacademy.in/workshop-details.php?id=<?php echo $final['id'] ?>">
                                                <img src="<?php echo $uri.$final['image'] ?>" class="card-img-top" alt="" style="height:220px;object-fit:cover;">
                                            </a>
                                            <span class="badge bg-info position-absolute top-0 start-0 m-2" style="font-size:12px;">MISSION AIM</span>
                                            <span class="badge bg-dark position-absolute top-0 end-0 m-2" style="font-size:12px;">
                                                <?php 
                                                if($final['w_status']==1) {
                                                    echo 'TBA';
                                                } else {
                                                    $date = $final['start_date'];
                                                    $new_date = date("d M Y", strtotime($date));
                                                    echo $new_date;
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title mb-2" style="font-size:1.1rem;">
                                                <a href="https://ipnacademy.in/workshop-details.php?id=<?php echo $final['id'] ?>" class="text-dark"><?php echo $final['name'] ?></a>
                                            </h5>
                                            <div class="mb-2" style="font-size:13px; color:#888;">
                                                <?php
                                                if ($final['is_2024'] == 0) {
                                                    echo '<i class=\"far fa-user\"></i> ' . $final['trainer_name'];
                                                } else {
                                                    $trainer_id = $final['trainer_id'];
                                                    $trainersql = "SELECT * FROM trainers WHERE id=$trainer_id";
                                                    $Trainerresults = $connect->query($trainersql);
                                                    $trainerfinal = $Trainerresults->fetch_assoc();
                                                    echo '<i class=\"far fa-user\"></i> <a href=\"./workshops-trainer.php?id=' . $trainerfinal['id'] . '\">' . $trainerfinal['name'] . '</a>';
                                                }
                                                ?>
                                            </div>
                                            <div class="mb-2" style="font-size:13px; color:#888;">
                                                <i class="far fa-clock"></i>
                                                <?php 
                                                if($final['w_status']==1) {
                                                    echo 'TBA';
                                                } else {
                                                    $date = $final['start_date'];
                                                    $new_date = date("D | d M Y | h:i A", strtotime($date));
                                                    echo $new_date;
                                                }
                                                ?>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="fw-bold text-success" style="font-size:1.1rem;">₹<?php echo $final['price'] ?></span>
                                                    <span class="text-muted ms-2" style="text-decoration:line-through;">₹<?php echo $final['cut_price'] ?></span>
                                                </div>
                                                <a href="https://ipnacademy.in/workshop-details.php?id=<?php echo $final['id'] ?>" class="btn btn-primary w-100" style="border-radius:8px;">
                                                    Enroll Now
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="previous" role="tabpanel">
                            <div class="row">
                                <?php 
                                $sql = "SELECT * FROM workshops WHERE is_deleted=0 AND category_id=39 AND type=1 ORDER BY start_date DESC LIMIT 6";
                                $results = $connect->query($sql);
                                while ($final = $results->fetch_assoc()) {
                                ?>
                                <div class="col-lg-4 col-md-6 mb-4">
                                    <div class="card h-100 shadow-sm border-0 tpservices-card" style="border-radius:18px; overflow:hidden; transition:box-shadow .3s;">
                                        <div class="position-relative">
                                            <a href="https://ipnacademy.in/workshop-details.php?id=<?php echo $final['id'] ?>">
                                                <img src="<?php echo $uri.$final['image'] ?>" class="card-img-top" alt="" style="height:220px;object-fit:cover;">
                                            </a>
                                            <span class="badge bg-info position-absolute top-0 start-0 m-2" style="font-size:12px;">MISSION AIM</span>
                                            <span class="badge bg-dark position-absolute top-0 end-0 m-2" style="font-size:12px;">
                                                <?php 
                                                if($final['w_status']==1) {
                                                    echo 'TBA';
                                                } else {
                                                    $date = $final['start_date'];
                                                    $new_date = date("d M Y", strtotime($date));
                                                    echo $new_date;
                                                }
                                                ?>
                                            </span>
                                        </div>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title mb-2" style="font-size:1.1rem;">
                                                <a href="https://ipnacademy.in/workshop-details.php?id=<?php echo $final['id'] ?>" class="text-dark"><?php echo $final['name'] ?></a>
                                            </h5>
                                            <div class="mb-2" style="font-size:13px; color:#888;">
                                                <?php
                                                if ($final['is_2024'] == 0) {
                                                    echo '<i class=\"far fa-user\"></i> ' . $final['trainer_name'];
                                                } else {
                                                    $trainer_id = $final['trainer_id'];
                                                    $trainersql = "SELECT * FROM trainers WHERE id=$trainer_id";
                                                    $Trainerresults = $connect->query($trainersql);
                                                    $trainerfinal = $Trainerresults->fetch_assoc();
                                                    echo '<i class=\"far fa-user\"></i> <a href=\"./workshops-trainer.php?id=' . $trainerfinal['id'] . '\">' . $trainerfinal['name'] . '</a>';
                                                }
                                                ?>
                                            </div>
                                            <div class="mb-2" style="font-size:13px; color:#888;">
                                                <i class="far fa-clock"></i>
                                                <?php 
                                                if($final['w_status']==1) {
                                                    echo 'TBA';
                                                } else {
                                                    $date = $final['start_date'];
                                                    $new_date = date("D | d M Y | h:i A", strtotime($date));
                                                    echo $new_date;
                                                }
                                                ?>
                                            </div>
                                            <div class="mt-auto">
                                                <div class="d-flex align-items-center mb-3">
                                                    <span class="fw-bold text-success" style="font-size:1.1rem;">₹<?php echo $final['price_2'] ?></span>
                                                    <span class="text-muted ms-2" style="text-decoration:line-through;">₹<?php echo $final['cut_price'] ?></span>
                                                </div>
                                                <a href="https://ipnacademy.in/workshop-details.php?id=<?php echo $final['id'] ?>" class="btn btn-primary w-100" style="border-radius:8px;">
                                                    Recording
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</section>
<!-- End MISSION AIM Workshops Section -->

             
                        <div class="tp-section-title-wrapper mt-30 mb-50 text-center">
                            <span class="tp-section-subtitle mb-10"><i class="sub-dot-color"></i> Our Process</span>
                            <h2 class="tp-section-title tp-upper tp_title_anim mb-20">How We Transform Teaching with AI</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="tpprocess tpprocess-border mb-30 text-center pt-60 pb-60 pl-35 pr-35 wow tpFadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.2s">
                                    <div class="tpprocess__step mb-35">
                                        <span>Step (01)</span>
                                    </div>
                                    <h3 class="tpprocess__title mb-15"> Planning</h3>
                                    <p>We evaluate your current teaching methods and create a personalized AI integration plan tailored to your specific needs and goals.</p>
                                    <div class="tpprocess__icon mt-40">
                                        <span><i class="flaticon-geometric-4"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="tpprocess tpprocess-border mb-30 text-center pt-60 pb-60 pl-35 pr-35 wow tpFadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.4s">
                                    <div class="tpprocess__step mb-35">
                                        <span>Step (02)</span>
                                    </div>
                                    <h3 class="tpprocess__title mb-15">AI Skills Training</h3>
                                    <p>Expert-led workshops and hands-on sessions to build your AI competencies and confidence in using educational technology.</p>
                                    <div class="tpprocess__icon mt-40">
                                        <span data-bg-color="#D6F0FF"><i class="flaticon-triangle"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="tpprocess tpprocess-border mb-30 text-center pt-60 pb-60 pl-35 pr-35 wow tpFadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.6s">
                                    <div class="tpprocess__step mb-35">
                                        <span>Step (03)</span>
                                    </div>
                                    <h3 class="tpprocess__title mb-15">Implementation </h3>
                                    <p>Ongoing mentorship and technical assistance to help you integrate AI tools effectively into your teaching practice.</p>
                                    <div class="tpprocess__icon mt-40">
                                        <span data-bg-color="#FFE4FB"><i class="flaticon-geometric-5"></i></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6">
                                <div class="tpprocess tpprocess-border mb-30 text-center pt-60 pb-60 pl-35 pr-35 wow tpFadeInUp"
                                    data-wow-duration="1s" data-wow-delay="0.8s">
                                    <div class="tpprocess__step mb-35">
                                        <span>Step (04)</span>
                                    </div>
                                    <h3 class="tpprocess__title mb-15">Continuous Growth</h3>
                                    <p>Access to our AI learning hub, community support, and regular updates to keep you at the forefront of educational innovation.</p>
                                    <div class="tpprocess__icon mt-40">
                                        <span data-bg-color="#E2EAD7"><i class="flaticon-3d-shapes"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>


                <!-- <section class="tp-showcase-area tp-nblue-bg pt-130 pb-130"
                    data-background="assets/img/bg/project-bg-pattern.png">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-xl-8 col-lg-12">
                                <div class="tp-section-title-wrapper mb-50">
                                    <span class="tp-section-subtitle tp-section-subtitle-white  mb-10"><i
                                            class="sub-dot-color"></i> Success Stories</span>
                                    <h2 class="tp-section-title tp-section-title-white tp-upper tp_title_anim mb-20">
                                        What Our Educators Say</h2>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-12">
                                <div class="tp-section-title-wrapper mb-50 pb-15">
                                    <p class="tp-section-title-content-white">Join our growing community of 30,000+
                                        teachers and 10,000+ schools who are already <b>transforming their
                                            classrooms</b> with AI-powered teaching methods and <b>enhancing student
                                            engagement</b> through innovative learning approaches.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row showcase-groid-item gx-xl-0 align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tpshowcase__thumb br-20 w-img wow img-custom-anim-top"
                                    data-wow-duration="1.5s" data-wow-delay="0.2s">
                                    <img src="assets/img/images/a.png" alt="Teacher using AI tools in classroom">
                                </div>
                            </div>
                            <div class="offset-xl-1 col-xl-5 col-lg-6 ">
                                <div class="tpshowcase pl-10">
                                    <div class="tpshowcase__number mb-30">
                                        <span>01</span>
                                    </div>
                                    <div class="tpshowcase__cat mb-20">
                                        <span>AI Integration</span>
                                    </div>
                                    <h3 class="tpshowcase__title tp-upper"><a
                                            href="portfolio-details.php">Revolutionizing <br>
                                            Classroom Learning <br>
                                            with AI Tools</a></h3>
                                    <div class="tpshowcase__btn mt-30">
                                        <a class="tp-text-btn tp-text-btn-white" href="portfolio-details.php">Read More
                                            <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row showcase-groid-item gx-xl-0 align-items-center flex-column-reverse flex-xl-row">
                            <div class="offset-xl-1 col-xl-5 col-lg-6">
                                <div class="tpshowcase pl-10">
                                    <div class="tpshowcase__number mb-30">
                                        <span>02</span>
                                    </div>
                                    <div class="tpshowcase__cat mb-20">
                                        <span>Teacher Training</span>
                                    </div>
                                    <h3 class="tpshowcase__title tp-upper"><a href="portfolio-details.php">Empowering
                                            Teachers <br>
                                            with AI Skills for <br>
                                            Modern Education</a></h3>
                                    <div class="tpshowcase__btn mt-30">
                                        <a class="tp-text-btn tp-text-btn-white" href="portfolio-details.php">Read More
                                            <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="tpshowcase__thumb br-20 w-img wow img-custom-anim-top"
                                    data-wow-duration="1.5s" data-wow-delay="0.4s">
                                    <img src="assets/img/images/b.png" alt="Teacher training session with AI integration">
                                </div>
                            </div>
                        </div>
                        <div class="row showcase-groid-item gx-xl-0 align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="tpshowcase__thumb br-20 w-img wow img-custom-anim-top"
                                    data-wow-duration="1.5s" data-wow-delay="0.6s">
                                    <img src="assets/img/images/c.png" alt="Students engaged in AI-enhanced learning">
                                </div>
                            </div>
                            <div class="offset-xl-1 col-xl-5 col-lg-6">
                                <div class="tpshowcase pl-10">
                                    <div class="tpshowcase__number mb-30">
                                        <span>03</span>
                                    </div>
                                    <div class="tpshowcase__cat mb-20">
                                        <span>Student Success</span>
                                    </div>
                                    <h3 class="tpshowcase__title tp-upper"><a href="portfolio-details.php">Enhancing
                                            Student <br>
                                            Learning Outcomes <br>
                                            Through AI</a></h3>
                                    <div class="tpshowcase__btn mt-30">
                                        <a class="tp-text-btn tp-text-btn-white" href="portfolio-details.php">Read More
                                            <i class="far fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section> -->

                <!-- <div class="solid-bg jarallax">
                    <img class="jarallax-img" src="assets/img/images/1920820.png" alt="">
                </div> -->

            
                <!-- <div class="tp-team-area mt-30 pb-90">
                    <div class="container">
                        <div class="tp-section-title-wrapper mb-50 text-center">
                            <span class="tp-section-subtitle mb-10"><i class="sub-dot-color"></i> expert member</span>
                            <h2 class="tp-section-title tp-upper tp_title_anim mb-20">Dedicated team</h2>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="tpteam text-center mb-40 wow tpFadeInUp" data-wow-duration="1s"
                                    data-wow-delay="0.2s">
                                    <div class="tpteam__thumb p-relative br-15 mb-25">
                                        <a href="team-details.php"><img class="mb-10 z-2 p-relative"
                                                src="assets/img/images/trainer_profile.png" alt=""></a>
                                        <div class="tpteam__thumb-bg"></div>
                                        <div class="tpteam__thumb-bg-border"></div>
                                        <div class="tpteam__social-2">
                                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#"><i class="fab fa-twitter"></i></a>
                                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                    <div class="tpteam__info">
                                        <h3 class="tpteam__title"><a href="team-details.php">Gaurava Yadav</a></h3>
                                        <span class="tpteam__subtitle">Founder & CEO of IPN Foundation</span>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div> -->

                <!-- <section class="tp-testimonial-area pt-130 pb-130">
                    <div class="container">
                        <div class="row align-items-end">
                            <div class="col-xl-4 d-none d-xl-block">
                                <div class="tp-testimonial-thumb p-relative text-center">
                                    <img src="assets/img/images/feedback_img.png" alt="">
                                    <div class="tp-testimonial-bg-color"></div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="tp-test-main-box">
                                    <div class="tp-testimonial-quote mr-30">
                                        <img src="assets/img/testimonial/quote.png" alt="">
                                    </div>
                                    <div class="tp-testimonial-main-wrapper p-relative">
                                        <div class="swiper tp-testimonial-active">
                                            <div class="swiper-wrapper">
                                                <div class="swiper-slide">
                                                    <div class="tptestimonial__content">
                                                        <div class="tptestimonial__rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <p>"The AI training program has transformed my teaching
                                                            approach. I can now create personalized learning experiences
                                                            for each student, making education more engaging and
                                                            effective."</p>
                                                    </div>
                                                    <div class="tptestimonial__author">
                                                        <div class="tptestimonial__author-img">
                                                            <img src="assets/img/testimonial/author-1.jpg" alt="">
                                                        </div>
                                                        <div class="tptestimonial__author-info">
                                                            <h4>Priya Sharma</h4>
                                                            <span>Mathematics Teacher, Delhi Public School</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tptestimonial__content">
                                                        <div class="tptestimonial__rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <p>"The mentorship program and AI learning hubs have been
                                                            invaluable. I've learned to integrate AI tools seamlessly
                                                            into my classroom, and my students are more motivated than
                                                            ever."</p>
                                                    </div>
                                                    <div class="tptestimonial__author">
                                                        <div class="tptestimonial__author-img">
                                                            <img src="assets/img/testimonial/author-2.jpg" alt="">
                                                        </div>
                                                        <div class="tptestimonial__author-info">
                                                            <h4>Rajesh Kumar</h4>
                                                            <span>Science Teacher, Modern School</span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="tptestimonial__content">
                                                        <div class="tptestimonial__rating">
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                            <i class="fas fa-star"></i>
                                                        </div>
                                                        <p>"As a school principal, I've seen remarkable improvements in
                                                            teaching quality after implementing the AI training program.
                                                            Our teachers are more confident and our students are
                                                            thriving."</p>
                                                    </div>
                                                    <div class="tptestimonial__author">
                                                        <div class="tptestimonial__author-img">
                                                            <img src="assets/img/testimonial/author-3.jpg" alt="">
                                                        </div>
                                                        <div class="tptestimonial__author-info">
                                                            <h4>Dr. Meera Patel</h4>
                                                            <span>Principal, Global Academy</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            class="tp-test-slider-arrow-2 tp-test-slider-arrow-3 d-flex align-items-center">
                                            <div class="tp-swiper-test-button-prev tp-swiper-test-2-button tp-rot-180">
                                                <i class="flaticon-right-arrow"></i></div>
                                            <span></span>
                                            <div class="tp-swiper-test-button-next tp-swiper-test-2-button"><i
                                                    class="flaticon-right-arrow"></i></div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section> -->
                <!-- <div class="tp-contact-form-area tp-cream-bg pt-130 pb-130">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-5">
                                <div class="tp-section-title-wrapper mb-50 wow img-custom-anim-left"
                                    data-wow-duration="1.5s" data-wow-delay="0.1s">
                                    <h2 class="tp-section-title mb-20 fs-100">Contact Us</h2>
                                </div>
                            </div>
                            <div class="col-xl-7">
                                <div class="contact-form-wrapper">
                                    <h3 class="tpform-title mb-25">Get in touch</h3>
                                </div>
                                <div class="contact-form-box">
                                    <form action="#">
                                        <div class="row">
                                            <div class="col-md-12 mb-30">
                                                <input type="text" placeholder="Full Name*">
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="email" placeholder="Email Here*">
                                            </div>
                                            <div class="col-md-6 mb-30">
                                                <input type="email" placeholder="subject *">
                                            </div>
                                            <div class="col-md-12 mb-45">
                                                <textarea name="nessage" cols="30" rows="10"
                                                    placeholder="write note*"></textarea>
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
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->



<!-- Continue with the rest of your page as before -->
<section class="tp-cta-bg-area pt-111 pb-110 p-relative tp-cta-overlay jarallax"
    data-background="assets/img/images/bg1.png">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 text-center">
                <div class="tp-section-title-wrapper mb-50 position-relative z-2">
                    <span class="tp-section-subtitle mb-10" data-color="#fff"><i
                            class="sub-dot-color"></i> working process</span>
                    <h2 class="tp-section-title tp-upper tp_title_anim mb-20" data-color="#fff">do you
                        have any <br>
                        work inquiry? send <br>
                        us message</h2>
                </div>
                <div class="tp-price-btn mt-50">
                    <a href="about.php" class="tp-btn-orange">
                        <span class="tp-btn-wrap">
                            <span class="tp-btn-y-1">Discover More</span>
                            <span class="tp-btn-y-2">Discover Dore</span>
                        </span>
                        <i></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ...rest of your file... -->


             

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
    <script src="assets/js/jarallax.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/nice-select.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>