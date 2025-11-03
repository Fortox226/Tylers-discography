# Tyler Discography

## Table of Contents

1. [Creators](#creators)
2. [Project Overview](#project-overview)
3. [Features](#features)
4. [Technologies](#technologies)
5. [Setup Instructions](#setup-instructions)
6. [Laravel](#laravel)

---

## Creators

-   **Filip Zabrzewski**
-   **Tobiasz Twardak**
-   **Jan Miepariszwili**

---

## 📖 Overview
This project is an **Admin Panel and Music Album Management System** built with **Laravel** and **Tailwind CSS**.  
It allows administrators to manage users, edit their roles, and view all albums with their respective songs in a clean and responsive layout.  
The application combines backend logic written in Laravel with a modern front-end using Blade templates and Tailwind.


## 💡 Features
- 👤 **User Management Panel** — list of all users with modals for detailed info  
- 🔄 **Role Editing** — change user roles dynamically (Admin/User) via Fetch API  
- 🎶 **Album Display** — shows albums and songs in multiple columns  
- ⚙️ **Laravel MVC Architecture** — clean and modular backend  
- 🔒 **CSRF-Protected Requests** — secure communication between frontend and backend  
- 🖥️ **Responsive Design** — styled using Tailwind CSS and minimal custom CSS  


---

## 🛠️ Technologies Used
| Layer | Technology |
|-------|-------------|
| **Backend** | PHP 8.4, Laravel 12 |
| **Frontend** | Blade Templates, Tailwind CSS, JavaScript (Fetch API) |
| **Database** | MySQL / SQLite |
| **Tools** | Composer, NPM, Artisan CLI |

---

## ⚙️ Installation & Setup


```bash
git clone https://github.com/yourusername/yourproject.git

cd yourproject

composer install

npm install
```
### Configure the environment file

Copy the example .env file and update your database info:

```bash
    cp .env.example .env
```
Example database config:

```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=root
    DB_PASSWORD=
```

### Configure Artisan

```bash
    php artisan key:generate

    php artisan migrate --seed
```
### Start the Laravel server

```bash
    php artisan serve
```
visit the app at: http://127.0.0.1:8000

### Start the Vite development server (for Tailwind CSS)

In a second terminal, run:

```bash
    npm run dev
```

## 🔑 Default Admin Account

After seeding, you can log in with:

```bash
    Email: admin@example.com
    Password: haslo123
```
## 🧠 How It Works

The Admin Panel lists all users fetched from the database.

Clicking Info opens a modal window with detailed user data.

Changing the role triggers a PATCH request (/admin/update-role/{id}) handled by a Laravel controller.

The backend updates the database asynchronously and returns a JSON response.

Albums and songs are displayed dynamically in a multi-column layout with Tailwind styling.

## 🗂️ Project Structure

```bash 
app/
 ├── Http/
 │    ├── Controllers/        # Application logic (UserController, AlbumController)
 │    └── Models/             # Eloquent models (User, Album, Song)
database/
 ├── migrations/              # Database table definitions
 └── seeders/                 # Sample data for users and albums
public/
 └── img files                # images on the site
resources/
 ├── views/                   # Blade templates for UI
 ├── css/                     # Tailwind entry point
 └── js/                      # Frontend scripts (Fetch, modals)
routes/
 └── web.php                  # Web routes

```




## Laravel

<details><summary>Click Here</summary>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com)**
-   **[Tighten Co.](https://tighten.co)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Redberry](https://redberry.international/laravel-development)**
-   **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

</details>
