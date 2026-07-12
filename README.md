# Company Website

A full-featured corporate/company website built with the **Laravel** framework. It ships a public-facing marketing site (home, about, services, contact) alongside a protected **admin dashboard** for managing site content — services, features, testimonials, contact messages, and newsletter subscribers. The site supports **multi-language localization** (English & Arabic, including RTL admin assets).

## Features

### Public Website
- **Home page** with dynamic content sections
- **About page**
- **Services page** listing company services
- **Contact page** with a contact form (stores messages in the database)
- **Newsletter subscription** widget (footer sign-up)
- **Localization** — switch between English and Arabic

### Admin Dashboard
- Secure authentication (powered by Laravel Breeze)
- **Services** management (create, read, update, delete)
- **Features** management (CRUD)
- **Testimonials** management (CRUD)
- **Contact messages** — view submitted messages and delete them
- **Subscribers** — view and remove newsletter subscribers
- **Site settings** management
- Dedicated RTL admin theme for Arabic locale

## Tech Stack

| Layer | Technology |
|---|---|
| Backend framework | [Laravel 10](https://laravel.com) (PHP ^8.1) |
| Auth scaffolding | Laravel Breeze |
| API auth | Laravel Sanctum |
| Localization | [mcamara/laravel-localization](https://github.com/mcamara/laravel-localization) |
| Frontend tooling | Vite, Tailwind CSS, Alpine.js |
| Database | MySQL (configurable) |
| Testing | PHPUnit |

## Project Structure

```
app/
├── Http/Controllers/       # Front & admin controllers (Services, Features, Messages, Subscribers, Testimonials, Settings, Auth, ...)
├── Models/                 # Eloquent models (Service, Feature, Message, Subscriber, Testmonial, Setting, User)
├── Policies/                # Authorization policies
└── View/                    # View composers/components

database/
├── migrations/               # Database schema
├── factories/                 # Model factories
└── seeders/                   # Database seeders

resources/
├── views/front/               # Public-facing Blade views
├── views/admin/                # Admin dashboard Blade views
├── css/ & js/                  # Frontend assets (Tailwind/Alpine)

lang/
├── en/                        # English translations
└── ar/                        # Arabic translations

routes/
├── web.php                    # Front-end + admin routes
├── auth.php                   # Authentication routes
└── api.php                    # API routes
```

## Requirements

- PHP >= 8.1
- Composer
- Node.js & npm
- MySQL (or another database supported by Laravel)

## Getting Started

1. **Clone the repository**
   ```bash
   git clone https://github.com/KhaledAbdurahman/Company-Website.git
   cd Company-Website
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install JavaScript dependencies**
   ```bash
   npm install
   ```

4. **Set up your environment file**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure your database**

   Update the `DB_*` variables in `.env` with your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=company_website
   DB_USERNAME=root
   DB_PASSWORD=
   ```

6. **Run database migrations and seeders**
   ```bash
   php artisan migrate --seed
   ```

7. **Build frontend assets**
   ```bash
   npm run dev    # for local development
   # or
   npm run build  # for production
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

   The site will be available at `http://localhost:8000`, and the admin dashboard at `http://localhost:8000/{locale}/admin`.

## Running Tests

```bash
php artisan test
```

## Localization

The application uses `mcamara/laravel-localization` to serve content in multiple languages. Locale-prefixed routes (e.g. `/en/admin`, `/ar/admin`) automatically load the corresponding translation files from `lang/en` and `lang/ar`, and the Arabic admin theme uses a dedicated RTL asset set (`public/assets-admin-rtl`).

## License

This project is open-sourced software licensed under the [MIT license](LICENSE).
