# Portfolio Website

A modern portfolio website built with Laravel and Tailwind CSS.

## Features

- 🎨 Beautiful, responsive design with Tailwind CSS
- 📱 Mobile-friendly navigation with Alpine.js
- 💼 Project showcase with filtering
- 📬 Contact form with validation
- ⚡ Fast performance with Vite

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js & npm
- MySQL or SQLite

## Installation

### 1. Clone the repository

```bash
git clone https://github.com/yourusername/portfolio.git
cd portfolio
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Install JavaScript dependencies

```bash
npm install
```

### 4. Environment setup

```bash
cp .env.example .env
php artisan key:generate
```

### 5. Database setup

Edit `.env` with your database credentials, then:

```bash
php artisan migrate
```

### 6. Start development server

```bash
# Terminal 1 - Laravel
php artisan serve

# Terminal 2 - Vite (for Tailwind CSS)
npm run dev
```

Visit `http://localhost:8000`

## Customization

1. **Personal Info**: Edit `app/Http/Controllers/HomeController.php` and views
2. **Projects**: Update project data in `ProjectController.php`
3. **Styling**: Modify `resources/css/app.css` for custom styles
4. **Colors**: Update Tailwind config in `tailwind.config.js`

## Deployment

### Build for production

```bash
npm run build
```

### Deploy to hosting

1. Upload all files to your server
2. Run `composer install --no-dev`
3. Set `.env` to `APP_ENV=production`
4. Configure your web server to point to `/public`

## License

MIT License
