<!DOCTYPE html>
<html>
<head>
    <title>Volunteer Platform Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <h2 class="text-center mb-4">Signup</h2>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="/signup" class="card p-4 shadow-sm">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Full Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password:</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="mb-4">
            <label for="role" class="form-label">Sign up as:</label>
            <select class="form-select" id="role" name="role" required>
                <option value="">Select Role</option>
                <option value="volunteer" {{ old('role') == 'volunteer' ? 'selected' : '' }}>Volunteer</option>
                <option value="client" {{ old('role') == 'client' ? 'selected' : '' }}>Client</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary w-100">Sign Up</button>
    </form>
</div>

</body>
</html>
