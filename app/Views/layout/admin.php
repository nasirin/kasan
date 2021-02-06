<!DOCTYPE html>
<html lang="en">

<?= $this->include('components/meta') ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Navbar -->
        <?= $this->include('components/nav') ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?= $this->include('components/asside') ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?= $this->renderSection('content') ?>
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <?= $this->include('components/js') ?>
</body>

</html>