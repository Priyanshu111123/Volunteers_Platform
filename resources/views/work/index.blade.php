<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('layouts.app') {{-- or use your own layout --}}

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">Available Work</h2>

    @foreach($works as $work)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $work->title }}</h5>
                <p class="card-text">{{ $work->description }}</p>
                <p class="text-muted">Posted on {{ $work->created_at->format('F j, Y') }}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection

</body>
</html>