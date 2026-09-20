<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa1_bautista/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle">
            <img src="<?= base_url('tfa1_bautista/assets/KBlogo.png') ?>" alt="KB logo" width="45" height="45">
            <span>Ken</span>
        </label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a class="active" href="<?= base_url() ?>" aria-current="page">Home</a>
            <a href="<?= base_url('customers') ?>">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch color theme">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell">
        <section class="hero" aria-labelledby="page-title">
            <p class="eyebrow">IT0049 Web System Technologies</p>
            <h1 id="page-title">A simple starting point for your point-of-sale system.</h1>
            <p class="lead">Explore the application, learn what it is designed to do, and view the temporary customer and staff account records.</p>
            <div class="actions">
                <a class="button button-primary" href="<?= base_url('customers') ?>">View customers</a>
                <a class="button button-secondary" href="<?= base_url('users') ?>">View users</a>
            </div>
        </section>

        <section class="overview" aria-labelledby="overview-title">
            <div>
                <p class="section-number">01</p>
                <h2 id="overview-title">Four focused pages</h2>
            </div>
            <p>This first version demonstrates CodeIgniter routing, controllers, views, controller-to-view data, static arrays, and basic navigation without using a database.</p>
        </section>
    </main>

    <script src="<?= base_url('tfa1_bautista/js/script.js') ?>"></script>
</body>
</html>
