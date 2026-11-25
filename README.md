# 🤖 AI Builds My Website

An AI-powered website builder that helps users create and manage business websites using Laravel, PHP, and MySQL.

🌐 **Live Demo:** [https://ai-builds-my-website.ethiodeploy.app/](https://ai-builds-my-website.ethiodeploy.app/)

💻 **GitHub Repository:** [https://github.com/rojanagunoori/ai-builds-my-website](https://github.com/rojanagunoori/ai-builds-my-website)

🚀 **Hosted on:** [EthioDeploy](https://ethiodeploy.com/)

---

**An AI-powered website builder that helps business owners create professional websites using their business information, social media links, documents, and images.**

The goal of this project is to simplify website creation for small businesses and business owners who may not have technical knowledge or web development experience.

Instead of manually designing and developing a website, users will be able to provide their business details, share relevant links, and upload documents. The application is designed to use AI to understand the available business information and generate website content based on verified sources.

The project is being developed using **Laravel, PHP, MySQL, HTML, CSS, JavaScript, and AI integration technologies.**

---

## 🌟 Project Overview

**AI Builds My Website** is a Laravel-based web application designed to help business owners create websites from the information they already have.

Many small businesses have their information distributed across different platforms, including social media profiles, Google Business listings, PDF documents, price lists, and business photographs.

Collecting and organizing this information manually before building a website can be time-consuming.

This project aims to make that process easier by providing a centralized platform where users can register, manage their business information, and eventually generate and publish websites using AI.

### 🎯 Project Objectives

-   Allow users to create an account and securely log in.
-   Collect business information through a structured form.
-   Store multiple business profiles for individual users.
-   Support business contact information and social media links.
-   Provide a centralized dashboard to manage business profiles.
-   Integrate AI to generate professional website content.
-   Allow users to edit and regenerate individual website sections.
-   Support document and image uploads.
-   Publish generated websites through public URLs.
-   Store application and business information in a MySQL database.
-   Avoid generating unsupported business information.

### 💡 Problem Statement

Small business owners often face difficulties creating websites because:

1. They may not have programming or web development knowledge.
2. Hiring a professional website developer can be expensive.
3. Their business information is scattered across multiple platforms.
4. Manually preparing website content takes time.
5. Updating website information requires technical assistance.

### ✅ Proposed Solution

This application aims to provide a simple website-building platform where users can:

1. Register and log in.
2. Add their business details.
3. Provide social media and Google Business links.
4. Upload business documents, price lists, and photographs.
5. Allow AI to process the available information.
6. Generate a professional business website.
7. Edit and regenerate website sections.
8. Publish the website using a public URL.

**Golden Rule: Never invent business facts. If information is missing, unclear, or conflicting, the application should ask the user instead of generating unsupported information.**

---

## 🔗 Project Links and Introduction

| Resource            | Link                                |
| ------------------- | ----------------------------------- |
| GitHub Repository   | Add your repository URL             |
| Live Application    | Add deployment URL when available   |
| Demo Video          | Add your 5-minute demo video URL    |
| Developer Portfolio | https://portfolio-roja.netlify.app/ |
| GitHub Profile      | https://github.com/rojanagunoori    |

### 👩‍💻 Introduction

This project was developed as part of the Full Stack Development Internship assignment provided by **Websites.co.in**.

The assignment focuses on building an AI-powered application that transforms business information into a professional website.

The application uses Laravel for backend development, MySQL for database management, and HTML, CSS, and JavaScript for the user interface.

The initial development phase focuses on user authentication, business profile management, database integration, and dashboard functionality. Additional AI-powered website generation and publishing capabilities are planned as subsequent development phases.

---

## 🚀 Features

### 1. User Authentication

The application provides a user authentication system that allows business owners to create accounts and securely access their dashboards.

**Registration:**

-   Users can register using their full name, email address, and password.
-   Email addresses are validated to prevent duplicate accounts.
-   Passwords must contain at least eight characters.
-   Password confirmation is required.
-   Passwords are securely hashed before database storage.
-   Users are automatically logged in after successful registration.

**Login:**

-   Users can log in using their registered email address and password.
-   Laravel authentication validates user credentials.
-   Session regeneration is performed after successful login.
-   Invalid login attempts display an appropriate error message.

**Logout:**

-   Users can securely log out.
-   The current authentication session is invalidated.
-   Session tokens are regenerated.

**Implementation Files:**

-   `app/Http/Controllers/AuthController.php`
-   `resources/views/auth/register.blade.php`
-   `resources/views/auth/login.blade.php`
-   `routes/web.php`

### 2. User Dashboard

After successful authentication, users are redirected to their dashboard.

The dashboard provides a centralized interface for accessing business management functionality.

**Dashboard features:**

-   Personalized welcome message.
-   Navigation sidebar.
-   User profile information.
-   Logout functionality.
-   Business profile overview.
-   Total business profile count.
-   Business profile listing.
-   Create business profile option.
-   Account deletion option.

The dashboard retrieves business profiles associated with the authenticated user.

**Implementation Files:**

-   `app/Http/Controllers/DashboardController.php`
-   `resources/views/dashboard.blade.php`

### 3. Business Profile Management

Users can add their business information through a structured form.

The business form collects the following information:

| Field               | Description               | Required |
| ------------------- | ------------------------- | -------- |
| Business Name       | Name of the business      | Yes      |
| Business Category   | Type of business          | No       |
| City                | Business location         | Yes      |
| Address             | Complete business address | No       |
| Phone               | Business contact number   | No       |
| Email               | Business email address    | No       |
| Description         | Business introduction     | No       |
| Website URL         | Existing business website | No       |
| Facebook URL        | Facebook profile or page  | No       |
| Instagram URL       | Instagram profile         | No       |
| Google Business URL | Google Business listing   | No       |

**Features:**

-   Validates submitted business information.
-   Checks email and URL formats.
-   Stores business information in MySQL.
-   Associates each business profile with the authenticated user.
-   Displays saved business profiles on the dashboard.
-   Supports multiple business profiles for one user.

**Implementation Files:**

-   `app/Http/Controllers/BusinessController.php`
-   `app/Models/Business.php`
-   `resources/views/business/create.blade.php`

### 4. Multiple Business Profiles

A registered user can create multiple business profiles.

For example, one user can manage:

-   A clothing store.
-   A restaurant.
-   A beauty salon.
-   A grocery store.

Each business profile is associated with its respective user through a one-to-many database relationship.

This allows users to manage multiple businesses without creating separate accounts.

### 5. MySQL Database Integration

MySQL is used to store application information.

The database currently supports:

-   User registration details.
-   Hashed passwords.
-   Business names and categories.
-   Business contact information.
-   Business descriptions.
-   Social media URLs.
-   Google Business URLs.
-   Business ownership relationships.
-   Record creation and update timestamps.

Laravel migrations are used to create and manage database tables.

### 6. Account Deletion

Users can permanently delete their accounts through the dashboard.

**Features:**

-   Dedicated Danger Zone section.
-   Account deletion confirmation popup.
-   Confirmation before permanent deletion.
-   Deletes associated business profiles.
-   Deletes the authenticated user's account.
-   Uses a database transaction.
-   Invalidates the user's session after deletion.
-   Redirects users to the registration page.

The account deletion functionality prevents accidental deletion by requiring confirmation through a popup.

### 7. Responsive User Interface

The application uses custom HTML and CSS to provide a clean and accessible interface.

**UI features:**

-   Responsive registration page.
-   Responsive login page.
-   Business information form.
-   Dashboard navigation sidebar.
-   Business profile cards.
-   Account deletion confirmation modal.
-   Mobile-friendly layouts.

### 8. Planned AI Website Generation

The application is intended to integrate AI to transform verified business information into website content.

Planned functionality includes:

-   Business information analysis.
-   AI-generated website content.
-   Website section generation.
-   Website editing.
-   Individual section regeneration.
-   Business-specific website layouts.
-   AI-assisted content improvement.

### 9. Planned File Upload and Information Extraction

The application is intended to support uploading:

-   PDF documents.
-   Business price lists.
-   Product catalogues.
-   Business photographs.
-   Other relevant business documents.

The uploaded documents will be processed to extract relevant business information before website generation.

### 10. Planned Website Publishing

The application is intended to allow users to:

-   Preview generated websites.
-   Edit website content.
-   Regenerate individual sections.
-   Publish websites.
-   Access their published websites through public URLs.

---

## 📁 Project Structure

The project follows Laravel's standard MVC (Model-View-Controller) architecture.

```text
ai-builds-my-website/
│
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── AuthController.php
│   │       ├── BusinessController.php
│   │       ├── DashboardController.php
│   │       └── Controller.php
│   │
│   ├── Models/
│   │   ├── User.php
│   │   └── Business.php
│   │
│   └── Providers/
│
├── bootstrap/
│   └── app.php
│
├── config/
│
├── database/
│   ├── factories/
│   ├── migrations/
│   │   ├── create_users_table.php
│   │   └── create_businesses_table.php
│   └── seeders/
│
├── public/
│   └── index.php
│
├── resources/
│   ├── css/
│   │   └── app.css
│   │
│   ├── js/
│   │   └── app.js
│   │
│   └── views/
│       ├── auth/
│       │   ├── login.blade.php
│       │   └── register.blade.php
│       │
│       ├── business/
│       │   └── create.blade.php
│       │
│       ├── dashboard.blade.php
│       └── welcome.blade.php
│
├── routes/
│   ├── web.php
│   └── console.php
│
├── storage/
│
├── tests/
│
├── vendor/
│
├── .env
├── .env.example
├── .gitignore
├── artisan
├── composer.json
├── composer.lock
├── package.json
└── README.md
```

**Note:** The structure above describes the important application files and standard Laravel directories. The actual repository may contain additional framework-generated files.

### 📌 Important Directories

**app/Http/Controllers/**

Contains the controllers responsible for handling incoming requests and application logic.

-   `AuthController.php` – Handles registration, login, logout, and account deletion.
-   `BusinessController.php` – Handles business profile creation and storage.
-   `DashboardController.php` – Retrieves business profiles and displays the dashboard.
-   `Controller.php` – Base controller for application controllers.

**app/Models/**

Contains the Eloquent models used for database interaction.

-   `User.php` – Represents registered application users.
-   `Business.php` – Represents business profiles.

**database/migrations/**

Contains database migration files that define the application database structure.

**resources/views/**

Contains Blade templates used to render the application's user interface.

**routes/**

Contains route definitions.

-   `web.php` – Defines web application routes.
-   `console.php` – Contains Artisan console commands.

**public/**

Contains publicly accessible application assets and the Laravel entry point.

**storage/**

Stores application logs, cached files, and other generated application data.

---

## 🏗️ Tech Stack

### Backend Technologies

| Technology    | Purpose                               |
| ------------- | ------------------------------------- |
| PHP 8.3+      | Server-side programming               |
| Laravel 13    | Backend framework                     |
| MySQL         | Relational database                   |
| Eloquent ORM  | Database operations and relationships |
| Laravel Blade | Dynamic server-side templates         |
| Composer      | PHP dependency management             |

### Frontend Technologies

| Technology      | Purpose                        |
| --------------- | ------------------------------ |
| HTML5           | Application page structure     |
| CSS3            | Styling and responsive layouts |
| JavaScript      | Interactive UI functionality   |
| Blade Templates | Dynamic frontend rendering     |

### Development Tools

| Tool      | Purpose                        |
| --------- | ------------------------------ |
| VS Code   | Code editor                    |
| Git       | Version control                |
| GitHub    | Source code hosting            |
| MySQL CLI | Database management            |
| Node.js   | JavaScript runtime             |
| npm       | Frontend dependency management |
| Artisan   | Laravel command-line interface |

### AI Technologies (Planned)

| Technology                    | Purpose                                         |
| ----------------------------- | ----------------------------------------------- |
| Google Gemini API             | AI-powered website content generation           |
| Document extraction libraries | Extract information from uploaded documents     |
| Web search integration        | Discover relevant external business information |

---

## 🔑 Environment Variables

Laravel uses environment variables to configure the application.

These settings are stored in the `.env` file in the project root directory.

### 1. Application Configuration

```env
APP_NAME="AI Builds My Website"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000
```

**Explanation:**

-   `APP_NAME` – Application name.
-   `APP_ENV` – Application environment.
-   `APP_KEY` – Encryption key generated by Laravel.
-   `APP_DEBUG` – Enables detailed errors during local development.
-   `APP_URL` – Base application URL.

### 2. Database Configuration

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ai_website_builder
DB_USERNAME=website_user
DB_PASSWORD=your_local_database_password
```

**Explanation:**

-   `DB_CONNECTION` – Database driver.
-   `DB_HOST` – MySQL server address.
-   `DB_PORT` – MySQL port.
-   `DB_DATABASE` – Database name.
-   `DB_USERNAME` – MySQL username.
-   `DB_PASSWORD` – MySQL password.

### 3. Session Configuration

```env
SESSION_DRIVER=file
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
```

These variables configure session storage and session expiration.

### 4. Cache and Queue Configuration

```env
CACHE_STORE=database
QUEUE_CONNECTION=database
```

These settings configure Laravel's cache and queue drivers. Database-backed cache and queues require their corresponding database tables.

### 5. Frontend Configuration

```env
VITE_APP_NAME="${APP_NAME}"
```

This variable makes the application name available to Vite frontend assets.

### 6. AI API Configuration (When Integrated)

The following is an example of a future configuration variable:

```env
GEMINI_API_KEY=your_gemini_api_key
```

The Gemini API key must be obtained from Google AI Studio and configured locally.

**Important Security Guidelines:**

-   Never upload your actual `.env` file to GitHub.
-   Never hardcode API keys in PHP, JavaScript, or Blade files.
-   Never expose private API keys in frontend code.
-   Use `.env.example` to document required configuration variables.
-   Generate a new application key for each installation.

The `.env.example` file should contain placeholder values rather than real credentials.

---

## ⚡ Installation

Follow these steps to install and run the application locally.

### Prerequisites

Make sure the following software is installed:

| Software | Requirement               |
| -------- | ------------------------- |
| PHP      | 8.3 or higher             |
| Composer | 2.x                       |
| MySQL    | 8.0 or compatible version |
| Node.js  | Compatible LTS version    |
| npm      | Installed with Node.js    |
| Git      | Latest stable version     |

### Step 1 — Verify Installed Software

Open your terminal and execute:

```bash
php -v
```

Check Composer:

```bash
composer --version
```

Check Node.js:

```bash
node -v
```

Check npm:

```bash
npm -v
```

Check MySQL:

```bash
mysql --version
```

These commands verify that the required development tools are available.

### Step 2 — Create the Project Directory

Create the project directory:

```bash
mkdir -p ~/my_projects/ai-builds-my-website
```

Navigate into it:

```bash
cd ~/my_projects/ai-builds-my-website
```

If you are cloning the completed GitHub repository instead, use:

```bash
git clone YOUR_GITHUB_REPOSITORY_URL
```

Then navigate into the cloned directory.

### Step 3 — Create the Laravel Project

If the directory is empty and you are creating the project from scratch, execute:

```bash
composer create-project laravel/laravel .
```

This installs Laravel and creates the required application structure.

If you have cloned the existing project, skip this command.

### Step 4 — Install PHP Dependencies

Navigate to the project directory:

```bash
cd ~/my_projects/ai-builds-my-website
```

Install the dependencies:

```bash
composer install
```

Composer installs the packages defined in `composer.json` and `composer.lock`.

### Step 5 — Configure the Environment

Create the environment file if it does not already exist:

```bash
cp .env.example .env
```

Open the file:

```bash
code .env
```

Update the application configuration:

```env
APP_NAME="AI Builds My Website"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000
```

Generate the Laravel application encryption key:

```bash
php artisan key:generate
```

This generates the application key automatically.

### Step 6 — Create the MySQL Database

Open MySQL:

```bash
sudo mysql
```

Execute the following SQL commands:

```sql
CREATE DATABASE ai_website_builder;

CREATE USER 'website_user'@'localhost'
IDENTIFIED BY 'your_local_database_password';

GRANT ALL PRIVILEGES ON ai_website_builder.*
TO 'website_user'@'localhost';

FLUSH PRIVILEGES;

EXIT;
```

**Explanation:**

-   Creates the `ai_website_builder` database.
-   Creates a dedicated MySQL user.
-   Grants database permissions to that user.
-   Refreshes MySQL privileges.

Use your own local database password.

### Step 7 — Configure MySQL in Laravel

Open the `.env` file:

```bash
code .env
```

Update the database configuration:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ai_website_builder
DB_USERNAME=website_user
DB_PASSWORD=your_local_database_password
```

Save the file.

### Step 8 — Clear Laravel Configuration Cache

Run:

```bash
php artisan config:clear
```

This clears cached configuration so Laravel can read the updated database credentials.

### Step 9 — Run Database Migrations

Execute:

```bash
php artisan migrate
```

Laravel executes the migration files and creates the required database tables.

The main tables include:

-   `users`
-   `businesses`

Laravel may also create other framework-related tables depending on the configured migrations.

### Step 10 — Verify Database Migrations

Run:

```bash
php artisan migrate:status
```

This displays the migration execution status.

If migrations have completed successfully, the database is ready for application usage.

### Step 11 — Install Frontend Dependencies

Execute:

```bash
npm install
```

This installs the frontend dependencies defined in `package.json`.

### Step 12 — Build Frontend Assets

For development:

```bash
npm run dev
```

For production:

```bash
npm run build
```

### Step 13 — Start the Laravel Development Server

Execute:

```bash
php artisan serve
```

Laravel starts the local development server.

Open your browser:

http://127.0.0.1:8000

### Step 14 — Test the Application

After opening the application:

1. Navigate to the registration page.
2. Create a new account.
3. Verify successful registration.
4. Confirm that the dashboard opens.
5. Add a business profile.
6. Enter the required business information.
7. Save the business details.
8. Verify that the business appears on the dashboard.
9. Test the logout functionality.
10. Log in again using the registered credentials.
11. Test the account deletion confirmation popup.

**Registration URL:**

```text
http://127.0.0.1:8000/register
```

**Login URL:**

```text
http://127.0.0.1:8000/login
```

**Dashboard URL:**

```text
http://127.0.0.1:8000/
```

---

## 🛠️ Build for Production

The following steps describe how to prepare the application for production deployment.

### Step 1 — Configure Production Environment

Update the production `.env` configuration:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
```

Use production database credentials and a secure application key.

### Step 2 — Install Production Dependencies

```bash
composer install --no-dev --optimize-autoloader
```

This installs the required production PHP dependencies.

### Step 3 — Build Frontend Assets

```bash
npm install
npm run build
```

This generates optimized frontend assets.

### Step 4 — Run Production Migrations

```bash
php artisan migrate --force
```

The `--force` option allows migrations to run in production without an interactive confirmation.

### Step 5 — Optimize Laravel

Run:

```bash
php artisan optimize
```

This optimizes Laravel configuration, routes, and other framework resources.

### Step 6 — Configure Storage Permissions

Make sure the web server has the necessary permissions to access:

```text
storage/
bootstrap/cache/
```

### Step 7 — Configure the Web Server

Configure Apache or Nginx to point to Laravel's `public/` directory.

Do not expose the project root, `.env`, or other private application files publicly.

### Step 8 — Verify Production Deployment

After deployment:

-   Test registration and login.
-   Verify database connectivity.
-   Test business profile creation.
-   Verify dashboard functionality.
-   Test account deletion.
-   Check application logs.
-   Confirm that debug mode is disabled.

**Note:** A public production deployment has not been demonstrated in the current implementation.

---

### 🚀 Free Deployment (Laravel + MySQL)

This application can be deployed using **EthioDeploy's Free Plan**, which supports Laravel applications, MySQL databases, GitHub-based deployments, and HTTPS.

#### Free plan resources

-   One application project
-   256 MB RAM
-   0.5 CPU core
-   MySQL database with 512 MB storage
-   HTTPS public URL
-   Automatic deployment from GitHub
-   No credit card required
-   Application sleeps after 30 minutes of inactivity

#### 1. Prepare the GitHub repository

Push your Laravel project to GitHub.

```bash
cd ~/my_projects/ai-builds-my-website

git add .
git commit -m "Prepare project for deployment"
git push origin main
```

Ensure `.env` is excluded from GitHub.

#### 2. Create an EthioDeploy account

Visit [EthioDeploy](https://ethiodeploy.com/).

1. Sign in using GitHub.
2. Authorize access to your repository.
3. Click **New Project**.
4. Select your Laravel GitHub repository.
5. Start the deployment.

EthioDeploy detects Laravel projects and automatically installs Composer dependencies, builds Vite assets, and starts the application using Nginx and PHP-FPM.

#### 3. Add a MySQL database

From your EthioDeploy project dashboard:

1. Open your project.
2. Add the MySQL database addon.
3. Wait for the database to be provisioned.
4. Configure the database connection for Laravel.

The platform provides a database connection URL through the `DATABASE_URL` environment variable.

#### 4. Configure Laravel database settings

Laravel 11 and later support database connection URLs using `DB_URL`. Update `config/database.php` inside the MySQL connection configuration to include:

```php
'url' => env('DB_URL', env('DATABASE_URL')),
```

Ensure the MySQL configuration also contains the normal Laravel connection parameters.

Set the environment variables in the EthioDeploy project settings:

```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-project.ethiodeploy.app

DB_CONNECTION=mysql
DB_URL=${DATABASE_URL}
```

Configure your actual database connection using the database addon provided by the platform.

#### 5. Configure application environment

Set the following environment variables in your deployment settings:

| Variable           | Value                      |
| ------------------ | -------------------------- |
| `APP_ENV`          | `production`               |
| `APP_DEBUG`        | `false`                    |
| `APP_URL`          | Your public deployment URL |
| `DB_CONNECTION`    | `mysql`                    |
| `DB_URL`           | Your MySQL connection URL  |
| `QUEUE_CONNECTION` | `sync`                     |

The application key can be generated automatically by the platform or manually using:

```bash
php artisan key:generate --show
```

Never publish your application key or database credentials.

#### 6. Run database migrations

Configure the Laravel start command to run migrations before starting the application:

```bash
php artisan migrate --force && ethiodeploy-start
```

This creates the required database tables in the connected MySQL database.

Do not use `php artisan migrate:fresh` on the deployed database because it deletes existing tables and data.

#### 7. Deploy and access the application

Once deployment finishes successfully, EthioDeploy provides a public HTTPS URL similar to:

```text
https://your-project.ethiodeploy.app
```

Open the generated URL in your browser and test the application.

#### 8. Test the live application

-   Register a new account.
-   Log in using your credentials.
-   Access the dashboard.
-   Add a business profile.
-   Verify that business details are saved.
-   Log out.
-   Log in again.
-   Test account deletion.

#### 9. Update deployment links

## 🌐 Live Demo

**Live Website:** [https://ai-builds-my-website.ethiodeploy.app/](https://ai-builds-my-website.ethiodeploy.app/)

## 💻 GitHub Repository

**Source Code:** [https://github.com/rojanagunoori/ai-builds-my-website](https://github.com/rojanagunoori/ai-builds-my-website)

## 🚀 Deployment Platform

**Hosted on:** [EthioDeploy](https://ethiodeploy.com/)

**Hosting:** Free Plan (Laravel + MySQL)

#### 10. Redeploy after changes

After making changes locally:

```bash
git add .
git commit -m "Update application"
git push origin main
```

EthioDeploy automatically redeploys the application after new commits are pushed to the connected repository.

#### Deployment limitations

The free service sleeps after 30 minutes without traffic, so the first visitor after inactivity may experience a delay.

The free container has limited memory and CPU resources. Files saved directly to the application filesystem may be lost after redeployment. Use external persistent storage for future uploaded documents and images.

For more details, visit the [EthioDeploy Laravel Deployment Guide](https://ethiodeploy.com/deploy/laravel).

**Free hosting is intended for learning, testing, and demonstration purposes.** Check the provider's current terms and resource limits before deploying.

---

## 🔌 API Usage

The current application primarily uses Laravel web routes and server-rendered Blade templates.

It does not yet expose a dedicated REST API for business management or AI website generation.

### 1. Web Routes

The following routes are implemented in `routes/web.php`.

| Method | Endpoint           | Route Name        | Description                  |
| ------ | ------------------ | ----------------- | ---------------------------- |
| GET    | `/register`        | `register`        | Display registration form    |
| POST   | `/register`        | `register.store`  | Register a new user          |
| GET    | `/login`           | `login`           | Display login form           |
| POST   | `/login`           | `login.store`     | Authenticate user            |
| GET    | `/`                | `dashboard`       | Display dashboard            |
| GET    | `/business/create` | `business.create` | Display business form        |
| POST   | `/business`        | `business.store`  | Save business information    |
| POST   | `/logout`          | `logout`          | Log out authenticated user   |
| DELETE | `/account`         | `account.destroy` | Delete authenticated account |

### 2. Authentication Routes

Registration:

```text
POST /register
```

Example form data:

```json
{
    "name": "Roja",
    "email": "roja@example.com",
    "password": "password123",
    "password_confirmation": "password123"
}
```

Login:

```text
POST /login
```

Example form data:

```json
{
    "email": "roja@example.com",
    "password": "password123"
}
```

These are illustrative form payloads. The current implementation submits HTML forms rather than exposing JSON API endpoints.

### 3. Business Creation Route

```text
POST /business
```

Example form data:

```json
{
    "name": "Roja Fashion Store",
    "category": "Fashion",
    "city": "Hyderabad",
    "address": "Hyderabad, Telangana",
    "phone": "9876543210",
    "email": "business@example.com",
    "description": "Fashion and clothing store",
    "website_url": "https://example.com",
    "facebook_url": "https://facebook.com/example",
    "instagram_url": "https://instagram.com/example",
    "google_business_url": "https://example.com/business"
}
```

The request is validated by `BusinessController` before the business information is stored in MySQL.

### 4. Account Deletion Route

```text
DELETE /account
```

The authenticated user can delete their account using the dashboard's account deletion functionality.

The request includes Laravel CSRF protection and method spoofing through the DELETE form method.

### 5. Verify Registered Routes

To list the available application routes, execute:

```bash
php artisan route:list
```

This command displays the registered routes, HTTP methods, middleware, and associated controller actions.

### 6. Planned AI API Integration

Future development will introduce AI integration through backend services.

The planned workflow is:

1. Receive business information.
2. Process uploaded documents and supplied links.
3. Collect verified information.
4. Prepare structured business data.
5. Send the relevant information to the AI service.
6. Generate website content.
7. Save generated content.
8. Allow users to edit or regenerate sections.

---

## 🧩 Key Components

### 1. AuthController

**File:** `app/Http/Controllers/AuthController.php`

The authentication controller manages user account operations.

**Implemented methods:**

| Method           | Purpose                                |
| ---------------- | -------------------------------------- |
| `showRegister()` | Displays the registration page         |
| `register()`     | Validates and creates a new user       |
| `showLogin()`    | Displays the login page                |
| `login()`        | Authenticates user credentials         |
| `logout()`       | Logs out the current user              |
| `destroy()`      | Permanently deletes the user's account |

The registration method validates user information and hashes passwords before storing them.

The login method uses Laravel's authentication system.

The account deletion method uses a database transaction to delete associated business profiles and the user account.

### 2. BusinessController

**File:** `app/Http/Controllers/BusinessController.php`

The business controller manages business profile creation.

**Implemented methods:**

| Method     | Purpose                                  |
| ---------- | ---------------------------------------- |
| `create()` | Displays the business creation form      |
| `store()`  | Validates and saves business information |

The controller uses Laravel request validation to verify submitted fields.

The authenticated user's relationship is used to create business profiles.

```php
$request->user()->businesses()->create($validated);
```

This automatically associates the new business profile with the currently authenticated user.

### 3. DashboardController

**File:** `app/Http/Controllers/DashboardController.php`

The dashboard controller retrieves the business profiles belonging to the authenticated user.

```php
$businesses = auth()->user()
    ->businesses()
    ->latest()
    ->get();
```

The retrieved business profiles are passed to the dashboard Blade template.

### 4. User Model

**File:** `app/Models/User.php`

The User model represents registered users.

It uses Laravel's authentication functionality and Eloquent ORM.

**Implemented relationship:**

```php
public function businesses(): HasMany
{
    return $this->hasMany(Business::class);
}
```

This defines a one-to-many relationship between users and business profiles.

One user can own multiple business profiles.

### 5. Business Model

**File:** `app/Models/Business.php`

The Business model represents individual business profiles.

It defines the fillable attributes used when saving business information.

**Implemented relationship:**

```php
public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}
```

This defines the inverse relationship between a business profile and its owner.

### 6. Business Database Migration

**File:** `database/migrations/...create_businesses_table.php`

The migration defines the structure of the businesses table.

The table contains:

-   Primary key.
-   User foreign key.
-   Business name.
-   Business category.
-   City.
-   Address.
-   Phone number.
-   Email.
-   Business description.
-   Existing website URL.
-   Facebook URL.
-   Instagram URL.
-   Google Business URL.
-   Created and updated timestamps.

The user foreign key uses cascading deletion:

```php
$table->foreignId('user_id')
    ->constrained()
    ->cascadeOnDelete();
```

This ensures associated business records are deleted when their parent user is deleted.

### 7. Blade Templates

The frontend uses Laravel Blade templates.

| File                        | Purpose                             |
| --------------------------- | ----------------------------------- |
| `auth/register.blade.php`   | User registration interface         |
| `auth/login.blade.php`      | User login interface                |
| `business/create.blade.php` | Business information form           |
| `dashboard.blade.php`       | User dashboard and business listing |
| `welcome.blade.php`         | Default Laravel welcome template    |

Blade provides dynamic data rendering and Laravel's built-in template functionality.

### 8. Routes

**File:** `routes/web.php`

The application uses Laravel route groups to protect authenticated pages.

The `guest` middleware restricts registration and login routes to unauthenticated visitors.

The `auth` middleware protects the dashboard, business creation, logout, and account deletion routes.

---

## 🔒 Security

Security is an important consideration when developing an application that stores user accounts and business information.

The current implementation includes the following security measures.

### 1. Password Hashing

Passwords are hashed using Laravel's Hash facade before database storage.

```php
'password' => Hash::make($validated['password']),
```

This prevents storing plain-text passwords.

### 2. Input Validation

Laravel validation rules are used to validate incoming user and business information.

Examples include:

```php
'name' => 'required|string|max:255',
'email' => 'required|email|unique:users,email',
'password' => 'required|string|min:8|confirmed',
```

Business information also uses validation for email and URL fields.

### 3. CSRF Protection

Laravel's CSRF protection is used in application forms.

```blade
@csrf
```

This helps protect form submissions against cross-site request forgery.

### 4. Authentication Middleware

Protected routes use Laravel's authentication middleware.

```php
Route::middleware('auth')->group(function () {
    // Protected application routes
});
```

This prevents unauthenticated users from accessing protected application pages.

### 5. Session Security

After successful authentication, the session is regenerated.

```php
$request->session()->regenerate();
```

After logout, the session is invalidated and its CSRF token is regenerated.

### 6. User-Specific Business Records

Business profiles are created through the authenticated user's Eloquent relationship.

The dashboard also retrieves records through that relationship.

This ensures users access their own business profiles through the implemented dashboard workflow.

### 7. Database Transactions

Account deletion uses Laravel database transactions.

```php
DB::transaction(function () use ($user) {
    $user->businesses()->delete();
    $user->delete();
});
```

This helps maintain database consistency during account deletion.

### 8. Environment Variable Protection

Sensitive configuration values are stored in `.env`.

The actual `.env` file must never be committed to GitHub.

### 9. Planned AI Security Improvements

Additional security measures will be required when implementing document processing and AI integration.

Planned protections include:

-   Uploaded file type validation.
-   File size restrictions.
-   Safe document extraction.
-   Prompt injection protection.
-   Treating uploaded content as untrusted data.
-   Preventing unauthorized file access.
-   Avoiding exposure of API keys.
-   Validating AI-generated output.
-   Preventing unsupported business claims.
-   Protecting public website publishing workflows.

---

## ⚠️ Challenges Faced During Development

During the initial development phase, several implementation and configuration challenges were addressed.

### 1. Laravel Project Setup

**Challenge:**

Setting up the Laravel development environment with the correct PHP version, Composer dependencies, Node.js, and MySQL configuration.

**Solution:**

Verified the installed software versions and initialized the Laravel application using Composer.

### 2. MySQL Database Configuration

**Challenge:**

Connecting the Laravel application to a newly created MySQL database.

**Solution:**

Created a dedicated database and database user, configured the `.env` file, cleared Laravel configuration cache, and executed migrations.

### 3. Database Relationships

**Challenge:**

Managing multiple business profiles under a single user account.

**Solution:**

Implemented a one-to-many relationship using Laravel Eloquent ORM.

The User model uses `hasMany()`, while the Business model uses `belongsTo()`.

### 4. Authentication and Session Management

**Challenge:**

Managing registration, login, logout, and authenticated dashboard access.

**Solution:**

Implemented Laravel authentication using the Auth facade, password hashing, session regeneration, and middleware.

### 5. Form Validation

**Challenge:**

Preventing invalid or incomplete information from being stored in the database.

**Solution:**

Implemented Laravel validation rules for user registration and business profile creation.

### 6. Account Deletion

**Challenge:**

Deleting a user account while also removing its associated business profiles.

**Solution:**

Implemented a database transaction, deleted associated business profiles, and then deleted the user account.

A confirmation popup was also added to reduce accidental deletions.

### 7. Frontend Responsiveness

**Challenge:**

Creating a consistent interface across desktop and mobile screen sizes.

**Solution:**

Used custom CSS, responsive layouts, media queries, and flexible grid structures.

### 8. Laravel Namespace and Controller Errors

**Challenge:**

During development, PHP namespace declaration errors occurred while working with controller files.

**Solution:**

Corrected PHP file structure so namespace declarations appeared immediately after the opening PHP tag and any permitted declare statement.

### 9. Database and Migration Verification

**Challenge:**

Ensuring that the required database tables were created successfully.

**Solution:**

Used Laravel Artisan migration commands.

```bash
php artisan migrate
php artisan migrate:status
```

These commands helped verify database migration execution.

### 10. Future AI Integration Challenges

The AI integration phase will introduce additional challenges, including:

-   Extracting information from different document formats.
-   Handling social media platforms that restrict scraping.
-   Identifying businesses with similar names.
-   Resolving conflicting business information.
-   Preventing AI-generated false information.
-   Protecting against malicious instructions inside uploaded files.
-   Handling AI service failures gracefully.

These challenges will be addressed during subsequent development.

---

## 🌟 Future Improvements

The current implementation establishes the foundation for user authentication and business profile management.

The following features are planned to complete the AI-powered website-building workflow.

### 1. Google Gemini Integration

Integrate Google's Gemini API to generate professional website content.

Planned capabilities:

-   Business description generation.
-   Homepage content generation.
-   About section generation.
-   Services and products descriptions.
-   Contact section generation.
-   Website content improvement.

### 2. PDF and Document Processing

Add support for uploading and processing:

-   PDF files.
-   Price lists.
-   Product catalogues.
-   Business documents.
-   Other relevant business files.

Extracted information will be organized into structured business data.

### 3. Image Upload and Management

Allow users to upload business photographs, product images, logos, and other visual assets.

Add image validation, storage, preview, and management functionality.

### 4. Social Media Information Extraction

Support business information collection from:

-   Facebook.
-   Instagram.
-   Existing business websites.
-   Google Business listings.

Where direct scraping is unavailable or restricted, provide alternative methods such as manual input or supported APIs.

### 5. Web Search Integration

Integrate web search functionality to discover relevant public business information.

The application will need to:

-   Identify relevant business sources.
-   Verify business identity.
-   Handle businesses with similar names.
-   Record source information.
-   Detect conflicting details.
-   Ask users to clarify uncertain information.

### 6. AI Website Generation

Generate complete websites using verified business information.

Planned website sections:

-   Homepage.
-   About Us.
-   Services.
-   Products.
-   Gallery.
-   Testimonials.
-   Contact Us.

The generated website should use business-specific content rather than generic invented information.

### 7. Website Editing

Allow users to modify generated website content.

Planned features:

-   Edit individual sections.
-   Regenerate selected sections.
-   Update business information.
-   Preview changes.
-   Save website drafts.

### 8. Website Publishing

Allow users to publish generated websites using public URLs.

Future publishing capabilities may include:

-   Unique website slugs.
-   Public website routes.
-   Website status management.
-   Custom domain support.
-   SEO-friendly metadata.

### 9. AI Reliability and Error Handling

Implement graceful failure handling when AI services are unavailable.

Planned improvements:

-   API timeout handling.
-   Retry mechanisms.
-   Clear user-facing error messages.
-   Preservation of existing website drafts.
-   Prevention of incomplete publishing.
-   Manual editing when AI generation fails.

### 10. Improved Dashboard

Add additional dashboard functionality:

-   Total websites.
-   Published websites.
-   Draft websites.
-   Recent activity.
-   Website previews.
-   Business profile editing and deletion.
-   Publishing status.

### 11. Testing and Deployment

Additional development work will include:

-   Unit testing.
-   Feature testing.
-   Authentication testing.
-   Database relationship testing.
-   AI integration testing.
-   Production deployment.
-   Performance optimization.

---

## 🤝 Contributing

Contributions and suggestions are welcome.

If you would like to improve this project, follow these steps:

### Step 1 — Fork the Repository

Fork the repository to your GitHub account.

### Step 2 — Clone the Repository

```bash
git clone YOUR_GITHUB_REPOSITORY_URL
```

### Step 3 — Navigate to the Project

```bash
cd ai-builds-my-website
```

### Step 4 — Install Dependencies

```bash
composer install
npm install
```

### Step 5 — Configure Environment Variables

```bash
cp .env.example .env
php artisan key:generate
```

Configure the MySQL database in `.env`.

### Step 6 — Run Migrations

```bash
php artisan migrate
```

### Step 7 — Create a Feature Branch

```bash
git checkout -b feature/your-feature-name
```

### Step 8 — Make Your Changes

Implement the required feature and test your changes locally.

### Step 9 — Commit Your Changes

```bash
git add .
git commit -m "Add your feature description"
```

### Step 10 — Push Your Changes

```bash
git push origin feature/your-feature-name
```

### Step 11 — Create a Pull Request

Open a pull request describing your changes.

---

## 🙏 Acknowledgements

I would like to express my gratitude to the following platforms and technologies that supported the development of this project.

-   **Websites.co.in** – For providing the Full Stack Development internship assignment and project opportunity.
-   **Laravel** – For providing a powerful PHP framework for backend development.
-   **PHP** – For server-side application development.
-   **MySQL** – For relational database management.
-   **Google AI Studio / Gemini** – For the planned AI integration.
-   **GitHub** – For source code management and version control.
-   **Visual Studio Code** – For application development.
-   **Open-source community** – For documentation, development resources, and technical guidance.

---

## 📄 License

This project is currently developed as part of an internship assignment.

No separate open-source license has been selected yet.

Unless a license is added to the repository, all rights remain with the copyright holder.

---

## 🙋‍♀️ Author / Contact

**Nagunoori Roja**

Full Stack Developer | Laravel | PHP | JavaScript | React | MySQL

-   📧 Email: [nagunooriroja@gmail.com](mailto:nagunooriroja@gmail.com)
-   🌐 GitHub: [https://github.com/rojanagunoori](https://github.com/rojanagunoori)
-   🌐 LinkedIn: [https://www.linkedin.com/in/nagunoori-roja-51b936267/](https://www.linkedin.com/in/nagunoori-roja-51b936267/)
-   🌐 Personal Portfolio: [portfolio-roja.netlify.app](https://portfolio-roja.netlify.app/)
-   🌐 LeetCode: [https://leetcode.com/u/dSdsi6XkI8/](https://leetcode.com/u/dSdsi6XkI8/)
-   🌐 Kaggle: [https://www.kaggle.com/nagunooriroja](https://www.kaggle.com/nagunooriroja)

---

### ⭐ Support

If you find this project interesting, consider giving the GitHub repository a star.

Thank you for visiting **AI Builds My Website!**

**Built with ❤️ by Nagunoori Roja.**
