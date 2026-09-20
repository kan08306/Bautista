<a id="readme-top"></a>

<div align="center">
  <a href="https://github.com/kan08306">
    <img src="./public/tfa1_bautista/assets/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>TFA 1 Basic POS Application</h1>

  <p>A standalone CodeIgniter 4 deployment for IT0049 Web System Technologies.</p>

  <p>
    <a href="https://github.com/kan08306"><strong>View Repository</strong></a>
  </p>
</div>

---

## Table of Contents

- [Overview](#overview)
- [Activities](#activities)
- [Hosted Deployment](#hosted-deployment)
- [Technology](#technology)
- [Project Structure](#project-structure)
- [Local Installation](#local-installation)
- [Running the Project](#running-the-project)
- [Development Guidelines](#development-guidelines)
- [Resources](#resources)

## Overview

This repository is the standalone CodeIgniter 4 project for **TFA 1** in IT0049 Web System Technologies. It follows the Model-View-Controller (MVC) structure: routes select controllers, controllers prepare data, and views display the pages.

The current activity uses static PHP arrays for customer and user records. No database, models, migrations, seeders, or SQL queries are used.

## Activities

| Activity | Description | Local Routes | Source Code |
|---|---|---|---|
| TFA 1 | Basic POS application with Home, Customer Accounts, and User Accounts pages | `/`, `/customers`, `/users` | [Activity files](./app/Views/tfa1_bautista/) |

> Each future laboratory activity will use a separate CodeIgniter project folder and a separate hosted deployment, following the instructor's requirement.

## Hosted Deployment

**InfinityFree deployment URL:** [https://a1kab-tc32.rf.gd/](https://a1kab-tc32.rf.gd/)

The InfinityFree domain has been created, but the current TFA 1 source code has not yet been uploaded there. The deployment must be uploaded and tested before this URL can be marked as verified or submitted as matching the repository.

## Technology

![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![CodeIgniter](https://img.shields.io/badge/CodeIgniter-EF4223?style=for-the-badge&logo=codeigniter&logoColor=white)
![HTML](https://img.shields.io/badge/HTML-E34F26?style=for-the-badge&logo=html5&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-1572B6?style=for-the-badge&logo=css3&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black)
![Composer](https://img.shields.io/badge/Composer-885630?style=for-the-badge&logo=composer&logoColor=white)
![Git](https://img.shields.io/badge/Git-F05032?style=for-the-badge&logo=git&logoColor=white)
![GitHub](https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white)

## Project Structure

```text
tfa1_bautista/
├── app/
│   ├── Config/
│   │   └── Routes.php
│   ├── Controllers/
│   │   ├── Customers.php
│   │   ├── Pages.php
│   │   └── Users.php
│   └── Views/
│       ├── tfa1_bautista/
│       │   ├── assets/
│       │   ├── css/
│       │   ├── js/
│       │   ├── pages/
│       │   │   ├── customers.php
│       │   │   └── users.php
│       │   └── index.php
│       └── folder_template/
├── public/
│   └── tfa1_bautista/
│       ├── assets/
│       ├── css/
│       └── js/
├── composer.json
├── composer.lock
├── README.md
└── spark
```

### TFA 1 file locations

| Content | Location |
|---|---|
| Routes | `app/Config/Routes.php` |
| Home controller | `app/Controllers/Pages.php` |
| Customer records and controller | `app/Controllers/Customers.php` |
| User records and controller | `app/Controllers/Users.php` |
| Home view | `app/Views/tfa1_bautista/index.php` |
| Customer view | `app/Views/tfa1_bautista/pages/customers.php` |
| User view | `app/Views/tfa1_bautista/pages/users.php` |
| Browser-accessible CSS, JavaScript, and images | `public/tfa1_bautista/` |

## Local Installation

### Requirements

- PHP 8.2 or newer
- Composer 2
- XAMPP or another PHP environment
- Enabled PHP extensions: `curl`, `gd`, `intl`, `mbstring`, and `zip`

Clone the repository:

```bash
git clone <your-tfa1-repository-url>
cd tfa1_bautista
```

Install the Composer dependencies:

```bash
composer install
```

Create the local environment file if it does not already exist:

```powershell
Copy-Item env .env
```

For an XAMPP installation where the project is inside `htdocs/Bautista/tfa1_bautista`, configure `.env` as follows:

```ini
CI_ENVIRONMENT = development
app.baseURL = 'http://localhost/Bautista/tfa1_bautista/public/'
```

> Keep `.env`, credentials, logs, cache data, and the `vendor/` directory out of GitHub.

## Running the Project

Start Apache in XAMPP, then open:

```text
http://localhost/Bautista/tfa1_bautista/public/
```

Available routes:

| Page | URL |
|---|---|
| Home | `http://localhost/Bautista/tfa1_bautista/public/` |
| Customer Accounts | `http://localhost/Bautista/tfa1_bautista/public/customers` |
| User Accounts | `http://localhost/Bautista/tfa1_bautista/public/users` |

## Deploying to InfinityFree

This project is deployed separately from future activities.

Before uploading, update the production `.env` file with the InfinityFree domain as the base URL. Upload the complete CodeIgniter project to the InfinityFree hosting account, including the framework dependencies required by `vendor/`. Keep the `public` folder and its assets intact, and confirm that the server directs web requests to the CodeIgniter public entry point.

After deployment, test these pages on the hosted domain:

| Page | Hosted URL |
|---|---|
| Home | `https://a1kab-tc32.rf.gd/` |
| Customer Accounts | `https://a1kab-tc32.rf.gd/customers` |
| User Accounts | `https://a1kab-tc32.rf.gd/users` |

## Development Guidelines

- Follow CodeIgniter's MVC structure.
- Create view files under `app/Views/`.
- Use controllers to prepare data and load views.
- Register public page URLs in `app/Config/Routes.php`.
- Store browser-accessible assets under `public/`.
- Keep one central `public/index.php` file.
- Test every route locally before committing and pushing changes.
- Create a separate CodeIgniter project and hosted deployment for every future activity.

## Resources

| Resource | Purpose | Link |
|---|---|---|
| Repository | TFA 1 source-code repository | Create or link your `tfa1_bautista` repository here |
| CodeIgniter User Guide | Framework documentation | [CodeIgniter 4 User Guide](https://codeigniter.com/user_guide/) |
| Composer | PHP dependency management | [Composer](https://getcomposer.org/) |
| PHP Manual | PHP language documentation | [PHP Manual](https://www.php.net/manual/en/) |

<p align="right"><a href="#readme-top">Back to top</a></p>
