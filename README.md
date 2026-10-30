# Barangay Bakuna Tracker

Laravel Blade, Tailwind CSS, and Vite dashboard for Ej Liu's vaccination schedule.

## Seeded login

- Email: `nurse.liu@bakuna.test`
- Password: `bakuna2026`

## Run locally

```bash
composer install
php artisan migrate:fresh --seed
npm install
npm run dev
php artisan serve
```

Open `http://127.0.0.1:8000`.

The project uses SQLite, and the seeded schedule includes BCG, Pentavalent, OPV,
MMR, Anti-Flu, Hepatitis B, and a birthday entry dated April 20, 2026.
