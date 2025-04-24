<!DOCTYPE html>
<html>
<head>
    <title>Client Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Welcome, {{ $user->name }}!</h2>

    <h4>Your Posted Works</h4>

    @if($works->isEmpty())
        <p>You haven't posted any work yet.</p>
    @else
        <ul class="list-group mb-4">
            @foreach($works as $work)
                <li class="list-group-item">
                    <strong>{{ $work->title }}</strong><br>
                    {{ $work->description }}
                    <div class="text-muted small mt-1">Posted on {{ $work->created_at->format('d M Y') }}</div>
                </li>
            @endforeach
        </ul>
    @endif

    <a href="{{ route('work.create') }}" class="btn btn-primary">Post New Work</a>
</div>

</body>
</html>
