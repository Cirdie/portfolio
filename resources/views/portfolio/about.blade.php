<section id="about" class="d-flex align-items-center justify-content-center py-5 bg-light" style="min-height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <div class="card p-4 shadow-lg text-center w-100">
                <h1 class="fw-bold">About Me</h1>

                @if (!empty($about) && isset($about->name))
                    <p class="text-muted fs-4">Hi! I'm <strong>{{ $about->name }}</strong>, a passionate IT student fighting for a better future.</p>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card p-3 shadow-sm mb-3">
                                <p class="fs-5"><i class="fas fa-user"></i> <strong>Name:</strong> {{ $about->name ?? 'N/A' }}</p>
                            </div>
                            <div class="card p-3 shadow-sm mb-3">
                                <p class="fs-5"><i class="fas fa-calendar"></i> <strong>Age:</strong> {{ $about->age ?? 'N/A' }}</p>
                            </div>
                            <div class="card p-3 shadow-sm mb-3">
                                <p class="fs-5"><i class="fas fa-university"></i> <strong>Studied At:</strong> {{ $about->studied_at ?? 'N/A' }}</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card p-3 shadow-sm mb-3">
                                <p class="fs-5"><i class="fas fa-map-marker-alt"></i> <strong>Hometown:</strong> {{ $about->hometown ?? 'N/A' }}</p>
                            </div>
                            <div class="card p-3 shadow-sm mb-3">
                                <p class="fs-5"><i class="fas fa-book"></i> <strong>Course:</strong> {{ $about->course ?? 'N/A' }}</p>
                            </div>
                            <div class="card p-3 shadow-sm mb-3">
                                <p class="fs-5"><i class="fas fa-gamepad"></i> <strong>Hobbies:</strong> {{ $about->hobbies ?? 'N/A' }}</p>
                            </div>
                        </div>
                    </div>
                @else
                    <p class="text-muted fs-4">No About information added yet.</p>
                @endif
            </div>
        </div>
    </div>
</section>
