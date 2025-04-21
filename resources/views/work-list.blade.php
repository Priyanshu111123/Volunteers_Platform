<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Find Volunteer Work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f0f4f8;
            font-family: 'Segoe UI', sans-serif;
        }

        .container {
            margin-top: 60px;
        }

        .card {
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .btn-apply {
            background-color: #0a464e;
            color: white;
        }

        .btn-apply:hover {
            background-color: #083d45;
        }

        h2 {
            margin-bottom: 30px;
            color: #0a464e;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Available Volunteer Work</h2>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

        <!-- Example cards, replace these with dynamic loop later -->
        <div class="col">
            <div class="card p-3">
                <h5>Tree Plantation Drive</h5>
                <p>Help plant trees and raise awareness for environmental protection in local parks.</p>
                <a href="#" class="btn btn-apply">Apply Now</a>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <h5>Food Distribution</h5>
                <p>Assist in distributing meals to the homeless and underserved communities.</p>
                <a href="#" class="btn btn-apply">Apply Now</a>
            </div>
        </div>

        <div class="col">
            <div class="card p-3">
                <h5>Blood Donation Camp</h5>
                <p>Volunteer at our local blood donation drive and help manage the registrations.</p>
                <a href="#" class="btn btn-apply">Apply Now</a>
            </div>
        </div>

        <!-- Add more static or dynamic cards as needed -->

    </div>
</div>

</body>
</html>
