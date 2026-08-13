<style>
    :root {
        --brand-orange: #d36419;
        --brand-ink: #1e1614;
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

    .bg-ink {
        background-color: var(--brand-ink) !important;
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

    .btn-outline-secondary:hover {
        border-color: var(--brand-orange) !important;
        color: var(--brand-orange) !important;
    }

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

    .eyebrow {
        font-size: 0.75rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: var(--brand-orange);
        font-weight: 600;
    }

    .shadow-soft {
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important;
    }

    /* হোভার এবং জুম ইফেক্ট */
    .hover-lift {
        transition: transform 0.2s, box-shadow 0.2s;
    }

    .hover-lift:hover {
        transform: translateY(-4px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05) !important;
    }

    .zoom-media img {
        transition: transform 0.5s ease;
    }

    .zoom-media:hover img {
        transform: scale(1.05);
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

    /* দাগযুক্ত বর্ডারের জন্য কাস্টম বাটন */
    .btn-dashed-primary {
        border: 1px dashed var(--brand-orange) !important;
        color: var(--brand-orange) !important;
        background-color: transparent !important;
        transition: all 0.3s ease;
    }

    .btn-dashed-primary:hover {
        background-color: var(--brand-orange) !important;
        color: #fff !important;
    }
</style>
<x-app>
    <main class="flex-grow-1 pb-5 pb-lg-0">

        <div class="container-page py-4">
            <!-- Page Header -->
            <p class="eyebrow">Offers</p>
            <h1 class="mt-3 font-display fs-2 fw-semibold">Worth ordering twice</h1>

            <!-- Offer Cards Section -->
            <div class="row g-4 mt-3 row-cols-1 row-cols-md-3">

                <!-- Offer Card 1 -->
                <div class="col">
                    <div class="card h-100 border border-border rounded-4 p-4 shadow-soft hover-lift bg-white">
                        <p class="eyebrow">Ends 31 Dec</p>
                        <h3 class="font-display fs-4 lh-sm mt-2">20% off your first order</h3>
                        <p class="text-muted small flex-grow-1 mt-2">New guests only. Minimum €25. Valid on delivery and
                            pickup.</p>
                        <button
                            class="btn btn-dashed-primary rounded-pill px-4 py-2 fw-bold small tracking-wide mt-3 align-self-start">EMBER20</button>
                    </div>
                </div>

                <!-- Offer Card 2 -->
                <div class="col">
                    <div class="card h-100 border border-border rounded-4 p-4 shadow-soft hover-lift bg-white">
                        <p class="eyebrow">All month</p>
                        <h3 class="font-display fs-4 lh-sm mt-2">Free focaccia with any two mains</h3>
                        <p class="text-muted small flex-grow-1 mt-2">Wood-fired, rosemary and Maldon salt. Automatically
                            added at checkout.</p>
                        <button
                            class="btn btn-dashed-primary rounded-pill px-4 py-2 fw-bold small tracking-wide mt-3 align-self-start">FIRESIDE</button>
                    </div>
                </div>

                <!-- Offer Card 3 -->
                <div class="col">
                    <div class="card h-100 border border-border rounded-4 p-4 shadow-soft hover-lift bg-white">
                        <p class="eyebrow">Fri &amp; Sat</p>
                        <h3 class="font-display fs-4 lh-sm mt-2">€8 off after 22:00</h3>
                        <p class="text-muted small flex-grow-1 mt-2">Because the kitchen is at its best when the room
                            quiets down.</p>
                        <button
                            class="btn btn-dashed-primary rounded-pill px-4 py-2 fw-bold small tracking-wide mt-3 align-self-start">LATENIGHT</button>
                    </div>
                </div>

            </div>

            <!-- Specials Section -->
            <div class="mt-5 pt-3">
                <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                    <div class="max-w-2xl" style="max-width: 550px;">
                        <p class="eyebrow mb-2">Reduced today</p>
                        <h2 class="font-display fs-1 fw-semibold lh-sm">Specials on the board</h2>
                    </div>
                    <a href="/menu"
                        class="text-decoration-none text-primary fw-semibold border-bottom border-primary pb-1 d-inline-flex align-items-center gap-2 small transition">Full
                        menu <i class="bi bi-arrow-right small"></i></a>
                </div>

                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-3">

                    <!-- Dish Card 1 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden zoom-media">
                            <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                    </div>

                    <!-- Dish Card 2 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden zoom-media">
                            <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                    </div>

                    <!-- Dish Card 3 -->
                    <div class="col">
                        <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden zoom-media">
                            <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                        </div>
                    </div>

                </div>
            </div>

            <!-- Banner CTA Section -->
            <div class="mt-5 bg-ink rounded-4 p-4 p-md-5 text-center text-white">
                <h2 class="font-display fs-2 fw-bold">Earn points every order</h2>
                <p class="mx-auto mt-3 text-white-50" style="max-width: 400px;">Ten points per euro. Five hundred
                    points buys dessert for the table.</p>
                <a href="/account" class="btn btn-primary rounded-pill px-5 py-3 fw-semibold mt-4 d-inline-block">See
                    my rewards</a>
            </div>

        </div>
    </main>
</x-app>
