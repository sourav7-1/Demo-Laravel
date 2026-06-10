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
        <p class="lead text-muted">
            This is a demo website built with Laravel.
        </p>
    </div>

    <div class="card border-0 rounded-4 post-glow">
        <div class="card-body p-5">

            <h2 class="mb-4 text-dark">
                📖 Post Content
            </h2>

            <div class="bg-light p-4 rounded-3">
                <p class="lead text-dark mb-0">
                    Hi I am Sourav Kundu. I am a student of Daffodil International University. I am a CSE student. I am a web developer. I am a Laravel developer. I am a full stack developer. I am a programmer. I am a coder. I am a content creator On free time. I am a friend. I am a human being.
                </p>
                <p class="text-muted mt-2 mb-0">
                    {{ $post?->content ?? 'No post found yet.' }}
                </p>
            </div>

        </div>
    </div>

</div>

@endsection