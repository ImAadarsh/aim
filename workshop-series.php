<?php
require_once __DIR__ . '/include/workshops_data.php';
require_once __DIR__ . '/include/workshop_testimonials.php';

$workshop_reviews = array_values(aim_get_workshop_reviews(275));
$hero_rating = (float) $aim_series['rating'];
$review_rows = aim_split_reviews_into_rows($workshop_reviews, 3);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title>AI Workshop Series | IPN Mission AIM — 4 Power-Packed Masterclasses</title>
    <meta name="title" content="AI Workshop Series | IPN Mission AIM — 4 Power-Packed Masterclasses">
    <meta name="description" content="Join the remaining 4-workshop AI Masterclass series by IPN Mission AIM. Rated 4.79/5 by 353 educators. ₹2,999 (Save 50%). August–November 2026.">
    <meta name="keywords" content="AI workshops for teachers, AI in education, Mission AIM workshops, teacher training AI, IPN Foundation, AI lesson planning, STEM AI, numeracy AI, experiential learning AI">
    <meta name="author" content="IPN Foundation">
    <meta name="robots" content="index, follow">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://aim.ipnacademy.in/workshop-series.php">
    <meta property="og:title" content="AI Workshop Series | IPN Mission AIM — 4 Power-Packed Masterclasses">
    <meta property="og:description" content="Register for Four Masterclasses. Rated 4.79/5 by 353 educators. ₹2,999 — Save 50%. August–November 2026.">
    <meta property="og:image" content="assets/img/logo/mission-aim-og.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://aim.ipnacademy.in/workshop-series.php">
    <meta property="twitter:title" content="AI Workshop Series | IPN Mission AIM — 4 Power-Packed Masterclasses">
    <meta property="twitter:description" content="Register for Four Masterclasses. Rated 4.79/5 by 353 educators. ₹2,999 — Save 50%. August–November 2026.">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://aim.ipnacademy.in/workshop-series.php">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/workshop-series.css?v=3.2">
</head>

<body class="ws-page">

    <!-- ============================================================
         FULL-PAGE INTERACTIVE PARTICLE NETWORK CANVAS
         ============================================================ -->
    <canvas id="particle-canvas" class="ws-particle-canvas"></canvas>

    <!-- ============================================================
         GLOBAL DOT GRID OVERLAY
         ============================================================ -->
    <div class="ws-grid-overlay"></div>

    <!-- ============================================================
         NAVIGATION
         ============================================================ -->
    <nav class="ws-nav" id="ws-nav">
        <a href="index.php" class="ws-nav__logo">
            <img src="assets/img/logo/logo-white.png" alt="Mission AIM">
        </a>
        <div class="ws-nav__links">
            <a href="index.php" class="ws-nav__link">Home</a>
            <a href="about.php" class="ws-nav__link">About</a>
            <a href="#workshops" class="ws-nav__link">Workshops</a>
            <a href="#trainers" class="ws-nav__link">Trainers</a>
            <a href="#faq" class="ws-nav__link">FAQ</a>
            <a href="<?php echo htmlspecialchars($aim_series['payment_url']); ?>" target="_blank" class="ws-btn ws-btn--primary" id="nav-enrol-btn">
                Enrol Now <i class="far fa-arrow-right"></i>
            </a>
        </div>
        <button class="ws-nav__toggle" id="nav-toggle" aria-label="Toggle navigation">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="ws-hamburger-svg">
                <line x1="4" y1="6" x2="20" y2="6" class="ws-line ws-line--top"></line>
                <line x1="4" y1="12" x2="20" y2="12" class="ws-line ws-line--middle"></line>
                <line x1="4" y1="18" x2="20" y2="18" class="ws-line ws-line--bottom"></line>
            </svg>
        </button>
    </nav>

    <div class="ws-page-wrapper">

    <!-- ============================================================
         HERO SECTION
         ============================================================ -->
    <section class="ws-hero ws-hero--grand" id="hero">
        <div class="ws-hero__atmosphere" aria-hidden="true"></div>
        <div class="ws-hero__veil" aria-hidden="true"></div>

        <div class="ws-aurora">
            <div class="ws-aurora__ribbon ws-aurora__ribbon--1"></div>
            <div class="ws-aurora__ribbon ws-aurora__ribbon--2"></div>
            <div class="ws-aurora__ribbon ws-aurora__ribbon--3"></div>
        </div>
        <div class="ws-blob ws-blob--1"></div>
        <div class="ws-blob ws-blob--2"></div>
        <div class="ws-blob ws-blob--3"></div>

        <div class="ws-floating-logo-container">
            <?php
            $logo_dir = 'assets/img/ai_company_logo';
            $logos = [];
            if (is_dir($logo_dir)) {
                foreach (scandir($logo_dir) as $file) {
                    if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                        $logos[] = $file;
                    }
                }
            }
            $positions = [
                ['top' => '16%', 'left' => '5%',   'size' => '70px', 'anim' => 1],
                ['top' => '20%', 'right' => '6%',  'size' => '66px', 'anim' => 2],
                ['top' => '42%', 'left' => '8%',   'size' => '74px', 'anim' => 3],
                ['top' => '48%', 'right' => '8%',  'size' => '64px', 'anim' => 4],
                ['top' => '70%', 'left' => '7%',   'size' => '66px', 'anim' => 5],
                ['top' => '74%', 'right' => '7%',  'size' => '68px', 'anim' => 6],
                ['top' => '30%', 'left' => '18%',  'size' => '58px', 'anim' => 7],
                ['top' => '28%', 'right' => '18%', 'size' => '60px', 'anim' => 8],
            ];
            foreach ($logos as $idx => $logo) {
                if (!isset($positions[$idx])) continue;
                $pos = $positions[$idx];
                $style = "top: {$pos['top']}; width: {$pos['size']}; height: {$pos['size']};";
                $style .= isset($pos['left']) ? " left: {$pos['left']};" : " right: {$pos['right']};";
                $cleanName = ucwords(str_replace(['-logo', '-app', '-free', '_svgstack_com', '_', '-'], [' ', '', '', '', ' ', ' '], pathinfo($logo, PATHINFO_FILENAME)));
                $cleanName = trim(preg_replace('/[0-9]+|svg/i', '', $cleanName));
                if ($cleanName === 'Black Xai') $cleanName = 'xAI';
                if ($cleanName === 'Mistral Ai Logo') $cleanName = 'Mistral AI';
                echo '<div class="ws-floating-logo-badge ws-float-anim-' . $pos['anim'] . '" style="' . $style . '" title="' . htmlspecialchars($cleanName) . '">';
                echo '<img src="' . $logo_dir . '/' . htmlspecialchars($logo) . '" alt="' . htmlspecialchars($cleanName) . '">';
                echo '</div>';
            }
            ?>
        </div>

        <div class="ws-container">
            <div class="ws-hero__content ws-fade-up">
                <div class="ws-hero__badge">
                    <i class="fas fa-bolt"></i> IPN Mission AIM — Workshop Series
                </div>

                <div class="ws-hero__rating">
                    <div class="ws-hero__rating-score"><?php echo number_format($hero_rating, 2); ?>/5</div>
                    <div class="ws-hero__rating-stars" aria-hidden="true">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="ws-hero__rating-label">Rated by <?php echo number_format($aim_series['rating_count']); ?> Educators</div>
                </div>

                <h1 class="ws-hero__title">
                    <span class="ws-gradient-text">Join the AI Revolution</span><br>
                    in Education
                </h1>

                <p class="ws-hero__subtitle">
                    Master AI tools, lesson planning, assessments, content creation, and classroom innovation through our exclusive AI Masterclass Series — <?php echo $aim_series['remaining_workshops']; ?> power-packed sessions remaining.
                </p>

                <p class="ws-countdown__heading">
                    <i class="far fa-calendar-alt"></i> Next Masterclass · <?php
                        $next_ws = null;
                        foreach ($workshops as $w) {
                            if (empty($w['past'])) { $next_ws = $w; break; }
                        }
                        echo htmlspecialchars($next_ws['date'] ?? 'TBA');
                    ?>
                </p>

                <div class="ws-countdown" id="countdown">
                    <div class="ws-countdown__item">
                        <span class="ws-countdown__number" id="countdown-days">00</span>
                        <span class="ws-countdown__label">Days</span>
                    </div>
                    <div class="ws-countdown__item">
                        <span class="ws-countdown__number" id="countdown-hours">00</span>
                        <span class="ws-countdown__label">Hours</span>
                    </div>
                    <div class="ws-countdown__item">
                        <span class="ws-countdown__number" id="countdown-mins">00</span>
                        <span class="ws-countdown__label">Mins</span>
                    </div>
                    <div class="ws-countdown__item">
                        <span class="ws-countdown__number" id="countdown-secs">00</span>
                        <span class="ws-countdown__label">Secs</span>
                    </div>
                </div>

                <div class="ws-hero__price">
                    <span class="ws-hero__price-current"><?php echo ws_format_price($aim_series['price']); ?></span>
                    <span class="ws-hero__price-original"><?php echo ws_format_price($aim_series['original_price']); ?></span>
                    <span class="ws-hero__price-badge">
                        <i class="fas fa-tag"></i> Save <?php echo ws_format_price($aim_series['savings']); ?> | <?php echo $aim_series['discount_pct']; ?>% OFF
                    </span>
                </div>

                <a href="<?php echo htmlspecialchars($aim_series['payment_url']); ?>" target="_blank" class="ws-btn ws-btn--primary ws-btn--hero" id="hero-enrol-btn">
                    <i class="fas fa-rocket"></i> Register for <strong>Four</strong> Masterclasses
                </a>

                <p class="ws-hero__note">
                    <i class="fas fa-info-circle"></i> Register for the <?php echo $aim_series['remaining_workshops']; ?> remaining Masterclasses with <?php echo $aim_series['discount_pct']; ?>% discount. Individual workshops not available separately.
                </p>
            </div>
        </div>
    </section>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         TRUST MARQUEE
         ============================================================ -->
    <div class="ws-marquee">
        <div class="ws-marquee__track">
            <div class="ws-marquee__item"><i class="fas fa-chalkboard-teacher"></i> 30,000+ Teachers Trained</div>
            <div class="ws-marquee__item"><i class="fas fa-school"></i> 10,000+ Schools Impacted</div>
            <div class="ws-marquee__item"><i class="fas fa-globe-asia"></i> South Asia's #1 Teacher Platform</div>
            <div class="ws-marquee__item"><i class="fas fa-certificate"></i> IPN Foundation Certified</div>
            <div class="ws-marquee__item"><i class="fas fa-star"></i> Rated <?php echo number_format($hero_rating, 2); ?>/5 by <?php echo number_format($aim_series['rating_count']); ?> Educators</div>
            <div class="ws-marquee__item"><i class="fas fa-calendar-alt"></i> <?php echo $aim_series['remaining_workshops']; ?> Masterclasses | <?php echo htmlspecialchars($aim_series['period']); ?></div>
            <div class="ws-marquee__item"><i class="fas fa-laptop"></i> Live Online Sessions</div>
            <!-- Duplicate for seamless scroll -->
            <div class="ws-marquee__item"><i class="fas fa-chalkboard-teacher"></i> 30,000+ Teachers Trained</div>
            <div class="ws-marquee__item"><i class="fas fa-school"></i> 10,000+ Schools Impacted</div>
            <div class="ws-marquee__item"><i class="fas fa-globe-asia"></i> South Asia's #1 Teacher Platform</div>
            <div class="ws-marquee__item"><i class="fas fa-certificate"></i> IPN Foundation Certified</div>
            <div class="ws-marquee__item"><i class="fas fa-star"></i> Rated <?php echo number_format($hero_rating, 2); ?>/5 by <?php echo number_format($aim_series['rating_count']); ?> Educators</div>
            <div class="ws-marquee__item"><i class="fas fa-calendar-alt"></i> <?php echo $aim_series['remaining_workshops']; ?> Masterclasses | <?php echo htmlspecialchars($aim_series['period']); ?></div>
            <div class="ws-marquee__item"><i class="fas fa-laptop"></i> Live Online Sessions</div>
        </div>
    </div>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         ABOUT THE PROGRAMME
         ============================================================ -->
    <section class="ws-section ws-about ws-bg-light-section" id="about">
        <!-- Section floating blob -->
        <div class="ws-blob ws-blob--section" style="top: 20%; right: -10%; background: radial-gradient(circle, rgba(94,184,168,0.14), transparent 70%);"></div>
        
        <!-- Floating AI Logos in About Section -->
        <div class="ws-floating-logo-badge ws-float-anim-1" style="top: 25%; right: 5%; width: 50px; height: 50px;" title="ChatGPT">
            <img src="assets/img/ai_company_logo/chatgpt-logo_svgstack_com_36931779394623.svg" alt="ChatGPT Logo">
        </div>
        <div class="ws-floating-logo-badge ws-float-anim-2" style="bottom: 10%; left: 5%; width: 45px; height: 45px;" title="Claude">
            <img src="assets/img/ai_company_logo/claude-logo_svgstack_com_36971779394505.svg" alt="Claude AI Logo">
        </div>
        <div class="ws-container">
            <div class="ws-about__grid">
                <div class="ws-fade-left">
                    <span class="ws-section-label">About the Programme</span>
                    <h2 class="ws-section-title">
                        Seamlessly Integrate <span class="ws-gradient-text">AI</span> into Modern Classrooms
                    </h2>
                    <p class="ws-section-subtitle">
                        IPN Mission AIM is a bold national initiative to empower 1 Million educators by seamlessly integrating Artificial Intelligence into modern classrooms. Designed by IPN Foundation — South Asia's leading teacher development platform — this programme equips teachers with practical AI tools, real classroom strategies, and ethical frameworks to enhance learning outcomes and prepare students for a technology-driven future.
                    </p>
                </div>
                <div class="ws-about__highlights ws-stagger ws-fade-right">
                    <div class="ws-highlight-card">
                        <div class="ws-highlight-card__icon"><i class="fas fa-tools" style="color: var(--ws-accent-blue);"></i></div>
                        <div class="ws-highlight-card__title">Practical AI Tools</div>
                        <div class="ws-highlight-card__text">Hands-on with tools you can use from Day 1</div>
                    </div>
                    <div class="ws-highlight-card">
                        <div class="ws-highlight-card__icon"><i class="fas fa-chalkboard" style="color: var(--ws-accent-purple);"></i></div>
                        <div class="ws-highlight-card__title">Classroom Strategies</div>
                        <div class="ws-highlight-card__text">Real-world integration across all subjects</div>
                    </div>
                    <div class="ws-highlight-card">
                        <div class="ws-highlight-card__icon"><i class="fas fa-shield-alt" style="color: var(--ws-accent-green);"></i></div>
                        <div class="ws-highlight-card__title">Ethical Frameworks</div>
                        <div class="ws-highlight-card__text">Responsible AI use in academic settings</div>
                    </div>
                    <div class="ws-highlight-card">
                        <div class="ws-highlight-card__icon"><i class="fas fa-award" style="color: var(--ws-accent-orange);"></i></div>
                        <div class="ws-highlight-card__title">Certificate</div>
                        <div class="ws-highlight-card__text">IPN Mission AIM Completion Certificate</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         PRICING CARD
         ============================================================ -->
    <section class="ws-section ws-pricing ws-bg-light-section" id="pricing">
        <!-- Section floating blob -->
        <div class="ws-blob ws-blob--section" style="top: 30%; left: -8%; background: radial-gradient(circle, rgba(91,168,200,0.12), transparent 70%);"></div>
        <div class="ws-container">
            <div class="ws-pricing-card ws-fade-up">
                <div class="ws-pricing-card__label">
                    <i class="fas fa-fire"></i> Limited Seats Available
                </div>
                <h3 class="ws-pricing-card__title"><strong><?php echo $aim_series['remaining_workshops']; ?></strong> Remaining Masterclasses</h3>

                <div class="ws-pricing-card__original">
                    <span>Individual Value</span>
                    <?php echo ws_format_price($aim_series['original_price']); ?>
                </div>

                <div class="ws-pricing-card__price"><?php echo ws_format_price($aim_series['price']); ?></div>

                <div class="ws-pricing-card__savings">
                    <span>Save <?php echo ws_format_price($aim_series['savings']); ?></span>
                    <div class="divider"></div>
                    <span><?php echo $aim_series['discount_pct']; ?>% OFF!</span>
                </div>

                <a href="<?php echo htmlspecialchars($aim_series['payment_url']); ?>" target="_blank" class="ws-btn ws-btn--primary" id="pricing-enrol-btn">
                    <i class="fas fa-paper-plane"></i> Register for <strong>Four</strong> Masterclasses
                </a>

                <div class="ws-pricing-card__note">
                    📌 <strong>Kind Note:</strong> Enrol for the <?php echo $aim_series['remaining_workshops']; ?> remaining Masterclasses at <?php echo $aim_series['discount_pct']; ?>% discount. Individual workshop registrations are not available.
                </div>
            </div>
        </div>
    </section>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         6-WORKSHOP TIMELINE
         ============================================================ -->
    <section class="ws-section ws-timeline ws-bg-dark-section" id="workshops">
        <!-- Section floating blob -->
        <div class="ws-blob ws-blob--section" style="bottom: 10%; right: -5%; background: radial-gradient(circle, rgba(255,107,53,0.08), transparent 70%);"></div>
        <div class="ws-container">
            <div class="text-center ws-fade-up" style="margin-bottom: 40px;">
                <span class="ws-section-label">Workshop Schedule</span>
                <h2 class="ws-section-title"><?php echo $aim_series['remaining_workshops']; ?> Power-Packed Masterclasses</h2>
                <p class="ws-section-subtitle centered"><?php echo htmlspecialchars($aim_series['period']); ?></p>
            </div>
        </div>

        <div class="ws-slider-wrapper ws-fade-up">
            <div class="ws-slider-track">
                <?php 
                // Loop 1 for seamless infinite marquee scroll
                foreach ($workshops as $wId => $wItem): 
                    ws_render_slider_card($wId, $wItem);
                endforeach; 

                // Loop 2 (identical clone) for seamless infinite marquee scroll
                foreach ($workshops as $wId => $wItem): 
                    ws_render_slider_card($wId, $wItem);
                endforeach; 
                ?>
            </div>
        </div>
    </section>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         WHAT YOU WALK AWAY WITH
         ============================================================ -->
    <section class="ws-section ws-takeaways ws-bg-light-section" id="takeaways">
        <div class="ws-blob ws-blob--section" style="top: 40%; left: -10%; background: radial-gradient(circle, rgba(94,184,168,0.1), transparent 70%);"></div>
        <div class="ws-container">
            <div class="text-center ws-fade-up">
                <span class="ws-section-label">Takeaways</span>
                <h2 class="ws-section-title">What You Walk Away With</h2>
            </div>

            <div class="ws-takeaways__grid ws-stagger">
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-tools" style="color: var(--ws-accent-blue);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Practical, classroom-ready AI tools from Day 1</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-file-alt" style="color: var(--ws-accent-purple);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Ready-to-use AI-powered lesson plans across subjects</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-shield-alt" style="color: var(--ws-accent-green);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Ethical frameworks for responsible AI integration</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-star" style="color: var(--ws-accent-orange);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Confidence to lead AI transformation in your school</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-certificate" style="color: var(--ws-accent-purple);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Certificate of Completion from IPN Mission AIM</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-terminal" style="color: var(--ws-accent-blue);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Customizable AI prompt templates optimized for teachers</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-globe" style="color: var(--ws-accent-green);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Access to South Asia's largest network of AI educators</div>
                </div>
                <div class="ws-takeaway-card">
                    <div class="ws-takeaway-card__icon">
                        <i class="fas fa-download" style="color: var(--ws-accent-orange);"></i>
                    </div>
                    <div class="ws-takeaway-card__title">Resource toolkit containing templates, checklists & guides</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         EDUCATOR REVIEWS — after takeaways
         ============================================================ -->
    <section class="ws-section ws-reviews-section ws-bg-dark-section" id="testimonials" aria-label="Educator testimonials">
        <div class="ws-container ws-fade-up">
            <div class="ws-reviews-section__head text-center">
                <span class="ws-section-label">Educator Voices</span>
                <h2 class="ws-section-title">What Teachers Are Saying</h2>
                <p class="ws-section-subtitle centered">Real feedback from educators who joined the first Mission AIM Masterclass.</p>
            </div>
        </div>

        <div class="ws-reviews-flow__mask">
            <?php echo aim_render_review_marquee_row($review_rows[0], 'right', 46); ?>
            <?php echo aim_render_review_marquee_row($review_rows[1], 'left', 40); ?>
            <?php echo aim_render_review_marquee_row($review_rows[2], 'right', 52); ?>
        </div>
    </section>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         PROGRAMME OBJECTIVES
         ============================================================ -->
    <section class="ws-section ws-objectives ws-bg-light-section" id="objectives">
        <div class="ws-container">
            <div class="text-center ws-fade-up">
                <span class="ws-section-label">Programme Objectives</span>
                <h2 class="ws-section-title">Why This Programme Matters</h2>
            </div>

            <div class="ws-objectives__grid ws-stagger">
                <div class="ws-objective-card">
                    <div class="ws-objective-card__icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <div class="ws-objective-card__title">Build awareness about AI and its transformative role in education</div>
                </div>
                <div class="ws-objective-card">
                    <div class="ws-objective-card__icon">
                        <i class="fas fa-magic"></i>
                    </div>
                    <div class="ws-objective-card__title">Enable educators to design engaging and personalized learning experiences</div>
                </div>
                <div class="ws-objective-card">
                    <div class="ws-objective-card__icon">
                        <i class="fas fa-user-shield"></i>
                    </div>
                    <div class="ws-objective-card__title">Promote ethical and responsible use of AI in academic environments</div>
                </div>
                <div class="ws-objective-card">
                    <div class="ws-objective-card__icon">
                        <i class="fas fa-puzzle-piece"></i>
                    </div>
                    <div class="ws-objective-card__title">Enhance students' critical thinking, creativity, and problem-solving skills</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Glowing section divider -->
    <div class="ws-divider"></div>

    <!-- ============================================================
         MEET YOUR MASTER TRAINERS
         ============================================================ -->
    <section class="ws-section ws-trainers ws-bg-dark-section" id="trainers">
        <div class="ws-blob ws-blob--section" style="top: 20%; right: -8%; background: radial-gradient(circle, rgba(91,168,200,0.12), transparent 70%);"></div>
        <div class="ws-container">
            <div class="text-center ws-fade-up">
                <span class="ws-section-label">Expert Facilitators</span>
                <h2 class="ws-section-title">Meet Your <span class="ws-gradient-text">Master Trainers</span></h2>
                <p class="ws-section-subtitle centered">
                    This series is facilitated by two distinguished AI practitioners with decades of transformative experience in education, technology, and school leadership.
                </p>
            </div>

            <div class="ws-trainers__grid">
                <!-- Trainer 1: Ms. Sonia Wadhwa -->
                <div class="ws-trainer-card ws-fade-left">
                    <div class="ws-trainer-card__avatar">
                        <img src="https://api.ipnacademy.in/storage/app/public/img/trainer/2IlBj7J7m5I2Rhgj9KgFdXwMP3vxALLbFRSG4cnK.png" alt="Ms. Sonia Wadhwa">
                    </div>
                    <h3 class="ws-trainer-card__name">Ms. Sonia Wadhwa</h3>
                    <p class="ws-trainer-card__role">AI Practitioner & Education Technology Leader</p>
                    <div class="ws-trainer-card__badges">
                        <span><i class="fas fa-globe" style="margin-right:4px;"></i> 1 of 40 Bett Worldwide Leaders</span>
                        <span><i class="fab fa-microsoft" style="margin-right:4px;"></i> Microsoft Trainer</span>
                        <span><i class="fas fa-palette" style="margin-right:4px;"></i> Adobe Education Leader</span>
                        <span><i class="fas fa-bookmark" style="margin-right:4px;"></i> Wakelet Leader</span>
                    </div>
                    <p class="ws-trainer-card__bio">
                        With 27 years of experience spanning CBSE, CISCE, Cambridge, and MP State Board curricula. Specialist in Mathematics, ICT, AI, and Computer Science. Trained over <strong>15,000+ educators</strong> and <strong>5,000+ teachers</strong> nationwide. Author of ICSE Mathematics and CBSE AI textbooks. Research paper on Co-authoring Content with AI selected for Singapore. Invited Judge for Bett Asia Awards, Malaysia (Oct 2026).
                    </p>
                </div>

                <!-- Trainer 2: Ms. M S Saha -->
                <div class="ws-trainer-card ws-fade-right">
                    <div class="ws-trainer-card__avatar">
                        <img src="https://api.ipnacademy.in/storage/app/public/img/trainer/bmUY3dRogKmKyqpqEJsmL2Scy6uuxddXYxdtO9ar.png" alt="Ms. M S Saha">
                    </div>
                    <h3 class="ws-trainer-card__name">Ms. M S Saha</h3>
                    <p class="ws-trainer-card__role">Award-Winning School Leader | Research Scholar | Educator</p>
                    <div class="ws-trainer-card__badges">
                        <span><i class="fas fa-trophy" style="margin-right:4px;"></i> India's Most Impactful School Leader 2024</span>
                        <span><i class="fas fa-graduation-cap" style="margin-right:4px;"></i> IIM Calcutta & IIM Ahmedabad Alumna</span>
                        <span><i class="fas fa-medal" style="margin-right:4px;"></i> CENTA Olympiad Rank 2 (Physics)</span>
                    </div>
                    <p class="ws-trainer-card__bio">
                        A dynamic education leader with nearly three decades of experience in schools, teacher training, and educational research. Represented India at <strong>EduTech Asia (Singapore)</strong>. Published acclaimed case studies with IIM faculty, including one for the Capacity Building Commission, Government of India. Expertise in AI-powered instructional design and future-ready school leadership.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         FAQ
         ============================================================ -->
    <section class="ws-section ws-faq ws-bg-light-section" id="faq">
        <div class="ws-container">
            <div class="text-center ws-fade-up">
                <span class="ws-section-label">FAQ</span>
                <h2 class="ws-section-title">Frequently Asked Questions</h2>
            </div>

            <div class="ws-faq__list">
                <div class="ws-faq__item active">
                    <button class="ws-faq__question" id="faq-q1">
                        <span>Can I register for individual workshops?</span>
                        <span class="ws-faq__icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="ws-faq__answer">
                        <div class="ws-faq__answer-inner">
                            For the best learning experience, Mission AIM is offered as a package of the <?php echo $aim_series['remaining_workshops']; ?> remaining Masterclasses. Individual workshop registrations are not available. Each session builds on the previous one, ensuring a comprehensive AI integration journey.
                        </div>
                    </div>
                </div>

                <div class="ws-faq__item">
                    <button class="ws-faq__question" id="faq-q2">
                        <span>What is the mode of delivery?</span>
                        <span class="ws-faq__icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="ws-faq__answer">
                        <div class="ws-faq__answer-inner">
                            All remaining Masterclasses are conducted as live online sessions. You'll get interactive, hands-on experience with direct access to the master trainers for Q&A and personalized guidance.
                        </div>
                    </div>
                </div>

                <div class="ws-faq__item">
                    <button class="ws-faq__question" id="faq-q3">
                        <span>Do I need any prior AI knowledge?</span>
                        <span class="ws-faq__icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="ws-faq__answer">
                        <div class="ws-faq__answer-inner">
                            No prior AI knowledge is required. The programme is designed for educators of all levels — from beginners to those who have already started exploring AI tools. The series progressively builds your skills from lesson openings to responsible AI use.
                        </div>
                    </div>
                </div>

                <div class="ws-faq__item">
                    <button class="ws-faq__question" id="faq-q4">
                        <span>Will I get recordings if I miss a session?</span>
                        <span class="ws-faq__icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="ws-faq__answer">
                        <div class="ws-faq__answer-inner">
                            Yes, recordings of each workshop will be made available to registered participants. However, we highly recommend attending the live sessions for the interactive learning experience and hands-on practice.
                        </div>
                    </div>
                </div>

                <div class="ws-faq__item">
                    <button class="ws-faq__question" id="faq-q5">
                        <span>Who is this programme for?</span>
                        <span class="ws-faq__icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="ws-faq__answer">
                        <div class="ws-faq__answer-inner">
                            This programme is ideal for school teachers, educators, curriculum designers, school leaders, and principals who want to integrate AI into their teaching methodology. It covers subjects across STEM, numeracy, languages, and experiential learning.
                        </div>
                    </div>
                </div>

                <div class="ws-faq__item">
                    <button class="ws-faq__question" id="faq-q6">
                        <span>What certificate will I receive?</span>
                        <span class="ws-faq__icon"><i class="fas fa-plus"></i></span>
                    </button>
                    <div class="ws-faq__answer">
                        <div class="ws-faq__answer-inner">
                            Upon completing all <?php echo $aim_series['remaining_workshops']; ?> Masterclasses, you'll receive a Certificate of Completion from IPN Mission AIM, recognized by IPN Foundation — South Asia's leading teacher development platform.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ============================================================
         FINAL CTA
         ============================================================ -->
    <section class="ws-section ws-final-cta ws-bg-dark-section">
        <div class="ws-container ws-fade-up">
            <span class="ws-section-label">Ready to Transform?</span>
            <h2 class="ws-section-title">Lead the AI Revolution<br>in Your Classroom</h2>

            <div class="ws-final-cta__price">
                <span class="ws-hero__price-current"><?php echo ws_format_price($aim_series['price']); ?></span>
                <span class="ws-hero__price-original"><?php echo ws_format_price($aim_series['original_price']); ?></span>
                <span class="ws-hero__price-badge">
                    <i class="fas fa-tag"></i> Save <?php echo ws_format_price($aim_series['savings']); ?> | <?php echo $aim_series['discount_pct']; ?>% OFF
                </span>
            </div>

            <p class="ws-final-cta__details">
                <strong><?php echo $aim_series['remaining_workshops']; ?> Masterclasses</strong> &nbsp;|&nbsp; <?php echo htmlspecialchars($aim_series['period']); ?> &nbsp;|&nbsp; Live Online
            </p>

            <a href="<?php echo htmlspecialchars($aim_series['payment_url']); ?>" target="_blank" class="ws-btn ws-btn--primary" id="final-enrol-btn">
                <i class="fas fa-paper-plane"></i> Register for <strong>Four</strong> Masterclasses
            </a>

            <p class="ws-hero__note" style="margin-top: 20px;">
                📌 Enrol for the <?php echo $aim_series['remaining_workshops']; ?> remaining Masterclasses with <?php echo $aim_series['discount_pct']; ?>% discount. Individual registrations are not available.
            </p>

            <div class="ws-contact-strip" style="margin-top: 40px;">
                <span><i class="fas fa-envelope" style="margin-right: 6px;"></i> <a href="mailto:aim@ipnacademy.in">aim@ipnacademy.in</a></span>
                <span><i class="fas fa-globe" style="margin-right: 6px;"></i> <a href="https://aim.ipnacademy.in" target="_blank">www.aim.ipnacademy.in</a></span>
                <span><i class="fas fa-phone-alt" style="margin-right: 6px;"></i> <a href="tel:+917268973339">+91 72689 73339</a></span>
            </div>
        </div>
    </section>

    <!-- ============================================================
         STICKY BOTTOM BAR
         ============================================================ -->
    <!-- ============================================================
         FOOTER (from existing site)
         ============================================================ -->
    <footer class="tp-footer-main-area p-relative" style="background: var(--ws-bg-dark-deep);">
        <div class="ws-container">
            <div style="padding: 40px 0; text-align: center; border-top: 1px solid rgba(255,255,255,0.08);">
                <a href="index.php" style="display: inline-block; margin-bottom: 20px;">
                    <img src="assets/img/logo/logo-white.png" alt="Mission AIM" style="height: 40px; opacity: 0.7;">
                </a>
                <p style="color: rgba(255,255,255,0.3); font-size: 0.8rem; margin: 0;">
                    © <?php echo date('Y'); ?> IPN Mission AIM. All Rights Reserved. | Powered by IPN Foundation
                </p>
            </div>
        </div>
    </footer>

    </div> <!-- .ws-page-wrapper -->

    <!-- ============================================================
         STICKY BOTTOM BAR
         ============================================================ -->
    <div class="ws-sticky-bar" id="sticky-bar">
        <div class="ws-sticky-bar__info-group">
            <div class="ws-sticky-bar__badge-row">
                <span class="ws-sticky-bar__badge"><i class="fas fa-graduation-cap"></i> <strong><?php echo $aim_series['remaining_workshops']; ?></strong> Masterclasses</span>
                <span class="ws-sticky-bar__discount"><i class="fas fa-tag"></i> <?php echo $aim_series['discount_pct']; ?>% OFF</span>
            </div>
            <div class="ws-sticky-bar__price">
                <span class="ws-sticky-bar__current"><?php echo ws_format_price($aim_series['price']); ?></span>
                <span class="ws-sticky-bar__original"><?php echo ws_format_price($aim_series['original_price']); ?></span>
            </div>
        </div>
        <a href="<?php echo htmlspecialchars($aim_series['payment_url']); ?>" target="_blank" class="ws-btn ws-btn--primary" id="sticky-enrol-btn">
            <i class="fas fa-paper-plane"></i> Register for <strong>Four</strong> Masterclasses
        </a>
    </div>

    <!-- ============================================================
         SCRIPTS
         ============================================================ -->
    <script>
    (function() {
        'use strict';

        // ============================================================
        // INTERACTIVE PARTICLE NETWORK CANVAS
        // Neural-network style dots with connecting lines + mouse interaction
        // ============================================================
        var canvas = document.getElementById('particle-canvas');
        var ctx = canvas.getContext('2d');
        var particles = [];
        var mouse = { x: null, y: null, radius: 150 };
        var particleCount = 80;
        var maxDist = 120;
        var colors = [
            'rgba(94, 184, 168, 0.55)',  // soft teal
            'rgba(255, 184, 0, 0.55)',   // gold
            'rgba(91, 168, 200, 0.45)',  // cool blue
            'rgba(62, 207, 154, 0.4)'    // mint
        ];

        function resizeCanvas() {
            canvas.width = window.innerWidth;
            canvas.height = document.documentElement.scrollHeight;
        }
        resizeCanvas();
        window.addEventListener('resize', resizeCanvas);

        // Re-calc canvas height on scroll (for dynamic content)
        var resizeDebounce;
        window.addEventListener('scroll', function() {
            clearTimeout(resizeDebounce);
            resizeDebounce = setTimeout(function() {
                var newH = document.documentElement.scrollHeight;
                if (Math.abs(canvas.height - newH) > 100) {
                    canvas.height = newH;
                    initParticles();
                }
            }, 500);
        }, { passive: true });

        function Particle() {
            this.x = Math.random() * canvas.width;
            this.y = Math.random() * canvas.height;
            this.size = Math.random() * 2.5 + 0.5;
            this.baseSize = this.size;
            this.speedX = (Math.random() - 0.5) * 0.4;
            this.speedY = (Math.random() - 0.5) * 0.4;
            this.color = colors[Math.floor(Math.random() * colors.length)];
            this.opacity = Math.random() * 0.5 + 0.2;
        }

        Particle.prototype.update = function() {
            this.x += this.speedX;
            this.y += this.speedY;

            // Wrap around edges
            if (this.x > canvas.width + 10) this.x = -10;
            if (this.x < -10) this.x = canvas.width + 10;
            if (this.y > canvas.height + 10) this.y = -10;
            if (this.y < -10) this.y = canvas.height + 10;

            // Mouse interaction — grow near cursor
            if (mouse.x !== null) {
                var dx = mouse.x - this.x;
                var dy = (mouse.y + window.scrollY) - this.y;
                var dist = Math.sqrt(dx * dx + dy * dy);
                if (dist < mouse.radius) {
                    this.size = this.baseSize + 3 * (1 - dist / mouse.radius);
                } else {
                    this.size = this.baseSize;
                }
            }
        };

        Particle.prototype.draw = function() {
            ctx.beginPath();
            ctx.arc(this.x, this.y, this.size, 0, Math.PI * 2);
            ctx.fillStyle = this.color;
            ctx.globalAlpha = this.opacity;
            ctx.fill();
            ctx.globalAlpha = 1;
        };

        function initParticles() {
            particles = [];
            var count = Math.min(particleCount, Math.floor((canvas.width * canvas.height) / 15000));
            for (var i = 0; i < count; i++) {
                particles.push(new Particle());
            }
        }
        initParticles();

        function connectParticles() {
            // Only draw lines for particles visible in viewport
            var scrollY = window.scrollY;
            var viewTop = scrollY - 50;
            var viewBottom = scrollY + window.innerHeight + 50;

            for (var a = 0; a < particles.length; a++) {
                if (particles[a].y < viewTop || particles[a].y > viewBottom) continue;
                for (var b = a + 1; b < particles.length; b++) {
                    if (particles[b].y < viewTop || particles[b].y > viewBottom) continue;
                    var dx = particles[a].x - particles[b].x;
                    var dy = particles[a].y - particles[b].y;
                    var dist = Math.sqrt(dx * dx + dy * dy);
                    if (dist < maxDist) {
                        var opacity = 0.08 * (1 - dist / maxDist);
                        ctx.beginPath();
                        ctx.strokeStyle = 'rgba(94, 184, 168, ' + opacity + ')'; // Teal lines
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[a].x, particles[a].y);
                        ctx.lineTo(particles[b].x, particles[b].y);
                        ctx.stroke();
                    }
                }

                // Lines to mouse
                if (mouse.x !== null) {
                    var mdx = particles[a].x - mouse.x;
                    var mdy = particles[a].y - (mouse.y + scrollY);
                    var mDist = Math.sqrt(mdx * mdx + mdy * mdy);
                    if (mDist < mouse.radius) {
                        var mOpacity = 0.15 * (1 - mDist / mouse.radius);
                        ctx.beginPath();
                        ctx.strokeStyle = 'rgba(255, 184, 0, ' + mOpacity + ')'; // Gold lines
                        ctx.lineWidth = 0.8;
                        ctx.moveTo(particles[a].x, particles[a].y);
                        ctx.lineTo(mouse.x, mouse.y + scrollY);
                        ctx.stroke();
                    }
                }
            }
        }

        function animateParticles() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            for (var i = 0; i < particles.length; i++) {
                particles[i].update();
                particles[i].draw();
            }
            connectParticles();
            requestAnimationFrame(animateParticles);
        }
        animateParticles();

        window.addEventListener('mousemove', function(e) {
            mouse.x = e.clientX;
            mouse.y = e.clientY;
        });
        window.addEventListener('mouseleave', function() {
            mouse.x = null;
            mouse.y = null;
        });

        // ============================================================
        // COUNTDOWN TIMER
        // ============================================================
        var targetDate = new Date('<?php echo $aim_series['countdown_target']; ?>').getTime();

        function updateCountdown() {
            var now = new Date().getTime();
            var diff = targetDate - now;

            if (diff <= 0) {
                document.getElementById('countdown-days').textContent = '00';
                document.getElementById('countdown-hours').textContent = '00';
                document.getElementById('countdown-mins').textContent = '00';
                document.getElementById('countdown-secs').textContent = '00';
                return;
            }

            var days = Math.floor(diff / (1000 * 60 * 60 * 24));
            var hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var mins = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
            var secs = Math.floor((diff % (1000 * 60)) / 1000);

            document.getElementById('countdown-days').textContent = String(days).padStart(2, '0');
            document.getElementById('countdown-hours').textContent = String(hours).padStart(2, '0');
            document.getElementById('countdown-mins').textContent = String(mins).padStart(2, '0');
            document.getElementById('countdown-secs').textContent = String(secs).padStart(2, '0');
        }
        updateCountdown();
        setInterval(updateCountdown, 1000);

        // ============================================================
        // SCROLL ANIMATIONS (IntersectionObserver)
        // ============================================================
        var animatedElements = document.querySelectorAll('.ws-fade-up, .ws-fade-left, .ws-fade-right, .ws-stagger');

        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15,
            rootMargin: '0px 0px -50px 0px'
        });

        animatedElements.forEach(function(el) {
            observer.observe(el);
        });



        // ============================================================
        // FAQ ACCORDION
        // ============================================================
        var faqItems = document.querySelectorAll('.ws-faq__item');

        faqItems.forEach(function(item) {
            var question = item.querySelector('.ws-faq__question');
            question.addEventListener('click', function() {
                var isActive = item.classList.contains('active');
                faqItems.forEach(function(faq) { faq.classList.remove('active'); });
                if (!isActive) item.classList.add('active');
            });
        });

        // ============================================================
        // SMOOTH SCROLL
        // ============================================================
        document.querySelectorAll('.ws-nav__link[href^="#"]').forEach(function(anchor) {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                var targetId = this.getAttribute('href');
                var target = document.querySelector(targetId);
                if (target) {
                    var navHeight = document.getElementById('ws-nav').offsetHeight;
                    var targetPos = target.getBoundingClientRect().top + window.pageYOffset - navHeight - 20;
                    window.scrollTo({ top: targetPos, behavior: 'smooth' });
                }
            });
        });

        // ============================================================
        // NAV GLASS EFFECT ON SCROLL
        // ============================================================
        var nav = document.getElementById('ws-nav');
        window.addEventListener('scroll', function() {
            if (window.scrollY > 80) {
                nav.classList.add('ws-nav--scrolled');
            } else {
                nav.classList.remove('ws-nav--scrolled');
            }
        }, { passive: true });

        // ============================================================
        // STICKY BAR — show only after hero, hide at page bottom
        // ============================================================
        var stickyBar = document.getElementById('sticky-bar');
        if (stickyBar) {
            var heroSection = document.getElementById('hero');

            function updateStickyBar() {
                var scrollHeight = document.documentElement.scrollHeight;
                var clientHeight = document.documentElement.clientHeight;
                var scrollPosition = window.scrollY + clientHeight;
                var heroBottom = heroSection
                    ? heroSection.offsetTop + heroSection.offsetHeight - 80
                    : window.innerHeight * 0.85;
                var pastHero = window.scrollY >= heroBottom;
                var atPageEnd = scrollPosition >= scrollHeight - 120;

                if (pastHero && !atPageEnd) {
                    stickyBar.classList.add('is-visible');
                } else {
                    stickyBar.classList.remove('is-visible');
                }
            }

            updateStickyBar();
            window.addEventListener('scroll', updateStickyBar, { passive: true });
            window.addEventListener('resize', updateStickyBar);
        }

        // ============================================================
        // PARALLAX BLOBS ON SCROLL
        // ============================================================
        var blobs = document.querySelectorAll('.ws-blob');
        window.addEventListener('scroll', function() {
            var scrollY = window.scrollY;
            blobs.forEach(function(blob, i) {
                var speed = 0.02 + (i * 0.01);
                blob.style.transform = 'translateY(' + (scrollY * speed) + 'px)';
            });
        }, { passive: true });

        // ============================================================
        // MOBILE NAVIGATION MENU
        // ============================================================
        var navToggle = document.getElementById('nav-toggle');
        var navLinks = document.querySelector('.ws-nav__links');
        var navLinkItems = document.querySelectorAll('.ws-nav__link, #nav-enrol-btn');

        if (navToggle && navLinks) {
            navToggle.addEventListener('click', function() {
                navLinks.classList.toggle('active');
                document.body.classList.toggle('ws-menu-open');
            });

            navLinkItems.forEach(function(link) {
                link.addEventListener('click', function() {
                    navLinks.classList.remove('active');
                    document.body.classList.remove('ws-menu-open');
                });
            });
        }

    })();
    </script>

</body>
</html>
