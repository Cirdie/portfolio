@extends('app')

@section('title', 'Welcome')

@section('content')

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>



<!-- Hero Section -->
<section class="hero d-flex align-items-center text-white text-center"
    style="height: 100vh;
           background: url('{{ asset('assets/image/jomil.png') }}') center/cover no-repeat;
           background-color: #333;">
    <div class="container">
    </div>
</section>


<!-- About Section -->
<section id="about" class="d-flex align-items-center justify-content-center py-5 bg-light" style="min-height: 100vh;">
    <div class="container d-flex justify-content-center align-items-center">
        <div class="col-lg-8">
            <div class="card p-4 shadow-lg text-center w-100">
                <h1 class="fw-bold">About Me</h1>
                <p class="text-muted fs-4">Hi! I'm <strong>Jomil Mapayo Bestudio</strong>, a passionate IT student fighting for a better future.</p>

                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm mb-3">
                            <p class="fs-5"><i class="fas fa-user"></i> <strong>Name:</strong></p>
                            <p class="fs-5">Jomil Bestudio</p>
                        </div>
                        <div class="card p-3 shadow-sm mb-3">
                            <p class="fs-5"><i class="fas fa-calendar"></i> <strong>Age:</strong></p>
                            <p class="fs-5">20</p>
                        </div>
                        <div class="card p-3 shadow-sm">
                            <p class="fs-5"><i class="fas fa-birthday-cake"></i> <strong>Birthday:</strong></p>
                            <p class="fs-5">September 18, 2004</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card p-3 shadow-sm mb-3">
                            <p class="fs-5"><i class="fas fa-map-marker-alt"></i> <strong>Hometown:</strong></p>
                            <p class="fs-5">Island Garden City of Samal, Philippines</p>
                        </div>
                        <div class="card p-3 shadow-sm mb-3">
                            <p class="fs-5"><i class="fas fa-university"></i> <strong>Studied at:</strong></p>
                            <p class="fs-5">Aces Tagum College</p>
                        </div>
                        <div class="card p-3 shadow-sm">
                            <p class="fs-5"><i class="fas fa-graduation-cap"></i> <strong>Course:</strong></p>
                            <p class="fs-5">Bachelor of Science in Information Technology</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4">
                    <div class="card p-3 shadow-sm">
                        <p class="fs-5"><i class="fas fa-heart"></i> <strong>Hobbies:</strong></p>
                        <p class="fs-5">Basketball, Volleyball, Playing Games</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>






          <!-- Skills Section -->
<section id="skills" class="d-flex align-items-center justify-content-center py-5 bg-light" style="height: 100vh;">
    <div class="container text-center">
        <div class="card p-5 shadow-lg w-75 mx-auto">
            <h2 class="fw-bold display-3">My Skills</h2>
            <p class="text-muted fs-4">Here are some of the key skills that define me:</p>


            <div class="row justify-content-center">
                <div class="col-md-5 text-start">
                    <div class="card p-4 shadow-sm mb-3">
                        <p class="fs-3"><i class="fas fa-comments text-primary"></i> <strong>Communication</strong></p>
                    </div>
                    <div class="card p-4 shadow-sm mb-3">
                        <p class="fs-3"><i class="fas fa-users text-success"></i> <strong>Teamwork</strong></p>
                    </div>
                    <div class="card p-4 shadow-sm mb-3">
                        <p class="fs-3"><i class="fas fa-sync-alt text-warning"></i> <strong>Flexibility</strong></p>
                    </div>
                </div>
                <div class="col-md-5 text-start">
                    <div class="card p-4 shadow-sm mb-3">
                        <p class="fs-3"><i class="fas fa-headphones text-danger"></i> <strong>Active Listening</strong></p>
                    </div>
                    <div class="card p-4 shadow-sm mb-3">
                        <p class="fs-3"><i class="fas fa-clock text-primary"></i> <strong>Time Management</strong></p>
                    </div>
                    <div class="card p-4 shadow-sm mb-3">
                        <p class="fs-3"><i class="fas fa-lightbulb text-success"></i> <strong>Creativity</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- Contact Section -->
<section id="contact" class="d-flex align-items-center justify-content-center py-5 bg-dark text-white" style="height: 100vh;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Contact Me</h2>
        <p class="text-light">Connect with me on social media or give me a call.</p>

        <div class="row justify-content-center mt-4">
            <!-- Facebook Box -->
            <div class="col-md-3">
                <a href="https://web.facebook.com/profile.php?id=100012774634721" target="_blank" class="text-decoration-none">
                    <div class="card bg-primary text-white shadow-lg p-3">
                        <i class="fab fa-facebook fa-3x"></i>
                        <h5 class="mt-2">Facebook</h5>
                    </div>
                </a>
            </div>

            <!-- Instagram Box -->
            <div class="col-md-3">
                <a href="https://www.instagram.com/bnjyn_jmgyuu/" target="_blank" class="text-decoration-none">
                    <div class="card bg-danger text-white shadow-lg p-3">
                        <i class="fab fa-instagram fa-3x"></i>
                        <h5 class="mt-2">Instagram</h5>
                    </div>
                </a>
            </div>

            <!-- Call Box -->
<div class="col-md-3">
    <a href="#" class="text-decoration-none" onclick="showNumber(event)">
        <div class="card bg-success text-white shadow-lg p-3 text-center">
            <i class="fas fa-phone fa-3x"></i>
            <h5 class="mt-2" id="call-text">Call Me</h5>
        </div>
    </a>
</div>

<script>
    function showNumber(event) {
        event.preventDefault();
        document.getElementById('call-text').innerText = '09632847082';
    }
</script>

        </div>
    </div>
</section>



@endsection
