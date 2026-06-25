@extends('layouts.app')

@section('content')
<style>
    .page-header {
        background: var(--brown);
        padding: 3rem 2rem;
        text-align: center;
        border-bottom: 2px solid var(--orange);
    }

    .page-header h1 {
        font-family: 'Playfair Display', serif;
        font-size: 2.5rem;
        color: var(--orange);
    }

    .about-section {
        max-width: 900px;
        margin: 4rem auto;
        padding: 0 2rem;
    }

    .about-story {
        background: var(--brown);
        padding: 2.5rem;
        border-radius: 4px;
        border-left: 4px solid var(--orange);
        margin-bottom: 3rem;
    }

    .about-story h2 {
        font-family: 'Playfair Display', serif;
        color: var(--orange);
        margin-bottom: 1rem;
        font-size: 1.8rem;
    }

    .about-story p { color: var(--tan); line-height: 1.9; }

    .chef-section {
        display: grid;
        grid-template-columns: 200px 1fr;
        gap: 2rem;
        background: var(--brown);
        padding: 2.5rem;
        border-radius: 4px;
        margin-bottom: 3rem;
        align-items: center;
    }

    .chef-section img {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid var(--orange);
    }

    .chef-info h2 {
        font-family: 'Playfair Display', serif;
        color: var(--orange);
        margin-bottom: 0.5rem;
    }

    .chef-info p { color: var(--tan); line-height: 1.8; }

    .no-content {
        text-align: center;
        color: var(--tan);
        padding: 4rem;
        font-size: 1.1rem;
    }

    @media (max-width: 768px) {
        .chef-section { grid-template-columns: 1fr; text-align: center; }
        .chef-section img { margin: 0 auto; }
    }
</style>

<div class="page-header">
    <h1>About Us</h1>
</div>

<div class="about-section">
    @if($about)
    <div class="about-story">
        <h2>Our Story</h2>
        <p>{{ $about->story }}</p>
    </div>

    <div class="chef-section">
        @if($about->chef_photo)
        <img src="{{ asset('storage/'.$about->chef_photo) }}" alt="{{ $about->chef_name }}">
        @endif
        <div class="chef-info">
            <h2>{{ $about->chef_name }}</h2>
            <p>{{ $about->chef_bio }}</p>
        </div>
    </div>

    @if($about->values)
    <div class="about-story">
        <h2>Our Values</h2>
        <p>{{ $about->values }}</p>
    </div>
    @endif

    @else
    <p class="no-content">About content coming soon.</p>
    @endif
</div>
@endsection