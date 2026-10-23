# Mini-CMS — Laravel 13

A simple Content Management System project developed as part of the **Atelier Framework Côté Serveur** learning sessions.

## About the Project

Mini-CMS is a learning project designed to explore Laravel fundamentals, including routing, Blade views, dependency management, and Git/GitHub version control.

## Technologies

- PHP 8.4+
- Laravel 13
- Composer
- Node.js and npm
- Vite
- Git and GitHub

## Features

- Home page
- Welcome page
- Short greeting page
- Current-time page
- Application version page
- About page (`/a-propos`)

## Requirements

Make sure the following tools are installed:

- PHP 8.4.1 or later
- Composer
- Node.js and npm

## Installation

Clone the repository:

```bash
git clone https://github.com/Oussamahajri/mini-cms.git
cd mini-cms
```

Install PHP dependencies:

```bash
composer install
```

Install JavaScript dependencies:

```bash
npm install
```

Create the environment file:

```bash
cp .env.example .env
```

Generate the application key:

```bash
php artisan key:generate
```

## Run the Project

Start the frontend development server:

```bash
npm run dev
```

In a second terminal, start Laravel:

```bash
php artisan serve
```

Open the application at:

http://127.0.0.1:8000

## Main Routes

| Route | Description |
|---|---|
| `/` | Home |
| `/bonjour` | Greeting |
| `/bonjour-court` | Short greeting |
| `/bienvenue` | Welcome |
| `/version` | Application version |
| `/heure` | Current time |
| `/a-propos` | About the project |

## Author

**Oussama Hajri**

GitHub: [@Oussamahajri](https://github.com/Oussamahajri)

## Learning Objectives

- Understand Laravel routing and Blade views.
- Manage PHP and JavaScript dependencies.
- Practise Git commits, tags, and GitHub publishing.

---

This project is intended for educational purposes.
