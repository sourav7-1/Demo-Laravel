@extends('index')

@section('section-container')

<div class="container py-5">

    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold text-primary">
            Welcome to My Laravel Website
        </h1>
        <p class="lead text-muted">
            Explore amazing content and stay connected.
        </p>
        <p class = "lead text-muted">
            This is a demo website built with Laravel.
        </p>
    </div>

    <div class="card shadow-lg border-0 rounded-4">
        <div class="card-body p-5">

            <h2 class="mb-4 text-dark">
                📖 Post Content
            </h2>

            <div class="bg-light p-4 rounded-3">
                {{ $post?->content }}
            </div>

        </div>
    </div>

</div>

@endsection