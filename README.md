# Laravel-Livewire-App

This is a Laravel/Livewire based app built with Laravel 11 and Livwewire v3. The application provides admin pannel with different pages functionalities and a dynamic web pages.

## Features

- **About Us**: Motive of the website
- **Services**: Services that we provide
- **Out Team**: Team members
- **Blog**: Blogs related to our webiste on our services
- **Faq**: Frequently asked questions

## Requirements

- PHP 8.3 or higher
- Laravel 11
- MySQL
- Composer
- Livewire v3
- Node.js & NPM (for front-end assets)
- Mailtrap account (for email testing)

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/kritishaaa/laravel-livewire-app.git

2. **Install Dependencies**:
    ```bash
    composer install
    npm install
    npm run dev

3. **Environment setup**:
    ```bash 
    cp .env.example .env

Set up your database and mail configurations:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password

    MAIL_MAILER=smtp
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=your_mailtrap_username
    MAIL_PASSWORD=your_mailtrap_password
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS="noreply@example.com"
    MAIL_FROM_NAME="${APP_NAME}"

4. **Run Migration**:
    ```bash
    php artisan migrate

5. **Run the application**:
    ```bash
    php artisan serve

6. **Install panels**:
    ```bash
    php artisan filament:instal --panels

5. **Create admin user**:
    ```bash
    php artisan make:filament-user

**Features:**

**Interface**: Provides a user-friendly interface for managing pages, including viewing pages details, editing pages information, adding new pages details, and deleting existing ones.

## Acknowledgments

- **Laravel**: A powerful PHP framework used for building the application.
- **Tailwind CSS**: For the modern and responsive UI design.
- **Filament**: A user-friendly admin panel for Laravel, offering a simple yet powerful way to manage backend operations.
- **Mailtrap**: For email testing and verification.

Feel free to reach out if you have any questions or need further assistance.


