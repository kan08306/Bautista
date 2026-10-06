<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('tsa1-2_bautista/css/style.css') ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><img src="<?= base_url('tsa1-2_bautista/assets/KBlogo.png') ?>" alt="KB logo" width="45" height="45"><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= base_url() ?>">Welcome</a>
            <a href="<?= base_url('tasks') ?>">Task List</a>
            <a class="active" href="<?= base_url('profile') ?>" aria-current="page">Profile</a>
            <a href="<?= base_url('about') ?>">About</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>
    <main class="page-shell" id="main-content">
        <section class="page-heading" aria-labelledby="page-title">
            <p class="eyebrow">Demo user</p>
            <h1 id="page-title">Profile.</h1>
            <p class="lead">The single user record associated with this task-management demonstration.</p>
        </section>
        <?php if ($user !== null): ?>
        <section class="profile-card" aria-labelledby="profile-heading">
            <div class="profile-mark">
                <img src="<?= base_url('tsa1-2_bautista/assets/KBlogo.png') ?>" alt="Ken Bautista KB logo">
            </div>
            <div class="profile-content">
                <p class="section-number">01</p>
                <h2 id="profile-heading">User information</h2>
                <dl class="detail-list">
                    <div><dt>Username</dt><dd><?= esc($user['username']) ?></dd></div>
                    <div><dt>Full name</dt><dd><?= esc($user['full_name']) ?></dd></div>
                    <div><dt>Email</dt><dd><?= esc($user['email']) ?></dd></div>
                    <div><dt>Member since</dt><dd><?= esc($user['created_at']) ?></dd></div>
                </dl>
            </div>
        </section>
        <?php else: ?>
        <section class="empty-state profile-empty" aria-live="polite">
            <svg viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/></svg>
            <div><h2>Profile unavailable</h2><p>The selected demo user could not be found.</p></div>
        </section>
        <?php endif; ?>
    </main>
    <footer class="site-footer"><p>Tasks for Today Management System</p></footer>
    <script src="<?= base_url('tsa1-2_bautista/js/script.js') ?>"></script>
</body>
</html>
