<div align="center">
  <a href="https://github.com/kan08306/Bautista">
    <img src="./public/tfa2_bautista/assets/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>TFA 2 — From Arrays to a Real Database</h1>

  <p>A standalone CodeIgniter 4 activity for <strong>IT0049 Web System Technologies</strong>. It extends the TFA 1 POS application by replacing temporary PHP arrays with customer and user records retrieved from a MySQL database through CodeIgniter Models.</p>
</div>

**Student:** Ken Bautista  
**Repository:** [Bautista](https://github.com/kan08306/Bautista)  
**Activity folder:** [`tfa2_bautista`](https://github.com/kan08306/Bautista/tree/main/tfa2_bautista)  
**Hosted site:** Add the deployed TFA 2 URL before submission.

## Features

- Home, Customer Accounts, and User Accounts pages
- MySQL-backed customer and user records
- Separate Models, controllers, and views following CodeIgniter MVC
- Record retrieval through CodeIgniter Model `findAll()`
- Escaped database output using `esc()` in the account views
- Connected navigation with persistent light and dark mode
- Included MySQL database export with five customer and five user records

## Technology used

- PHP 8.2+
- CodeIgniter 4.7
- MySQL / MariaDB
- Composer
- HTML, CSS, and JavaScript
- XAMPP / Apache for local hosting

## Project structure

```text
tfa2_bautista/
├── app/
│   ├── Config/
│   │   └── Routes.php                  # Application routes
│   ├── Controllers/
│   │   ├── Customers.php               # Retrieves customer records
│   │   ├── Pages.php                   # Home page controller
│   │   └── Users.php                   # Retrieves user records
│   ├── Database/
│   │   └── tfa2_bautista.sql           # MySQL database export
│   ├── Models/
│   │   ├── CustomerModel.php           # Customers table Model
│   │   └── UserModel.php               # Users table Model
│   └── Views/
│       └── tfa2_bautista/
│           ├── pages/
│           │   ├── customers.php
│           │   └── users.php
│           └── index.php
├── public/
│   └── tfa2_bautista/
│       ├── assets/                      # Logo and image files
│       ├── css/                         # Stylesheets
│       └── js/                          # Browser JavaScript
├── composer.json                        # PHP dependencies
├── env                                  # Environment-file template
├── README.md
└── spark                                # CodeIgniter command-line tool
```

## Database structure

The activity uses a database named `tfa2_bautista` with the following tables.

### Customers

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `full_name` | `VARCHAR(100)` | Required |
| `email` | `VARCHAR(100)` | Required |
| `phone` | `VARCHAR(20)` | Optional |
| `created_at` | `DATETIME` | Required |

### Users

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `username` | `VARCHAR(50)` | Required and unique |
| `full_name` | `VARCHAR(100)` | Required |
| `created_at` | `DATETIME` | Required |

## Run this activity locally

### 1. Clone the repository

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tfa2_bautista
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the MySQL database

Start MySQL through the XAMPP Control Panel. Open phpMyAdmin, create a database named `tfa2_bautista`, then import:

```text
app/Database/tfa2_bautista.sql
```

The export creates the `customers` and `users` tables and includes the five required records for each table.

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
database.default.database = tfa2_bautista
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

If the local MySQL account uses a password, replace the empty password value with the correct local password.

### 5. Start the application

Choose one local method.

**CodeIgniter development server** — from the `tfa2_bautista` folder, run:

```bash
php spark serve
```

Then open:

```text
http://localhost:8080/
```

**XAMPP Apache** — start Apache and MySQL in the XAMPP Control Panel. Set `app.baseURL` to:

```ini
app.baseURL = 'http://localhost/Bautista/tfa2_bautista/public/'
```

Then open:

```text
http://localhost/Bautista/tfa2_bautista/public/
```

## Available pages

| Page | Route |
|---|---|
| Home | `/` |
| Customer Accounts | `/customers` |
| User Accounts | `/users` |

For the development server, append the route to `http://localhost:8080`. For Apache, append it to `http://localhost/Bautista/tfa2_bautista/public`.

## Model and data flow

```text
CustomerModel → Customers controller → $customers → Customer Accounts view
UserModel     → Users controller     → $users     → User Accounts view
```

Both controllers retrieve records with `findAll()`. The account views use `foreach` to display the records in HTML tables.

## Requirements

- PHP 8.2 or newer
- Composer 2
- MySQL or MariaDB
- XAMPP or another PHP-capable local server
- PHP extensions: `curl`, `intl`, `mbstring`, and `mysqli`

## Deployment note

Deploy TFA 2 as its own CodeIgniter project. Import the included SQL export into the hosting database, update the production database credentials and `app.baseURL`, and verify the Home, Customer Accounts, and User Accounts routes before submission.
