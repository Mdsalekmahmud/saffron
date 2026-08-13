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

     .bg-ink {
         background-color: var(--brand-ink) !important;
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

     .bg-gold {
         background-color: var(--brand-gold) !important;
         color: var(--brand-ink) !important;
     }

     .text-gold {
         color: var(--brand-gold) !important;
     }

     /* সিলেক্ট করা বাটন/ইনপুটের জন্য বর্ডার ও ব্যাকগ্রাউন্ড */
     .border-primary-custom {
         border-color: var(--brand-orange) !important;
     }

     .bg-primary-light {
         background-color: rgba(211, 100, 25, 0.08) !important;
     }

     .accent-primary {
         accent-color: var(--brand-orange);
     }

     .min-h-13 {
         min-height: 52px;
     }
 </style>
 <x-app>
         <main class="flex-grow-1 pb-5 pb-lg-0">

             <div class="container-page pt-4">
                 <!-- Breadcrumb -->
                 <nav aria-label="Breadcrumb" class="small text-muted d-flex align-items-center flex-wrap">
                     <a href="/" class="text-decoration-none text-muted hover:text-primary">Home</a>
                     <span class="mx-2">/</span>
                     <a href="/menu" class="text-decoration-none text-muted hover:text-primary">Menu</a>
                     <span class="mx-2">/</span>
                     <span class="text-dark fw-semibold">Iberian Pork Presa</span>
                 </nav>
             </div>

             <!-- Product Details Section -->
             <section class="container-page py-4">
                 <div class="row g-5 align-items-start">

                     <!-- Left Column: Images & Information -->
                     <div class="col-lg-6">

                         <!-- Main Image -->
                         <div
                             class="zoom-media overflow-hidden rounded-4 border border-border bg-secondary ratio ratio-1x1">
                             <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=600"
                                 class="w-100 h-100 object-fit-cover" alt="Iberian Pork Presa">
                         </div>

                         <!-- Thumbnail Images (4 Columns) -->
                         <div class="row row-cols-4 g-3 mt-3">
                             <div class="col">
                                 <div
                                     class="ratio ratio-1x1 overflow-hidden rounded-3 border border-primary-custom zoom-media">
                                     <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=300"
                                         class="w-100 h-100 object-fit-cover" alt="Thumb 1">
                                 </div>
                             </div>
                             <div class="col">
                                 <div
                                     class="ratio ratio-1x1 overflow-hidden rounded-3 border border-border opacity-75 zoom-media">
                                     <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=300"
                                         class="w-100 h-100 object-fit-cover" alt="Thumb 2">
                                 </div>
                             </div>
                             <div class="col">
                                 <div
                                     class="ratio ratio-1x1 overflow-hidden rounded-3 border border-border opacity-75 zoom-media">
                                     <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=300"
                                         class="w-100 h-100 object-fit-cover" alt="Thumb 3">
                                 </div>
                             </div>
                             <div class="col">
                                 <div
                                     class="ratio ratio-1x1 overflow-hidden rounded-3 border border-border opacity-75 zoom-media">
                                     <img src="https://images.unsplash.com/photo-1600891964092-4316c288032e?w=300"
                                         class="w-100 h-100 object-fit-cover" alt="Thumb 4">
                                 </div>
                             </div>
                         </div>

                         <!-- Story Section -->
                         <div class="mt-4 d-flex flex-column gap-4">
                             <div>
                                 <h2 class="font-display fs-3 fw-semibold">The story</h2>
                                 <p class="mt-2 text-muted">A recipe our head chef learned from her grandmother in the
                                     Alentejo, rebuilt with produce from our farm partners.</p>
                             </div>

                             <!-- Ingredients & Nutrition Grid -->
                             <div class="row g-3 row-cols-1 row-cols-sm-2">
                                 <div class="col">
                                     <div class="p-4 border border-border rounded-4 bg-white h-100">
                                         <h3 class="d-flex align-items-center gap-2 font-display fs-5 fw-semibold"><i
                                                 class="bi bi-flower1 text-success"></i> Ingredients</h3>
                                         <ul class="list-unstyled mt-3 small text-muted d-flex flex-column gap-1 mb-0">
                                             <li>· Seasonal produce</li>
                                             <li>· Cold-pressed olive oil</li>
                                             <li>· Sea salt flakes</li>
                                             <li>· Fresh herbs</li>
                                             <li>· House stock</li>
                                         </ul>
                                     </div>
                                 </div>
                                 <div class="col">
                                     <div class="p-4 border border-border rounded-4 bg-white h-100">
                                         <h3 class="d-flex align-items-center gap-2 font-display fs-5 fw-semibold"><i
                                                 class="bi bi-shield-check text-primary"></i> Nutrition &amp; allergens
                                         </h3>
                                         <dl class="mt-3 small mb-0 d-flex flex-column gap-1">
                                             <div class="d-flex justify-content-between">
                                                 <dt class="text-muted">Energy</dt>
                                                 <dd class="fw-semibold">233 kcal</dd>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                 <dt class="text-muted">Prep time</dt>
                                                 <dd class="fw-semibold">9 min</dd>
                                             </div>
                                             <div class="d-flex justify-content-between">
                                                 <dt class="text-muted">Contains</dt>
                                                 <dd class="fw-semibold text-end">Dairy</dd>
                                             </div>
                                         </dl>
                                     </div>
                                 </div>
                             </div>

                             <!-- Reviews Section -->
                             <div>
                                 <h2 class="font-display fs-3 fw-semibold">What guests said</h2>
                                 <div class="mt-3 d-flex flex-column gap-3">
                                     <article class="p-4 border border-border rounded-4 bg-white">
                                         <div class="d-flex align-items-center gap-3">
                                             <span
                                                 class="d-flex align-items-center justify-content-center bg-secondary text-dark rounded-circle fw-semibold"
                                                 style="width: 40px; height: 40px;">MO</span>
                                             <div>
                                                 <p class="fw-semibold small mb-0 text-truncate">Marta Oliveira</p>
                                                 <p class="text-muted small mb-0 d-flex align-items-center gap-1">
                                                     <i class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i> <span
                                                         class="ms-1">2 days ago</span>
                                                 </p>
                                             </div>
                                         </div>
                                         <p class="mt-3 small text-muted mb-0">The ribeye arrived still whispering from
                                             the grill. Delivery was 24 minutes and the plating survived intact —
                                             genuinely restaurant quality at home.</p>
                                     </article>
                                     <article class="p-4 border border-border rounded-4 bg-white">
                                         <div class="d-flex align-items-center gap-3">
                                             <span
                                                 class="d-flex align-items-center justify-content-center bg-secondary text-dark rounded-circle fw-semibold"
                                                 style="width: 40px; height: 40px;">DR</span>
                                             <div>
                                                 <p class="fw-semibold small mb-0 text-truncate">Daniel Reyes</p>
                                                 <p class="text-muted small mb-0 d-flex align-items-center gap-1">
                                                     <i class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i> <span
                                                         class="ms-1">1 week ago</span>
                                                 </p>
                                             </div>
                                         </div>
                                         <p class="mt-3 small text-muted mb-0">We booked the VIP room for eight people.
                                             The team remembered a nut allergy without being asked twice. That's the
                                             difference.</p>
                                     </article>
                                     <article class="p-4 border border-border rounded-4 bg-white">
                                         <div class="d-flex align-items-center gap-3">
                                             <span
                                                 class="d-flex align-items-center justify-content-center bg-secondary text-dark rounded-circle fw-semibold"
                                                 style="width: 40px; height: 40px;">AK</span>
                                             <div>
                                                 <p class="fw-semibold small mb-0 text-truncate">Aisha Karim</p>
                                                 <p class="text-muted small mb-0 d-flex align-items-center gap-1">
                                                     <i class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i><i
                                                         class="bi bi-star-fill text-gold small"></i> <span
                                                         class="ms-1">2 weeks ago</span>
                                                 </p>
                                             </div>
                                         </div>
                                         <p class="mt-3 small text-muted mb-0">Best wood-fired pizza I've had outside
                                             Naples. The hot honey nduja is dangerous. Only note: I wanted a bigger
                                             portion of the focaccia.</p>
                                     </article>
                                 </div>
                             </div>
                         </div>
                     </div>

                     <!-- Right Column: Sticky Purchase Options -->
                     <div class="col-lg-6">
                         <div class="sticky-top" style="top: 100px; z-index: 10;">

                             <!-- Tags (Empty in the source, but kept the space) -->
                             <div class="d-flex flex-wrap gap-2 mb-2"></div>

                             <!-- Title -->
                             <h1 class="font-display fs-1 fw-semibold mb-3">Iberian Pork Presa</h1>

                             <!-- Rating & Metadata -->
                             <div class="d-flex flex-wrap align-items-center gap-3 text-muted small">
                                 <div class="d-flex align-items-center gap-1">
                                     <i class="bi bi-star-fill text-gold"></i>
                                     <i class="bi bi-star-fill text-gold"></i>
                                     <i class="bi bi-star-fill text-gold"></i>
                                     <i class="bi bi-star-fill text-gold"></i>
                                     <i class="bi bi-star text-gold opacity-25"></i>
                                     <span class="fw-semibold ms-1 text-dark">4.3</span>
                                     <span class="text-muted">(74)</span>
                                 </div>
                                 <span><i class="bi bi-clock"></i> 9 min</span>
                                 <span><i class="bi bi-fire"></i> 233 kcal</span>
                             </div>

                             <!-- Product Config Options -->
                             <div
                                 class="mt-4 p-4 border border-border rounded-4 bg-white shadow-soft d-flex flex-column gap-4">
                                 <!-- Size -->
                                 <fieldset>
                                     <legend class="small text-uppercase fw-semibold text-muted mb-2">Size</legend>
                                     <div class="row row-cols-3 g-2">
                                         <div class="col">
                                             <label
                                                 class="d-flex align-items-center justify-content-center border border-primary-custom bg-primary-light rounded-3 p-2 small fw-semibold cursor-pointer"
                                                 style="min-height: 52px;">
                                                 <span class="d-flex align-items-center gap-2"><input type="radio"
                                                         name="size" value="regular" checked
                                                         class="accent-primary m-0"> Regular</span>
                                             </label>
                                         </div>
                                         <div class="col">
                                             <label
                                                 class="d-flex align-items-center justify-content-center border border-border rounded-3 p-2 small cursor-pointer"
                                                 style="min-height: 52px;">
                                                 <span class="d-flex align-items-center gap-2"><input type="radio"
                                                         name="size" value="large" class="accent-primary m-0">
                                                     Large</span>
                                                 <span class="text-primary ms-1 fw-semibold">+€4.50</span>
                                             </label>
                                         </div>
                                         <div class="col">
                                             <label
                                                 class="d-flex align-items-center justify-content-center border border-border rounded-3 p-2 small cursor-pointer"
                                                 style="min-height: 52px;">
                                                 <span class="d-flex align-items-center gap-2"><input type="radio"
                                                         name="size" value="sharing" class="accent-primary m-0">
                                                     Sharing</span>
                                                 <span class="text-primary ms-1 fw-semibold">+€9.00</span>
                                             </label>
                                         </div>
                                     </div>
                                 </fieldset>

                                 <!-- Cooking Level -->
                                 <fieldset>
                                     <legend class="small text-uppercase fw-semibold text-muted mb-2">Cooking level
                                     </legend>
                                     <div class="d-flex flex-wrap gap-2">
                                         <button type="button"
                                             class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Rare</button>
                                         <button type="button"
                                             class="btn btn-primary rounded-pill px-3 py-1 small">Medium rare</button>
                                         <button type="button"
                                             class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Medium</button>
                                         <button type="button"
                                             class="btn btn-outline-secondary rounded-pill px-3 py-1 small">Well
                                             done</button>
                                     </div>
                                 </fieldset>

                                 <!-- Add-ons -->
                                 <fieldset>
                                     <legend class="small text-uppercase fw-semibold text-muted mb-2">Add-ons</legend>
                                     <div class="d-flex flex-column gap-2">
                                         <label
                                             class="d-flex align-items-center justify-content-between border border-border rounded-3 px-3 py-2 small cursor-pointer">
                                             <span class="d-flex align-items-center gap-3"><input type="checkbox"
                                                     class="form-check-input accent-primary mt-0"> Extra aged
                                                 cheese</span>
                                             <span class="text-primary fw-semibold">+€2.50</span>
                                         </label>
                                         <label
                                             class="d-flex align-items-center justify-content-between border border-border rounded-3 px-3 py-2 small cursor-pointer">
                                             <span class="d-flex align-items-center gap-3"><input type="checkbox"
                                                     class="form-check-input accent-primary mt-0"> Shaved black
                                                 truffle</span>
                                             <span class="text-primary fw-semibold">+€6.00</span>
                                         </label>
                                         <label
                                             class="d-flex align-items-center justify-content-between border border-border rounded-3 px-3 py-2 small cursor-pointer">
                                             <span class="d-flex align-items-center gap-3"><input type="checkbox"
                                                     class="form-check-input accent-primary mt-0"> House chilli
                                                 sauce</span>
                                             <span class="text-primary fw-semibold">+€1.50</span>
                                         </label>
                                         <label
                                             class="d-flex align-items-center justify-content-between border border-border rounded-3 px-3 py-2 small cursor-pointer">
                                             <span class="d-flex align-items-center gap-3"><input type="checkbox"
                                                     class="form-check-input accent-primary mt-0"> Slow-cooked
                                                 egg</span>
                                             <span class="text-primary fw-semibold">+€2.00</span>
                                         </label>
                                     </div>
                                 </fieldset>

                                 <!-- Special Instructions -->
                                 <div>
                                     <label for="note"
                                         class="small text-uppercase fw-semibold text-muted mb-1">Special
                                         instructions</label>
                                     <textarea id="note" rows="3" placeholder="No coriander, extra crisp, allergy notes…"
                                         class="form-control rounded-3 border-border p-3 small"></textarea>
                                 </div>

                                 <!-- Quantity & Total -->
                                 <div
                                     class="d-flex align-items-center justify-content-between gap-3 border-top border-border pt-4">
                                     <div class="d-flex align-items-center bg-light p-1 rounded-pill">
                                         <button type="button"
                                             class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0"
                                             style="width: 44px; height: 44px;" disabled>−</button>
                                         <span class="min-w-3 text-center fw-semibold small">1</span>
                                         <button type="button"
                                             class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0"
                                             style="width: 44px; height: 44px;">+</button>
                                     </div>
                                     <div class="text-end">
                                         <p class="small text-uppercase text-muted fw-semibold mb-0">Total</p>
                                         <p class="font-display fs-2 fw-semibold text-primary mb-0">€20.50</p>
                                     </div>
                                 </div>

                                 <!-- Main Actions -->
                                 <div class="d-flex gap-3">
                                     <button type="button"
                                         class="btn btn-primary rounded-pill flex-grow-1 py-3 fw-semibold">Add to bag ·
                                         €20.50</button>
                                     <button type="button"
                                         class="btn btn-outline-secondary rounded-circle d-flex align-items-center justify-content-center p-0"
                                         style="width: 56px; height: 56px;">
                                         <i class="bi bi-heart fs-5"></i>
                                     </button>
                                 </div>
                             </div>

                             <!-- Frequently Bought Together -->
                             <div class="mt-4">
                                 <h3 class="font-display fs-4 fw-semibold">Frequently bought together</h3>
                                 <div class="mt-3 d-flex flex-column gap-2">
                                     <a href="#"
                                         class="text-decoration-none d-flex align-items-center gap-3 border border-border rounded-3 p-2 hover-lift bg-white text-dark">
                                         <div class="ratio ratio-1x1 rounded-3 overflow-hidden" style="width: 64px;">
                                             <img src="https://images.unsplash.com/photo-1565299624946-b28f40a0ae38?w=150"
                                                 class="w-100 h-100 object-fit-cover">
                                         </div>
                                         <div class="flex-grow-1">
                                             <p class="fw-semibold small mb-0">Triple-Cooked Chips</p>
                                             <p class="text-muted small mb-0">€19.00</p>
                                         </div>
                                         <span class="text-primary fw-bold">+</span>
                                     </a>
                                     <a href="#"
                                         class="text-decoration-none d-flex align-items-center gap-3 border border-border rounded-3 p-2 hover-lift bg-white text-dark">
                                         <div class="ratio ratio-1x1 rounded-3 overflow-hidden" style="width: 64px;">
                                             <img src="https://images.unsplash.com/photo-1540420773420-3366772f4999?w=150"
                                                 class="w-100 h-100 object-fit-cover">
                                         </div>
                                         <div class="flex-grow-1">
                                             <p class="fw-semibold small mb-0">Wood-Fired Focaccia</p>
                                             <p class="text-muted small mb-0">€14.50</p>
                                         </div>
                                         <span class="text-primary fw-bold">+</span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </section>

             <!-- You Might Also Like (Related Items) -->
             <section class="container-page py-5">
                 <div class="d-flex flex-column flex-md-row align-items-md-end justify-content-between gap-3 mb-4">
                     <div class="max-w-2xl" style="max-width: 550px;">
                         <p class="eyebrow mb-2">You might also like</p>
                         <h2 class="font-display fs-1 fw-semibold lh-sm">More from this section</h2>
                     </div>
                 </div>

                 <div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3">

                     <!-- Related Card 1 -->
                     <div class="col">
                         <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden zoom-media">
                             <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                         </div>
                     </div>

                     <!-- Related Card 2 -->
                     <div class="col">
                         <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden zoom-media">
                             <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                         </div>
                     </div>

                     <!-- Related Card 3 -->
                      <div class="col">
                         <div class="card h-100 border-0 shadow-sm rounded-4 hover-lift overflow-hidden zoom-media">
                             <x-cards.service-card image="{{ asset('assets/images/service.jpg') }}"
                                title="Web Development" description="Professional Laravel web development service."
                                url="#" />
                         </div>
                     </div>

                 </div>
             </section>

             <!-- Mobile Fixed Bottom Action Bar (LG and below) -->
             <div class="d-lg-none position-fixed bottom-0 start-0 w-100 p-3 bg-white border-top z-3">
                 <button type="button" class="btn btn-primary w-100 rounded-pill py-3 fw-semibold">Add to bag ·
                     €20.50</button>
             </div>

         </main>
 </x-app>
