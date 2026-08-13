   <style>
        :root {
            --brand-orange: #d36419;
            --brand-ink: #1e1614;
            --brand-border: #e5e7eb;
        }
        body { font-family: 'Outfit', sans-serif; background-color: #ffffff; }
        h1, h2, h3, h4, h5, h6, .font-display { font-family: 'Fraunces', serif; }
        
        .bg-ember { background-color: var(--brand-orange) !important; }
        .bg-primary, .btn-primary { background-color: var(--brand-orange) !important; border-color: var(--brand-orange) !important; color: #fff !important; }
        .text-primary { color: var(--brand-orange) !important; }
        .border-border { border-color: var(--brand-border) !important; }
        .btn-outline-secondary:hover { border-color: var(--brand-orange) !important; color: var(--brand-orange) !important; }
        
        .container-page { max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; }
        @media (min-width: 992px) { .container-page { padding: 0 4rem; } }
        
        .no-scrollbar::-webkit-scrollbar { display: none; }
        .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        .shadow-soft { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important; }
        
        /* কাস্টম ট্যাব ডিজাইন */
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
        .account-tab:hover { color: #212529; }
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
                    <span class="d-flex align-items-center justify-content-center bg-ember text-white rounded-3 fw-bold font-display fs-5" style="width: 56px; height: 56px;">MO</span>
                    <div class="min-w-0">
                        <h1 class="font-display fs-3 fw-semibold text-truncate mb-0">Marta Oliveira</h1>
                        <p class="text-muted small mb-0">Gold member · 2,480 points</p>
                    </div>
                </div>
                
                <button class="btn btn-outline-secondary rounded-pill px-4 py-2 fw-semibold d-flex align-items-center gap-2">
                    <i class="bi bi-box-arrow-right"></i> Log out
                </button>
            </header>

            <!-- Navigation Tabs -->
            <div class="no-scrollbar mt-4 d-flex gap-3 overflow-x-auto border-bottom pb-1" role="tablist">
                <button role="tab" aria-selected="true" class="account-tab active">Overview</button>
                <button role="tab" aria-selected="false" class="account-tab">Orders</button>
                <button role="tab" aria-selected="false" class="account-tab">Favourites</button>
                <button role="tab" aria-selected="false" class="account-tab">Reservations</button>
                <button role="tab" aria-selected="false" class="account-tab">Rewards</button>
                <button role="tab" aria-selected="false" class="account-tab">Addresses</button>
                <button role="tab" aria-selected="false" class="account-tab">Reviews</button>
                <button role="tab" aria-selected="false" class="account-tab">Settings</button>
            </div>

            <!-- Dashboard Stats -->
            <div class="mt-4 row g-4 row-cols-1 row-cols-md-3">
                
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <i class="bi bi-gift fs-5 text-primary"></i>
                        <p class="mt-3 font-display fs-2 fw-semibold mb-0">2,480</p>
                        <p class="small text-muted mb-0">Reward points</p>
                    </div>
                </div>
                
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <i class="bi bi-star fs-5 text-primary"></i>
                        <p class="mt-3 font-display fs-2 fw-semibold mb-0">37</p>
                        <p class="small text-muted mb-0">Orders placed</p>
                    </div>
                </div>
                
                <div class="col">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft h-100">
                        <i class="bi bi-heart fs-5 text-primary"></i>
                        <p class="mt-3 font-display fs-2 fw-semibold mb-0">12</p>
                        <p class="small text-muted mb-0">Favourites saved</p>
                    </div>
                </div>

                <!-- Last Order (Full Width) -->
                <div class="col-12">
                    <div class="p-4 border border-border rounded-4 bg-white shadow-soft">
                        <h2 class="font-display fs-4 fw-semibold">Last order</h2>
                        <p class="mt-1 text-muted small mb-3">Ember Ribeye, Truffle Mac &amp; Cheese, Molten Valrhona Fondant · €68.40</p>
                        <a href="#" class="btn btn-primary rounded-pill px-4 py-2 fw-semibold d-inline-flex align-items-center">Track / reorder</a>
                    </div>
                </div>

            </div>

        </div>
    </main>
    </x-app>