<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Accounts | Ken POS</title>
    <link rel="stylesheet" href="<?= base_url('tfa1_bautista/css/style.css') ?>">
</head>
<body>
    <header class="site-header">
        <input class="menu-toggle" type="checkbox" id="menu-toggle" aria-label="Open navigation menu">
        <label class="menu-pill" for="menu-toggle">
            <img src="<?= base_url('tfa1_bautista/assets/KBlogo.png') ?>" alt="KB logo" width="45" height="45">
            <span>Ken</span>
        </label>
        <nav class="menu-panel" aria-label="Main navigation">
            <a href="<?= base_url() ?>">Home</a>
            <a class="active" href="<?= base_url('customers') ?>" aria-current="page">Customers</a>
            <a href="<?= base_url('users') ?>">Users</a>
            <button class="theme-toggle" type="button" aria-label="Switch color theme">
                <svg class="moon-icon" viewBox="0 0 24 24" aria-hidden="true"><path d="M20.5 14.3A8.5 8.5 0 0 1 9.7 3.5 8.5 8.5 0 1 0 20.5 14.3Z"/></svg>
                <svg class="sun-icon" viewBox="0 0 24 24" aria-hidden="true"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/></svg>
                <span class="theme-label">Dark</span>
            </button>
        </nav>
    </header>

    <main class="page-shell page-shell-wide">
        <section class="page-heading" aria-labelledby="page-title">
            <p class="eyebrow">Account directory</p>
            <h1 id="page-title">Customer Accounts</h1>
            <p class="lead">Customer records passed from the controller will be displayed in this table.</p>
        </section>

        <section class="table-section" aria-labelledby="customer-table-title">
            <div class="section-heading">
                <div>
                    <p class="section-number">01</p>
                    <h2 id="customer-table-title">Customer records</h2>
                </div>
                <a class="data-source" href="<?= base_url('users') ?>">View users</a>
            </div>
            <div class="table-wrap">
                <table>
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($customers as $customer): ?>
                            <tr>
                                <td><?= $customer['full_name'] ?></td>
                                <td><?= $customer['email'] ?></td>
                                <td><?= $customer['phone'] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </section>
    </main>

    <script src="<?= base_url('tfa1_bautista/js/script.js') ?>"></script>
</body>
</html>
