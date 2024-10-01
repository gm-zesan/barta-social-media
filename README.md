# Barta - A Social Media Platform

Welcome to **Barta**, a simple social media platform built with Laravel. This project provides basic user registration, login, profile view, and profile update functionality.

## Features

- User Registration
- User Login
- User Profile View
- User Profile Update (Including bio, avatar, and password)

## Requirements

- PHP 8.0 or higher
- Composer
- Node.js & npm
- MySQL or any supported database

## Installation

Follow these steps to get the project running on your local machine:

### 1. Clone the Repository
```bash
git clone https://github.com/gm-zesan/barta-social-media.git
cd barta-social-media
git checkout v-2
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Configure Environment Variables
```bash
cp .env.example .env
```
### 4. Open .env and update the following values
```bash
APP_NAME=Barta
DB_CONNECTION=mysql
DB_DATABASE=barta-01
```
### 5. Generate Application Key
```bash
php artisan key:generate
```
### 6. Run Migrations
```bash
php artisan migrate
```
### 7. Link Storage (For Avatar Images)
```bash
php artisan storage:link
```
### 8. Run the Development Server
```bash
php artisan serve
```



## Routes
```bash
GET    /register        -> Display the registration form
POST   /register        -> Submit a new user registration
GET    /login           -> Display the login form
POST   /login           -> Handle login request
GET   /                 -> Display the newsfeed
GET   /profile          -> Show user profile
GET   /profile/edit     -> Edit user profile
PUT   /profile          -> Update user profile
GET   /post-show        -> Show a single post
```