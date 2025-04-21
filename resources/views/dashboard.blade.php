<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Volunteer Platform - Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #e9f5f2;
            font-family: 'Segoe UI', sans-serif;
        }
        .container {
            margin-top: 80px;
            text-align: center;
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Hello, {{ $user->name }} 👋</h1>
        <p>Welcome back to the Volunteer Platform!</p>
       
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">VolunteerHub</a>
            <div class="ms-auto">
                <a href="#" class="btn btn-outline-primary me-2">Login</a>
                <a href="http://127.0.0.1:8001/signup" class="btn btn-primary">Join Now</a>
            </div>
        </div>
    </nav>

    <section class="hero">
        <div class="container">
            <h1 class="display-4">Make a Difference Today</h1>
            <p class="lead mt-3">Join our community of volunteers helping people and places in need.</p>
            <a href="#" class="btn btn-lg btn-custom mt-4">Get Started</a>
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           class="btn btn-danger mt-3">
            Logout
        </a>
</body>
</html>

