<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Accounts | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa3_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><span class="brand-mark" aria-hidden="true">KB</span><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= site_url('/') ?>">Home</a><a href="<?= site_url('customers') ?>">Customers</a><a class="active" href="<?= site_url('users') ?>" aria-current="page">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg><svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell page-shell-wide">
        <section class="page-heading" aria-labelledby="page-title">
            <p class="eyebrow">Staff directory</p>
            <h1 id="page-title">User Accounts</h1>
            <p class="lead">Review staff identities and prepared avatars or open the validated form to add a new user.</p>
        </section>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="notice notice-success" role="status">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>

        <section class="table-section" aria-labelledby="user-table-title">
            <div class="section-heading">
                <div><p class="section-number">01</p><h2 id="user-table-title">User records</h2></div>
                <a class="button button-primary button-compact" href="<?= site_url('users/new') ?>">Add User</a>
            </div>
            <div class="table-wrap">
                <table>
                    <thead><tr><th scope="col">Avatar</th><th scope="col">Username</th><th scope="col">Full Name</th><th scope="col">Created</th><th scope="col">Action</th></tr></thead>
                    <tbody>
                        <?php if ($users === []): ?>
                            <tr class="empty-row"><td colspan="5"><strong>No user records to display.</strong><span>Create a user account to add the first record.</span></td></tr>
                        <?php else: ?>
                            <?php foreach ($users as $user): ?>
                                <?php
                                $avatar = $user['avatar'] ?? '';
                                $avatarPath = FCPATH . 'uploads/avatars/' . $avatar;
                                $avatarUrl = $avatar !== '' && is_file($avatarPath)
                                    ? base_url('uploads/avatars/' . $avatar)
                                    : base_url('tfa3_bautista/assets/img/avatar-placeholder.svg');
                                ?>
                                <tr>
                                    <td><img class="avatar-table-image" src="<?= esc($avatarUrl, 'attr') ?>" alt="Avatar of <?= esc($user['full_name'], 'attr') ?>"></td>
                                    <td><?= esc($user['username']) ?></td>
                                    <td><?= esc($user['full_name']) ?></td>
                                    <td><?= esc($user['created_at']) ?></td>
                                    <td><a class="edit-link" href="<?= site_url('users/' . $user['id'] . '/edit') ?>">Edit</a></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>
    <script src="<?= base_url('tfa3_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
