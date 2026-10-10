<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<p class="eyebrow">CUSTOMER ACCOUNTS</p>
<h1>Customer Accounts</h1>
<p class="lead">Sample customer records from a temporary static PHP array.</p>
<div class="table-wrap">
    <table>
        <thead><tr><th>Full name</th><th>Email</th><th>Phone</th></tr></thead>
        <tbody>
        <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= esc($customer['full_name']) ?></td>
                <td><?= esc($customer['email']) ?></td>
                <td><?= esc($customer['phone']) ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>
