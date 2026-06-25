@extends('layouts.app')

@section('content')
<style>
    .hero {
        min-height: 90vh;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        background: linear-gradient(rgba(28,15,8,0.7), rgba(28,15,8,0.9)),
                    url('/images/logo.jpeg') center/cover;
        padding: 2rem;
    }

    .hero h1 {
        font-family: 'Playfair Display', serif;
        font-size: 4rem;
        color: var(--cream);
        margin-bottom: 1rem;
    }

    .hero p {
        font-size: 1.2rem;
        color: var(--tan);
        margin-bottom: 2rem;
        letter-spacing: 2px;
        text-transform: uppercase;
    }

    .btn {
        background: var(--orange);
        color: var(--cream);
        padding: 0.9rem 2.5rem;
        text-decoration: none;
        font-size: 1rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        border-radius: 2px;
        transition: background 0.3s;
    }

    .btn:hover { background: #b85516; }

    .features {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 2rem;
        padding: 4rem 2rem;
        max-width: 1100px;
        margin: 0 auto;
    }

    .feature-card {
        background: var(--brown);
        padding: 2rem;
        text-align: center;
        border-radius: 4px;
        border-top: 3px solid var(--orange);
    }

    .feature-card h3 {
        font-family: 'Playfair Display', serif;
        font-size: 1.4rem;
        color: var(--orange);
        margin-bottom: 1rem;
    }

    .feature-card p { color: var(--tan); line-height: 1.7; }

    @media (max-width: 768px) {
        .hero h1 { font-size: 2.5rem; }
        .features { grid-template-columns: 1fr; }
    }
</style>

<section class="hero">
    <div>
        <h1>Welcome to TableNest</h1>
        <p>Fine Dining · Warm Hospitality</p>
        <a href="/menu" class="btn">Explore Our Menu</a>
    </div>
</section>

<section class="features">
    <div class="feature-card">
        <h3>Fine Dining</h3>
        <p>Experience exquisite cuisine crafted with the finest ingredients by our expert chefs.</p>
    </div>
    <div class="feature-card">
        <h3>Warm Hospitality</h3>
        <p>Every guest is treated like family. Our staff ensures your visit is truly memorable.</p>
    </div>
    <div class="feature-card">
        <h3>Reserve a Table</h3>
        <p>Book your table today and enjoy an unforgettable dining experience at TableNest.</p>
    </div>
</section>

@endsection