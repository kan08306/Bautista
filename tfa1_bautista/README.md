<div align="center">
  <a href="https://github.com/kan08306/Bautista">
    <img src="./public/tfa1_bautista/assets/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>TFA 1 — Basic POS Application</h1>

  <p>A standalone CodeIgniter 4 activity for <strong>IT0049 Web System Technologies</strong>. It demonstrates CodeIgniter routing, controllers, views, navigation, and passing temporary static-array data from controllers to views.</p>
</div>

**Repository:** [Bautista](https://github.com/kan08306/Bautista)  
**Activity folder:** [`tfa1_bautista`](https://github.com/kan08306/Bautista/tree/main/tfa1_bautista)  
**Hosted site:** [https://bautista-tc32.infinityfree.me/](https://bautista-tc32.infinityfree.me/)

## Features

- Home, About, Customer Accounts, and User Accounts pages
- Connected navigation with light and dark mode
- Temporary customer and user records from PHP static arrays
- No database, models, migrations, or SQL are required for this activity

## Technology used

- PHP 8.2+
- CodeIgniter 4
- Composer
- HTML, CSS, and JavaScript
- XAMPP / Apache for local hosting

## Project structure

```text
tfa1_bautista/
├── app/
│   ├── Config/
│   │   └── Routes.php              # URL-to-controller routes
│   ├── Controllers/
│   │   ├── Customers.php            # Customer data and page controller
│   │   ├── Pages.php                # Home and About page controller
│   │   └── Users.php                # User data and page controller
│   └── Views/
│       └── tfa1_bautista/
│           ├── pages/
│           │   ├── about.php
│           │   ├── customers.php
│           │   └── users.php
│           └── index.php
├── public/
│   └── tfa1_bautista/
│       ├── assets/                  # Logo and image files
│       ├── css/                     # Stylesheets
│       └── js/                      # Browser JavaScript
├── composer.json                    # PHP dependencies
├── env                              # Environment-file template
├── README.md
└── spark                            # CodeIgniter command-line tool
```

## Run this activity locally

### 1. Clone the repository

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tfa1_bautista
```

### 2. Install PHP dependencies

```bash
composer install
```

### 3. Create the local environment file

In PowerShell:

```powershell
Copy-Item env .env
```

For an XAMPP installation located at `htdocs/Bautista/tfa1_bautista`, set this in `.env`:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/Bautista/tfa1_bautista/public/'
```

### 4. Start the application

Choose one local method:

**XAMPP Apache** — start Apache in the XAMPP Control Panel, then open:

```text
http://localhost/Bautista/tfa1_bautista/public/
```

**CodeIgniter development server** — from the `tfa1_bautista` folder, run:

```bash
php spark serve
```

Then open the address shown in the terminal, usually:

```text
http://localhost:8080/
```

## Available pages

| Page | Apache URL path | Development-server URL path |
|---|---|---|
| Home | `/` | `/` |
| About | `/about` | `/about` |
| Customer Accounts | `/customers` | `/customers` |
| User Accounts | `/users` | `/users` |

For Apache, append each path to `http://localhost/Bautista/tfa1_bautista/public`. For the CodeIgniter development server, append it to `http://localhost:8080`.

## Requirements

- PHP 8.2 or newer
- Composer 2
- XAMPP or another PHP-capable local server
- PHP extensions: `curl`, `gd`, `intl`, `mbstring`, and `zip`

## Deployment note

TFA 1 is intended to be deployed as its own CodeIgniter project. Its hosted URL is [https://bautista-tc32.infinityfree.me/](https://bautista-tc32.infinityfree.me/). Before submitting, upload the matching project files, configure the production base URL, and test all four routes.

