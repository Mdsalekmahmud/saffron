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
        
        .container-page { max-width: 1280px; margin: 0 auto; padding: 0 1.5rem; }
        @media (min-width: 992px) { .container-page { padding: 0 4rem; } }
        
        .eyebrow { font-size: 0.75rem; letter-spacing: 0.1em; text-transform: uppercase; color: var(--brand-orange); font-weight: 600; }
        .shadow-soft { box-shadow: 0 4px 15px rgba(0, 0, 0, 0.03) !important; }
        
        .hover-lift { transition: transform 0.2s, box-shadow 0.2s; }
        .hover-lift:hover { transform: translateY(-4px); box-shadow: 0 10px 25px rgba(0,0,0,0.05) !important; }

        /* FAQ/Accordion এর জন্য summary এর ডিফল্ট স্টাইল রিমুভ */
        details summary::-webkit-details-marker { display: none; }
        details summary { list-style: none; }
        
        /* ইনপুট ফিল্ডের জন্য কাস্টম হাইট */
        .min-h-13 { min-height: 52px; }
    </style>
<x-app>
     <main class="flex-grow-1 pb-5 pb-lg-0">
        
        <div class="container-page py-4">
            <!-- Page Header -->
            <p class="eyebrow">Contact</p>
            <h1 class="mt-3 font-display fs-2 fw-semibold">Say hello</h1>

            <!-- Two Column Layout -->
            <div class="row g-5 mt-3">
                
                <!-- Left Column: Map & Info Cards -->
                <div class="col-lg-7">
                    
                    <!-- Map Placeholder -->
                    <div class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 border border-border rounded-4 text-muted small" style="height: 288px;">
                        <span class="d-flex align-items-center gap-2">
                            <i class="bi bi-geo-alt-fill text-primary"></i> 14 Marlowe Lane, Old Town Quarter, Lisbon
                        </span>
                    </div>

                    <!-- Contact Quick Links -->
                    <div class="row row-cols-1 row-cols-sm-2 g-3 mt-4">
                        <div class="col">
                            <a href="tel:+351 21 447 0180" class="text-decoration-none d-block hover-lift border border-border bg-white rounded-4 p-4 shadow-soft">
                                <i class="bi bi-phone fs-5 text-primary"></i>
                                <p class="mt-3 text-uppercase small text-muted fw-semibold mb-1">Phone</p>
                                <p class="fw-semibold text-dark mb-0 small">+351 21 447 0180</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-decoration-none d-block hover-lift border border-border bg-white rounded-4 p-4 shadow-soft">
                                <i class="bi bi-whatsapp fs-5 text-primary"></i>
                                <p class="mt-3 text-uppercase small text-muted fw-semibold mb-1">WhatsApp</p>
                                <p class="fw-semibold text-dark mb-0 small">+351 91 220 3355</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="mailto:hello@saffronandember.com" class="text-decoration-none d-block hover-lift border border-border bg-white rounded-4 p-4 shadow-soft">
                                <i class="bi bi-envelope fs-5 text-primary"></i>
                                <p class="mt-3 text-uppercase small text-muted fw-semibold mb-1">Email</p>
                                <p class="fw-semibold text-dark mb-0 small">hello@saffronandember.com</p>
                            </a>
                        </div>
                        <div class="col">
                            <a href="#" class="text-decoration-none d-block hover-lift border border-border bg-white rounded-4 p-4 shadow-soft">
                                <i class="bi bi-car-front fs-5 text-primary"></i>
                                <p class="mt-3 text-uppercase small text-muted fw-semibold mb-1">Parking</p>
                                <p class="fw-semibold text-dark mb-0 small">Praça do Comércio garage, 4 min walk</p>
                            </a>
                        </div>
                    </div>

                    <!-- Opening Hours -->
                    <div class="mt-4 border border-border bg-white rounded-4 p-4 shadow-soft">
                        <p class="d-flex align-items-center gap-2 fw-semibold mb-0">
                            <i class="bi bi-clock text-primary"></i> Opening hours
                        </p>
                        <dl class="row mt-3 small mb-0">
                            <div class="col-6 d-flex justify-content-between border-bottom pb-2 mb-2">
                                <dt class="text-muted">Monday – Thursday</dt>
                                <dd class="fw-semibold tabular-nums">12:00 – 23:00</dd>
                            </div>
                            <div class="col-6 d-flex justify-content-between border-bottom pb-2 mb-2">
                                <dt class="text-muted">Friday – Saturday</dt>
                                <dd class="fw-semibold tabular-nums">12:00 – 01:00</dd>
                            </div>
                            <div class="col-6 d-flex justify-content-between pb-2">
                                <dt class="text-muted">Sunday</dt>
                                <dd class="fw-semibold tabular-nums">12:00 – 22:00</dd>
                            </div>
                        </dl>
                    </div>
                </div>

                <!-- Right Column: Form & FAQs -->
                <div class="col-lg-5">
                    
                    <!-- Contact Form -->
                    <form class="border border-border bg-white rounded-4 p-4 p-md-5 shadow-soft">
                        <h2 class="font-display fs-4 fw-semibold">Send us a note</h2>
                        
                        <div class="mt-3 d-flex flex-column gap-3">
                            <div>
                                <label for="cname" class="small text-uppercase fw-semibold text-muted">Name</label>
                                <input id="cname" required type="text" class="form-control rounded-3 mt-1 min-h-13">
                            </div>
                            <div>
                                <label for="cemail" class="small text-uppercase fw-semibold text-muted">Email</label>
                                <input id="cemail" required type="email" class="form-control rounded-3 mt-1 min-h-13">
                            </div>
                            <div>
                                <label for="csubject" class="small text-uppercase fw-semibold text-muted">Subject</label>
                                <input id="csubject" required type="text" class="form-control rounded-3 mt-1 min-h-13">
                            </div>
                            <div>
                                <label for="cmsg" class="small text-uppercase fw-semibold text-muted">Message</label>
                                <textarea id="cmsg" rows="5" required class="form-control rounded-3 mt-1 p-3"></textarea>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary w-100 rounded-pill py-3 fw-semibold mt-4">Send message</button>
                    </form>

                    <!-- Frequently Asked Questions -->
                    <div class="mt-4">
                        <h2 class="font-display fs-4 fw-semibold">Frequent questions</h2>
                        
                        <div class="mt-3 d-flex flex-column gap-3">
                            <details class="border border-border rounded-3 p-3 bg-white">
                                <summary class="cursor-pointer fw-semibold small">Do you take walk-ins?</summary>
                                <p class="mt-2 small text-muted mb-0">Always. We hold four tables back each service for guests who just turn up.</p>
                            </details>
                            <details class="border border-border rounded-3 p-3 bg-white">
                                <summary class="cursor-pointer fw-semibold small">How far do you deliver?</summary>
                                <p class="mt-2 small text-muted mb-0">Six kilometres from the kitchen, covering central Lisbon and Alcântara.</p>
                            </details>
                            <details class="border border-border rounded-3 p-3 bg-white">
                                <summary class="cursor-pointer fw-semibold small">Can you handle allergies?</summary>
                                <p class="mt-2 small text-muted mb-0">Yes. Add a note at checkout or tell us at the table — the kitchen sees it on the ticket.</p>
                            </details>
                            <details class="border border-border rounded-3 p-3 bg-white">
                                <summary class="cursor-pointer fw-semibold small">Is there a corkage fee?</summary>
                                <p class="mt-2 small text-muted mb-0">€15 per bottle, waived on Sundays.</p>
                            </details>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>
</x-app>