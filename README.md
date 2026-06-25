# TableNest Restaurant Website

A complete, fully functional restaurant website built with Laravel 12 and Filament v5 admin panel. The TableNest Admin can manage all content independently — no developer help needed after delivery.

---

## Live Demo

- **Website:** `http://localhost:8000`
- **Admin Panel:** `http://localhost:8000/admin`
- **Admin Email:** `admin@tablenest.com`
- **Admin Password:** `Admin@1234`

---

## Features

| Page | Description |
|------|-------------|
| **Home** | Hero banner with restaurant name, tagline, and call-to-action |
| **Menu** | Tabbed menu (Starters, Mains, Desserts, Drinks) — admin managed |
| **About Us** | Restaurant story, chef introduction, and brand values |
| **Staff** | Team section with photos, names, and roles |
| **Gallery** | Photo grid showcasing ambiance and dishes |
| **Contact** | Address, phone, email, and contact form |
| **Admin Panel** | Secure login — full control over all content |

---

## Tech Stack

| Layer | Technology |
|-------|------------|
| Frontend | HTML / CSS / JavaScript / Blade |
| Backend | Laravel 12 (PHP) |
| Database | MySQL |
| Admin Panel | Filament v5 |
| Auth | Laravel Breeze |

---

## Requirements

- PHP 8.2+
- Composer
- Node.js & npm
- MySQL
- XAMPP (for local development)

---

## Installation & Setup

### 1. Clone the Repository

```bash
git clone https://github.com/AreebaGhaffar/tablenest.git
cd tablenest
```

### 2. Install PHP Dependencies

```bash
composer install
```

### 3. Install Node Dependencies & Build Assets

```bash
npm install
npm run build
```

### 4. Environment Setup

```bash
cp .env.example .env
php artisan key:generate
```

Open `.env` and configure your database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tablenest
DB_USERNAME=root
DB_PASSWORD=

APP_URL=http://localhost:8000
FILESYSTEM_DISK=public
FILAMENT_FILESYSTEM_DISK=public
```

### 5. Create Database

Open phpMyAdmin at `http://localhost/phpmyadmin` and create a database named `tablenest`.

### 6. Run Migrations

```bash
php artisan migrate
```

### 7. Create Storage Link

```bash
php artisan storage:link
```

### 8. Create Admin User

```bash
php artisan make:filament-user
```

Enter:
- **Name:** TableNest Admin
- **Email:** admin@tablenest.com
- **Password:** Admin@1234

### 9. Start the Server

```bash
php artisan serve
```

Visit `http://localhost:8000` to see the website.

---

## Admin Panel Usage

Visit `http://localhost:8000/admin` and log in with the admin credentials.

From the admin panel you can:

- **Menu Items** — Add, edit, or remove menu items with price, description, photo, and category
- **Staff** — Manage team members with photos, names, and roles
- **Gallery** — Upload or delete gallery photos anytime
- **About Content** — Edit restaurant story, chef introduction, and values
- **Contact Info** — Update address, phone, email, and Google Maps embed

---

## Project Structure

```
tablenest/
├── app/
│   ├── Filament/Resources/     # Admin panel resources
│   ├── Http/Controllers/       # Public website controllers
│   └── Models/                 # Eloquent models
├── database/
│   └── migrations/             # Database migrations
├── resources/
│   └── views/                  # Blade templates
│       ├── layouts/app.blade.php
│       ├── home.blade.php
│       ├── menu.blade.php
│       ├── about.blade.php
│       ├── staff.blade.php
│       ├── gallery.blade.php
│       └── contact.blade.php
├── routes/
│   └── web.php                 # Application routes
└── public/
    └── images/                 # Logo and static images
```

---

## Deliverables

- ✅ Fully functional restaurant website with all listed pages
- ✅ Secure TableNest Admin login
- ✅ Mobile responsive design
- ✅ Working demo with sample content
- ✅ Complete source code, clean and well organized
- ✅ 1 round of revisions included after delivery

---

## Support

For any issues or revision requests, please contact the developer.

---

*Built with ❤️ using Laravel & Filament*