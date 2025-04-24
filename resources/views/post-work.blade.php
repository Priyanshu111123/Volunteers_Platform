<!DOCTYPE html>
<html>
<head>
    <title>Post Volunteer Work</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Post a Volunteer Opportunity</h2>

    @if(session('success'))
        <div class="alert alert-success text-center">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('work.store') }}" method="POST" class="card p-4 shadow-sm">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Work Title</label>
            <input type="text" class="form-control" id="title" name="title" required value="{{ old('title') }}">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Work Description</label>
            <textarea class="form-control" id="description" name="description" rows="5" required>{{ old('description') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary w-100">Post Work</button>
    </form>
</div>

</body>
</html>
