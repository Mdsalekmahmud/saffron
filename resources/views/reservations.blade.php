<style>
    :root {
        --brand-orange: #d36419;
        --brand-ink: #1e1614;
        --brand-cream: #fcf9f4;
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

    .bg-cream {
        background-color: var(--brand-cream) !important;
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
            padding: 0 0rem;
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

    .btn-active-border {
        border-color: var(--brand-orange) !important;
    }

    .sticky-sidebar {
        top: 72px; /* only main nav */
    z-index: 100;
}
</style>

<x-app>
    <main class="flex-grow-1 pb-5 pb-lg-0">

        <div class="container-page py-5">
            <!-- Page Header -->
            <p class="eyebrow">Reservations</p>
            <h1 class="mt-3 font-display fw-semibold" style="font-size:60px;">Keep a table warm</h1>
            <p class="mt-3 text-muted" style="max-width: 500px;">Fourteen tables, one terrace and a private room.
                Confirmation is instant — we hold your seat for fifteen minutes past the hour.</p>

            <!-- Reservation Form -->
            <form class="mt-5 row">

                <!-- Left Column: Date, Guests, Seating -->
                <div class="col-lg-8">
                    <!-- Section 1: Date & Time -->
                    <section class="border border-border rounded-5 p-4 bg-white shadow-soft mb-4">
                        <h2 class="font-display fs-5 d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-calendar4-week text-primary"></i> Date &amp; time
                        </h2>

                        <label for="date" class="d-block small text-uppercase fw-semibold text-muted">Date</label>
                        <input id="date" required type="date" class="form-control rounded-5 newsletter-input mt-1"
                            style="min-height: 52px; max-width: 250px;">

                        <p class="mt-4 small text-uppercase fw-semibold text-muted mb-2 ">Available times</p>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">12:00</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">12:30</button>
                            <button type="button" disabled
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active text-decoration-line-through">13:00</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">13:30</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">18:30</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">19:00</button>
                            <button type="button" class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">19:30</button>
                            <button type="button" disabled
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active text-decoration-line-through">20:00</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">20:30</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">21:00</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">21:30</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-pill px-4 py-2 flex-shrink-0 border category-button active">22:00</button>
                        </div>
                    </section>

                    <!-- Section 2: Party Size -->
                    <section class="border border-border rounded-4 p-4 bg-white shadow-soft mb-4">
                        <h2 class="font-display fs-5 d-flex align-items-center gap-2 mb-3">
                            <i class="bi bi-people text-primary"></i> Party size
                        </h2>
                        <div class="d-flex flex-wrap gap-2">
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">1</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">2</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">3</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">4</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">5</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">6</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">8</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">10</button>
                            <button type="button"
                                class="btn btn-outline-dark-brand rounded-circle d-flex align-items-center justify-content-center fw-semibold p-0"
                                style="width: 48px; height: 48px;">12</button>
                        </div>
                    </section>

                    <!-- Section 3: Seating -->
                    <section class="border border-border rounded-5 p-4 bg-white shadow-soft mb-4">
                        <h2 class="font-display fs-5 mb-3">Seating</h2>

                        <div class="row g-3">
                            <div class="col-sm-4">
                                <button type="button"
                                    class=" btn-outline-dark-brand w-100 h-100 border border-primary bg-primary bg-opacity-10 rounded-5 p-3 text-start btn btn-active-border"
                                    style="background-color: rgba(211, 100, 25, 0.08);">
                                    <p class="fw-semibold mb-1">Indoor</p>
                                    <p class="small text-muted mb-0">By the open grill</p>
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button"
                                    class="w-100 h-100 btn-outline-dark-brand border border-border rounded-5 p-3 text-start bg-transparent transition">
                                    <p class="fw-semibold mb-1">Terrace</p>
                                    <p class="small text-muted mb-0">Afternoon light, heaters at night</p>
                                </button>
                            </div>
                            <div class="col-sm-4">
                                <button type="button"
                                    class="w-100 h-100 btn-outline-dark-brand border border-border rounded-5 p-3 text-start bg-transparent transition">
                                    <p class="fw-semibold mb-1">VIP Room</p>
                                    <p class="small text-muted mb-0">Up to 12 guests, private service</p>
                                </button>
                            </div>
                        </div>

                        <label for="requests" class="d-block small text-uppercase fw-semibold text-muted mt-4">Special
                            requests</label>
                        <textarea id="requests" rows="3" placeholder="Birthday, allergies, quiet corner…"
                            class="form-control btn-outline-dark-brand rounded-5 mt-1 p-3 border-border"></textarea>
                    </section>
                </div>

                <!-- Right Column: Booking Summary -->
                <div class="col-lg-4">
                    <aside class="sticky-top border border-border rounded-5 p-4 bg-white shadow-soft"
                        style="top: 80px; z-index: 10;">
                        <h2 class="font-display fs-5">Your booking</h2>
                        <dl class="mt-3 small d-flex flex-column gap-1 ">
                            <div class="d-flex justify-content-between ">
                                <dt class="text-muted">Date</dt>
                                <dd class="fw-semibold">—</dd>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <dt class="text-muted">Time</dt>
                                <dd class="fw-semibold">19:30</dd>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <dt class="text-muted">Guests</dt>
                                <dd class="fw-semibold">2</dd>
                            </div>
                            <div class="d-flex justify-content-between ">
                                <dt class="text-muted">Seating</dt>
                                <dd class="fw-semibold">Indoor</dd>
                            </div>
                        </dl>
                        <button type="submit"
                            class="btn btn-primary w-100 rounded-pill py-3 fw-semibold mt-3">Confirm
                            reservation</button>
                        <p class="mt-3 small text-muted">Free cancellation up to 2 hours before. Parties of 8+ may be
                            asked for a card hold.</p>
                    </aside>
                </div>

            </form>
        </div>

    </main>
</x-app>
