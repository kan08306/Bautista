<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New Customer | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa3_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><span class="brand-mark" aria-hidden="true">KB</span><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= site_url('/') ?>">Home</a><a class="active" href="<?= site_url('customers') ?>" aria-current="page">Customers</a><a href="<?= site_url('users') ?>">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode"><svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg><svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><span class="theme-label">Dark</span></button>
        </nav>
    </header>
    <main class="page-shell form-shell">
        <section class="page-heading compact-heading" aria-labelledby="page-title">
            <p class="eyebrow">Customer accounts</p>
            <h1 id="page-title">New Customer</h1>
            <p class="lead">Enter the customer details below. Full name and a valid email address are required.</p>
        </section>

        <form class="record-form" method="post" action="<?= site_url('customers') ?>">
            <?= csrf_field() ?>
            <div class="form-field">
                <label for="full_name">Full name <span aria-hidden="true">*</span></label>
                <input type="text" id="full_name" name="full_name" value="<?= esc(old('full_name'), 'attr') ?>" autocomplete="name" required aria-describedby="full-name-help full-name-error">
                <p class="field-help" id="full-name-help">Enter the customer's complete name.</p>
                <div class="field-error" id="full-name-error" role="alert"><?= validation_show_error('full_name') ?></div>
            </div>
            <div class="form-field">
                <label for="email">Email address <span aria-hidden="true">*</span></label>
                <input type="email" id="email" name="email" value="<?= esc(old('email'), 'attr') ?>" autocomplete="email" required aria-describedby="email-help email-error">
                <p class="field-help" id="email-help">Use an address the customer can access.</p>
                <div class="field-error" id="email-error" role="alert"><?= validation_show_error('email') ?></div>
            </div>
            <div class="form-field">
                <label for="phone">Phone number <span class="optional">Optional</span></label>
                <input type="tel" id="phone" name="phone" value="<?= esc(old('phone'), 'attr') ?>" autocomplete="tel" aria-describedby="phone-help">
                <p class="field-help" id="phone-help">A mobile or landline number may be provided.</p>
            </div>
            <div class="form-actions"><a class="button button-secondary" href="<?= site_url('customers') ?>">Cancel</a><button class="button button-primary" type="submit">Create Customer</button></div>
        </form>
    </main>
    <script src="<?= base_url('tfa3_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
