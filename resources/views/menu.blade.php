<style>
    :root {
        --brand-orange: #d36419;
        --brand-ink: #1e1614;
        --brand-cream: #fcf9f4;
        --brand-gold: #f5a623;
        --brand-border: #e5e7eb;
    }

    body {
        font-family: 'Outfit', sans-serif;
        background-color: #ffffff;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    .font-display {
        font-family: 'Fraunces', serif;
    }

    /* কাস্টম কালার ক্লাস */
    .bg-cream {
        background-color: var(--brand-cream) !important;
    }

    .bg-gold {
        background-color: var(--brand-gold) !important;
        color: var(--brand-ink) !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: var(--brand-orange) !important;
        border-color: var(--brand-orange) !important;
        color: #fff !important;
    }

    .text-primary {
        color: var(--brand-orange) !important;
    }

    .border-border {
        border-color: var(--brand-border) !important;
    }

    .btn-primary:hover {
        background-color: #b8531e !important;
        border-color: #b8531e !important;
    }

    /* কাস্টম স্পেসিং ও হোভার ইফেক্ট */
    .container-page {
        max-width: 1280px;
        margin: 0 auto;
        padding: 0 1.5rem;
    }

    @media (min-width: 992px) {
        .container-page {
            padding: 0 4rem;
        }
    }

    .hover-lift {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.05) !important;
    }

    .zoom-media img {
        transition: transform 0.5s ease;
    }

    .zoom-media:hover img {
        transform: scale(1.05);
    }

    .eyebrow {
        font-size: 0.75rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--brand-orange);
        font-weight: 600;
    }

    .glass-btn {
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: blur(4px);
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        transition: transform 0.2s;
    }

    .glass-btn:hover {
        transform: scale(1.05);
    }

    /* অনুসন্ধান ইনপুটের জন্য ডান/বাম প্যাডিং */
    .search-wrapper {
        position: relative;
        flex-grow: 1;
    }

    .search-wrapper i {
        position: absolute;
        left: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }

    .search-wrapper input {
        padding-left: 3.5rem !important;
    }

    /* ক্যাটাগরি স্ক্রোল বার লুকানো */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        scrollbar-width: none;
    }

    /* স্টিকি কাস্টম পজিশন */
    .sticky-category {
        top: 72px;
        background-color: rgba(255, 255, 255, 0.9);
        backdrop-filter: blur(12px);
        z-index: 30;
    }

    .sticky-sidebar {
        top: 150px;
    }

    /* ইনপুট রেঞ্জ (Price Range) */
    input[type=range] {
        accent-color: var(--brand-orange);
    }

    .form-check-input:checked {
        background-color: var(--brand-orange);
        border-color: var(--brand-orange);
    }
</style>
<x-app>
    <main class="flex-grow-1 pb-5 pb-lg-0">

        <!-- Breadcrumb & Page Header -->
        <section class="border-bottom border-border bg-cream py-4">
            <div class="container-page">
                <nav aria-label="Breadcrumb" class="text-muted small">
                    <a href="/" class="text-decoration-none text-muted hover:text-primary">Home</a>
                    <span class="mx-2">/</span>
                    <span class="text-dark fw-semibold">Menu</span>
                </nav>
                <h1 class="mt-3 font-display fs-2 fw-semibold">The menu</h1>
                <p class="mt-2 text-muted" style="max-width: 500px;">Fifty-two dishes, rewritten each season. Everything
                    below is available for delivery, pickup and dine-in unless marked otherwise.</p>

                <!-- Search and Filter Bar -->
                <div class="mt-4 d-flex flex-column flex-sm-row gap-3">
                    <div class="search-wrapper">
                        <i class="bi bi-search fs-6"></i>
                        <label for="menu-search" class="visually-hidden">Search dishes</label>
                        <input id="menu-search" type="text"
                            class="form-control rounded-pill border shadow-sm bg-white"
                            placeholder="Search for ribeye, pizza, vegan…" style="min-height: 50px;">
                    </div>
                    <label for="sort" class="visually-hidden">Sort dishes</label>
                    <select id="sort" class="form-select rounded-pill border shadow-sm bg-white px-4 fw-medium"
                        style="min-height: 50px; width: auto; flex-shrink: 0;">
                        <option value="popular">Most popular</option>
                        <option value="rating">Highest rated</option>
                        <option value="price-asc">Price: low to high</option>
                        <option value="price-desc">Price: high to low</option>
                    </select>
                    <button type="button"
                        class="btn btn-outline-secondary rounded-pill px-4 fw-semibold d-flex align-items-center gap-2 d-lg-none"
                        style="min-height: 50px;">
                        <i class="bi bi-sliders2"></i> Filters (2)
                    </button>
                </div>
            </div>
        </section>

        <!-- Sticky Categories Filter (Navbar height 72px + 1px border = 73px) -->
        <div class="sticky-category border-bottom border-border py-3 z-3 shadow-sm">
            <div class="container-page no-scrollbar d-flex gap-2 overflow-x-auto">
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">All</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Signatures</button>
                <button type="button" class="btn btn-primary rounded-pill px-4 py-2 flex-shrink-0">From the
                    Fire</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Wood-Fired
                    Pizza</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Handmade
                    Pasta</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Ocean</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Garden</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Burgers</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Small Plates</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Sweet</button>
                <button type="button"
                    class="btn btn-outline-secondary rounded-pill px-4 py-2 flex-shrink-0 border">Drinks</button>
            </div>
        </div>

        <!-- Main Content: Sidebar & Dish Grid -->
        <section class="container-page py-5">
            <div class="row g-5">

                <!-- Sidebar (ডেস্কটপে দেখাবে) -->
                <aside class="col-lg-3 d-none d-lg-block">
                    <div class="sticky-sidebar rounded-4 border border-border bg-light p-4 shadow-sm">
                        <div class="mb-4">
                            <h6 class="small text-uppercase fw-bold text-muted tracking-wide mb-3">Max price</h6>
                            <input type="range" class="form-range w-100" min="8" max="60" step="1"
                                value="60" style="height: 4px;">
                            <p class="mt-2 small fw-semibold">Up to €60.00</p>
                        </div>
                        <div class="mb-4">
                            <h6 class="small text-uppercase fw-bold text-muted tracking-wide mb-3">Dietary</h6>
                            <div class="d-flex flex-column gap-2">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="veg">
                                    <label class="form-check-label text-capitalize" for="veg">Vegetarian</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="vegan">
                                    <label class="form-check-label text-capitalize" for="vegan">Vegan</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gluten">
                                    <label class="form-check-label text-capitalize" for="gluten">Gluten free</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="dairy">
                                    <label class="form-check-label text-capitalize" for="dairy">Dairy free</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-4">
                            <h6 class="small text-uppercase fw-bold text-muted tracking-wide mb-3">Spice level</h6>
                            <div class="d-flex flex-wrap gap-2">
                                <button type="button"
                                    class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Mild</button>
                                <button type="button"
                                    class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Warm</button>
                                <button type="button"
                                    class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Hot</button>
                                <button type="button"
                                    class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Fierce</button>
                            </div>
                        </div>
                        <div class="form-check mb-4">
                            <input class="form-check-input" type="checkbox" id="available">
                            <label class="form-check-label" for="available">Available right now</label>
                        </div>
                        <button type="button"
                            class="btn btn-link text-decoration-underline p-0 text-primary fw-semibold small">Reset all
                            filters</button>
                    </div>
                </aside>

                <!-- Dish Grid -->
                <div class="col-lg-9">
                    <p class="mb-4 text-muted small">Showing <span class="fw-bold text-dark">3</span> of 3 dishes</p>

                    <div class="row gap-1 row-cols-1 row-cols-md-2 row-cols-xl-3 g-4">

                        <!-- Dish Card 1 -->
                        <div class="col-md-4"><x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                        <div class="col-md-4"><x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                        <div class="col-md-4"><x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                        <div class="col-md-4"><x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                        <!-- Dish Card 2 -->
                        <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}" title="Web Development"
                            description="Professional Laravel web development service." url="#" />

                        <!-- Dish Card 3 (সব রকম ব্যাজ ও আইকন সহ) -->
                        <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}" title="Web Development"
                            description="Professional Laravel web development service." url="#" />

                    </div>
                </div>
            </div>
        </section>
    </main>
</x-app>
