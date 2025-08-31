# Task Management System

A Laravel-based task management system with user authentication and CRUD operations.

## Features

- User authentication (registration & login)
- Task management (Create, Read, Update, Delete)
- Per-user task isolation
- Status tracking (pending/done)

## Requirements

- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL

## Installation

1. Clone the repository:
    ```bash
    git clone <repository-url>
    cd task
    ```

2. Install PHP dependencies:
    ```bash
    composer install
    ```

3. Copy environment file:
    ```bash
    cp .env.example .env
    ```

4. Configure your database in `.env`:
    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=task
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

5. Install Laravel Breeze & dependencies:
    ```bash
    composer require laravel/breeze --dev
    php artisan breeze:install
    ```

6. Generate application key:
    ```bash
    php artisan key:generate
    ```

7. Run migrations:
    ```bash
    php artisan migrate
    ```

8. Install and compile frontend assets:
    ```bash
    npm install
    npm run dev
    ```

## Usage

1. Start the development server:
    ```bash
    php artisan serve
    ```

2. Visit `http://localhost:8000` in your browser
3. Register a new account
4. Start managing your tasks!
