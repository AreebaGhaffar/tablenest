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

    .staff-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 2rem;
        max-width: 1100px;
        margin: 4rem auto;
        padding: 0 2rem;
    }

    .staff-card {
        background: var(--brown);
        border-radius: 4px;
        text-align: center;
        padding: 2rem 1.5rem;
        border-bottom: 3px solid var(--orange);
    }

    .staff-card img {
        width: 140px;
        height: 140px;
        object-fit: cover;
        border-radius: 50%;
        border: 3px solid var(--orange);
        margin-bottom: 1rem;
    }

    .staff-card h3 {
        font-family: 'Playfair Display', serif;
        color: var(--cream);
        font-size: 1.3rem;
        margin-bottom: 0.4rem;
    }

    .staff-card span {
        color: var(--orange);
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .no-content {
        text-align: center;
        color: var(--tan);
        padding: 4rem;
        font-size: 1.1rem;
    }
</style>

<div class="page-header">
    <h1>Meet Our Team</h1>
</div>

<div class="staff-grid">
    @forelse($staff as $member)
    <div class="staff-card">
        @if($member->photo)
        <img src="{{ asset('storage/'.$member->photo) }}" alt="{{ $member->name }}">
        @else
        <img src="/images/logo.jpeg" alt="{{ $member->name }}">
        @endif
        <h3>{{ $member->name }}</h3>
        <span>{{ $member->role }}</span>
    </div>
    @empty
    <p class="no-content">Staff profiles coming soon.</p>
    @endforelse
</div>
@endsection