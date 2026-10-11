<div align="center">
  <a href="https://github.com/kan08306/Bautista">
    <img src="./public/tfa3_bautista/assets/img/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>TFA 3 — Forms, Validation, and Avatar Upload</h1>

  <p>A standalone CodeIgniter 4 activity for <strong>IT0049 Web System Technologies</strong>. It extends the TFA 2 customer and user directories with validated create and edit workflows, safe database updates, and optional user avatar uploads.</p>
</div>

**Student:** Ken Bautista  
**Repository:** [Bautista](https://github.com/kan08306/Bautista)  
**Activity folder:** [`tfa3_bautista`](https://github.com/kan08306/Bautista/tree/main/tfa3_bautista)  
**Hosted site:** (https://tfa3-bautista.free.je/public/index.php)

## Features

- Home, Customer Accounts, and User Accounts pages
- Database-backed customer and user directories
- Validated create and edit forms for customer and user records
- Required customer names and valid customer email addresses
- Required user names and unique usernames on create and update
- Optional JPG or PNG avatar upload on the user edit page
- Maximum avatar upload size of 2 MB
- Generated avatar filenames and 300 × 300 image preparation
- Placeholder avatar when a user has no available uploaded image
- Preserved form input and field-level messages after validation errors
- Separate Models, controllers, and views following CodeIgniter MVC
- Escaped database output using `esc()` in the account views
- Responsive navigation with persistent light and dark mode

## Technology used

- PHP 8.2+
- CodeIgniter 4.7
- MySQL / MariaDB
- Composer
- HTML, CSS, and JavaScript
- CodeIgniter Image Manipulation service
- XAMPP / Apache for local hosting

## Project structure

```text
tfa3_bautista/
├── app/
│   ├── Config/
│   │   └── Routes.php                       # GET and POST application routes
│   ├── Controllers/
│   │   ├── Customers.php                    # Customer listing, creation, and updates
│   │   ├── Pages.php                        # Home page controller
│   │   └── Users.php                        # User workflows and avatar processing
│   ├── Database/
│   │   └── tfa3_bautista.sql                # MySQL database export
│   ├── Models/
│   │   ├── CustomerModel.php                # Customers table Model
│   │   └── UserModel.php                    # Users table Model
│   └── Views/
│       └── tfa3_bautista/
│           ├── assets/
│           │   ├── css/
│           │   ├── img/
│           │   ├── js/
│           │   └── pages/
│           │       ├── customer_edit.php
│           │       ├── customer_new.php
│           │       ├── customers.php
│           │       ├── user_edit.php
│           │       ├── user_new.php
│           │       └── users.php
│           └── index.php                    # Home page
├── public/
│   ├── tfa3_bautista/
│   │   └── assets/
│   │       ├── css/                         # Stylesheets
│   │       ├── img/                         # KB logo and avatar placeholder
│   │       └── js/                          # Browser JavaScript
│   └── uploads/
│       └── avatars/                         # Generated user avatar files
├── composer.json                            # PHP dependencies
├── env                                      # Environment-file template
├── README.md
└── spark                                    # CodeIgniter command-line tool
```

## Database structure

The activity uses a database named `tfa3_bautista` with two tables.

### Customers

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `full_name` | `VARCHAR(100)` | Required |
| `email` | `VARCHAR(100)` | Required; validated as an email address by the application |
| `phone` | `VARCHAR(20)` | Optional |
| `created_at` | `DATETIME` | Required; defaults to the current timestamp |

### Users

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `username` | `VARCHAR(50)` | Required and unique |
| `full_name` | `VARCHAR(100)` | Required |
| `created_at` | `DATETIME` | Required; defaults to the current timestamp |
| `avatar` | `VARCHAR(255)` | Optional generated avatar filename |

The included export contains five customer records and five user records. The `avatar` column stores only a generated filename, while uploaded image files are saved under `public/uploads/avatars`.

## Run this activity locally

### 1. Clone the repository

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tfa3_bautista
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the MySQL database

Start MySQL through the XAMPP Control Panel. Open phpMyAdmin, create a database named `tfa3_bautista`, then import:

```text
app/Database/tfa3_bautista.sql
```

The export creates the `customers` and `users` tables, preserves the unique username constraint, adds nullable avatar filename storage, and inserts five records into each table.

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
database.default.database = tfa3_bautista
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

If the local MySQL account uses a password, replace the empty password value with the correct local password. Keep `.env` private and do not commit database credentials.

### 5. Start the application

Choose one local method.

**CodeIgniter development server** — from the `tfa3_bautista` folder, run:

```bash
php spark serve
```

Then open:

```text
http://localhost:8080/
```

**XAMPP Apache** — start Apache and MySQL in the XAMPP Control Panel. Set `app.baseURL` to:

```ini
app.baseURL = 'http://localhost/Bautista/tfa3_bautista/public/'
```

Then open:

```text
http://localhost/Bautista/tfa3_bautista/public/
```

The directory `public/uploads/avatars` must remain writable by PHP so uploaded avatars can be saved and processed.

## Available routes

| Method | Page or action | Route | Purpose |
|---|---|---|---|
| GET | Home | `/` | Displays the activity introduction |
| GET | Customer Accounts | `/customers` | Displays all customer records |
| GET | New Customer | `/customers/new` | Displays the validated customer form |
| POST | Create Customer | `/customers` | Validates and inserts a customer |
| GET | Edit Customer | `/customers/{id}/edit` | Displays a selected customer record |
| POST | Update Customer | `/customers/{id}` | Validates and updates a customer |
| GET | User Accounts | `/users` | Displays users with avatars or placeholders |
| GET | New User | `/users/new` | Displays the validated user form |
| POST | Create User | `/users` | Validates and inserts a user |
| GET | Edit User | `/users/{id}/edit` | Displays user details and the avatar field |
| POST | Update User | `/users/{id}` | Validates and updates a user and optional avatar |

For the development server, append each GET route to `http://localhost:8080`. For Apache, append it to `http://localhost/Bautista/tfa3_bautista/public`.

## Model and data flow

```text
CustomerModel → Customers controller → $customers or $customer → Customer views
UserModel     → Users controller     → $users or $user         → User views
Avatar file   → Users::update()      → validation and resizing → public/uploads/avatars
```

The listing methods retrieve records with `findAll()`, while edit methods retrieve one record with `find($id)`. Create actions validate and insert submitted data. Update actions validate the selected record before saving changes. User updates process an avatar only when a new file is supplied, allowing ordinary text-only edits to keep the existing filename.

## Validation and avatar rules

- Customer `full_name` is required.
- Customer `email` is required and must contain a valid email address.
- User `username` is required and must remain unique.
- User `full_name` is required.
- An unchanged username is accepted when editing its existing user.
- The optional avatar must be a JPG, JPEG, or PNG file no larger than 2 MB.
- Uploaded avatars receive random filenames and are prepared as 300 × 300 images.
- Only the generated filename is stored in `users.avatar`.

## Requirements

- PHP 8.2 or newer
- Composer 2
- MySQL or MariaDB
- XAMPP or another PHP-capable local server
- Writable `public/uploads/avatars` directory
- PHP extensions: `curl`, `gd`, `intl`, `mbstring`, `mysqli`, and `zip`

## Deployment note

Deploy TFA 3 as its own CodeIgniter project. Import the included SQL export into the hosting database, configure the production `app.baseURL` and database credentials, keep `.env` private, and ensure `public/uploads/avatars` is writable. Verify all listing, create, edit, validation, and avatar workflows against the hosted site linked above.
