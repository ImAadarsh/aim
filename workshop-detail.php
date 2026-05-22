<?php
// Validate ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 1;
if ($id < 1 || $id > 6) {
    header("Location: workshop-series.php");
    exit();
}

// Define details for all 6 workshops
require_once __DIR__ . '/include/workshops_data.php';

$workshop = $workshops[$id];

// Setup Previous/Next Navigation IDs
$prevId = $id > 1 ? $id - 1 : null;
$nextId = $id < 6 ? $id + 1 : null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php echo htmlspecialchars($workshop['title']); ?> | IPN Mission AIM Workshop Details</title>
    <meta name="title" content="<?php echo htmlspecialchars($workshop['title']); ?> | IPN Mission AIM Workshop Details">
    <meta name="description" content="Explore details for <?php echo htmlspecialchars($workshop['title']); ?>, part of the 6-workshop AI series by IPN Mission AIM. Special complete pass for ₹4,999.">
    <meta name="author" content="IPN Foundation">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/logo/favicon.png">

    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome-pro.min.css">
    <link rel="stylesheet" href="assets/css/workshop-series.css?v=2.4">
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
            <a href="workshop-series.php" class="ws-nav__link">Workshops</a>
            <a href="workshop-series.php#trainers" class="ws-nav__link">Trainers</a>
            <a href="workshop-series.php#faq" class="ws-nav__link">FAQ</a>
            <a href="https://www.instamojo.com/@ipnacademy/90e5e2e5bfbd47c587db1a2bffbc3d4f" target="_blank" class="ws-btn ws-btn--primary" id="nav-enrol-btn">
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
             DETAIL HERO SECTION
             ============================================================ -->
        <header class="ws-detail-hero">
            <!-- Animated aurora ribbons -->
            <div class="ws-aurora">
                <div class="ws-aurora__ribbon ws-aurora__ribbon--1"></div>
                <div class="ws-aurora__ribbon ws-aurora__ribbon--2"></div>
                <div class="ws-aurora__ribbon ws-aurora__ribbon--3"></div>
            </div>

            <!-- Floating gradient blobs -->
            <div class="ws-blob ws-blob--1"></div>
            <div class="ws-blob ws-blob--2"></div>

            <!-- Floating AI Product Logos -->
            <div class="ws-floating-logo-container">
                <?php
                $logo_dir = 'assets/img/ai_company_logo';
                $logos = [];
                if (is_dir($logo_dir)) {
                    $files = scandir($logo_dir);
                    foreach ($files as $file) {
                        if (pathinfo($file, PATHINFO_EXTENSION) === 'svg') {
                            $logos[] = $file;
                        }
                    }
                }
                
                // If logos were scanned, distribute them in the hero section
                if (!empty($logos)) {
                    // Pre-defined premium positions (top/left offsets) to ensure nice distribution
                    // and avoid overlapping the central text area.
                    $positions = [
                        ['top' => '15%', 'left' => '6%',   'size' => '72px', 'anim' => 1],
                        ['top' => '22%', 'right' => '6%',  'size' => '68px', 'anim' => 2],
                        ['top' => '42%', 'left' => '10%',  'size' => '78px', 'anim' => 3],
                        ['top' => '48%', 'right' => '10%', 'size' => '66px', 'anim' => 4],
                        ['top' => '72%', 'left' => '8%',   'size' => '68px', 'anim' => 5],
                        ['top' => '78%', 'right' => '7%',  'size' => '70px', 'anim' => 6],
                        ['top' => '30%', 'left' => '20%',  'size' => '64px', 'anim' => 7],
                        ['top' => '28%', 'right' => '21%', 'size' => '66px', 'anim' => 8],
                        ['top' => '65%', 'left' => '24%',  'size' => '62px', 'anim' => 9],
                    ];
                    
                    foreach ($logos as $idx => $logo) {
                        if (isset($positions[$idx])) {
                            $pos = $positions[$idx];
                            $style = "top: {$pos['top']}; ";
                            if (isset($pos['left'])) {
                                $style .= "left: {$pos['left']}; ";
                            } else {
                                $style .= "right: {$pos['right']}; ";
                            }
                            $style .= "width: {$pos['size']}; height: {$pos['size']};";
                            
                            $cleanName = ucwords(str_replace(['-logo', '-app', '-free', '_svgstack_com', '_', '-'], [' ', '', '', '', ' ', ' '], pathinfo($logo, PATHINFO_FILENAME)));
                            $cleanName = preg_replace('/[0-9]+/', '', $cleanName);
                            $cleanName = trim(str_replace('svg', '', $cleanName));
                            if ($cleanName == 'Black Xai') {
                                $cleanName = 'xAI';
                            }
                            if ($cleanName == 'Mistral Ai Logo Svg') {
                                $cleanName = 'Mistral AI';
                            }
                            
                            echo '<div class="ws-floating-logo-badge ws-float-anim-' . $pos['anim'] . '" style="' . $style . '" title="' . htmlspecialchars($cleanName) . '">';
                            echo '  <img src="' . $logo_dir . '/' . htmlspecialchars($logo) . '" alt="' . htmlspecialchars($cleanName) . '">';
                            echo '</div>';
                        }
                    }
                }
                ?>
            </div>

            <div class="ws-container">
                <div class="ws-fade-up">
                    <a href="workshop-series.php" style="color: var(--ws-accent-orange); text-decoration: none; font-weight: 700; font-size: 0.88rem; display: inline-flex; align-items: center; gap: 8px; margin-bottom: 20px;">
                        <i class="far fa-chevron-left"></i> Back to Workshop Series
                    </a>
                    
                    <div>
                        <span class="ws-detail-hero__badge">
                            <i class="<?php echo htmlspecialchars($workshop['icon']); ?>"></i> Workshop 0<?php echo $id; ?> / 06
                        </span>
                    </div>

                    <h1 class="ws-detail-hero__title"><?php echo htmlspecialchars($workshop['title']); ?></h1>

                    <div class="ws-detail-hero__meta">
                        <span class="ws-detail-hero__meta-item">
                            <i class="far fa-calendar-alt"></i> Date: <strong><?php echo htmlspecialchars($workshop['date']); ?></strong>
                        </span>
                        <span class="ws-detail-hero__meta-item">
                            <i class="far fa-clock"></i> Time: <strong>10:00 AM – 12:00 PM IST</strong>
                        </span>
                        <span class="ws-detail-hero__meta-item">
                            <i class="fas fa-video"></i> Delivery: <strong>Live Online</strong>
                        </span>
                    </div>
                </div>
            </div>
        </header>

        <!-- Glowing section divider -->
        <div class="ws-divider"></div>

        <!-- ============================================================
             MAIN CONTENT LAYOUT
             ============================================================ -->
        <section class="ws-section ws-bg-dark-section" style="padding-top: 0;">
            <div class="ws-container">
                <div class="ws-detail__grid">
                    
                    <!-- Left Column: Details & Agenda -->
                    <div class="ws-fade-left">
                        
                        <!-- Presentation Slide -->
                        <div class="ws-detail__slide-container">
                            <img src="<?php echo htmlspecialchars($workshop['slide']); ?>" alt="<?php echo htmlspecialchars($workshop['title']); ?> - Presentation Slide" class="ws-detail__slide-img">
                        </div>

                        <!-- Overview -->
                        <h3 class="ws-detail__section-title"><i class="fas fa-info-circle"></i> Workshop Overview</h3>
                        <p class="ws-detail__overview-text"><?php echo htmlspecialchars($workshop['extended_description']); ?></p>

                        <!-- Agenda -->
                        <h3 class="ws-detail__section-title"><i class="fas fa-stream"></i> Detailed Agenda</h3>
                        <div class="ws-detail__agenda-list">
                            <?php foreach ($workshop['agenda'] as $index => $item): ?>
                                <div class="ws-detail__agenda-item">
                                    <div class="ws-detail__agenda-num"><?php echo $index + 1; ?></div>
                                    <div class="ws-detail__agenda-content">
                                        <h4 class="ws-detail__agenda-title"><?php echo htmlspecialchars($item['title']); ?></h4>
                                        <p class="ws-detail__agenda-desc"><?php echo htmlspecialchars($item['desc']); ?></p>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Takeaways -->
                        <h3 class="ws-detail__section-title"><i class="fas fa-gift"></i> What You Walk Away With</h3>
                        <div class="ws-detail__takeaways-grid">
                            <?php foreach ($workshop['takeaways'] as $takeaway): ?>
                                <div class="ws-detail__takeaway-card">
                                    <div class="ws-detail__takeaway-icon"><i class="fas fa-check"></i></div>
                                    <p class="ws-detail__takeaway-text"><?php echo htmlspecialchars($takeaway); ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Previous / Next Navigation Buttons -->
                        <div class="ws-detail__nav-buttons">
                            <?php if ($prevId): ?>
                                <a href="workshop-detail.php?id=<?php echo $prevId; ?>" class="ws-detail__nav-btn ws-detail__nav-btn--prev">
                                    <span class="ws-detail__nav-label">← Previous Workshop</span>
                                    <span class="ws-detail__nav-title"><?php echo htmlspecialchars($workshops[$prevId]['title']); ?></span>
                                </a>
                            <?php else: ?>
                                <div style="flex: 1; max-width: 48%;"></div>
                            <?php endif; ?>

                            <?php if ($nextId): ?>
                                <a href="workshop-detail.php?id=<?php echo $nextId; ?>" class="ws-detail__nav-btn ws-detail__nav-btn--next">
                                    <span class="ws-detail__nav-label">Next Workshop →</span>
                                    <span class="ws-detail__nav-title"><?php echo htmlspecialchars($workshops[$nextId]['title']); ?></span>
                                </a>
                            <?php else: ?>
                                <div style="flex: 1; max-width: 48%;"></div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Right Column: Sidebar Registration Box -->
                    <div class="ws-fade-right">
                        
                        <!-- Quick Details Card -->
                        <div class="ws-detail__sidebar-card">
                            <h4 class="ws-detail__sidebar-title"><i class="fas fa-info-circle"></i> Quick Details</h4>
                            <div class="ws-detail__sidebar-list">
                                <div class="ws-detail__sidebar-item">
                                    <i class="far fa-calendar-alt ws-detail__sidebar-icon"></i>
                                    <div>
                                        <div class="ws-detail__sidebar-label">Date</div>
                                        <div class="ws-detail__sidebar-val"><?php echo htmlspecialchars($workshop['date']); ?></div>
                                    </div>
                                </div>
                                <div class="ws-detail__sidebar-item">
                                    <i class="far fa-clock ws-detail__sidebar-icon"></i>
                                    <div>
                                        <div class="ws-detail__sidebar-label">Time</div>
                                        <div class="ws-detail__sidebar-val">10:00 AM – 12:00 PM IST</div>
                                    </div>
                                </div>
                                <div class="ws-detail__sidebar-item">
                                    <i class="fas fa-video ws-detail__sidebar-icon"></i>
                                    <div>
                                        <div class="ws-detail__sidebar-label">Delivery Mode</div>
                                        <div class="ws-detail__sidebar-val">Live Online (Zoom / GMeet)</div>
                                    </div>
                                </div>
                                <div class="ws-detail__sidebar-item">
                                    <i class="fas fa-certificate ws-detail__sidebar-icon"></i>
                                    <div>
                                        <div class="ws-detail__sidebar-label">Certification</div>
                                        <div class="ws-detail__sidebar-val">IPN Foundation Certified</div>
                                    </div>
                                </div>
                            </div>

                            <div class="ws-detail__enrol-box">
                                <div class="ws-detail__sidebar-label">Complete 6-Workshop Pass</div>
                                <div class="ws-detail__enrol-price">
                                    <div class="ws-detail__enrol-price-val">
                                        ₹4,999 
                                        <span class="ws-detail__enrol-price-orig">₹8,999</span>
                                    </div>
                                </div>
                                <a href="https://www.instamojo.com/@ipnacademy/90e5e2e5bfbd47c587db1a2bffbc3d4f" target="_blank" class="ws-btn ws-btn--primary ws-detail__enrol-btn">
                                    <i class="fas fa-rocket"></i> Enrol for All 6 Sessions
                                </a>
                                <div class="ws-detail__enrol-badge">
                                    <i class="fas fa-check-circle"></i> 44% Special Launch Discount Applied
                                </div>
                            </div>
                        </div>

                        <!-- Trainers Card -->
                        <div class="ws-detail__sidebar-card">
                            <h4 class="ws-detail__sidebar-title"><i class="fas fa-graduation-cap"></i> Master Trainers</h4>
                            
                            <div class="ws-detail__sidebar-trainer">
                                <img src="assets/img/team/trainer_wadhwa.png" alt="Mrs. S. Wadhwa">
                                <div class="ws-detail__sidebar-trainer-info">
                                    <div class="ws-detail__sidebar-trainer-name">Mrs. S. Wadhwa</div>
                                    <div class="ws-detail__sidebar-trainer-role">EdTech Leader & Author</div>
                                </div>
                            </div>

                            <div class="ws-detail__sidebar-trainer">
                                <img src="assets/img/team/trainer_saha.png" alt="Mrs. M. S. Saha">
                                <div class="ws-detail__sidebar-trainer-info">
                                    <div class="ws-detail__sidebar-trainer-name">Mrs. M. S. Saha</div>
                                    <div class="ws-detail__sidebar-trainer-role">Award-Winning School Leader</div>
                                </div>
                            </div>
                            
                            <p style="font-size: 0.78rem; color: var(--ws-text-light-muted); line-height: 1.4; margin: 12px 0 0;">
                                Both master trainers bring over 50 years of combined educational excellence to South Asia's leading AI training program.
                            </p>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!-- ============================================================
             FOOTER
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
         STICKY BOTTOM BAR (Mobile/Desktop)
         ============================================================ -->
    <div class="ws-sticky-bar" id="sticky-bar">
        <div class="ws-sticky-bar__info-group">
            <div class="ws-sticky-bar__badge-row">
                <span class="ws-sticky-bar__badge"><i class="fas fa-graduation-cap"></i> 6-Workshop Pass</span>
                <span class="ws-sticky-bar__discount"><i class="fas fa-tag"></i> 44% OFF</span>
            </div>
            <div class="ws-sticky-bar__price">
                <span class="ws-sticky-bar__current">₹4,999</span>
                <span class="ws-sticky-bar__original">₹8,999</span>
            </div>
        </div>
        <a href="https://www.instamojo.com/@ipnacademy/90e5e2e5bfbd47c587db1a2bffbc3d4f" target="_blank" class="ws-btn ws-btn--primary" id="sticky-enrol-btn">
            <i class="fas fa-paper-plane"></i> Enrol Now
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
        // ============================================================
        var canvas = document.getElementById('particle-canvas');
        var ctx = canvas.getContext('2d');
        var particles = [];
        var mouse = { x: null, y: null, radius: 150 };
        var particleCount = 80;
        var maxDist = 120;
        var colors = [
            'rgba(192, 132, 252, 0.6)',
            'rgba(255, 184, 0, 0.6)',
            'rgba(255, 93, 56, 0.5)',
            'rgba(62, 139, 255, 0.5)'
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

            if (this.x > canvas.width + 10) this.x = -10;
            if (this.x < -10) this.x = canvas.width + 10;
            if (this.y > canvas.height + 10) this.y = -10;
            if (this.y < -10) this.y = canvas.height + 10;

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
                        ctx.strokeStyle = 'rgba(192, 132, 252, ' + opacity + ')';
                        ctx.lineWidth = 0.5;
                        ctx.moveTo(particles[a].x, particles[a].y);
                        ctx.lineTo(particles[b].x, particles[b].y);
                        ctx.stroke();
                    }
                }

                if (mouse.x !== null) {
                    var mdx = particles[a].x - mouse.x;
                    var mdy = particles[a].y - (mouse.y + scrollY);
                    var mDist = Math.sqrt(mdx * mdx + mdy * mdy);
                    if (mDist < mouse.radius) {
                        var mOpacity = 0.15 * (1 - mDist / mouse.radius);
                        ctx.beginPath();
                        ctx.strokeStyle = 'rgba(255, 184, 0, ' + mOpacity + ')';
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
        // SCROLL ANIMATIONS
        // ============================================================
        var animatedElements = document.querySelectorAll('.ws-fade-up, .ws-fade-left, .ws-fade-right');

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
        // HIDE STICKY FOOTER AT END OF PAGE
        // ============================================================
        var stickyBar = document.getElementById('sticky-bar');
        if (stickyBar) {
            window.addEventListener('scroll', function() {
                var scrollHeight = document.documentElement.scrollHeight;
                var clientHeight = document.documentElement.clientHeight;
                var scrollPosition = window.scrollY + clientHeight;

                if (scrollPosition >= scrollHeight - 120) {
                    stickyBar.style.transform = 'translateY(150%)';
                    stickyBar.style.opacity = '0';
                    stickyBar.style.visibility = 'hidden';
                } else {
                    stickyBar.style.transform = 'translateY(0)';
                    stickyBar.style.opacity = '1';
                    stickyBar.style.visibility = 'visible';
                }
            }, { passive: true });
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
