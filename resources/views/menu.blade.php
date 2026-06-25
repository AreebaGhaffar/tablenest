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

    .menu-tabs {
        display: flex;
        justify-content: center;
        gap: 1rem;
        padding: 2rem;
        flex-wrap: wrap;
    }

    .tab-btn {
        background: transparent;
        border: 2px solid var(--orange);
        color: var(--cream);
        padding: 0.6rem 1.5rem;
        cursor: pointer;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: all 0.3s;
        border-radius: 2px;
    }

    .tab-btn.active, .tab-btn:hover {
        background: var(--orange);
        color: var(--cream);
    }

    .menu-section { display: none; padding: 2rem; max-width: 1100px; margin: 0 auto; }
    .menu-section.active { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; }

    .menu-card {
        background: var(--brown);
        border-radius: 4px;
        overflow: hidden;
        border-bottom: 3px solid var(--orange);
    }

    .menu-card img { width: 100%; height: 180px; object-fit: cover; }

    .menu-card-body { padding: 1.2rem; }

    .menu-card-body h3 {
        font-family: 'Playfair Display', serif;
        color: var(--cream);
        margin-bottom: 0.5rem;
    }

    .menu-card-body p { color: var(--tan); font-size: 0.9rem; margin-bottom: 0.8rem; }

    .menu-card-body .price {
        color: var(--orange);
        font-size: 1.1rem;
        font-weight: 700;
    }

    .empty { text-align: center; color: var(--tan); padding: 3rem; grid-column: 1/-1; }
</style>

<div class="page-header">
    <h1>Our Menu</h1>
</div>

<div class="menu-tabs">
    <button class="tab-btn active" onclick="showTab('starters')">Starters</button>
    <button class="tab-btn" onclick="showTab('mains')">Mains</button>
    <button class="tab-btn" onclick="showTab('desserts')">Desserts</button>
    <button class="tab-btn" onclick="showTab('drinks')">Drinks</button>
</div>

<div id="starters" class="menu-section active">
    @forelse($starters as $item)
    <div class="menu-card">
        @if($item->photo)
        <img src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->name }}">
        @endif
        <div class="menu-card-body">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
            <span class="price">${{ number_format($item->price, 2) }}</span>
        </div>
    </div>
    @empty
    <p class="empty">No starters available yet.</p>
    @endforelse
</div>

<div id="mains" class="menu-section">
    @forelse($mains as $item)
    <div class="menu-card">
        @if($item->photo)
        <img src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->name }}">
        @endif
        <div class="menu-card-body">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
            <span class="price">${{ number_format($item->price, 2) }}</span>
        </div>
    </div>
    @empty
    <p class="empty">No mains available yet.</p>
    @endforelse
</div>

<div id="desserts" class="menu-section">
    @forelse($desserts as $item)
    <div class="menu-card">
        @if($item->photo)
        <img src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->name }}">
        @endif
        <div class="menu-card-body">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
            <span class="price">${{ number_format($item->price, 2) }}</span>
        </div>
    </div>
    @empty
    <p class="empty">No desserts available yet.</p>
    @endforelse
</div>

<div id="drinks" class="menu-section">
    @forelse($drinks as $item)
    <div class="menu-card">
        @if($item->photo)
        <img src="{{ asset('storage/'.$item->photo) }}" alt="{{ $item->name }}">
        @endif
        <div class="menu-card-body">
            <h3>{{ $item->name }}</h3>
            <p>{{ $item->description }}</p>
            <span class="price">${{ number_format($item->price, 2) }}</span>
        </div>
    </div>
    @empty
    <p class="empty">No drinks available yet.</p>
    @endforelse
</div>

<script>
    function showTab(tab) {
        document.querySelectorAll('.menu-section').forEach(s => s.classList.remove('active'));
        document.querySelectorAll('.tab-btn').forEach(b => b.classList.remove('active'));
        document.getElementById(tab).classList.add('active');
        event.target.classList.add('active');
    }
</script>
@endsection