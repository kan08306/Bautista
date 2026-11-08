<?php
$errors = session()->getFlashdata('errors') ?? [];
$loginError = session()->getFlashdata('error');
$oldUsername = session()->getFlashdata('old_username') ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa4_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><span class="brand-mark" aria-hidden="true">KB</span><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <div class="nav-state nav-state-public">
                <a href="<?= site_url('/') ?>">Home</a>
                <a class="active" href="<?= site_url('login') ?>" aria-current="page">Login</a>
            </div>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode"><svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg><svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><span class="theme-label">Dark</span></button>
        </nav>
    </header>

    <main class="page-shell login-shell">
        <section class="page-heading compact-heading" aria-labelledby="page-title">
            <p class="eyebrow">Staff access</p>
            <h1 id="page-title">Log in to Ken POS</h1>
            <p class="lead">Enter the username and password assigned to your staff account.</p>
        </section>

        <?php if ($loginError): ?>
            <div class="notice notice-error" role="alert" aria-live="polite">
                <?= esc($loginError) ?>
            </div>
        <?php endif; ?>

        <form class="record-form login-form" method="post" action="<?= site_url('login') ?>">
            <?= csrf_field() ?>
            <div class="form-field">
                <label for="username">Username <span aria-hidden="true">*</span></label>
                <input type="text" id="username" name="username" value="<?= esc($oldUsername, 'attr') ?>" autocomplete="username" required aria-describedby="username-help username-error">
                <p class="field-help" id="username-help">Use the username stored with your staff account.</p>
                <div class="field-error" id="username-error" role="alert"><?= esc($errors['username'] ?? '') ?></div>
            </div>
            <div class="form-field">
                <label for="password">Password <span aria-hidden="true">*</span></label>
                <input type="password" id="password" name="password" autocomplete="current-password" required aria-describedby="password-help password-error">
                <p class="field-help" id="password-help">Your password is checked against its stored hash and must never be repopulated.</p>
                <div class="field-error" id="password-error" role="alert"><?= esc($errors['password'] ?? '') ?></div>
            </div>
            <div class="form-actions login-actions">
                <button class="button button-primary" type="submit">Log In</button>
            </div>
        </form>
    </main>
    <script src="<?= base_url('tfa4_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
