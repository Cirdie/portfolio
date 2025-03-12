<section id="skills" class="d-flex align-items-center justify-content-center py-5 bg-light" style="height: 100vh;">
    <div class="container text-center">
        <div class="card p-5 shadow-lg w-75 mx-auto">
            <h2 class="fw-bold display-3">My Skills</h2>
            <p class="text-muted fs-4">Here are some of the key skills that define me:</p>

            <div class="row justify-content-center">
                @foreach($skills as $skill)
                    <div class="col-md-5 text-start">
                        <div class="card p-4 shadow-sm mb-3">
                            <p class="fs-3"><i class="fas fa-lightbulb text-success"></i> <strong>{{ $skill->name }}</strong></p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
