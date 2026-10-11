<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa3_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle">
            <span class="brand-mark" aria-hidden="true">KB</span>
            <span>Ken</span>
        </label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a class="active" href="<?= site_url('/') ?>" aria-current="page">Home</a>
            <a href="<?= site_url('customers') ?>">Customers</a>
            <a href="<?= site_url('users') ?>">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell">
        <section class="hero" aria-labelledby="page-title">
            <p class="eyebrow">Technical Formative Assessment 3</p>
            <h1 id="page-title">Create and edit account records with confidence.</h1>
            <p class="lead">The Ken POS account directories are being extended with validated customer and user forms, safe updates, and prepared user avatars.</p>
            <div class="actions">
                <a class="button button-primary" href="<?= site_url('customers') ?>">Customer accounts</a>
                <a class="button button-secondary" href="<?= site_url('users') ?>">User accounts</a>
            </div>
        </section>

        <section class="overview" aria-labelledby="overview-title">
            <div>
                <p class="section-number">01</p>
                <h2 id="overview-title">Validated account workflows</h2>
            </div>
            <p>Customer and user records will be created and updated only after server-side validation. User edit pages will also accept an optional JPG or PNG avatar, prepare it for display, and store only its generated filename.</p>
        </section>
    </main>

    <script src="<?= base_url('tfa3_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
