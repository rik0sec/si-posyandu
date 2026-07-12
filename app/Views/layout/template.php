<!DOCTYPE html>
<html lang="id">

<head>

    <?= $this->include('layout/header'); ?>

</head>

<body>

<div class="wrapper">

    <!-- Sidebar -->
    <?= $this->include('layout/sidebar'); ?>

    <!-- Content -->
    <div class="main-content">

        <!-- Navbar -->
        <?= $this->include('layout/navbar'); ?>

        <!-- Page Content -->
        <div class="container-fluid py-4">

            <?= $this->renderSection('content'); ?>

        </div>

        <!-- Footer -->
        <?= $this->include('layout/footer'); ?>

    </div>

</div>

<script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>

<script src="<?= base_url('assets/datatables/datatables.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/chart.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/sweetalert2.all.min.js'); ?>"></script>

<script src="<?= base_url('assets/js/app.js'); ?>"></script>

<?= $this->renderSection('script'); ?>

</body>
</html>