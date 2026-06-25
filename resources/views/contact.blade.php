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

    .contact-wrapper {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 3rem;
        max-width: 1100px;
        margin: 4rem auto;
        padding: 0 2rem;
    }

    .contact-info h2 {
        font-family: 'Playfair Display', serif;
        color: var(--orange);
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
    }

    .contact-info p {
        color: var(--tan);
        margin-bottom: 1rem;
        line-height: 1.8;
    }

    .contact-info strong { color: var(--cream); }

    .map-embed {
        margin-top: 2rem;
        border-radius: 4px;
        overflow: hidden;
        border: 2px solid var(--orange);
    }

    .map-embed iframe { width: 100%; height: 250px; border: none; }

    .contact-form h2 {
        font-family: 'Playfair Display', serif;
        color: var(--orange);
        margin-bottom: 1.5rem;
        font-size: 1.8rem;
    }

    .form-group { margin-bottom: 1.2rem; }

    .form-group label {
        display: block;
        color: var(--tan);
        margin-bottom: 0.4rem;
        font-size: 0.9rem;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        background: var(--brown);
        border: 1px solid var(--orange);
        color: var(--cream);
        padding: 0.8rem 1rem;
        border-radius: 2px;
        font-size: 1rem;
        font-family: 'Lato', sans-serif;
    }

    .form-group textarea { height: 140px; resize: vertical; }

    .btn-submit {
        background: var(--orange);
        color: var(--cream);
        border: none;
        padding: 0.9rem 2.5rem;
        font-size: 1rem;
        letter-spacing: 2px;
        text-transform: uppercase;
        cursor: pointer;
        border-radius: 2px;
        transition: background 0.3s;
        width: 100%;
    }

    .btn-submit:hover { background: #b85516; }

    .success-msg {
        background: #2d5a1b;
        color: #a8d5a2;
        padding: 1rem;
        border-radius: 4px;
        margin-bottom: 1rem;
        text-align: center;
    }

    @media (max-width: 768px) {
        .contact-wrapper { grid-template-columns: 1fr; }
    }
</style>

<div class="page-header">
    <h1>Contact Us</h1>
</div>

<div class="contact-wrapper">
    <div class="contact-info">
        <h2>Find Us</h2>
        @if($contact)
        <p><strong>Address:</strong><br>{{ $contact->address }}</p>
        <p><strong>Phone:</strong><br>{{ $contact->phone }}</p>
        <p><strong>Email:</strong><br>{{ $contact->email }}</p>
        @if($contact->map_embed)
        <div class="map-embed">{!! $contact->map_embed !!}</div>
        @endif
        @else
        <p>Contact information coming soon.</p>
        @endif
    </div>

    <div class="contact-form">
        <h2>Send a Message</h2>
        @if(session('success'))
        <div class="success-msg">{{ session('success') }}</div>
        @endif
        <form method="POST" action="/contact">
            @csrf
            <div class="form-group">
                <label>Your Name</label>
                <input type="text" name="name" required>
            </div>
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" required>
            </div>
            <div class="form-group">
                <label>Message</label>
                <textarea name="message" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Send Message</button>
        </form>
    </div>
</div>
@endsection