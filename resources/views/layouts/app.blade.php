<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TableNest Restaurant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --dark: #1C0F08;
            --brown: #3B1F0E;
            --cream: #F5E6C8;
            --orange: #D4651A;
            --tan: #E8D5A3;
        }

        body { font-family: 'Lato', sans-serif; background: var(--dark); color: var(--cream); }

        nav {
            background: var(--brown);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
            border-bottom: 2px solid var(--orange);
        }

        .nav-logo {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
        }

        .nav-logo img { height: 50px; border-radius: 50%; }

        .nav-logo span {
            font-family: 'Playfair Display', serif;
            font-size: 1.5rem;
            color: var(--cream);
        }

        .nav-links { display: flex; gap: 2rem; list-style: none; }

        .nav-links a {
            color: var(--tan);
            text-decoration: none;
            font-size: 0.95rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: color 0.3s;
        }

        .nav-links a:hover { color: var(--orange); }

        footer {
            background: var(--brown);
            text-align: center;
            padding: 2rem;
            color: var(--tan);
            border-top: 2px solid var(--orange);
            margin-top: 4rem;
        }

        .hamburger { display: none; cursor: pointer; flex-direction: column; gap: 5px; }
        .hamburger span { width: 25px; height: 2px; background: var(--cream); display: block; }

        @media (max-width: 768px) {
            .hamburger { display: flex; }
            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
                left: 0;
                right: 0;
                background: var(--brown);
                flex-direction: column;
                padding: 1rem 2rem;
                gap: 1rem;
            }
            .nav-links.open { display: flex; }
        }
    </style>
</head>
<body>

<nav>
    <a href="/" class="nav-logo">
        <img src="/images/logo.jpeg" alt="TableNest Logo">
        <span>TableNest</span>
    </a>
    <div class="hamburger" onclick="this.nextElementSibling.classList.toggle('open')">
        <span></span><span></span><span></span>
    </div>
    <ul class="nav-links">
        <li><a href="/">Home</a></li>
        <li><a href="/menu">Menu</a></li>
        <li><a href="/about">About</a></li>
        <li><a href="/staff">Staff</a></li>
        <li><a href="/gallery">Gallery</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
</nav>

@yield('content')

<footer>
    <p>&copy; {{ date('Y') }} TableNest Restaurant. All rights reserved.</p>
</footer>

</body>
</html>