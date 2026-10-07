<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('tsa1_bautista/css/style.css') ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle">
            <img src="<?= base_url('tsa1_bautista/assets/KBlogo.png') ?>" alt="KB logo" width="45" height="45">
            <span>Ken</span>
        </label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a class="active" href="<?= base_url() ?>" aria-current="page">Welcome</a>
            <a href="<?= base_url('tasks') ?>">Task List</a>
            <a href="<?= base_url('profile') ?>">Profile</a>
            <a href="<?= base_url('about') ?>">About</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell page-shell-wide" id="main-content">
        <section class="page-heading page-heading-split" aria-labelledby="page-title">
            <div>
                <p class="eyebrow">Tasks for Today Management System</p>
                <h1 id="page-title">Today, kept simple.</h1>
                <p class="lead">A focused view of the tasks scheduled for the current day.</p>
            </div>
            <div class="date-card" aria-label="Current date">
                <span>Today</span>
                <strong><?= esc($currentDate) ?></strong>
            </div>
        </section>

        <section class="table-section" aria-labelledby="today-heading">
            <div class="section-heading">
                <div><p class="section-number">01</p><h2 id="today-heading">Scheduled for today</h2></div>
                <span class="data-source">Today only</span>
            </div>
            <div class="table-wrap">
                <?php if (! empty($tasks)): ?>
                <table>
                    <caption class="sr-only">Tasks scheduled for the current date</caption>
                    <thead><tr><th scope="col">Priority</th><th scope="col">Task</th><th scope="col">Status</th><th scope="col">Task date</th></tr></thead>
                    <tbody>
                        <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc(ucfirst($task['priority'])) ?></td>
                            <td><?= esc($task['title']) ?></td>
                            <td><?= esc(ucfirst($task['status'])) ?></td>
                            <td><?= esc($task['task_date']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="empty-state">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><rect x="4" y="5" width="16" height="15" rx="2"/><path d="M8 3v4M16 3v4M4 10h16M9 15l2 2 4-4"/></svg>
                    <div><h3>No tasks scheduled today</h3><p>There are no task records matching the current date.</p></div>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer class="site-footer"><p>Tasks for Today Management System</p></footer>
    <script src="<?= base_url('tsa1_bautista/js/script.js') ?>"></script>
</body>
</html>
