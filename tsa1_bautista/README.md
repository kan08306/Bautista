<div align="center">
  <a href="https://github.com/kan08306/Bautista">
    <img src="./public/tsa1_bautista/assets/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>TSA 1 — Tasks for Today Management System</h1>

  <p>A standalone CodeIgniter 4 activity for <strong>IT0049 Web System Technologies</strong>. It presents tasks scheduled for the current date, a complete task list, and one user profile using records retrieved from a MySQL database through CodeIgniter Models.</p>
</div>

**Student:** Ken Anthonie A. Bautista<br>
**Repository:** [Bautista](https://github.com/kan08306/Bautista)<br>
**Activity folder:** [`tsa1_bautista`](https://github.com/kan08306/Bautista/tree/main/tsa1_bautista)<br>
**Hosted site:** [https://bautista-tsa-tc32.ct.ws/](https://bautista-tsa-tc32.ct.ws/)

## Features

- Welcome page showing only tasks scheduled for the current date
- Complete task list ordered by task date
- Task priority, status, task date, and creation date information
- Database-backed profile page for the selected demo user
- About page describing the activity and its developer
- Separate Models, controllers, and views following CodeIgniter MVC
- Escaped database output using `esc()` in the task and profile views
- Responsive navigation with persistent light and dark mode
- Custom KB logo used in the navigation and profile display

## Technology used

- PHP 8.2+
- CodeIgniter 4.7
- MySQL / MariaDB
- Composer
- HTML, CSS, and JavaScript
- XAMPP / Apache for local hosting

## Project structure

```text
tsa1_bautista/
├── app/
│   ├── Config/
│   │   └── Routes.php                   # Application routes
│   ├── Controllers/
│   │   ├── Pages.php                    # About page controller
│   │   ├── Profile.php                  # Retrieves the demo user
│   │   └── Tasks.php                    # Retrieves today's and all tasks
│   ├── Models/
│   │   ├── TaskModel.php                # Tasks table Model
│   │   └── UserModel.php                # Users table Model
│   ├── Views/
│   │   └── tsa1_bautista/
│   │       ├── pages/
│   │       │   ├── about.php
│   │       │   ├── profile.php
│   │       │   └── tasks.php
│   │       └── index.php                # Today's tasks page
│   └── Database/
│       └── tsa1_bautista.sql            # MySQL database export
├── public/
│   └── tsa1_bautista/
│       ├── assets/                      # KB logo
│       ├── css/                         # Stylesheets
│       └── js/                          # Browser JavaScript
├── composer.json                        # PHP dependencies
├── .env                                 # Environment-file template
├── README.md
└── spark                                # CodeIgniter command-line tool
```

## Database structure

The activity uses a database named `tsa1_bautista` with two tables.

### Tasks

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `priority` | `VARCHAR(20)` | Required; defaults to `medium` |
| `title` | `VARCHAR(150)` | Required |
| `status` | `VARCHAR(20)` | Required; defaults to `pending` |
| `task_date` | `DATE` | Required |
| `created_at` | `DATETIME` | Required; defaults to the current timestamp |

### Users

| Column | Type | Requirement |
|---|---|---|
| `id` | `INT` | Primary key, auto-increment |
| `username` | `VARCHAR(50)` | Required and unique |
| `full_name` | `VARCHAR(100)` | Required |
| `email` | `VARCHAR(100)` | Required |
| `created_at` | `DATETIME` | Required; defaults to the current timestamp |

The included export contains eight task records and one demo user record.

## Run this activity locally

### 1. Clone the repository

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tsa1_bautista
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the MySQL database

Start MySQL through the XAMPP Control Panel. Open phpMyAdmin, create a database named `tsa1_bautista`, then import:

```text
app/Database/tsa1_bautista.sql
```

The export creates the `tasks` and `users` tables and inserts the activity's sample records.

### 4. Create the local environment file

In PowerShell:

```powershell
Copy-Item env .env
```

Configure the application and database values in `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost:8080/'
app.appTimezone = 'Asia/Manila'

database.default.hostname = localhost
database.default.database = tsa1_bautista
database.default.username = root
database.default.password = ''
database.default.DBDriver = MySQLi
database.default.port = 3306
```

If the local MySQL account uses a password, replace the empty password value with the correct local password.

### 5. Start the application

Choose one local method.

**CodeIgniter development server** — from the `tsa1_bautista` folder, run:

```bash
php spark serve
```

Then open:

```text
http://localhost:8080/
```

**XAMPP Apache** — start Apache and MySQL in the XAMPP Control Panel. Set `app.baseURL` to:

```ini
app.baseURL = 'http://localhost/Bautista/tsa1_bautista/public/'
```

Then open:

```text
http://localhost/Bautista/tsa1_bautista/public/
```

## Available pages

| Page | Route | Purpose |
|---|---|---|
| Today's Tasks | `/` | Displays tasks scheduled for the current date |
| Task List | `/tasks` | Displays every task ordered by task date |
| Profile | `/profile` | Displays the selected demo user's information |
| About | `/about` | Describes the application and developer |

For the development server, append the route to `http://localhost:8080`. For Apache, append it to `http://localhost/Bautista/tsa1_bautista/public`.

## Model and data flow

```text
TaskModel → Tasks controller → $tasks → Today's Tasks and Task List views
UserModel → Profile controller → $user  → Profile view
```

The Tasks controller uses `where()` to select today's records and `findAll()` to retrieve the complete task list. The Profile controller retrieves the selected demo user. The views use conditions and `foreach` to present the returned database records.

## Requirements

- PHP 8.2 or newer
- Composer 2
- MySQL or MariaDB
- XAMPP or another PHP-capable local server
- PHP extensions: `curl`, `intl`, `mbstring`, and `mysqli`

## Deployment note

TSA 1 is deployed at [https://bautista-tsa-tc32.ct.ws/](https://bautista-tsa-tc32.ct.ws/). The hosted project must use its production base URL and hosting database credentials. Keep `.env` private and verify the Today's Tasks, Task List, Profile, and About routes after each deployment.
