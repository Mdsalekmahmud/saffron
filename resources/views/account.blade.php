   <style>
       :root {
           --brand-orange: #d36419;
           --brand-ink: #1e1614;
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

       .bg-ember {
           background-color: var(--brand-orange) !important;
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

       .btn-outline-secondary:hover {
           border-color: var(--brand-orange) !important;
           color: var(--brand-orange) !important;
       }

       .container-page {
           max-width: 1280px;
           margin: 0 auto;
           padding: ;
       }

       @media (min-width: 992px) {
           .container-page {
               /* padding: 0 4rem; */
           }
       }

       .no-scrollbar::-webkit-scrollbar {
           display: none;
       }

       .no-scrollbar {
           -ms-overflow-style: none;
           scrollbar-width: none;
       }

       .shadow-soft {
           box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important;
       }

       .account-tab {
           border: none;
           border-bottom: 2px solid transparent;
           background: transparent;
           font-size: 0.875rem;
           font-weight: 500;
           color: #6c757d;
           padding-bottom: 10px;
           transition: all 0.2s ease;
           white-space: nowrap;
       }

       .account-tab:hover {
           color: #212529;
       }

       .account-tab.active {
           color: var(--brand-orange) !important;
           border-bottom-color: var(--brand-orange) !important;
       }

       /* ট্যাবের ডিফল্ট কালার (কালো) */
       .account-tabs .nav-link {
           color: #000000 !important;
           /* কালো */
           font-weight: 500;
           transition: color 0.2s ease;
       }

       .account-tabs .nav-link:hover {
           color: #d36419 !important;
       }

       .account-tabs .nav-link.active {
           color: #d36419 !important;

           font-weight: 600;
       }

       .account-tabs .nav-link.active::after {
           background-color: #d36419 !important;
       }

       .account-tabs .nav-link:hover::after {
           background-color: #d36419 !important;
       }
   </style>

   <x-app>
       <main class="flex-grow-1 pb-5 pb-lg-0">

           <div class="container-page py-4">

               <!-- Header Section -->
               <header class="d-flex align-items-center justify-content-between flex-wrap gap-3">
                   <div class="d-flex align-items-center gap-3 min-w-0">
                       <span
                           class="d-flex align-items-center justify-content-center bg-ember text-white rounded-5 fw-bold font-display fs-5"
                           style="width: 56px; height: 56px;">MO</span>
                       <div class="min-w-0">
                           <h1 class="font-display fs-3 fw-semibold text-truncate mb-0">Marta Oliveira</h1>
                           <p class="text-muted small mb-0">Gold member · 2,480 points</p>
                       </div>
                   </div>

                   <button
                       class="btn btn-outline-dark-brand rounded-pill px-4 py-2 fw-semibold d-flex align-items-center gap-2">
                       <i class="bi bi-box-arrow-right"></i> Log out
                   </button>
               </header>

               <!-- Navigation Tabs -->
               <ul class="nav nav-underline account-tabs mt-4 border-bottom pb-1" id="accountTab" role="tablist">
                   <li class="nav-item" role="presentation">
                       <button class="nav-link active" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview"
                           type="button" role="tab" aria-selected="true">Overview</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="orders-tab" data-bs-toggle="tab" data-bs-target="#orders"
                           type="button" role="tab" aria-selected="false">Orders</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="favourites-tab" data-bs-toggle="tab" data-bs-target="#favourites"
                           type="button" role="tab" aria-selected="false">Favourites</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="reservations-tab" data-bs-toggle="tab"
                           data-bs-target="#reservations" type="button" role="tab"
                           aria-selected="false">Reservations</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="rewards-tab" data-bs-toggle="tab" data-bs-target="#rewards"
                           type="button" role="tab" aria-selected="false">Rewards</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="addresses-tab" data-bs-toggle="tab" data-bs-target="#addresses"
                           type="button" role="tab" aria-selected="false">Addresses</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                           type="button" role="tab" aria-selected="false">Reviews</button>
                   </li>
                   <li class="nav-item" role="presentation">
                       <button class="nav-link" id="settings-tab" data-bs-toggle="tab" data-bs-target="#settings"
                           type="button" role="tab" aria-selected="false">Settings</button>
                   </li>
               </ul>


               <div class="tab-content mt-4" id="accountTabContent">
                   <!-- Overview  -->
                   <div class="tab-pane fade show active" id="overview" role="tabpanel">
                       <div class="row g-4 row-cols-1 row-cols-md-3">
                           <div class="col">
                               <div class="p-4 border border-border rounded-5 bg-white shadow-soft h-100">
                                   <i class="bi bi-gift fs-5 text-primary"></i>
                                   <p class="mt-3 font-display fs-2 fw-semibold mb-0">2,480</p>
                                   <p class="small text-muted mb-0">Reward points</p>
                               </div>
                           </div>
                           <div class="col">
                               <div class="p-4 border border-border rounded-5 bg-white shadow-soft h-100">
                                   <i class="bi bi-star fs-5 text-primary"></i>
                                   <p class="mt-3 font-display fs-2 fw-semibold mb-0">37</p>
                                   <p class="small text-muted mb-0">Orders placed</p>
                               </div>
                           </div>
                           <div class="col">
                               <div class="p-4 border border-border rounded-5 bg-white shadow-soft h-100">
                                   <i class="bi bi-heart fs-5 text-primary"></i>
                                   <p class="mt-3 font-display fs-2 fw-semibold mb-0">12</p>
                                   <p class="small text-muted mb-0">Favourites saved</p>
                               </div>
                           </div>
                       </div>
                       <div class="col-12 pt-4">
                           <div class="p-4 border border-border rounded-5 bg-white shadow-soft">
                               <h2 class="font-display fs-4 fw-semibold">Last order</h2>
                               <p class="mt-1 text-muted small mb-3">Ember Ribeye, Truffle Mac &amp; Cheese, Molten
                                   Valrhona Fondant · €68.40</p>
                               <a href="#"
                                   class="btn btn-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center">Track
                                   / reorder</a>
                           </div>
                       </div>
                   </div>

                   <div class="tab-pane fade" id="orders" role="tabpanel">
                       <p class="text-muted text-center">
                       <div class="mt-10">
                           <div class="d-flex flex-column gap-4">
                               <div class="card border rounded-5 shadow-sm p-4 p-md-5">
                                   <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                       <div class="min-w-0 flex-grow-1">
                                           <p class="fw-semibold mb-1">SE-48210 · 12 Aug 2026</p>
                                           <p class="text-muted small mb-0 text-truncate">
                                               Ember Ribeye, Truffle Mac &amp; Cheese, Molten Valrhona Fondant
                                           </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3 flex-wrap">
                                           <span
                                               class="badge bg-success rounded-pill px-3 py-2 fw-semibold text-uppercase"
                                               style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                               Delivered
                                           </span>
                                           <span class="fw-bold text-primary fs-5">€68.40</span>
                                           <a href="/orders/SE-48210"
                                               class="btn btn-outline-dark-brand rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                               <div class="card border rounded-5 shadow-sm p-4 p-md-5">
                                   <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                       <div class="min-w-0 flex-grow-1">
                                           <p class="fw-semibold mb-1">SE-48022 · 29 Jul 2026</p>
                                           <p class="text-muted small mb-0 text-truncate">
                                               Nduja &amp; Hot Honey, Padrón Peppers, Saffron Spritz
                                           </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3 flex-wrap">
                                           <span
                                               class="badge bg-success rounded-pill px-3 py-2 fw-semibold text-uppercase"
                                               style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                               Delivered
                                           </span>
                                           <span class="fw-bold text-primary fs-5">€41.90</span>
                                           <a href="/orders/SE-48022"
                                               class="btn btn-outline-dark-brand rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                               <div class="card border rounded-5 shadow-sm p-4 p-md-5">
                                   <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                       <div class="min-w-0 flex-grow-1">
                                           <p class="fw-semibold mb-1">SE-47788 · 14 Jul 2026</p>
                                           <p class="text-muted small mb-0 text-truncate">
                                               Whole Turbot, Lobster Linguine, Douro Red x2
                                           </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3 flex-wrap">
                                           <span
                                               class="badge bg-success rounded-pill px-3 py-2 fw-semibold text-uppercase"
                                               style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                               Delivered
                                           </span>
                                           <span class="fw-bold text-primary fs-5">€92.15</span>
                                           <a href="/orders/SE-47788"
                                               class="btn btn-outline-dark-brand rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                               <div class="card border rounded-5 shadow-sm p-4 p-md-5">
                                   <div class="d-flex flex-wrap align-items-center justify-content-between gap-3">
                                       <div class="min-w-0 flex-grow-1">
                                           <p class="fw-semibold mb-1">SE-47501 · 02 Jul 2026</p>
                                           <p class="text-muted small mb-0 text-truncate">
                                               Buttermilk Chicken Deluxe, Triple-Cooked Chips
                                           </p>
                                       </div>
                                       <div class="d-flex align-items-center gap-3 flex-wrap">
                                           <span
                                               class="badge bg-light text-muted border rounded-pill px-3 py-2 fw-semibold text-uppercase"
                                               style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                               Refunded
                                           </span>
                                           <span class="fw-bold text-primary fs-5">€33.50</span>
                                           <a href="/orders/SE-47501"
                                               class="btn btn-outline-dark-brand rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                       </p>
                   </div>
                   <div class="tab-pane fade" id="favourites" role="tabpanel">
                       <p class="text-muted text-center">
                       <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-4 g-4">

                           <div class="col">
                               <a href="/menu/ember-ribeye-bone-marrow-butter"
                                   class="card h-100 border-0 shadow-sm rounded-5 overflow-hidden text-decoration-none hover-lift">
                                   <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
                                       class="card-img-top" alt="Ember Ribeye, Bone Marrow Butter"
                                       style="height: 140px; object-fit: cover;">
                                   <div class="card-body p-4">
                                       <h5 class="card-title fw-semibold mb-1">Ember Ribeye, Bone Marrow Butter</h5>
                                       <p class="card-text text-primary fw-bold mt-2">€29.00</p>
                                   </div>
                               </a>
                           </div>

                           <!-- আইটেম ২ -->
                           <div class="col">
                               <a href="/menu/dry-aged-sirloin-300g"
                                   class="card h-100 border-0 shadow-sm rounded-5 overflow-hidden text-decoration-none hover-lift">
                                   <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
                                       class="card-img-top" alt="Dry-Aged Sirloin, 300g"
                                       style="height: 140px; object-fit: cover;">
                                   <div class="card-body p-4">
                                       <h5 class="card-title fw-semibold mb-1">Dry-Aged Sirloin, 300g</h5>
                                       <p class="card-text text-primary fw-bold mt-2">€34.00</p>
                                   </div>
                               </a>
                           </div>

                           <!-- আইটেম ৩ -->
                           <div class="col">
                               <a href="/menu/margherita-d-oro"
                                   class="card h-100 border-0 shadow-sm rounded-5 overflow-hidden text-decoration-none hover-lift">
                                   <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
                                       class="card-img-top" alt="Margherita d'Oro"
                                       style="height: 140px; object-fit: cover;">
                                   <div class="card-body p-4">
                                       <h5 class="card-title fw-semibold mb-1">Margherita d'Oro</h5>
                                       <p class="card-text text-primary fw-bold mt-2">€20.50</p>
                                   </div>
                               </a>
                           </div>

                           <!-- আইটেম ৪ -->
                           <div class="col">
                               <a href="/menu/cacio-e-pepe-tonnarelli"
                                   class="card h-100 border-0 shadow-sm rounded-5 overflow-hidden text-decoration-none hover-lift">
                                   <img src="https://images.unsplash.com/photo-1621996346565-e3dbc646d9a9?w=400"
                                       class="card-img-top" alt="Cacio e Pepe, Tonnarelli"
                                       style="height: 140px; object-fit: cover;">
                                   <div class="card-body p-4">
                                       <h5 class="card-title fw-semibold mb-1">Cacio e Pepe, Tonnarelli</h5>
                                       <p class="card-text text-primary fw-bold mt-2">€32.50</p>
                                   </div>
                               </a>
                           </div>

                       </div>
                       </p>
                   </div>
                   <div class="tab-pane fade" id="reservations" role="tabpanel">
                       <p class="text-muted text-center">
                       <div class="">
                           <div class="d-flex flex-column gap-4">

                               <!-- রিজার্ভেশন ১ (Confirmed) -->
                               <div
                                   class="d-flex flex-wrap align-items-center justify-content-between gap-3 p-4 border rounded-5 shadow-sm bg-white">
                                   <div>
                                       <p class="fw-semibold mb-0">24 Aug 2026 · 20:00</p>
                                       <p class="text-muted small mb-0">4 guests · Indoor</p>
                                   </div>
                                   <span class="badge rounded-pill bg-primary px-3 py-2 fw-semibold text-uppercase"
                                       style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                       Confirmed
                                   </span>
                               </div>

                               <!-- রিজার্ভেশন ২ (Completed) -->
                               <div
                                   class="d-flex flex-wrap align-items-center justify-content-between gap-3 p-4 border rounded-5 shadow-sm bg-white">
                                   <div>
                                       <p class="fw-semibold mb-0">03 Aug 2026 · 13:30</p>
                                       <p class="text-muted small mb-0">2 guests · Terrace</p>
                                   </div>
                                   <span
                                       class="badge rounded-pill bg-light text-muted border px-3 py-2 fw-semibold text-uppercase"
                                       style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                       Completed
                                   </span>
                               </div>

                               <!-- রিজার্ভেশন ৩ (Completed) -->
                               <div
                                   class="d-flex flex-wrap align-items-center justify-content-between gap-3 p-4 border rounded-5 shadow-sm bg-white">
                                   <div>
                                       <p class="fw-semibold mb-0">18 Jul 2026 · 21:15</p>
                                       <p class="text-muted small mb-0">8 guests · VIP Room</p>
                                   </div>
                                   <span
                                       class="badge rounded-pill bg-light text-muted border px-3 py-2 fw-semibold text-uppercase"
                                       style="font-size: 0.6875rem; letter-spacing: 0.5px;">
                                       Completed
                                   </span>
                               </div>

                           </div>
                       </div>
                       </p>
                   </div>
                   <div class="tab-pane fade" id="rewards" role="tabpanel">
                       <p class="text-muted text-center ">
                       <div class="">
                           <div class="row row-cols-1 row-cols-md-3 g-4">

                               <!-- অফার ১ -->
                               <div class="col">
                                   <div class="card h-100 border rounded-5 shadow-sm p-4 p-md-5">
                                       <p class="text-uppercase small fw-semibold text-muted mb-0">Ends 31 Dec</p>
                                       <h4 class="card-title mt-3 fw-semibold">20% off your first order</h4>
                                       <p class="card-text text-muted small mt-2">New guests only. Minimum €25. Valid
                                           on delivery and pickup.</p>
                                       <div class="mt-4 border border-dashed border-primary rounded-pill py-3 text-center fw-bold text-primary"
                                           style="letter-spacing: 0.16em; font-size: 0.875rem;">
                                           EMBER20
                                       </div>
                                   </div>
                               </div>

                               <!-- অফার ২ -->
                               <div class="col">
                                   <div class="card h-100 border rounded-5 shadow-sm p-4 p-md-5">
                                       <p class="text-uppercase small fw-semibold text-muted mb-0">All month</p>
                                       <h4 class="card-title mt-3 fw-semibold">Free focaccia with any two mains</h4>
                                       <p class="card-text text-muted small mt-2">Wood-fired, rosemary and Maldon salt.
                                           Automatically added at checkout.</p>
                                       <div class="mt-4 border border-dashed border-primary rounded-pill py-3 text-center fw-bold text-primary"
                                           style="letter-spacing: 0.16em; font-size: 0.875rem;">
                                           FIRESIDE
                                       </div>
                                   </div>
                               </div>

                               <!-- অফার ৩ -->
                               <div class="col">
                                   <div class="card h-100 border rounded-5 shadow-sm p-4 p-md-5">
                                       <p class="text-uppercase small fw-semibold text-muted mb-0">Fri &amp; Sat</p>
                                       <h4 class="card-title mt-3 fw-semibold">€8 off after 22:00</h4>
                                       <p class="card-text text-muted small mt-2">Because the kitchen is at its best
                                           when the room quiets down.</p>
                                       <div class="mt-4 border border-dashed border-primary rounded-pill py-3 text-center fw-bold text-primary"
                                           style="letter-spacing: 0.16em; font-size: 0.875rem;">
                                           LATENIGHT
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                       </p>
                   </div>
                   <div class="tab-pane fade" id="addresses" role="tabpanel">
                       <p class="text-muted text-center ">
                       <div class="row row-cols-1 row-cols-sm-2 g-4">

                           <!-- ঠিকানা ১: Home -->
                           <div class="col">
                               <div class="card h-100 border rounded-5 shadow-sm p-4">
                                   <div class="card-body p-0">
                                       <p class="d-flex align-items-center gap-2 fw-semibold mb-2">
                                           <i class="bi bi-geo-alt text-primary"></i> Home
                                       </p>
                                       <p class="text-muted small mb-0">22 Rua das Flores, 4F · Lisbon 1200-192</p>
                                   </div>
                               </div>
                           </div>

                           <!-- ঠিকানা ২: Work -->
                           <div class="col">
                               <div class="card h-100 border rounded-5 shadow-sm p-4">
                                   <div class="card-body p-0">
                                       <p class="d-flex align-items-center gap-2 fw-semibold mb-2">
                                           <i class="bi bi-geo-alt text-primary"></i> Work
                                       </p>
                                       <p class="text-muted small mb-0">Av. da Liberdade 110, Floor 3 · Lisbon 1250-146
                                       </p>
                                   </div>
                               </div>
                           </div>

                           <!-- পেমেন্ট: Visa -->
                           <div class="col">
                               <div class="card h-100 border rounded-5 shadow-sm p-4">
                                   <div class="card-body p-0">
                                       <p class="d-flex align-items-center gap-2 fw-semibold mb-2">
                                           <i class="bi bi-credit-card text-primary"></i> Visa ···· 4242
                                       </p>
                                       <p class="text-muted small mb-0">Expires 12/28 · Default payment method</p>
                                   </div>
                               </div>
                           </div>

                       </div>
                       </p>
                   </div>
                   <div class="tab-pane fade" id="reviews" role="tabpanel">
                       <p class="text-muted text-center ">
                       <div class="">
                           <div class="d-flex flex-column gap-4">

                               <div class="p-4 border rounded-5 shadow-sm bg-white">
                                   <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                       <p class="fw-semibold mb-0">Ember Ribeye</p>
                                       <div class="text-warning">
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                       </div>
                                   </div>
                                   <p class="text-muted small mt-2 mb-0">The ribeye arrived still whispering from the
                                       grill. Delivery was 24 minutes and the plating survived intact — genuinely
                                       restaurant quality at home.</p>
                               </div>

                               <div class="p-4 border rounded-5 shadow-sm bg-white">
                                   <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                       <p class="fw-semibold mb-0">Reservation</p>
                                       <div class="text-warning">
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star"></i> <!-- ৪ স্টার -->
                                       </div>
                                   </div>
                                   <p class="text-muted small mt-2 mb-0">We booked the VIP room for eight people. The
                                       team remembered a nut allergy without being asked twice. That's the difference.
                                   </p>
                               </div>

                               <div class="p-4 border rounded-5 shadow-sm bg-white">
                                   <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                       <p class="fw-semibold mb-0">Nduja &amp; Hot Honey</p>
                                       <div class="text-warning">
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-fill"></i>
                                           <i class="bi bi-star-half"></i> <!-- ৪.৫ স্টার -->
                                       </div>
                                   </div>
                                   <p class="text-muted small mt-2 mb-0">Best wood-fired pizza I've had outside Naples.
                                       The hot honey nduja is dangerous. Only note: I wanted a bigger portion of the
                                       focaccia.</p>
                               </div>

                           </div>
                       </div>
                       </p>
                   </div>
                   <div class="tab-pane fade" id="settings" role="tabpanel">
                       <p class="text-muted text-center ">
                       <div class="">
                           <div class="row row-cols-1 row-cols-sm-2 g-4">

                               <!-- Notifications -->
                               <div class="col">
                                   <div class="card h-100 border rounded-5 shadow-sm p-4">
                                       <div class="card-body p-0">
                                           <p class="d-flex align-items-center gap-2 fw-semibold mb-2">
                                               <i class="bi bi-bell text-primary"></i> Notifications
                                           </p>
                                           <p class="text-muted small mb-0">Order updates on, marketing off.</p>
                                       </div>
                                   </div>
                               </div>

                               <!-- Security -->
                               <div class="col">
                                   <div class="card h-100 border rounded-5 shadow-sm p-4">
                                       <div class="card-body p-0">
                                           <p class="d-flex align-items-center gap-2 fw-semibold mb-2">
                                               <i class="bi bi-shield text-primary"></i> Security
                                           </p>
                                           <p class="text-muted small mb-0">Two-factor authentication enabled.</p>
                                       </div>
                                   </div>
                               </div>

                           </div>
                       </div>
                       </p>
                   </div>

               </div>
           </div>
       </main>
   </x-app>
