<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa3_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><span class="brand-mark" aria-hidden="true">KB</span><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= site_url('/') ?>">Home</a><a href="<?= site_url('customers') ?>">Customers</a><a class="active" href="<?= site_url('users') ?>" aria-current="page">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode"><svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg><svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><span class="theme-label">Dark</span></button>
        </nav>
    </header>
    <main class="page-shell form-shell">
        <a class="back-link" href="<?= site_url('users') ?>">Back to users</a>
        <section class="page-heading compact-heading" aria-labelledby="page-title">
            <p class="eyebrow">User accounts</p>
            <h1 id="page-title">Edit User</h1>
            <p class="lead">Update the selected user and optionally choose a new JPG or PNG avatar no larger than 2 MB.</p>
        </section>

        <form class="record-form" method="post" action="<?= site_url('users/' . $user['id']) ?>" enctype="multipart/form-data">
            <?= csrf_field() ?>
            <div class="form-field">
                <label for="username">Username <span aria-hidden="true">*</span></label>
                <input type="text" id="username" name="username" value="<?= esc(old('username', $user['username']), 'attr') ?>" autocomplete="username" required aria-describedby="username-help username-error">
                <p class="field-help" id="username-help">The current username may stay unchanged, but another user's username cannot be reused.</p>
                <div class="field-error" id="username-error" role="alert"><?= validation_show_error('username') ?></div>
            </div>
            <div class="form-field">
                <label for="full_name">Full name <span aria-hidden="true">*</span></label>
                <input type="text" id="full_name" name="full_name" value="<?= esc(old('full_name', $user['full_name']), 'attr') ?>" autocomplete="name" required aria-describedby="full-name-help full-name-error">
                <p class="field-help" id="full-name-help">Enter the user's complete name.</p>
                <div class="field-error" id="full-name-error" role="alert"><?= validation_show_error('full_name') ?></div>
            </div>
            <?php
            $currentAvatar = $user['avatar'] ?? '';
            $currentAvatarPath = FCPATH . 'uploads/avatars/' . $currentAvatar;
            $currentAvatarUrl = $currentAvatar !== '' && is_file($currentAvatarPath)
                ? base_url('uploads/avatars/' . $currentAvatar)
                : base_url('tfa3_bautista/assets/img/avatar-placeholder.svg');
            ?>
            <div class="form-field avatar-field">
                <div class="avatar-preview-wrap">
                    <div class="avatar-preview" data-avatar-preview role="img" aria-label="Avatar of <?= esc($user['full_name'], 'attr') ?>" style="background-image: url('<?= esc($currentAvatarUrl, 'attr') ?>')"></div>
                </div>
                <div class="file-control">
                    <label for="avatar">Profile picture <span class="optional">Optional</span></label>
                    <input type="file" id="avatar" name="avatar" accept="image/jpeg,image/png" aria-describedby="avatar-help avatar-file-name avatar-error">
                    <p class="field-help" id="avatar-help">Accepted formats: JPG and PNG. Maximum size: 2 MB.</p>
                    <p class="selected-file" id="avatar-file-name" data-file-name>No new file selected</p>
                    <div class="field-error" id="avatar-error" role="alert"><?= validation_show_error('avatar') ?></div>
                </div>
            </div>
            <div class="form-actions"><a class="button button-secondary" href="<?= site_url('users') ?>">Cancel</a><button class="button button-primary" type="submit">Save Changes</button></div>
        </form>
    </main>
    <script src="<?= base_url('tfa3_bautista/assets/js/script.js') ?>"></script>
</body>
</html>
