<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Form Pelanggan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/pelanggan">Home</a></li>
                    <li class="breadcrumb-item active">Form Pelanggan</li>
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
            <form action="/pelanggan/simpan" method="post" class="form-horizontal">
                <?= csrf_field() ?>
                <div class="card-body">
                    <!-- /.form-group -->
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <input type="text" class="form-control col-sm-9" placeholder="Nama Pelanggan" name="nama" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Telepon</label>
                        <input type="number" min="0" class="form-control col-sm-9" placeholder="Telepon Pelanggan" name="telepon" required>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Alamat</label>
                        <textarea name="alamat" required cols="30" rows="10" class="form-control col-sm-9" placeholder="Alamat Pelanggan"></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Simpan</button>
                    <a href="/pelanggan" class="btn btn-default float-right">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>