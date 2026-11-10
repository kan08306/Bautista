<div align="center">
  <a href="https://github.com/kan08306/Bautista">
    <img src="./public/tfa4_bautista/assets/img/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>TFA 4 — Who's Allowed In?</h1>

  <p>A standalone CodeIgniter 4 activity for <strong>IT0049 Web System Technologies</strong>. It extends the TFA 3 customer and user management system with password authentication, sessions, protected routes, and logout.</p>
</div>

**Student:** Ken Anthonie A. Bautista  
**Section:** TC32  
**Repository:** [Bautista](https://github.com/kan08306/Bautista)  
**Activity folder:** [`tfa4_bautista`](https://github.com/kan08306/Bautista/tree/main/tfa4_bautista)  
**Hosted site:** [https://tfa4-bautista.infinityfree.me/public/index.php](https://tfa4-bautista.infinityfree.me/public/index.php)

## Features

- Username and password authentication using the `users` database table
- Password verification using PHP password hashes
- Session-based login state and logout
- Protected customer and user routes through a CodeIgniter authentication filter
- CSRF protection for submitted forms
- Database-backed customer and user directories
- Validated create and edit forms for customer and user records
- Required password input when creating a new user
- Optional JPG or PNG avatar upload when editing a user
- Responsive navigation with persistent light and dark mode

## Test accounts

Use this account to test the hosted application:

| Username | Password | Test location |
|---|---|---|
| `test123` | `test1234` | [Hosted Website](https://tfa4-bautista.infinityfree.me/public/index.php) |

The database export includes the following users. Their default password is `test1234`.

| Username | Full name | Password |
|---|---|---|
| `kbautista` | Ken Bautista | `test1234` |
| `kanthonie` | Ken Anthonie | `test1234` |
| `kaquino` | Ken Aquino | `test1234` |
| `abautista` | Anthonie Bautista | `test1234` |
| `aaquino` | Anthonie Aquino | `test1234` |

These credentials are demonstration accounts for this academic activity only.

## Technology used

- PHP 8.2+
- CodeIgniter 4.7
- MySQL / MariaDB
- Composer
- HTML, CSS, and JavaScript
- CodeIgniter sessions, filters, validation, and image manipulation
- XAMPP / Apache for local hosting

## Project structure

```text
tfa4_bautista/
├── app/
│   ├── Config/
│   │   ├── Filters.php                    # CSRF and authentication filter setup
│   │   └── Routes.php                     # Public and protected routes
│   ├── Controllers/
│   │   ├── Auth.php                       # Login, authentication, and logout
│   │   ├── Customers.php                  # Customer listing, creation, and updates
│   │   ├── Pages.php                      # Home page controller
│   │   └── Users.php                      # User workflows and avatar processing
│   ├── Database/
│   │   ├── Seeds/
│   │   │   └── Tfa4PasswordSeeder.php     # Optional password setup for legacy users
│   │   └── tfa4_bautista.sql              # MySQL database export
│   ├── Filters/
│   │   └── AuthFilter.php                 # Redirects unauthenticated visitors
│   ├── Models/
│   │   ├── CustomerModel.php              # Customers table model
│   │   └── UserModel.php                  # Users table model
│   └── Views/
│       └── tfa4_bautista/
│           ├── assets/
│           │   ├── auth/
│           │   │   └── login.php
│           │   └── pages/
│           │       ├── customer_edit.php
│           │       ├── customer_new.php
│           │       ├── customers.php
│           │       ├── user_edit.php
│           │       ├── user_new.php
│           │       └── users.php
│           └── index.php
├── public/
│   ├── tfa4_bautista/
│   │   └── assets/                         # CSS, JavaScript, logo, and placeholder
│   └── uploads/
│       └── avatars/                        # Uploaded user avatars
├── composer.json
├── env                                    # Environment-file template
├── README.md
└── spark
```

## Database structure

The activity uses a database named `tfa4_bautista` with two tables.

### Customers

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `full_name` | `VARCHAR(100)` | Required |
| `email` | `VARCHAR(100)` | Required; validated as an email address |
| `phone` | `VARCHAR(20)` | Optional |
| `created_at` | `DATETIME` | Required; defaults to the current timestamp |

### Users

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `username` | `VARCHAR(50)` | Required and unique |
| `password` | `VARCHAR(255)` | Stores a password hash |
| `full_name` | `VARCHAR(100)` | Required |
| `created_at` | `DATETIME` | Required; defaults to the current timestamp |
| `avatar` | `VARCHAR(255)` | Optional generated avatar filename |

The included export contains customer records and five user accounts with password hashes. Plain-text passwords are not stored in the database.

## Run this activity locally

### 1. Clone the repository

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tfa4_bautista
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the MySQL database

Start MySQL through the XAMPP Control Panel. Open phpMyAdmin, create a database named `tfa4_bautista`, then import:

```text
app/Database/tfa4_bautista.sql
```

The export creates the `customers` and `users` tables and includes the five exported user accounts listed above.

### 4. Create the local environment file

In PowerShell:

```powershell
Copy-Item env .env
```

Configure the application and database values in `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'

database.default.hostname = localhost
database.default.database = tfa4_bautista
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

If the local MySQL account uses a password, replace the empty password value with the correct local password. Keep `.env` private and do not commit database credentials.

### 5. Start the application

Choose one local method.

**CodeIgniter development server** — from the `tfa4_bautista` folder, run:

```bash
php spark serve
```

Then open:

```text
http://localhost:8080/
```

**XAMPP Apache** — start Apache and MySQL in the XAMPP Control Panel. Set `app.baseURL` to:

```ini
app.baseURL = 'http://localhost/Bautista/tfa4_bautista/public/'
```

Then open:

```text
http://localhost/Bautista/tfa4_bautista/public/
```

The directory `public/uploads/avatars` must remain writable by PHP for avatar uploads.

## Available routes

| Method | Page or action | Route | Access |
|---|---|---|---|
| GET | Home | `/` | Public |
| GET | Login | `/login` | Public |
| POST | Authenticate | `/login` | Public |
| POST | Logout | `/logout` | Public |
| GET | Customer Accounts | `/customers` | Login required |
| GET | New Customer | `/customers/new` | Login required |
| POST | Create Customer | `/customers` | Login required |
| GET | Edit Customer | `/customers/{id}/edit` | Login required |
| POST | Update Customer | `/customers/{id}` | Login required |
| GET | User Accounts | `/users` | Login required |
| GET | New User | `/users/new` | Login required |
| POST | Create User | `/users` | Login required |
| GET | Edit User | `/users/{id}/edit` | Login required |
| POST | Update User | `/users/{id}` | Login required |

For the development server, append each route to `http://localhost:8080`. For Apache, append it to `http://localhost/Bautista/tfa4_bautista/public`.

## Authentication flow

```text
Login form → Auth controller → UserModel → password_verify()
           → Session created → AuthFilter → Protected customer and user pages
Logout     → Session destroyed → Login page
```

New user passwords are validated and passed to `password_hash()` before they are saved. The login process compares a submitted password with the stored hash through `password_verify()`. The session stores the authenticated user's ID and username, not the password.

## Requirements

- PHP 8.2 or newer
- Composer 2
- MySQL or MariaDB
- XAMPP or another PHP-capable local server
- Writable `public/uploads/avatars` directory
- PHP extensions: `curl`, `gd`, `intl`, `mbstring`, `mysqli`, and `zip`

## Deployment note

TFA 4 is deployed at [https://tfa4-bautista.infinityfree.me/public/index.php](https://tfa4-bautista.infinityfree.me/public/index.php). The hosted project must use its production base URL and hosting database credentials. Keep `.env` private and verify login, logout, customer management, user management, and avatar upload after deployment.
