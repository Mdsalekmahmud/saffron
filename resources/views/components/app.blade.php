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
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,500;9..144,600;9..144,700&family=Outfit:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

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
            --bs-btn-hover-color: #b8531e !important;
            border-color: #b8531e !important;
            background-color: transparent !important;
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

        .hero-gradient {
            background: linear-gradient(to right, var(--brand-ink) 0%, rgba(30, 22, 20, 0.85) 40%, rgba(30, 22, 20, 0.1) 100%);
        }

        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .hover-lift {
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .hover-lift:hover {
            transform: translateY(-4px);
            color: var(--brand-orange) !important;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.06) !important;
        }

        .hover-lift:hover .text-primary-hover {
            color: var(--brand-orange) !important;
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

        .ratio-4x3 {
            aspect-ratio: 4 / 3;
        }

        .aspect-square {
            aspect-ratio: 1 / 1;
        }

        #mainNavbar {
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            background-color: #faefcd7a !important;
            border-bottom: 1px solid var(--brand-border);
            transition: all 0.5s ease;

        }

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

        .star-fill {
            color: var(--brand-gold) !important;
        }

        .primary-button-hover:hover {
            background-color: #E8E0C8 !important;
            color: #d36419 !important;
        }

        .card-text-hover:hover {
            color: #d36419 !important;
        }

        .btn-outline-dark-brand {
            color: #1e1614 !important;
            border: 1px solid #1e1614 !important;
            background-color: transparent !important;
        }

        .btn-outline-dark-brand:hover {
            color: #d36419 !important;
            background-color: transparent !important;
            border-color: #d36419 !important;
        }

        .social-icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.15);
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .social-icon:hover {
            color: var(--brand-orange);
            border-color: var(--brand-orange);
            transform: translateY(-2px);
        }

        .footer-link {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .footer-link:hover {
            color: var(--brand-orange);
        }

        .footer-badge {
            display: inline-block;
            border: #2e2c2c 1px solid;
            border-radius: 50px;
            padding: 6px 16px;
            color: rgba(255, 255, 255, 0.6);
            font-size: 0.75rem;
            transition: 0.2s;
        }

        .footer-badge:hover {
            border-color: var(--brand-orange);
            color: #fff;
        }

        .newsletter-input {
            background-color: transparent !important;
            border: 1px solid #3e3a33 !important;
            border-radius: 50px !important;
            padding: 12px 16px !important;
            flex-grow: 1;
            transition: border-color 0.3s ease;
            box-shadow: none !important;
        }

        .newsletter-input:focus {
            outline: none !important;
            border-color: #d36419 !important;
            box-shadow: none !important;
            background-color: transparent !important;
            color: #ffffff !important;
        }

        .newsletter-input::placeholder {
            color: rgba(255, 255, 255, 0.4);
        }

        .btn-primary {
            background-color: #d36419 !important;
            border-color: #d36419 !important;
            color: #ffffff !important;
            border-radius: 50px !important;
            padding: 12px 20px;
            transition: opacity 0.3s;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                backdrop-filter: blur(12px);
                -webkit-backdrop-filter: blur(12px);
                background-color: #FCFAF4 !important;
                border-top: 1px solid var(--brand-border);
            }
        }

        .navbar-nav .nav-link:hover {
            color: #d36419 !important;
            transition: color 0.2s ease;
        }

        .navbar-nav .nav-link.active {
            color: #d36419 !important;
            font-weight: 600;
        }

        .mobile-nav-link {
            color: #211813;
            font-size: 1.1rem;
            transition: color 0.2s ease;
        }

        .mobile-nav-link:hover {
            color: #c17015 !important;
        }

        .mobile-nav-link.active {
            color: #c17015 !important;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <div class="d-flex flex-column min-vh-100" style="background-color:#f8f6e6;">

        <!-- 1. Top Announcement Bar -->
        <div class="d-none d-md-block bg-ink py-2 text-center text-white small tracking-wide"
            style="letter-spacing: 0.05em; font-size: 12px; line-height: 16px;">
            Free delivery over €45.00 · Kitchen open until 01:00 Fri &amp; Sat · <a href="tel:+351214470180"
                class="text-white text-decoration-underline" style="text-underline-offset: 4px;">+351 21 447 0180</a>
        </div>

        <!-- 2. Header / Navbar (Sticky via JS) -->
        <header id="mainNavbar" class="sticky-top z-3" style="height: 72px;">
            <nav class="navbar navbar-expand-lg px-3 px-lg-0">
                <div class="container-fluid container-lg d-flex align-items-center justify-content-between">

                    <!-- ============= LOGO ============= -->
                    <a class="navbar-brand d-flex align-items-center gap-3 text-decoration-none"
                        href="{{ route('home') }}">
                        <span class="d-flex align-items-center justify-content-center rounded-circle fw-bold"
                            style="width: 44px; height: 44px; background-color: #c17015; color: #fff; font-family: 'Fraunces', serif; font-size: 1.1rem;">S</span>
                        <span class="d-none d-lg-flex flex-column lh-1">
                            <span class="fw-semibold font-display fs-5"
                                style="line-height: 28px; color:#211813;">Saffron &amp; Ember</span>
                            <span class="small text-uppercase text-muted"
                                style="font-size: 0.625rem; letter-spacing: 0.22em;">Fire kitchen · Lisbon</span>
                        </span>
                    </a>

                    <div class="d-flex d-lg-none align-items-center gap-2">
                        <a href="#"
                            class="primary-button-hover d-flex align-items-center justify-content-center text-muted text-decoration-none rounded-circle"
                            style="width: 40px; height: 40px;">
                            <i class="bi bi-search fs-5"></i>
                        </a>
                        <a href="#"
                            class="primary-button-hover d-flex align-items-center justify-content-center text-dark text-decoration-none rounded-circle"
                            style="background-color: #f6efe3; width: 40px; height: 40px;">
                            <i class="bi bi-bag fs-5"></i>
                        </a>
                        <button
                            class="navbar-toggler border-0 d-flex d-lg-none align-items-center justify-content-center text-dark rounded-circle p-0"
                            type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation"
                            style="width: 40px; height: 40px; background-color: transparent;">
                            <i class="bi bi-list fs-5" id="hamburgerIcon"></i>
                            <i class="bi bi-x fs-5 d-none" id="closeIcon"></i>
                        </button>
                    </div>

                    <!-- ============= NAVBAR COLLAPSE ============= -->
                    <div class="collapse navbar-collapse" id="navbarContent" style="">

                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-1 d-none d-lg-flex">
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }} fw-semibold"
                                    href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('menu') ? 'active' : '' }}"
                                    href="{{ route('menu') }}">
                                    Menu
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('reservations') ? 'active' : '' }}"
                                    href="{{ route('reservations') }}">
                                    Reservations
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('offers') ? 'active' : '' }}"
                                    href="{{ route('offers') }}">
                                    Offers
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}"
                                    href="{{ route('about') }}">
                                    About
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}"
                                    href="{{ route('contact') }}">
                                    Contact
                                </a>
                            </li>
                        </ul>

                        <div class="d-none d-lg-flex align-items-center gap-2 ms-lg-4">
                            <a href="{{ route('menu') }}"
                                class="primary-button-hover d-flex align-items-center justify-content-center text-muted rounded-circle text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-search fs-5"></i></a>
                            <a href="{{ route('account') }}"
                                class="primary-button-hover d-flex align-items-center justify-content-center text-muted rounded-circle text-decoration-none"
                                style="width: 44px; height: 44px;"><i class="bi bi-person fs-5"></i></a>
                            <a href="{{ route('bag') }}"
                                class="primary-button-hover d-flex align-items-center gap-2 bg-opacity-10 text-dark rounded-pill px-3 py-2 text-decoration-none fw-medium"
                                style="background-color: #f6efe3;"><i class="bi bi-bag fs-5"></i> <span
                                    class="small tabular-nums">€0.00</span></a>
                        </div>

                        <div class="d-block d-lg-none px-3 pb-4 pt-2">
                            <ul class="navbar-nav w-100 my-2">
                                <li class="nav-item border-bottom py-3" style="border-color: #f3efe6;">
                                    <a class="nav-link p-0 mobile-nav-link {{ request()->routeIs('home') ? 'active fw-semibold' : '' }}"
                                        href="{{ route('home') }}">
                                        Home
                                    </a>
                                </li>
                                <li class="nav-item border-bottom py-3" style="border-color: #f3efe6;">
                                    <a class="nav-link p-0 mobile-nav-link {{ request()->routeIs('menu') ? 'active fw-semibold' : '' }}"
                                        href="{{ route('menu') }}">
                                        Menu
                                    </a>
                                </li>
                                <li class="nav-item border-bottom py-3" style="border-color: #f3efe6;">
                                    <a class="nav-link p-0 mobile-nav-link {{ request()->routeIs('reservations') ? 'active fw-semibold' : '' }}"
                                        href="{{ route('reservations') }}">
                                        Reservations
                                    </a>
                                </li>
                                <li class="nav-item border-bottom py-3" style="border-color: #f3efe6;">
                                    <a class="nav-link p-0 mobile-nav-link {{ request()->routeIs('offers') ? 'active fw-semibold' : '' }}"
                                        href="{{ route('offers') }}">
                                        Offers
                                    </a>
                                </li>
                                <li class="nav-item border-bottom py-3" style="border-color: #f3efe6;">
                                    <a class="nav-link p-0 mobile-nav-link {{ request()->routeIs('about') ? 'active fw-semibold' : '' }}"
                                        href="{{ route('about') }}">
                                        About
                                    </a>
                                </li>
                                <li class="nav-item py-3" style="border-bottom: none;">
                                    <a class="nav-link p-0 mobile-nav-link {{ request()->routeIs('contact') ? 'active fw-semibold' : '' }}"
                                        href="{{ route('contact') }}">
                                        Contact
                                    </a>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center gap-3 mt-2">
                                <button class=" btn btn-outline-light rounded-pill flex-grow-1 py-3 fw-medium"
                                    style="color: #211813; border-color: #d1cec6; font-size: 0.95rem;">Reserve a
                                    table</button>
                                <button
                                    class="btn btn-outline-light rounded-circle d-flex align-items-center justify-content-center p-0"
                                    style="width: 54px; height: 54px; background-color: #f6efe3; color: #211813;">
                                    <i class="bi bi-telephone fs-5"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </nav>
        </header>

        {{ $slot }}

        <!-- 10. Footer -->
        <footer class="bg-ink text-white mt-auto py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <div class="d-flex align-items-center gap-3">
                            <span
                                class="d-flex align-items-center justify-content-center bg-primary text-white rounded-circle fw-bold"
                                style="width: 44px; height: 44px; font-family: 'Fraunces', serif; font-size: 1.1rem;">S</span>
                            <span class="font-display fs-5 fw-semibold text-white">Saffron &amp; Ember</span>
                        </div>
                        <p class="mt-4 small text-white-50 lh-lg" style="max-width: 350px;">Fire-kissed cooking,
                            served with intention. A fire kitchen in the old town, cooking with farm partners within
                            ninety kilometres of the door.</p>
                        <div class="d-flex gap-3 mt-4">
                            <a href="#" class="social-icon"><i class="bi bi-instagram fs-5"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-facebook fs-5"></i></a>
                            <a href="#" class="social-icon"><i class="bi bi-twitter fs-5"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h6 class="text-uppercase small text-white-50 fw-semibold" style="letter-spacing: 0.15em;">
                            Explore</h6>
                        <ul class="list-unstyled mt-4 d-flex flex-column gap-3 small">
                            <li><a href="#" class="footer-link">Full menu</a></li>
                            <li><a href="#" class="footer-link">Reservations</a></li>
                            <li><a href="#" class="footer-link">Offers</a></li>
                            <li><a href="#" class="footer-link">My account</a></li>
                            <li><a href="#" class="footer-link">Our story</a></li>
                            <li><a href="#" class="footer-link">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h6 class="text-uppercase small text-white-50 fw-semibold" style="letter-spacing: 0.15em;">
                            Find us</h6>
                        <ul class="list-unstyled mt-4 d-flex flex-column gap-3 text-white-50 small">
                            <li class="d-flex gap-3">
                                <i class="bi bi-geo-alt-fill text-primary mt-1"></i>
                                <span>14 Marlowe Lane, Old Town Quarter<br>Lisbon</span>
                            </li>
                            <li class="d-flex gap-3">
                                <i class="bi bi-clock text-primary mt-1"></i>
                                <div>
                                    <span class="d-block">Monday – Thursday: 12:00 – 23:00</span>
                                    <span class="d-block">Friday – Saturday: 12:00 – 01:00</span>
                                    <span class="d-block">Sunday: 12:00 – 22:00</span>
                                </div>
                            </li>
                            <li class="d-flex gap-3">
                                <i class="bi bi-envelope text-primary mt-1"></i>
                                <a href="mailto:hello@saffronandember.com"
                                    class="text-white-50 text-decoration-none footer-link">hello@saffronandember.com</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h6 class="text-uppercase small text-white-50 fw-semibold" style="letter-spacing: 0.15em;">
                            Newsletter</h6>
                        <p class="mt-4 small text-white-50">Seasonal menus, chef's table invitations, nothing else.</p>
                        <div class="d-flex align-items-center gap-2 mt-3">
                            <input type="email" class="form-control newsletter-input" placeholder="you@email.com">
                            <button class="btn btn-primary rounded-pill px-4 py-2 fw-semibold"
                                type="submit">Join</button>
                        </div>
                        <p class="mt-4 text-uppercase small text-white-50 fw-semibold"
                            style="letter-spacing: 0.15em;">Also on</p>
                        <div class="d-flex flex-wrap gap-2 mt-2">
                            <span class="footer-badge">Uber Eats</span>
                            <span class="footer-badge">Bolt Food</span>
                            <span class="footer-badge">Glovo</span>
                            <span class="footer-badge">Deliveroo</span>
                        </div>
                    </div>
                </div>
                <hr class="border-light border-opacity-15 mt-5 mb-4">
                <div
                    class="d-flex flex-column flex-lg-row justify-content-between align-items-center gap-4 small text-white-50">
                    <p class="mb-0">© 2026 Saffron &amp; Ember. All rights reserved.</p>
                    <div class="d-flex gap-4 flex-wrap justify-content-center">
                        <span>Visa</span>
                        <span>Mastercard</span>
                        <span>Apple Pay</span>
                        <span>Google Pay</span>
                        <span>MB Way</span>
                    </div>
                    <div class="d-flex gap-4">
                        <a href="#" class="text-white-50 text-decoration-none footer-link">Privacy</a>
                        <a href="#" class="text-white-50 text-decoration-none footer-link">Terms</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- 11. Mobile Bottom Nav (Fixed) -->
        <nav class="d-lg-none mobile-nav fixed-bottom z-3">
            <ul class="nav nav-fill">
                <li class="nav-item"><a href="#"
                        class="nav-link d-flex flex-column align-items-center small text-primary py-2"><i
                            class="bi bi-house fs-5"></i> <span class="small">Home</span></a></li>
                <li class="nav-item"><a href="#"
                        class="nav-link d-flex flex-column align-items-center small text-muted py-3"><svg
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-utensils-crossed h-5 w-5"
                            aria-hidden="true">
                            <path d="m16 2-2.3 2.3a3 3 0 0 0 0 4.2l1.8 1.8a3 3 0 0 0 4.2 0L22 8"></path>
                            <path d="M15 15 3.3 3.3a4.2 4.2 0 0 0 0 6l7.3 7.3c.7.7 2 .7 2.8 0L15 15Zm0 0 7 7"></path>
                            <path d="m2.1 21.8 6.4-6.3"></path>
                            <path d="m19 5-7 7"></path>
                        </svg> <span class="small">Menu</span></a></li>
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
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Custom JS for Sticky Navbar & Hamburger Icon -->
    <script>
        window.addEventListener('scroll', function() {
            const header = document.getElementById('mainNavbar');
            const navbarHeight = header.offsetHeight;
            if (window.scrollY > 50) {
                header.classList.remove('sticky-top');
                header.classList.add('fixed-top', 'shadow-sm');
                document.body.style.paddingTop = navbarHeight + 'px';
            } else {
                header.classList.remove('fixed-top', 'shadow-sm');
                header.classList.add('sticky-top');
                document.body.style.paddingTop = '0px';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            const menuCollapse = document.getElementById('navbarContent');
            const hamburgerIcon = document.getElementById('hamburgerIcon');
            const closeIcon = document.getElementById('closeIcon');

            if (menuCollapse && hamburgerIcon && closeIcon) {
                menuCollapse.addEventListener('shown.bs.collapse', function() {
                    hamburgerIcon.classList.add('d-none');
                    closeIcon.classList.remove('d-none');
                });
                menuCollapse.addEventListener('hidden.bs.collapse', function() {
                    hamburgerIcon.classList.remove('d-none');
                    closeIcon.classList.add('d-none');
                });
            }
        });
    </script>

</body>

</html>
