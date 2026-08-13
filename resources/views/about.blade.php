 <style>
        :root {
            --brand-orange: #d36419;
            --brand-ink: #1e1614;
            --brand-cream: #fcf9f4;
            --brand-gold: #f5a623;
            --brand-border: #e5e7eb;
        }
        body { font-family: 'Outfit', sans-serif; background-color: #ffffff; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Fraunces', serif; }
        
        .bg-ink { background-color: var(--brand-ink) !important; }
        .bg-cream { background-color: var(--brand-cream) !important; }
        .bg-primary, .btn-primary { background-color: var(--brand-orange) !important; border-color: var(--brand-orange) !important; color: #fff !important; }
        .text-primary { color: var(--brand-orange) !important; }
        .border-border { border-color: var(--brand-border) !important; }
        
        .btn-primary:hover { background-color: #b8531e !important; border-color: #b8531e !important; }
        .btn-outline-light:hover { background-color: var(--brand-orange) !important; border-color: var(--brand-orange) !important; color: #fff !important; }
        
        .container-page { max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; }
        @media (min-width: 992px) { .container-page { padding: 0 4rem; } }
        
        .eyebrow { font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--brand-orange); font-weight: 600; }
        .shadow-soft { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important; }
        
        /* হোভার এবং জুম ইফেক্ট */
        .hover-lift { transition: transform 0.2s, box-shadow 0.2s; }
        .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.05) !important; }
        .zoom-media img { transition: transform 0.5s ease; }
        .zoom-media:hover img { transform: scale(1.05); }

        /* সিএসএস সহায়ক ক্লাস */
        .text-ink-foreground\/70 { color: rgba(255, 255, 255, 0.7); }
        .aspect-4x5 { aspect-ratio: 4/5; }
    </style>

<x-app>
     <main class="flex-grow-1 pb-5 pb-lg-0">
        
        <!-- 1. Hero Section -->
        <section class="position-relative overflow-hidden bg-ink text-white" style="height: 450px">
              <img src="{{ asset('storage/images/hero-C7TCrd_2.jpg') }}"
                    alt="Fire-grilled ribeye resting on a dark ceramic plate"
                    class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" style="opacity: 0.45;">
            <div class="container-page position-relative py-5 py-md-7">
                <p class="eyebrow">Since 2014</p>
                <h1 class="mt-3 font-display fs-2 fw-semibold lh-sm" style="max-width: 800px;">We built a kitchen around a fire and let it decide the menu.</h1>
            </div>
        </section>

        <!-- 2. Our Story Section -->
        <section class="container-page py-5 my-3">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <div class="max-w-2xl">
                        <p class="eyebrow mb-2">Our story</p>
                        <h2 class="font-display fs-1 fw-semibold lh-sm">Twelve years of open flame</h2>
                    </div>
                    <div class="mt-3 d-flex flex-column gap-3 text-muted">
                        <p>Saffron &amp; Ember started as a six-table room off Marlowe Lane with a single grill and a stubborn refusal to install a fryer. The room grew; the stubbornness didn't move.</p>
                        <p>Everything is cooked over Iberian oak and holm coal. Bread is baked twice a day. Pasta is rolled each morning. Nothing that comes out of the pass has travelled further than ninety kilometres to reach it.</p>
                        <p>Our mission is simple: make food that tastes like someone cared, and make ordering it take less than a minute.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row row-cols-2 g-3">
                        <div class="col"><div class="ratio ratio-1x1 rounded-4 overflow-hidden zoom-media border border-border"><img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400" class="w-100 h-100 object-fit-cover" alt="Dish 1"></div></div>
                        <div class="col"><div class="ratio ratio-1x1 rounded-4 overflow-hidden zoom-media border border-border"><img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400" class="w-100 h-100 object-fit-cover" alt="Dish 2"></div></div>
                        <div class="col"><div class="ratio ratio-1x1 rounded-4 overflow-hidden zoom-media border border-border"><img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=400" class="w-100 h-100 object-fit-cover" alt="Dish 3"></div></div>
                        <div class="col"><div class="ratio ratio-1x1 rounded-4 overflow-hidden zoom-media border border-border"><img src="https://images.unsplash.com/photo-1624734452268-5c946dbeb65b?w=400" class="w-100 h-100 object-fit-cover" alt="Dish 4"></div></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Chef Section -->
        <section class="bg-cream py-5">
            <div class="container-page">
                <div class="row align-items-center g-5">
                    <div class="col-lg-5">
                        <div class="zoom-media overflow-hidden rounded-4 border border-border">
                            <img src="https://images.unsplash.com/photo-1590944392279-57c818ad7dbf?w=600" class="aspect-4x5 w-100 object-fit-cover" alt="Inês Carvalho">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <p class="eyebrow">Executive Chef</p>
                        <h2 class="mt-2 font-display fs-2 fw-semibold">Inês Carvalho</h2>
                        <p class="mt-3 text-muted" style="max-width: 500px;">Fifteen years between San Sebastián and Lisbon, three of them running the grill at a two-star kitchen. She cooks over fire because it refuses to be rushed.</p>
                        
                        <div class="row row-cols-2 row-cols-md-3 g-4 mt-4">
                            <div class="col">
                                <div class="border-top border-border pt-3">
                                    <p class="font-display fs-4 text-primary fw-semibold">2019</p>
                                    <p class="small text-muted">Best New Kitchen, Lisboa Eats</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border-top border-border pt-3">
                                    <p class="font-display fs-4 text-primary fw-semibold">2022</p>
                                    <p class="small text-muted">Sustainability Award</p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="border-top border-border pt-3">
                                    <p class="font-display fs-4 text-primary fw-semibold">2025</p>
                                    <p class="small text-muted">Top 50 Iberian Tables</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Sustainability Section -->
        <section class="container-page py-5 my-3">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                <div class="max-w-2xl" style="max-width: 550px;">
                    <p class="eyebrow mb-2">Sustainability</p>
                    <h2 class="font-display fs-1 fw-semibold lh-sm">Farm partners, not suppliers</h2>
                    <p class="text-muted mt-2">Four families grow most of what we serve. We pay before harvest, take the imperfect crates, and print their names on the menu.</p>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-md-4 g-4">
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <h5 class="font-display fs-5">Quinta do Vale</h5>
                        <p class="small text-muted mt-2 mb-0">Within 90 km of the kitchen door.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <h5 class="font-display fs-5">Herdade Alcaria</h5>
                        <p class="small text-muted mt-2 mb-0">Within 90 km of the kitchen door.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <h5 class="font-display fs-5">Mar Fresco Co-op</h5>
                        <p class="small text-muted mt-2 mb-0">Within 90 km of the kitchen door.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <h5 class="font-display fs-5">Serra Dairy</h5>
                        <p class="small text-muted mt-2 mb-0">Within 90 km of the kitchen door.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Testimonials Section -->
        <section class="container-page pb-5">
            <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                <div class="max-w-2xl" style="max-width: 550px;">
                    <p class="eyebrow mb-2">Testimonials</p>
                    <h2 class="font-display fs-1 fw-semibold lh-sm">In their words</h2>
                </div>
            </div>
            
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <blockquote class="small text-muted mb-3">Ordering took under a minute and I could watch the kitchen move through each stage. Small thing, but it makes waiting feel good.</blockquote>
                        <figcaption class="fw-semibold text-dark small">Tomás Ferreira</figcaption>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <blockquote class="small text-muted mb-3">The burnt Basque cheesecake is the reason I have a rewards balance at all. Worth every point.</blockquote>
                        <figcaption class="fw-semibold text-dark small">Elena Vasquez</figcaption>
                    </div>
                </div>
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <blockquote class="small text-muted mb-3">Dine-in QR ordering was seamless. Paid at the table, no waiting for a card machine.</blockquote>
                        <figcaption class="fw-semibold text-dark small">Jonas Weber</figcaption>
                    </div>
                </div>
            </div>

            <!-- 6. Bottom Banner / CTA -->
            <div class="mt-5 bg-ink rounded-4 p-5 text-center text-white">
                <h2 class="font-display fs-2 fw-bold">Come eat with us</h2>
                <p class="mt-3 text-white-50">14 Marlowe Lane, Old Town Quarter, Lisbon</p>
                <div class="mt-4 d-flex flex-wrap justify-content-center gap-3">
                    <a href="/reservations" class="btn btn-primary rounded-pill px-5 py-3 fw-semibold">Reserve a table</a>
                    <a href="/menu" class="btn btn-outline-light rounded-pill px-5 py-3 fw-semibold">Order delivery</a>
                </div>
            </div>
        </section>

    </main>
</x-app>