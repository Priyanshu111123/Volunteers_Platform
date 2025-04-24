<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">👋 Hello, {{ $user->name }} (Client)</h2>
        <p class="lead text-muted">Welcome to your dashboard. Post and manage your job listings easily.</p>
        <a href="{{ route('work.create') }}" class="btn btn-success btn-lg mt-3">
            <i class="bi bi-plus-circle me-2"></i>Post New Job
        </a>
    </div>

    <hr class="my-4">

    <div>
        <h4 class="mb-4">📝 Your Posted Works</h4>

        @if($works->isEmpty())
            <div class="alert alert-info text-center">
                <i class="bi bi-info-circle-fill me-2"></i>
                You haven't posted any jobs yet.
            </div>
        @else
            <div class="row g-4">
                @foreach($works as $work)
                    <div class="col-md-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $work->title }}</h5>
                                <p class="card-text text-muted">{{ $work->description }}</p>
                                <div class="d-flex justify-content-between align-items-center mt-3">
                                    <small class="text-muted">📅 {{ $work->created_at->format('d M Y') }}</small>
                                    {{-- Optional future status badge --}}
                                    {{-- <span class="badge bg-secondary">Open</span> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</div>
@endsection


</body>
</html>