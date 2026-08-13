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
                       class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold d-flex align-items-center gap-2">
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

               <!-- ====== ট্যাব কন্টেন্ট ====== -->
               <div class="tab-content mt-4" id="accountTabContent">

                   <!-- Overview (কন্টেন্ট আছে) -->
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
                                               class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                               <!-- অর্ডার ২ -->
                               <div class="card border rounded-4 shadow-sm p-4 p-md-5">
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
                                               class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                               <!-- অর্ডার ৩ -->
                               <div class="card border rounded-4 shadow-sm p-4 p-md-5">
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
                                               class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold btn-sm">
                                               View
                                           </a>
                                       </div>
                                   </div>
                               </div>

                               <!-- অর্ডার ৪ (Refunded) -->
                               <div class="card border rounded-4 shadow-sm p-4 p-md-5">
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
                                               class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold btn-sm">
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
                       <p class="text-muted text-center py-5">No favourites saved.</p>
                   </div>
                   <div class="tab-pane fade" id="reservations" role="tabpanel">
                       <p class="text-muted text-center py-5">No reservations found.</p>
                   </div>
                   <div class="tab-pane fade" id="rewards" role="tabpanel">
                       <p class="text-muted text-center py-5">Rewards coming soon.</p>
                   </div>
                   <div class="tab-pane fade" id="addresses" role="tabpanel">
                       <p class="text-muted text-center py-5">No addresses saved.</p>
                   </div>
                   <div class="tab-pane fade" id="reviews" role="tabpanel">
                       <p class="text-muted text-center py-5">No reviews yet.</p>
                   </div>
                   <div class="tab-pane fade" id="settings" role="tabpanel">
                       <p class="text-muted text-center py-5">Settings will appear here.</p>
                   </div>

               </div>
           </div>
       </main>
   </x-app>
