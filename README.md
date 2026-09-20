# Bautista — Web System Technologies Activities

This repository contains CodeIgniter activities created by **Ken Bautista** for **IT0049 Web System Technologies**. Each activity is kept in its own standalone CodeIgniter project folder so it can be installed, tested, and deployed separately.

**Repository:** [https://github.com/kan08306/Bautista](https://github.com/kan08306/Bautista)

## Repository purpose

The projects in this repository document practical work using PHP and CodeIgniter. They focus on core web-development concepts such as routing, controllers, views, reusable assets, forms, and application structure.

## Activities

| Activity | Folder | Description | Documentation |
|---|---|---|---|
| TFA 1 | `tfa1_bautista` | Basic POS application with Home, About, Customers, and Users pages | [Open TFA 1 README](./tfa1_bautista/README.md) |

## Repository structure

```text
Bautista/
├── tfa1_bautista/       # Standalone CodeIgniter project for TFA 1
│   ├── app/             # Controllers, routes, views, and application code
│   ├── public/          # Browser-accessible assets and entry point
│   ├── vendor/          # Composer dependencies after installation
│   ├── writable/        # Runtime logs, cache, and session data
│   ├── composer.json    # PHP dependency definition
│   └── README.md        # TFA 1 setup, routes, and project details
└── README.md            # Repository overview and activity index
```

## Technology used

- PHP
- CodeIgniter 4
- Composer
- HTML
- CSS
- JavaScript
- XAMPP / Apache
- Git and GitHub

## Install an activity

Every activity folder is independent. To run an activity, clone this repository and enter the specific activity folder before installing dependencies:

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tfa1_bautista
composer install
```

Copy the provided environment template, configure its local `app.baseURL`, then either start Apache through XAMPP or run `php spark serve` from that activity folder.

See the activity README for the exact environment configuration, local URLs, available pages, and deployment notes.

## Important conventions

- Each `tfa#_bautista` folder is a separate CodeIgniter project.
- Do not place one activity inside another activity's `app/Views` folder.
- Install dependencies and run `php spark serve` from the individual activity folder.
- Each activity should have its own deployment that matches its submitted code.
- Do not commit `.env`, runtime files in `writable/`, or installed dependency files when they are excluded by `.gitignore`.

