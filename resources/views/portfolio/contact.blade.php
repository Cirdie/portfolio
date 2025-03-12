<section id="contact" class="d-flex align-items-center justify-content-center py-5 bg-dark text-white" style="height: 100vh;">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Contact Me</h2>
        <p class="text-light">Connect with me on social media or give me a call.</p>

        <div class="row justify-content-center mt-4">
            @foreach($contacts as $contact)
                <!-- Facebook -->
                <div class="col-md-3">
                    <a href="{{ $contact->facebook }}" target="_blank" class="text-decoration-none">
                        <div class="card bg-primary text-white shadow-lg p-3">
                            <i class="fab fa-facebook fa-3x"></i>
                            <h5 class="mt-2">Facebook</h5>
                        </div>
                    </a>
                </div>

                <!-- Instagram -->
                <div class="col-md-3">
                    <a href="{{ $contact->instagram }}" target="_blank" class="text-decoration-none">
                        <div class="card bg-danger text-white shadow-lg p-3">
                            <i class="fab fa-instagram fa-3x"></i>
                            <h5 class="mt-2">Instagram</h5>
                        </div>
                    </a>
                </div>

                <!-- Phone -->
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
                        document.getElementById('call-text').innerText = '{{ $contact->phone }}';
                    }
                </script>
            @endforeach
        </div>
    </div>
</section>
