<?php $isLoggedIn = session()->get('isLoggedIn') === true; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa4_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle">
            <span class="brand-mark" aria-hidden="true">KB</span>
            <span>Ken</span>
        </label>
        <nav class="menu-panel" aria-label="Main navigation">
            <?php if (! $isLoggedIn): ?>
            <div class="nav-state nav-state-public">
                <a class="active" href="<?= site_url('/') ?>" aria-current="page">Home</a>
                <a href="<?= site_url('login') ?>">Login</a>
            </div>
            <?php else: ?>
            <div class="nav-state nav-state-authenticated">
                <a class="active" href="<?= site_url('/') ?>" aria-current="page">Home</a>
                <a href="<?= site_url('customers') ?>">Customers</a>
                <a href="<?= site_url('users') ?>">Users</a>
                <form class="logout-form" method="post" action="<?= site_url('logout') ?>">
                    <?= csrf_field() ?>
                    <button class="logout-button" type="submit">Logout</button>
                </form>
                <p class="signed-in-user">Signed in as <strong><?= esc((string) session('username')) ?></strong></p>
            </div>
            <?php endif; ?>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell">
        <section class="hero" aria-labelledby="page-title">
            <p class="eyebrow">Technical Formative Assessment 4</p>
            <h1 id="page-title">Account access starts with a verified staff login.</h1>
            <p class="lead">This frontend adds a focused staff login interface while preserving the Ken POS customer, user, validation, edit, and avatar presentations.</p>
            <div class="actions">
                <?php if ($isLoggedIn): ?>
                    <a class="button button-primary" href="<?= site_url('customers') ?>">Open customer accounts</a>
                <?php else: ?>
                    <a class="button button-primary" href="<?= site_url('login') ?>">Open login</a>
                <?php endif; ?>
            </div>
        </section>

        <section class="overview" aria-labelledby="overview-title">
            <div>
                <p class="section-number">01</p>
                <h2 id="overview-title">Sessions and authentication</h2>
            </div>
            <p>The backend verifies a stored password hash, remembers only small login-state values in the session, protects account-management routes with one filter, and clears the session during logout.</p>
        </section>
    </main>

    <script src="<?= base_url('tfa4_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
