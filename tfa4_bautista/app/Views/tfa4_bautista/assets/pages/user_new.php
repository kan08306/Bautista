<?php
$errors = session()->getFlashdata('errors') ?? [];
$oldUsername = session()->getFlashdata('old_username') ?? '';
$oldFullName = session()->getFlashdata('old_full_name') ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New User | Ken POS</title><link rel="stylesheet" href="<?= base_url('tfa4_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu"><label class="menu-pill" for="menu-toggle"><span class="brand-mark" aria-hidden="true">KB</span><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <div class="nav-state nav-state-authenticated"><a href="<?= site_url('/') ?>">Home</a><a href="<?= site_url('customers') ?>">Customers</a><a class="active" href="<?= site_url('users') ?>" aria-current="page">Users</a><a href="<?= site_url('logout') ?>">Logout</a><p class="signed-in-user">Signed in as <strong><?= esc((string) session('username')) ?></strong></p></div>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode"><svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg><svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><span class="theme-label">Dark</span></button>
        </nav>
    </header>
    <main class="page-shell form-shell">
        <section class="page-heading compact-heading" aria-labelledby="page-title"><p class="eyebrow">Protected user accounts</p><h1 id="page-title">New User</h1><p class="lead">Create a staff identity with a unique username, complete name, and secure login password.</p></section>
        <form class="record-form" method="post" action="<?= site_url('users') ?>">
            <?= csrf_field() ?>
            <div class="form-field"><label for="username">Username <span aria-hidden="true">*</span></label><input type="text" id="username" name="username" value="<?= esc($oldUsername, 'attr') ?>" autocomplete="username" required aria-describedby="username-help username-error"><p class="field-help" id="username-help">Choose a username that is not already assigned.</p><div class="field-error" id="username-error" role="alert"><?= esc($errors['username'] ?? '') ?></div></div>
            <div class="form-field"><label for="full_name">Full name <span aria-hidden="true">*</span></label><input type="text" id="full_name" name="full_name" value="<?= esc($oldFullName, 'attr') ?>" autocomplete="name" required aria-describedby="full-name-help full-name-error"><p class="field-help" id="full-name-help">Enter the user's complete name.</p><div class="field-error" id="full-name-error" role="alert"><?= esc($errors['full_name'] ?? '') ?></div></div>
            <div class="form-field"><label for="password">Password <span aria-hidden="true">*</span></label><input type="password" id="password" name="password" autocomplete="new-password" required minlength="8" aria-describedby="password-help password-error"><p class="field-help" id="password-help">Use at least 8 characters. </p><div class="field-error" id="password-error" role="alert"><?= esc($errors['password'] ?? '') ?></div></div>
            <div class="form-actions"><a class="button button-secondary" href="<?= site_url('users') ?>">Cancel</a><button class="button button-primary" type="submit">Create User</button></div>
        </form>
    </main>
    <script src="<?= base_url('tfa4_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
