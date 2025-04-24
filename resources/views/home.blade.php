<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Platform</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body {
            background: #f5f9ff;
        }
        .hero {
            background: #0d6efd;
            color: white;
            padding: 80px 20px;
            text-align: center;
        }
        .section {
            padding: 60px 20px;
        }
        .btn-custom {
            background-color: #ffc107;
            border: none;
        }
        .carousel-inner img {
            height: 450px;
            object-fit: cover;
        }
    </style>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">VolunteerHub</a>
            <div class="ms-auto">
                <a href="http://127.0.0.1:8001/login" class="btn btn-outline-primary me-2">Login</a>
                <a href="http://127.0.0.1:8001/signup" class="btn btn-primary">SignUp</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1 class="display-4">Make a Difference Today</h1>
            <p class="lead mt-3">Join our community of volunteers helping people and places in need.</p>
            <a href="http://127.0.0.1:8001/find-work" class="btn btn-lg btn-custom mt-4">Get Started</a>
        </div>
    </section>

    <!-- Carousel Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div id="volunteerCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded shadow">
                    <div class="carousel-item active">
                        <img src="vol.jpg" class="d-block w-100" alt="Volunteer Work 1">
                    </div>
                    <div class="carousel-item">
                        <img src="OI.webp" class="d-block w-100" alt="Volunteer Work 2">
                    </div>
                    <div class="carousel-item">
                        <img src="OI.jpg" class="d-block w-100" alt="Volunteer Work 3">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#volunteerCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#volunteerCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                </button>
            </div>
        </div>
    </section>

    <section class="section text-center">
        <div class="container">
            <h2>How It Works</h2>
            <div class="row mt-4">
                <div class="col-md-4">
                    <h5>1. Sign Up</h5>
                    <p>Create your profile and tell us your interests.</p>
                </div>
                <div class="col-md-4">
                    <h5>2. Find Opportunities</h5>
                    <p>Search for causes or projects near you.</p>
                </div>
                <div class="col-md-4">
                    <h5>3. Start Volunteering</h5>
                    <p>Make a real impact and track your progress.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="text-center py-4 bg-light">
        <p class="mb-0">© 2025 VolunteerHub. All rights reserved.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
