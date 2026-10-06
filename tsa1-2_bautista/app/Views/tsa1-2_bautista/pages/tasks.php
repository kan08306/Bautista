<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List | Tasks for Today</title>
    <link rel="stylesheet" href="<?= base_url('tsa1-2_bautista/css/style.css') ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><img src="<?= base_url('tsa1-2_bautista/assets/KBlogo.png') ?>" alt="KB logo" width="45" height="45"><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= base_url() ?>">Welcome</a>
            <a class="active" href="<?= base_url('tasks') ?>" aria-current="page">Task List</a>
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
        <section class="page-heading" aria-labelledby="page-title">
            <p class="eyebrow">Complete schedule</p>
            <h1 id="page-title">Every task, in order.</h1>
            <p class="lead">Review the full task list arranged by task date.</p>
        </section>
        <section class="table-section" aria-labelledby="task-list-heading">
            <div class="section-heading">
                <div><p class="section-number">01</p><h2 id="task-list-heading">Task list</h2></div>
                <span class="data-source">Ordered by date</span>
            </div>
            <div class="table-wrap">
                <?php if (! empty($tasks)): ?>
                <table>
                    <caption class="sr-only">All tasks ordered by task date</caption>
                    <thead><tr><th scope="col">Priority</th><th scope="col">Task</th><th scope="col">Status</th><th scope="col">Task date</th><th scope="col">Created</th></tr></thead>
                    <tbody>
                        <?php foreach ($tasks as $task): ?>
                        <tr>
                            <td><?= esc(ucfirst($task['priority'])) ?></td>
                            <td><?= esc($task['title']) ?></td>
                            <td><?= esc(ucfirst($task['status'])) ?></td>
                            <td><?= esc($task['task_date']) ?></td>
                            <td><?= esc($task['created_at']) ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <?php else: ?>
                <div class="empty-state">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 5h10M9 12h10M9 19h10M4 5h.01M4 12h.01M4 19h.01"/></svg>
                    <div><h3>No tasks available</h3><p>The tasks table does not contain any records.</p></div>
                </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
    <footer class="site-footer"><p>Tasks for Today Management System</p></footer>
    <script src="<?= base_url('tsa1-2_bautista/js/script.js') ?>"></script>
</body>
</html>
