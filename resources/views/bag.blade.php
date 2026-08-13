<x-app>
    <main class="container-fluid py-5">
    <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card text-center border rounded-4 shadow-sm p-4 p-md-5">
                <div class="card-body">
                    <!-- আইকন -->
                    <div class="d-flex align-items-center justify-content-center bg-secondary bg-opacity-10 text-primary rounded-circle mx-auto" 
                         style="width: 64px; height: 64px;">
                        <i class="bi bi-bag fs-2"></i>
                    </div>

                    <!-- শিরোনাম -->
                    <h3 class="mt-4 fs-2 fw-semibold">Your bag is empty</h3>

                    <!-- বিবরণ -->
                    <p class="mt-2 text-muted small">Nothing here yet. The grill is lit and the pasta is rolled — go pick something.
                    </p>

                    <!-- বাটন -->
                    <div class="mt-4">
                        <a href="{{route('menu')}}" class="btn btn-primary rounded-pill px-4 py-3 fw-semibold">
                           Browse the menu
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
</x-app>