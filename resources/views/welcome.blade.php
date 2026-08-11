<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saffron & Ember — Wood-Fire Restaurant & Delivery</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Google Fonts (হুবহু) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    <style>
        :root {
            --brand-orange: #d36419;
            --brand-ink: #1e1614;
            --brand-cream: #FCFAF4;
            --brand-border: #e5e7eb;
            --brand-gold: #f5a623;
        }

        body {
            font-family: 'Outfit', sans-serif;
            color: #1e1614;
            background-color: #fff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        .display-1,
        .display-2,
        .display-3,
        .display-4,
        .display-5,
        .display-6,
        .font-display {
            font-family: 'Fraunces', serif;
        }

        .bg-ink {
            background-color: var(--brand-ink) !important;
        }

        .bg-cream {
            background-color: var(--brand-cream) !important;
        }

        .bg-primary,
        .btn-primary {
            background-color: var(--brand-orange) !important;
            border-color: var(--brand-orange) !important;
        }

        .text-primary {
            color: var(--brand-orange) !important;
        }

        .btn-primary:hover {
            opacity: 0.9;
            background-color: #b8531e !important;
            border-color: #b8531e !important;
        }

        .btn-outline-light:hover {
            background-color: var(--brand-orange) !important;
            border-color: var(--brand-orange) !important;
        }

        .text-gold {
            color: var(--brand-gold) !important;
        }

        .bg-gold {
            background-color: var(--brand-gold) !important;
            color: #1e1614 !important;
        }

        .border-border {
            border-color: var(--brand-border) !important;
        }

        .eyebrow {
            font-size: 0.75rem;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--brand-orange);
            font-weight: 600;
        }

        /* Hero Gradient */
        .hero-gradient {
            background: linear-gradient(to right, var(--brand-ink) 0%, rgba(30, 22, 20, 0.85) 40%, rgba(30, 22, 20, 0.1) 100%);
        }

        /* Line Clamp */
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        /* Hover Animations */
        .hover-lift {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06) !important;
        }

        .zoom-media img {
            transition: transform 0.5s ease;
        }

        .zoom-media:hover img {
            transform: scale(1.05);
        }

        .heart-btn {
            transition: transform 0.3s;
        }

        .heart-btn:hover {
            transform: scale(1.1);
        }

        /* Custom Image Aspect Ratios */
        .ratio-4x3 {
            aspect-ratio: 4 / 3;
        }

        .aspect-square {
            aspect-ratio: 1 / 1;
        }

        /* Navbar Override for Glassmorphism (Blur) */
        #mainNavbar {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background-color: #FCFAF4 !important;
            border-bottom: 1px solid var(--brand-border);
            transition: all 0.5s ease;
        }

        /* Mobile Bottom Nav fix */
        .mobile-nav {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background-color: #FCFAF4 !important;
            border-top: 1px solid var(--brand-border);
        }

        .text-ink-foreground {
            color: #ffffff;
        }

        .text-ink-foreground\/75 {
            color: rgba(255, 255, 255, 0.75);
        }

        .text-ink-foreground\/55 {
            color: rgba(255, 255, 255, 0.55);
        }

        .text-ink-foreground\/65 {
            color: rgba(255, 255, 255, 0.65);
        }

        /* Ratings */
        .star-fill {
            color: var(--brand-gold) !important;
        }

        .nav-price:hover {
            background-color: #E8E0C8 !important;
            color: #211813 !important;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-column min-vh-100">

        <!-- 1. Top Announcement Bar -->
        <div class="d-none d-md-block bg-ink py-2 text-center text-white small tracking-wide"
            style="letter-spacing: 0.05em; font-size: 12px;
    line-height: 16px; ">
            Free delivery over €45.00 · Kitchen open until 01:00 Fri &amp; Sat · <a href="tel:+351214470180"
                class="text-white text-decoration-underline" style="text-underline-offset: 4px;">+351 21 447 0180</a>
        </div>

        <!-- 2. Header / Navbar (Sticky via JS) -->
        <header id="mainNavbar" class="sticky-top z-3" style="height: 72px;">
            <nav class="navbar navbar-expand-lg ">
                <div class="container">
                    <!-- Logo -->
                    <a class="navbar-brand d-flex align-items-center gap-3 text-decoration-none" href="#">
                        <span
                            class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fw-bold"
                            style="width: 44px; height: 44px; font-family: 'Fraunces', serif; font-size: 1.1rem;">S</span>
                        <span class="d-none d-sm-flex flex-column lh-1">
                            <span class="fw-semibold font-display fs-5"
                                style="line-height: 28px; color:#211813; ">Saffron &amp; Ember</span>
                            <span class="small text-uppercase text-muted"
                                style="font-size: 0.625rem; letter-spacing: 0.22em;">Fire kitchen · Lisbon</span>
                        </span>
                    </a>

                    <!-- Hamburger Toggle -->
                    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Navbar Links -->
                    <div class="collapse navbar-collapse" id="navbarContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1">
                            <li class="nav-item"><a class="nav-link active fw-semibold text-primary"
                                    href="#">Home</a></li>
                            <li class="nav-item"><a class="nav-link text-muted" href="#">Menu</a></li>
                            <li class="nav-item"><a class="nav-link text-muted" href="#">Reservations</a></li>
                            <li class="nav-item"><a class="nav-link text-muted" href="#">Offers</a></li>
                            <li class="nav-item"><a class="nav-link text-muted" href="#">About</a></li>
                            <li class="nav-item"><a class="nav-link text-muted" href="#">Contact</a></li>
                        </ul>

                        <!-- Right Side Icons -->
                        <div class="d-flex align-items-center gap-2">
                            <a href="#"
                                class="d-flex align-items-center justify-content-center text-muted rounded-circle text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-search fs-5"></i></a>
                            <a href="#"
                                class="d-none d-sm-flex align-items-center justify-content-center text-muted rounded-circle text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-person fs-5"></i></a>
                            <a href="#"
                                class="nav-price d-flex align-items-center gap-2 bg-opacity-10 text-dark rounded-pill px-3 py-2 text-decoration-none fw-medium"
                                style="background-color: #f6efe3"><i class="bi bi-bag fs-5"></i> <span
                                    class="d-none d-md-inline small tabular-nums">€0.00</span></a>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <!-- 3. Hero Section -->
        <section class="position-relative overflow-hidden bg-ink text-white">
            <!-- Background Image & Overlay -->
            <img src="{{ asset('storage/images/hero-C7TCrd_2.jpg') }}"
                alt="Fire-grilled ribeye resting on a dark ceramic plate"
                class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="opacity: 0.45;">
            <div class="position-absolute top-0 start-0 w-100 h-100 hero-gradient"></div>

            <div class="container position-relative d-flex align-items-center min-vh-100 py-5"
                style="min-height: 75vh;">
                <div class="max-w-2xl" style="max-width: 600px;">
                    <span
                        class="d-inline-flex align-items-center gap-2 rounded-pill border border-light border-opacity-25 px-4 py-2 text-uppercase small fw-semibold"
                        style="letter-spacing: 0.2em;color: #F4F0E8; font-size: 12px; line-height: 21px;">
                        <span class="bg-success rounded-circle" style="width: 8px; height: 8px;"></span> Open now · 28
                        min average delivery
                    </span>

                    <h1 class="mt-4   lh-1"><samp
                            style="font-family: 'Fraunces', serif;
    color: #F5F1E9;
    font-size: 72px;
    line-height: 73px;
    font-weight: 500;">Cooked
                            over fire.</samp><br><span class="text-primary" style="font-family: 'Fraunces', serif; font-size: 67px; line-height: 49px; font-weight: 500;">Served without fuss.</span></h1>
                    <p class="text-white-50" style="max-width: 500px;    max-width: 500px;
    font-size: 16px;
    line-height: 23px;
    font-weight: 500;
    font-family: 'Fraunces', serif;
}">Fire-kissed cooking, served with
                        intention. Order in under a minute for delivery, pickup or dine-in — or book the corner table
                        you keep asking for.</p>

                    <div class="mt-4 d-flex flex-column flex-sm-row gap-3">
                        <a href="/menu"
                            class="btn btn-primary rounded-pill px-4 py-2 fs-6 fw-semibold d-flex align-items-center justify-content-center"
                            style="min-height: 56px;">Order now</a>
                        <a href="/reservations"
                            class="btn btn-outline-light rounded-pill px-4 py-2 fs-6 fw-semibold d-flex align-items-center justify-content-center"
                            style="min-height: 56px;">Reserve a table</a>
                    </div>

                    <dl class="row row-cols-3 mt-5 border-top border-light border-opacity-15 pt-4 g-4"
                        style="max-width: 450px;">
                        <div class="col">
                            <dt class="fs-3 fw-bold text-primary">4.9</dt>
                            <dd class="text-uppercase small text-white-50 opacity-75 mt-1">1,842 reviews</dd>
                        </div>
                        <div class="col">
                            <dt class="fs-3 fw-bold text-primary">28 min</dt>
                            <dd class="text-uppercase small text-white-50 opacity-75 mt-1">avg. delivery</dd>
                        </div>
                        <div class="col">
                            <dt class="fs-3 fw-bold text-primary">50+</dt>
                            <dd class="text-uppercase small text-white-50 opacity-75 mt-1">dishes daily</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </section>

        <!-- 4. Service Icons Bar -->
        <section class="border-bottom border-light bg-cream py-4">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-4 d-flex align-items-start gap-3">
                        <div class="bg-white text-primary rounded-3 p-3 shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 48px; height: 48px;"><i class="bi bi-truck fs-5"></i></div>
                        <div>
                            <p class="fw-semibold mb-0">Delivery in 28 min</p>
                            <p class="small text-muted mb-0">Free over €45 across central Lisbon</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-start gap-3">
                        <div class="bg-white text-primary rounded-3 p-3 shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 48px; height: 48px;"><i class="bi bi-clock fs-5"></i></div>
                        <div>
                            <p class="fw-semibold mb-0">Pickup in 12 min</p>
                            <p class="small text-muted mb-0">Skip the queue, collect at the pass</p>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex align-items-start gap-3">
                        <div class="bg-white text-primary rounded-3 p-3 shadow-sm d-flex align-items-center justify-content-center"
                            style="width: 48px; height: 48px;"><i class="bi bi-geo-alt fs-5"></i></div>
                        <div>
                            <p class="fw-semibold mb-0">Dine-in ordering</p>
                            <p class="small text-muted mb-0">Scan the table card, pay when ready</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Categories Section -->
        <section class="container py-5 my-3">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                <div class="max-w-2xl" style="max-width: 550px;">
                    <p class="eyebrow mb-2">Browse</p>
                    <h2 class="display-6 fw-semibold lh-sm">Start where you're hungriest</h2>
                    <p class="text-muted mt-2">Ten sections, rewritten every season around what our farm partners send.
                    </p>
                </div>
                <a href="#"
                    class="text-decoration-none text-primary fw-semibold border-bottom border-primary pb-1 d-inline-flex align-items-center gap-2 small transition">See
                    the full menu <i class="bi bi-arrow-right small"></i></a>
            </div>

            <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5">
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Signatures</h5>
                        <p class="small text-muted mb-2">The dishes we're known for</p><span
                            class="small fw-semibold text-primary">7 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">From the Fire</h5>
                        <p class="small text-muted mb-2">Charcoal &amp; open flame</p><span
                            class="small fw-semibold text-primary">6 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Wood-Fired Pizza</h5>
                        <p class="small text-muted mb-2">72-hour fermented dough</p><span
                            class="small fw-semibold text-primary">6 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Handmade Pasta</h5>
                        <p class="small text-muted mb-2">Rolled fresh each morning</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Ocean</h5>
                        <p class="small text-muted mb-2">Day-boat catch</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Garden</h5>
                        <p class="small text-muted mb-2">Farm partners, picked at dawn</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Burgers</h5>
                        <p class="small text-muted mb-2">Dry-aged patties</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Small Plates</h5>
                        <p class="small text-muted mb-2">Made for sharing</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Sweet</h5>
                        <p class="small text-muted mb-2">Pastry room classics</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
                <div class="col"><a href="#"
                        class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-4 shadow-sm h-100">
                        <h5 class="fw-semibold text-primary-hover">Drinks</h5>
                        <p class="small text-muted mb-2">Cellar &amp; bar</p><span
                            class="small fw-semibold text-primary">5 dishes <i class="bi bi-arrow-right"></i></span>
                    </a></div>
            </div>
        </section>

        <!-- 6. Chef's Recommendations -->
        <section class="bg-cream py-5">
            <div class="container">
                <div class="max-w-2xl mb-4" style="max-width: 550px;">
                    <p class="eyebrow mb-2">Chef recommendations</p>
                    <h2 class="display-6 fw-semibold lh-sm">What Inês would order tonight</h2>
                    <p class="text-muted mt-2">Fifteen years between San Sebastián and Lisbon, three of them running
                        the grill at a two-star kitchen. She cooks over fire because it refuses to be rushed.</p>
                </div>

                <div class="row g-4">
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Steak" style="height: 240px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-warning text-dark rounded-pill px-3 py-2 text-uppercase small fw-semibold"
                                    style="color: #1e1614 !important; background-color: var(--brand-gold) !important;">Chef's
                                    pick</span>
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h5 class="card-title fw-semibold">Ember Ribeye, Bone Marrow Butter</h5>
                                    <span class="fw-bold text-primary fs-5">€29.00</span>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mb-3">Cooked over Iberian oak until
                                    the edges catch, then rested in its own juices and finished at the pass with
                                    cultured butter.</p>
                                <div class="d-flex flex-wrap gap-3 text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.7 (314)</span>
                                    <span><i class="bi bi-clock"></i> 21 min</span>
                                    <span><i class="bi bi-fire"></i> 609 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1544025162-d76690b67050?w=600"
                                    class="card-img-top" alt="Steak" style="height: 240px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-warning text-dark rounded-pill px-3 py-2 text-uppercase small fw-semibold"
                                    style="color: #1e1614 !important; background-color: var(--brand-gold) !important;">Chef's
                                    pick</span>
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h5 class="card-title fw-semibold">Dry-Aged Sirloin, 300g</h5>
                                    <span class="fw-bold text-primary fs-5">€34.00</span>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mb-3">Cooked over Iberian oak until
                                    the edges catch, then rested in its own juices and finished at the pass with
                                    cultured butter.</p>
                                <div class="d-flex flex-wrap gap-3 text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.9 (461)</span>
                                    <span><i class="bi bi-clock"></i> 28 min</span>
                                    <span><i class="bi bi-fire"></i> 839 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=600"
                                    class="card-img-top" alt="Pizza" style="height: 240px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-warning text-dark rounded-pill px-3 py-2 text-uppercase small fw-semibold"
                                    style="color: #1e1614 !important; background-color: var(--brand-gold) !important;">Chef's
                                    pick</span>
                            </div>
                            <div class="card-body p-4 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h5 class="card-title fw-semibold">Margherita d'Oro</h5>
                                    <span class="fw-bold text-primary fs-5">€20.50</span>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mb-3">Cooked over Iberian oak until
                                    the edges catch, then rested in its own juices and finished at the pass with
                                    cultured butter.</p>
                                <div class="d-flex flex-wrap gap-3 text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.2 (67)</span>
                                    <span><i class="bi bi-clock"></i> 9 min</span>
                                    <span><i class="bi bi-fire"></i> 222 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-secondary rounded-pill px-4 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Priced Down & Popular Section (Abbreviated for brevity, logic same as above) -->
        <section class="container py-5 my-3">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                <div class="max-w-2xl" style="max-width: 550px;">
                    <p class="eyebrow mb-2">Today's specials</p>
                    <h2 class="display-6 fw-semibold lh-sm">Priced down until service ends</h2>
                </div>
                <a href="#"
                    class="text-decoration-none text-primary fw-semibold border-bottom border-primary pb-1 d-inline-flex align-items-center gap-2 small transition">All
                    offers <i class="bi bi-arrow-right small"></i></a>
            </div>

            <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-4">
                <!-- Card 1 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                        <div class="position-relative">
                            <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                class="card-img-top" style="height: 180px; object-fit: cover;">
                            <span
                                class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Save
                                €7.50</span>
                        </div>
                        <div class="card-body p-3 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start gap-2">
                                <h6 class="fw-semibold mb-0">Saffron Risotto</h6>
                                <div class="text-end"><span class="fw-bold text-primary small">€24.50</span><br><span
                                        class="small text-decoration-line-through text-muted">€32.00</span></div>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 mt-3 small fw-semibold py-2">Add to
                                bag</button>
                        </div>
                    </div>
                </div>
                <!-- Card 2 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                        <div class="position-relative"><img
                                src="https://images.unsplash.com/photo-1544025162-d76690b67050?w=600"
                                class="card-img-top" style="height: 180px; object-fit: cover;"></div>
                        <div class="card-body p-3 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start gap-2">
                                <h6 class="fw-semibold mb-0">Iberian Pork Presa</h6>
                                <span class="fw-bold text-primary small">€20.50</span>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 mt-3 small fw-semibold py-2">Add to
                                bag</button>
                        </div>
                    </div>
                </div>
                <!-- Card 3 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                        <div class="position-relative"><img
                                src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=600"
                                class="card-img-top" style="height: 180px; object-fit: cover;"><span
                                class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Save
                                €7.50</span></div>
                        <div class="card-body p-3 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start gap-2">
                                <h6 class="fw-semibold mb-0">Nduja & Hot Honey</h6>
                                <div class="text-end"><span class="fw-bold text-primary small">€25.50</span><br><span
                                        class="small text-decoration-line-through text-muted">€33.00</span></div>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 mt-3 small fw-semibold py-2">Add to
                                bag</button>
                        </div>
                    </div>
                </div>
                <!-- Card 4 -->
                <div class="col">
                    <div class="card border-0 shadow-sm rounded-4 h-100 hover-lift overflow-hidden zoom-media">
                        <div class="position-relative"><img
                                src="https://images.unsplash.com/photo-1624734452268-5c946dbeb65b?w=600"
                                class="card-img-top" style="height: 180px; object-fit: cover;"></div>
                        <div class="card-body p-3 d-flex flex-column">
                            <div class="d-flex justify-content-between align-items-start gap-2">
                                <h6 class="fw-semibold mb-0">Wild Boar Pappardelle</h6>
                                <span class="fw-bold text-primary small">€31.50</span>
                            </div>
                            <button class="btn btn-primary rounded-pill w-100 mt-3 small fw-semibold py-2">Add to
                                bag</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. Reviews Section -->
        <section class="bg-ink py-5 text-white">
            <div class="container">
                <div class="max-w-2xl mb-4">
                    <p class="eyebrow text-white-50 opacity-75">Guest reviews</p>
                    <h2 class="display-6 fw-semibold">1,842 people rated us 4.9</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="border border-light border-opacity-10 rounded-4 p-4 h-100"><svg
                                class="mb-3 text-primary" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                            </svg>
                            <p class="small lh-lg text-white-75 opacity-75">The ribeye arrived still whispering from
                                the grill. Delivery was 24 minutes and the plating survived intact.</p>
                            <div
                                class="d-flex align-items-center gap-2 mt-3 pt-3 border-top border-light border-opacity-10">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center fw-bold"
                                    style="width: 36px; height: 36px; font-size: 14px;">MO</div>
                                <div>
                                    <div class="fw-semibold small">Marta Oliveira</div>
                                    <div class="text-white-50 opacity-50 small">2 days ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-light border-opacity-10 rounded-4 p-4 h-100"><svg
                                class="mb-3 text-primary" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                            </svg>
                            <p class="small lh-lg text-white-75 opacity-75">We booked the VIP room for eight people.
                                The team remembered a nut allergy without being asked twice.</p>
                            <div
                                class="d-flex align-items-center gap-2 mt-3 pt-3 border-top border-light border-opacity-10">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center fw-bold"
                                    style="width: 36px; height: 36px; font-size: 14px;">DR</div>
                                <div>
                                    <div class="fw-semibold small">Daniel Reyes</div>
                                    <div class="text-white-50 opacity-50 small">1 week ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="border border-light border-opacity-10 rounded-4 p-4 h-100"><svg
                                class="mb-3 text-primary" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2">
                                <path
                                    d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                <path
                                    d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                            </svg>
                            <p class="small lh-lg text-white-75 opacity-75">Best wood-fired pizza I've had outside
                                Naples. The hot honey nduja is dangerous.</p>
                            <div
                                class="d-flex align-items-center gap-2 mt-3 pt-3 border-top border-light border-opacity-10">
                                <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center fw-bold"
                                    style="width: 36px; height: 36px; font-size: 14px;">AK</div>
                                <div>
                                    <div class="fw-semibold small">Aisha Karim</div>
                                    <div class="text-white-50 opacity-50 small">2 weeks ago</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 9. Reservation Section -->
        <section class="container py-5 my-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="row g-3 row-cols-2">
                        <div class="col">
                            <div class="ratio aspect-square rounded-4 overflow-hidden zoom-media border"><img
                                    src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400"
                                    class="w-100 h-100 object-fit-cover"></div>
                        </div>
                        <div class="col">
                            <div class="ratio aspect-square rounded-4 overflow-hidden zoom-media border"><img
                                    src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
                                    class="w-100 h-100 object-fit-cover"></div>
                        </div>
                        <div class="col">
                            <div class="ratio aspect-square rounded-4 overflow-hidden zoom-media border"><img
                                    src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=400"
                                    class="w-100 h-100 object-fit-cover"></div>
                        </div>
                        <div class="col">
                            <div class="ratio aspect-square rounded-4 overflow-hidden zoom-media border"><img
                                    src="https://images.unsplash.com/photo-1624734452268-5c946dbeb65b?w=400"
                                    class="w-100 h-100 object-fit-cover"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <p class="eyebrow">@saffronandember</p>
                    <h2 class="display-6 fw-semibold lh-sm">Come sit by the fire</h2>
                    <p class="text-muted mt-2" style="max-width: 450px;">Fourteen tables, one open grill, and a
                        terrace that catches the last of the afternoon light. Walk-ins welcome.</p>
                    <dl class="mt-4">
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-2 small">
                            <dt class="text-muted">Monday – Thursday</dt>
                            <dd class="fw-semibold">12:00 – 23:00</dd>
                        </div>
                        <div class="d-flex justify-content-between border-bottom pb-2 mb-2 small">
                            <dt class="text-muted">Friday – Saturday</dt>
                            <dd class="fw-semibold">12:00 – 01:00</dd>
                        </div>
                        <div class="d-flex justify-content-between pb-2 small">
                            <dt class="text-muted">Sunday</dt>
                            <dd class="fw-semibold">12:00 – 22:00</dd>
                        </div>
                    </dl>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <a href="#" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold">Reserve a
                            table</a>
                        <a href="#" class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold">Find
                            us</a>
                    </div>
                    <div class="d-flex flex-wrap gap-2 mt-4">
                        <span class="badge bg-light text-dark border rounded-pill px-3 py-2 fw-normal">Uber Eats</span>
                        <span class="badge bg-light text-dark border rounded-pill px-3 py-2 fw-normal">Bolt Food</span>
                        <span class="badge bg-light text-dark border rounded-pill px-3 py-2 fw-normal">Glovo</span>
                    </div>
                    <div class="mt-3 d-flex align-items-center gap-2">
                        <div class="text-gold"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i></div><span class="small text-muted">4.9 (1842)</span>
                    </div>
                </div>
            </div>
        </section>

        <!-- 10. Footer -->
        <footer class="bg-ink text-white mt-auto py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <div class="d-flex align-items-center gap-3">
                            <span
                                class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fw-bold"
                                style="width: 44px; height: 44px; font-family: 'Fraunces', serif; font-size: 1.1rem;">S</span>
                            <span class="font-display fs-5 fw-semibold">Saffron &amp; Ember</span>
                        </div>
                        <p class="mt-4 small text-white-50" style="max-width: 350px;">Fire-kissed cooking, served with
                            intention. A fire kitchen in the old town, cooking with farm partners within ninety
                            kilometres of the door.</p>
                        <div class="d-flex gap-3 mt-4">
                            <a href="#"
                                class="d-flex align-items-center justify-content-center border border-light border-opacity-25 rounded-circle text-white-50 text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-instagram"></i></a>
                            <a href="#"
                                class="d-flex align-items-center justify-content-center border border-light border-opacity-25 rounded-circle text-white-50 text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-facebook"></i></a>
                            <a href="#"
                                class="d-flex align-items-center justify-content-center border border-light border-opacity-25 rounded-circle text-white-50 text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <h6 class="text-white-50 small text-uppercase fw-semibold tracking-wider"
                            style="letter-spacing: 0.18em;">Explore</h6>
                        <ul class="list-unstyled mt-4 d-flex flex-column gap-2 small">
                            <li><a href="#" class="text-white-50 text-decoration-none hover:text-primary">Full
                                    menu</a></li>
                            <li><a href="#"
                                    class="text-white-50 text-decoration-none hover:text-primary">Reservations</a></li>
                            <li><a href="#"
                                    class="text-white-50 text-decoration-none hover:text-primary">Offers</a></li>
                            <li><a href="#" class="text-white-50 text-decoration-none hover:text-primary">Our
                                    story</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-white-50 small text-uppercase fw-semibold tracking-wider"
                            style="letter-spacing: 0.18em;">Find us</h6>
                        <ul class="list-unstyled mt-4 d-flex flex-column gap-3 small text-white-50">
                            <li class="d-flex gap-3"><i class="bi bi-geo-alt-fill text-primary mt-1"></i> <span>14
                                    Marlowe Lane, Old Town Quarter<br>Lisbon</span></li>
                            <li class="d-flex gap-3"><i class="bi bi-clock text-primary mt-1"></i> <span><span
                                        class="d-block">Mon – Thu: 12:00 – 23:00</span><span class="d-block">Fri –
                                        Sat: 12:00 – 01:00</span></span></li>
                            <li class="d-flex gap-3"><i class="bi bi-envelope text-primary mt-1"></i> <a
                                    href="mailto:hello@saffronandember.com"
                                    class="text-white-50 text-decoration-none hover:text-primary">hello@saffronandember.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3">
                        <h6 class="text-white-50 small text-uppercase fw-semibold tracking-wider"
                            style="letter-spacing: 0.18em;">Newsletter</h6>
                        <p class="mt-4 small text-white-50">Seasonal menus, chef's table invitations, nothing else.</p>
                        <form class="d-flex gap-2 mt-3">
                            <input type="email"
                                class="form-control bg-transparent text-white border-secondary rounded-pill"
                                placeholder="you@email.com" style="min-height: 48px;">
                            <button class="btn btn-primary rounded-pill fw-semibold px-4"
                                style="min-height: 48px;">Join</button>
                        </form>
                    </div>
                </div>

                <hr class="border-light border-opacity-10 mt-5">
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-center gap-3 small text-white-50 mt-3">
                    <p class="mb-0">© 2026 Saffron &amp; Ember. All rights reserved.</p>
                    <div class="d-flex gap-4">
                        <a href="#" class="text-white-50 text-decoration-none">Privacy</a>
                        <a href="#" class="text-white-50 text-decoration-none">Terms</a>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <!-- 11. Mobile Bottom Nav (Fixed) -->
    <nav class="d-lg-none mobile-nav fixed-bottom z-3">
        <ul class="nav nav-fill">
            <li class="nav-item"><a href="#"
                    class="nav-link d-flex flex-column align-items-center small text-primary py-2"><i
                        class="bi bi-house fs-5"></i> <span class="small">Home</span></a></li>
            <li class="nav-item"><a href="#"
                    class="nav-link d-flex flex-column align-items-center small text-muted py-2"><i
                        class="bi bi-utensils fs-5"></i> <span class="small">Menu</span></a></li>
            <li class="nav-item"><a href="#"
                    class="nav-link d-flex flex-column align-items-center small text-muted py-2"><i
                        class="bi bi-calendar4-week fs-5"></i> <span class="small">Book</span></a></li>
            <li class="nav-item"><a href="#"
                    class="nav-link d-flex flex-column align-items-center small text-muted py-2"><i
                        class="bi bi-bag fs-5"></i> <span class="small">Bag</span></a></li>
            <li class="nav-item"><a href="#"
                    class="nav-link d-flex flex-column align-items-center small text-muted py-2"><i
                        class="bi bi-person fs-5"></i> <span class="small">Account</span></a></li>
        </ul>
    </nav>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS for Sticky Navbar (Sticky on Scroll) -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainNavbar');
            const navbarHeight = header.offsetHeight;
            if (window.scrollY > 50) {
                header.classList.remove('sticky-top'); // Remove default sticky to allow fixed behavior
                header.classList.add('fixed-top', 'shadow-sm');
                // Adjust padding to prevent content overlap
                document.body.style.paddingTop = navbarHeight + 'px';
            } else {
                header.classList.remove('fixed-top', 'shadow-sm');
                header.classList.add('sticky-top');
                document.body.style.paddingTop = '0px';
            }
        });
    </script>

</body>

</html>
