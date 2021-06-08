<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Form Teknisi</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/teknisi">Home</a></li>
                    <li class="breadcrumb-item active">Form Teknisi</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="card card-outline card-primary">
            <!-- /.card-header -->
            <form action="/teknisi/simpan" method="post" class="form-horizontal">
                <?= csrf_field() ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Nama Teknisi" name="nama" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Username</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Username" name="username" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Password</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Password" name="password" required>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="/teknisi" class="btn btn-default float-right">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>