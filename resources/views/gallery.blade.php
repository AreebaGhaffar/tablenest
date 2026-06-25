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

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
        gap: 1rem;
        max-width: 1200px;
        margin: 3rem auto;
        padding: 0 2rem;
    }

    .gallery-item {
        position: relative;
        overflow: hidden;
        border-radius: 4px;
        aspect-ratio: 1;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.4s;
    }

    .gallery-item:hover img { transform: scale(1.05); }

    .gallery-caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(28,15,8,0.8);
        color: var(--cream);
        padding: 0.8rem;
        text-align: center;
        transform: translateY(100%);
        transition: transform 0.3s;
    }

    .gallery-item:hover .gallery-caption { transform: translateY(0); }

    .no-content {
        text-align: center;
        color: var(--tan);
        padding: 4rem;
        font-size: 1.1rem;
        grid-column: 1/-1;
    }
</style>

<div class="page-header">
    <h1>Our Gallery</h1>
</div>

<div class="gallery-grid">
    @forelse($photos as $photo)
    <div class="gallery-item">
        <img src="{{ asset('storage/'.$photo->photo) }}" alt="{{ $photo->caption }}">
        @if($photo->caption)
        <div class="gallery-caption">{{ $photo->caption }}</div>
        @endif
    </div>
    @empty
    <p class="no-content">Gallery photos coming soon.</p>
    @endforelse
</div>
@endsection