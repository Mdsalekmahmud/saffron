
<x-app>
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
                            <span class="bg-success rounded-circle" style="width: 8px; height: 8px;"></span> Open now
                            · 28
                            min average delivery
                        </span>

                        <h1 class="mt-4   lh-1"><samp
                                style="font-family: 'Fraunces', serif;
                                                          color: #F5F1E9;
                                                          font-size: 72px;
                                                          line-height: 73px;
                                                          font-weight: 500;">Cooked
                                over fire.</samp><br><span class="text-primary"
                                style="font-family: 'Fraunces', serif; font-size: 67px; line-height: 49px; font-weight: 500;">Served
                                without fuss.</span></h1>
                        <p class="text-white-50"
                            style="max-width: 500px;    max-width: 500px;
                                                          font-size: 16px;
                                                          line-height: 23px;
                                                          font-weight: 500;
                                                          font-family: 'Fraunces', serif; }">
                            Fire-kissed cooking, served with
                            intention. Order in under a minute for delivery, pickup or dine-in — or book the corner
                            table
                            you keep asking for.</p>

                        <div class="mt-4 d-flex flex-column flex-sm-row gap-3">
                            <a href="/menu"
                                class="btn btn-primary rounded-pill px-4 py-2 fs-6 fw-semibold d-flex align-items-center justify-content-center"
                                style="min-height: 56px;">Order now</a>
                            <a href="/reservations"
                                class="btn btn-outline-light rounded-pill px-4 py-2 fs-6 fw-semibold d-flex align-items-center justify-content-center"
                                style="min-height: 56px; min-height: 56px;
                                                         border: 1;
                                                         border-color: #F5F1E9;">Reserve
                                a table</a>
                        </div>

                        <dl class="row row-cols-3 mt-5 border-top border-opacity-15 pt-4 g-4"
                            style="max-width: 450px; font-family: 'Outfit', ui-sans-serif, system-ui, sans-serif;">

                            <div class="col">

                                <dt class="fs-3 fw-bold text-primary font-display">4.9</dt>
                                <dd class="text-uppercase small text-white-50 opacity-75 mt-1">
                                    1,842 reviews
                                </dd>
                            </div>

                            <div class="col">

                                <dt class="fs-3 fw-bold text-primary font-display">28 min</dt>
                                <dd class="text-uppercase small text-white-50 opacity-75 mt-1">
                                    avg. delivery
                                </dd>
                            </div>

                            <div class="col">

                                <dt class="fs-3 fw-bold text-primary font-display">50+</dt>
                                <dd class="text-uppercase small text-white-50 opacity-75 mt-1">
                                    dishes daily
                                </dd>
                            </div>

                        </dl>
                    </div>
                </div>
            </section>

            <!-- 4. Service Icons Bar -->
            <section class="border-bottom border-light bg-cream py-4" style="background-color:#fcf9f4;">
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
            <section class="container py-5 my-3" style="">
                <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                    <div class="max-w-2xl" style="max-width: 550px;">
                        <p class="eyebrow mb-2">Browse</p>
                        <h2 class="display-6 fw-semibold lh-sm">Start where you're hungriest</h2>
                        <p class="text-muted mt-2">Ten sections, rewritten every season around what our farm partners
                            send.
                        </p>
                    </div>
                    <a href="#"
                        class="text-decoration-none text-primary fw-semibold border-bottom border-primary pb-1 d-inline-flex align-items-center gap-2 small transition">See
                        the full menu <i class="bi bi-arrow-right small"></i></a>
                </div>

                <div class="row g-3 row-cols-2 row-cols-md-3 row-cols-lg-5">
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Signatures</h5>
                            <p class="small text-muted mb-2">The dishes we're known for</p><span
                                class="small fw-semibold text-primary">7 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">From the Fire</h5>
                            <p class="small text-muted mb-2">Charcoal &amp; open flame</p><span
                                class="small fw-semibold text-primary">6 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Wood-Fired Pizza</h5>
                            <p class="small text-muted mb-2">72-hour fermented dough</p><span
                                class="small fw-semibold text-primary">6 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Handmade Pasta</h5>
                            <p class="small text-muted mb-2">Rolled fresh each morning</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Ocean</h5>
                            <p class="small text-muted mb-2">Day-boat catch</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Garden</h5>
                            <p class="small text-muted mb-2">Farm partners, picked at dawn</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Burgers</h5>
                            <p class="small text-muted mb-2">Dry-aged patties</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Small Plates</h5>
                            <p class="small text-muted mb-2">Made for sharing</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Sweet</h5>
                            <p class="small text-muted mb-2">Pastry room classics</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                    <div class="col"><a href="#"
                            class="text-decoration-none text-dark hover-lift d-block p-4 bg-white border rounded-5 shadow-sm h-100">
                            <h5 class="fw-semibold text-primary-hover">Drinks</h5>
                            <p class="small text-muted mb-2">Cellar &amp; bar</p><span
                                class="small fw-semibold text-primary">5 dishes <i
                                    class="bi bi-arrow-right"></i></span>
                        </a></div>
                </div>
            </section>

            <!-- 6. Chef's Recommendations -->
            <section class="bg-cream py-5">
                <div class="container">
                    <div class="max-w-2xl mb-4" style="max-width: 650px;">
                        <p class="eyebrow mb-2">Chef recommendations</p>
                        <h2 class="display-6 fw-semibold lh-sm">What Inês would order tonight</h2>
                        <p class="text-muted mt-2">Fifteen years between San Sebastián and Lisbon, three of them
                            running
                            the grill at a two-star kitchen. She cooks over fire because it refuses to be rushed.</p>
                    </div>

                    <div class="row g-4">
                        <!-- Card 1 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">

                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                        class="card-img-top" alt="Steak"
                                        style="height: 240px; object-fit: cover;">

                                    <span
                                        class="position-absolute top-0 start-0 m-3 badge bg-gold text-dark rounded-pill px-3 py-2 text-uppercase small fw-semibold">Chef's
                                        pick</span>

                                    <button type="button"
                                        class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                        style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                        <i style="padding-top: 5px;"
                                            class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                    </button>
                                </div>

                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-start gap-2">
                                        <h5 class="card-title card-text-hover fw-semibold mb-0">Ember Ribeye, Bone
                                            Marrow
                                            Butter</h5>
                                        <span class="fw-bold text-primary fs-5 text-nowrap">€29.00</span>
                                    </div>


                                    <p class="card-text small text-muted line-clamp-2 mt-2 mb-3">Cooked over Iberian
                                        oak
                                        until the edges catch, then rested in its own juices and finished at the pass
                                        with
                                        cultured butter.</p>

                                    <div class="d-flex flex-wrap gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i> 4.7 (314)</span>
                                        <span><i class="bi bi-clock me-1"></i> 21 min</span>
                                        <span><i class="bi bi-fire me-1"></i> 609 kcal</span>
                                    </div>

                                    <div class="mt-auto d-flex gap-2">
                                        <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                                class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                        <a href="#"
                                            class="btn btn-outline-dark-brand rounded-pill px-4 fw-semibold"
                                            style="padding-top: 8px;">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">

                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                        class="card-img-top" alt="Steak"
                                        style="height: 240px; object-fit: cover;">

                                    <span
                                        class="position-absolute top-0 start-0 m-3 badge bg-gold text-dark rounded-pill px-3 py-2 text-uppercase small fw-semibold">Chef's
                                        pick</span>

                                    <button type="button"
                                        class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                        style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                        <i style="padding-top: 5px;"
                                            class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                    </button>
                                </div>

                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-start gap-2">
                                        <h5 class="card-title card-text-hover fw-semibold mb-0">Ember Ribeye, Bone
                                            Marrow
                                            Butter</h5>
                                        <span class="fw-bold text-primary fs-5 text-nowrap">€29.00</span>
                                    </div>


                                    <p class="card-text small text-muted line-clamp-2 mt-2 mb-3">Cooked over Iberian
                                        oak
                                        until the edges catch, then rested in its own juices and finished at the pass
                                        with
                                        cultured butter.</p>

                                    <div class="d-flex flex-wrap gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i> 4.7 (314)</span>
                                        <span><i class="bi bi-clock me-1"></i> 21 min</span>
                                        <span><i class="bi bi-fire me-1"></i> 609 kcal</span>
                                    </div>

                                    <div class="mt-auto d-flex gap-2">
                                        <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                                class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                        <a href="#"
                                            class="btn btn-outline-dark-brand rounded-pill px-4 fw-semibold"
                                            style="padding-top: 8px;">Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="col-md-4">
                            <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">

                                <div class="position-relative">
                                    <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                        class="card-img-top" alt="Steak"
                                        style="height: 240px; object-fit: cover;">

                                    <span
                                        class="position-absolute top-0 start-0 m-3 badge bg-gold text-dark rounded-pill px-3 py-2 text-uppercase small fw-semibold">Chef's
                                        pick</span>

                                    <button type="button"
                                        class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                        style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                        <i style="padding-top: 5px;"
                                            class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                    </button>
                                </div>

                                <div class="card-body p-4 d-flex flex-column">
                                    <div class="d-flex justify-content-between align-items-start gap-2">
                                        <h5 class="card-title card-text-hover fw-semibold mb-0">Ember Ribeye, Bone
                                            Marrow
                                            Butter</h5>
                                        <span class="fw-bold text-primary fs-5 text-nowrap">€29.00</span>
                                    </div>


                                    <p class="card-text small text-muted line-clamp-2 mt-2 mb-3">Cooked over Iberian
                                        oak
                                        until the edges catch, then rested in its own juices and finished at the pass
                                        with
                                        cultured butter.</p>

                                    <div class="d-flex flex-wrap gap-3 text-muted small mb-3">
                                        <span><i class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i><i
                                                class="bi bi-star-fill text-gold"></i> 4.7 (314)</span>
                                        <span><i class="bi bi-clock me-1"></i> 21 min</span>
                                        <span><i class="bi bi-fire me-1"></i> 609 kcal</span>
                                    </div>

                                    <div class="mt-auto d-flex gap-2">
                                        <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                                class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                        <a href="#"
                                            class="btn btn-outline-dark-brand rounded-pill px-4 fw-semibold"
                                            style="padding-top: 8px;">Details</a>
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
                    <div class="max-w-2xl" style="max-width: 650px;">
                        <p class="eyebrow mb-2">Today's specials</p>
                        <h2 class="display-6 fw-semibold lh-sm">Priced down until service ends</h2>
                    </div>
                    <a href="#"
                        class="text-decoration-none text-primary fw-semibold border-bottom border-primary pb-1 d-inline-flex align-items-center gap-2 small transition">All
                        offers <i class="bi bi-arrow-right small"></i></a>
                </div>

                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-4">
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Save
                                    €7.50</span>
                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Iberian Pork Presa -->
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Save
                                    €7.50</span>
                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--: Nduja & Hot Honey -->
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Save
                                    €7.50</span>
                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wild Boar Pappardelle -->
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Save
                                    €7.50</span>
                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>


            <section class="container py-5 my-3">

                <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                    <div class="max-w-2xl" style="max-width: 650px;">
                        <p class="eyebrow mb-2">Most ordered</p>
                        <h2 class="display-6 fw-semibold lh-sm">Popular this week</h2>
                    </div>
                </div>

                <div class="row g-4 row-cols-1 row-cols-sm-2 row-cols-lg-4">
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">
                                <span
                                    class="position-absolute top-0 start-0 m-3 badge bg-primary text-white rounded-pill px-3 py-2 text-uppercase small fw-semibold">Chef's
                                    pick </span>
                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Iberian Pork Presa -->
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">

                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Nduja & Hot Honey -->
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">

                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wild Boar Pappardelle -->
                    <div class="col">
                        <div class="card border-0 shadow-sm rounded-5 h-100 hover-lift overflow-hidden zoom-media">
                            <div class="position-relative">
                                <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                    class="card-img-top" alt="Saffron Risotto"
                                    style="height: 200px; object-fit: cover;">
                                <button type="button"
                                    class="position-absolute top-0 end-0 m-3 glass-btn rounded-circle border-0 d-flex align-items-center justify-content-center"
                                    style="width: 44px; height: 44px; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(4px);">
                                    <i style="padding-top: 5px;"
                                        class="primary-button-hover bi bi-heart text-secondary fs-5"></i>
                                </button>
                            </div>
                            <div class="card-body p-3 d-flex flex-column">
                                <div class="d-flex justify-content-between align-items-start gap-2">
                                    <h6 class="fw-semibold mb-0">Saffron Risotto,<br>Scarlet Prawn</h6>
                                    <div class="text-end text-nowrap">
                                        <span class="fw-bold text-primary small">€24.50</span><br>
                                        <span class="small text-decoration-line-through text-muted">€32.00</span>
                                    </div>
                                </div>
                                <p class="card-text small text-muted line-clamp-2 mt-1 mb-2">A recipe our head chef
                                    learned
                                    from her grandmother in the Alentejo, rebuilt with produce from our farm partners.
                                </p>
                                <div class="d-flex flex-wrap gap-3 align-items-center text-muted small mb-3">
                                    <span><i class="bi bi-star-fill text-gold"></i> 4.4 (177)</span>
                                    <span><i class="bi bi-clock"></i> 14 min</span>
                                    <span><i class="bi bi-fire"></i> 395 kcal</span>
                                </div>
                                <div class="mt-auto d-flex gap-2 align-items-center">
                                    <button class="btn btn-primary rounded-pill flex-grow-1 fw-semibold py-2"><i
                                            class="bi bi-plus-lg me-1"></i>Add to bag</button>
                                    <a href="#"
                                        class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </section>
            <!-- 8. Reviews Section -->
            <section class="bg-ink py-5 text-white">
                <div class="container">
                    <div class="max-w-2xl mb-4">
                        <p class="eyebrow opacity-75">Guest reviews</p>
                        <h2 class="display-6 fw-semibold">1,842 people rated us 4.9</h2>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="border border-light border-opacity-10 rounded-5 p-4 h-100" style="background-color:  #241D18"><svg
                                    class="mb-3 text-primary" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                </svg>
                                <p class="small lh-lg text-white-75 opacity-75">The ribeye arrived still whispering
                                    from
                                    the grill. Delivery was 24 minutes and the plating survived intact.</p>
                                <div
                                    class="d-flex align-items-center gap-2 mt-3 pt-3 border-top border-light border-opacity-10">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center fw-bold"
                                        style="width: 36px; height: 36px; font-size: 14px;">MO</div>
                                    <div>
                                        <div class="fw-semibold small">Marta Oliveira</div>
                                        <div class="text-white-50 opacity-50 small" style="font-size: 10px;"> <span
                                                style="display: flex; gap:2px;"><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i></span> 2 days ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border border-light border-opacity-10 rounded-5 p-4 h-100" style="background-color:  #241D18"><svg
                                    class="mb-3 text-primary" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M16 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                    <path
                                        d="M5 3a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2 1 1 0 0 1 1 1v1a2 2 0 0 1-2 2 1 1 0 0 0-1 1v2a1 1 0 0 0 1 1 6 6 0 0 0 6-6V5a2 2 0 0 0-2-2z" />
                                </svg>
                                <p class="small lh-lg text-white-75 opacity-75">We booked the VIP room for eight
                                    people.
                                    The team remembered a nut allergy without being asked twice.</p>
                                <div
                                    class="d-flex align-items-center gap-2 mt-3 pt-3 border-top border-light border-opacity-10">
                                    <div class="bg-primary rounded-circle d-flex align-items-center justify-content-center fw-bold"
                                        style="width: 36px; height: 36px; font-size: 14px;">DR</div>
                                    <div>
                                        <div class="fw-semibold small">Daniel Reyes</div>
                                        <div class="text-white-50 opacity-50 small" style="font-size: 10px;"> <span
                                                style="display: flex; gap:2px;"><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i></span> 1 week ago</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="border border-light border-opacity-10 rounded-5 p-4 h-100" style="background-color:  #241D18"><svg
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
                                        <div class="text-white-50 opacity-50 small" style="font-size: 10px;">
                                            <span style="display: flex; gap:2px;"><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i><i
                                                    class="bi bi-star-fill text-gold"></i></span> 2 weeks ago
                                        </div>
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
                                <div class="ratio aspect-square rounded-5 overflow-hidden zoom-media border"><img
                                        src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=400"
                                        class="w-100 h-100 object-fit-cover"></div>
                            </div>
                            <div class="col">
                                <div class="ratio aspect-square rounded-5 overflow-hidden zoom-media border"><img
                                        src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
                                        class="w-100 h-100 object-fit-cover"></div>
                            </div>
                            <div class="col">
                                <div class="ratio aspect-square rounded-5 overflow-hidden zoom-media border"><img
                                        src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=400"
                                        class="w-100 h-100 object-fit-cover"></div>
                            </div>
                            <div class="col">
                                <div class="ratio aspect-square rounded-5 overflow-hidden zoom-media border"><img
                                        src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
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
                            <a href="#"
                                class="btn btn-outline-dark-brand rounded-pill px-3 fw-semibold pt-2">Find
                                us</a>
                        </div>
                        <div class="d-flex flex-wrap gap-2 mt-4">
                            <span
                                class="badge bg-light btn-outline-dark-brand text-dark border rounded-pill px-3 py-2 fw-normal"
                                style="    font-size: 15px;">Uber Eats</span>
                            <span
                                class="badge bg-light btn-outline-dark-brand text-dark border rounded-pill px-3 py-2 fw-normal"
                                style="    font-size: 15px;">Bolt Food</span>
                            <span
                                class="badge bg-light btn-outline-dark-brand text-dark border rounded-pill px-3 py-2 fw-normal"
                                style="    font-size: 15px;">Glovo</span>
                        </div>
                        <div class="mt-3 d-flex align-items-center gap-2">
                            <div class="text-gold" style="display: flex; gap:2px;"><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i></div><span
                                class="small text-muted" style="font-size:12px;">4.9 (1842)</span>
                        </div>
                    </div>
                </div>
            </section>

</x-app>