<div align="center">
  <a href="https://github.com/kan08306/Bautista">
    <img src="./tfa1_bautista/public/tfa1_bautista/assets/KBlogo.png" alt="KB Logo" width="130">
  </a>

  <h1>Ken Bautista</h1>
  
  <h6>IT0049_TC32</h6>

  This repository contains CodeIgniter activities created by **Ken Bautista** for **IT0049 Web System Technologies**. Each activity is kept in its own standalone CodeIgniter project folder so it can be installed, tested, and deployed separately.

  <a href="https://github.com/kan08306/Bautista"> Repository <a/>
  
</div>

## Repository purpose

The projects in this repository document practical work using PHP and CodeIgniter. They focus on core web-development concepts such as routing, controllers, views, Models, database integration, reusable assets, and application structure.

## Activities

| Activity | Folder | Description | Documentation | Hosted Website |
|---|---|---|---|---|
| TFA 1 | `tfa1_bautista` | Basic POS application with Home, About, Customers, and Users pages | [Open TFA 1 README](./tfa1_bautista/README.md) | http://bautista-tc32.infinityfree.me/ |
| TFA 2 | `tfa2_bautista` | Database-backed POS account pages using MySQL, Models, and Query Builder | [Open TFA 2 README](./tfa2_bautista/README.md) | https://tfa2-bautista-tc32.infinityfree.me/ |

## Repository structure

```text
Bautista/
├── tfa1_bautista/       # TFA 1 static-array POS application
│   └── README.md        # TFA 1 setup, routes, and project details
├── tfa2_bautista/       # TFA 2 database-backed POS application
│   └── README.md        # TFA 2 database setup, routes, and project details
└── README.md            # Repository overview and activity index
```

## Technology used

- PHP
- CodeIgniter 4
- Composer
- MySQL / MariaDB
- HTML
- CSS
- JavaScript
- XAMPP / Apache
- Git and GitHub

## Install an activity

Every activity folder is independent. To run an activity, clone this repository and enter the specific activity folder before installing dependencies:

```bash
git clone https://github.com/kan08306/Bautista.git
cd Bautista/tfa2_bautista
composer install
```

The example above selects TFA 2. Use `tfa1_bautista` instead when running TFA 1. Copy the provided environment template, configure its local `app.baseURL` and any activity-specific database settings, then either start Apache through XAMPP or run `php spark serve` from that activity folder.

See the activity README for the exact environment configuration, local URLs, available pages, and deployment notes.

## Important conventions

- Each `tfa#_bautista` folder is a separate CodeIgniter project.
- Do not place one activity inside another activity's `app/Views` folder.
- Install dependencies and run `php spark serve` from the individual activity folder.
- Each activity should have its own deployment that matches its submitted code.
- Do not commit `.env`, runtime files in `writable/`, or installed dependency files when they are excluded by `.gitignore`.