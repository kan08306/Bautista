<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Tasks for Today</title>
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
            <a href="<?= base_url('profile') ?>">Profile</a>
            <a class="active" href="<?= base_url('about') ?>" aria-current="page">About</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>
    <main class="page-shell" id="main-content">
        <section class="page-heading" aria-labelledby="page-title">
            <p class="eyebrow">About the project</p>
            <h1 id="page-title">A clear view of what matters today.</h1>
            <p class="lead">Tasks for Today is a focused CodeIgniter application for viewing daily tasks, the complete schedule, and one demo user profile.</p>
        </section>
        <section class="about-grid" aria-label="Project and developer information">
            <article><p class="section-number">01</p><h2>Purpose</h2><p>The system separates today&rsquo;s work from the complete task list so information stays easy to review.</p></article>
            <article><p class="section-number">02</p><h2>Developer</h2><p>Designed and developed by <strong>Ken Anthonie A. Bautista</strong> for IT0049 Web System Technologies.</p></article>
        </section>
    </main>
    <footer class="site-footer"><p>Tasks for Today Management System</p></footer>
    <script src="<?= base_url('tsa1-2_bautista/js/script.js') ?>"></script>
</body>
</html>
