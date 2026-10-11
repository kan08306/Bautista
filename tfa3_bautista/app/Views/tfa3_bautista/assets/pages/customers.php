<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Customer Accounts | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa3_bautista/assets/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle"><span class="brand-mark" aria-hidden="true">KB</span><span>Ken</span></label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= site_url('/') ?>">Home</a><a class="active" href="<?= site_url('customers') ?>" aria-current="page">Customers</a><a href="<?= site_url('users') ?>">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch to dark mode">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg><svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg><span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell page-shell-wide">
        <section class="page-heading" aria-labelledby="page-title">
            <p class="eyebrow">Account directory</p>
            <h1 id="page-title">Customer Accounts</h1>
            <p class="lead">Review customer contact records or open the validated form to add a new account.</p>
        </section>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="notice notice-success" role="status">
                <?= esc(session()->getFlashdata('success')) ?>
            </div>
        <?php endif; ?>

        <section class="table-section" aria-labelledby="customer-table-title">
            <div class="section-heading">
                <div><p class="section-number">01</p><h2 id="customer-table-title">Customer records</h2></div>
                <a class="button button-primary button-compact" href="<?= site_url('customers/new') ?>">Add Customer</a>
            </div>
            <div class="table-wrap">
                <table>
                    <thead><tr><th scope="col">Full Name</th><th scope="col">Email</th><th scope="col">Phone</th><th scope="col">Created</th><th scope="col">Action</th></tr></thead>
                    <tbody>
                        <?php if ($customers === []): ?>
                            <tr class="empty-row"><td colspan="5"><strong>No customer records to display.</strong><span>Create a customer account to add the first record.</span></td></tr>
                        <?php else: ?>
                            <?php foreach ($customers as $customer): ?>
                                <tr>
                                    <td><?= esc($customer['full_name']) ?></td>
                                    <td><?= esc($customer['email']) ?></td>
                                    <td><?= esc($customer['phone'] ?: 'Not provided') ?></td>
                                    <td><?= esc($customer['created_at']) ?></td>
                                    <td><a class="edit-link" href="<?= site_url('customers/' . $customer['id'] . '/edit') ?>">Edit</a></td>
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
