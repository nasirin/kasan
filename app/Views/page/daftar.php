<?= $this->extend('layout/login') ?>
<?= $this->section('content') ?>
<div class="login-box">
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <h4 class="login-box-msg">CV GRAFITI PRINT SISTEM</h4>

            <form action="/daftar/simpan" method="post">
                <?= csrf_field() ?>
                <div class="form-group mb-3">
                    <label>Nama</label>
                    <input type="hidden" name="nonadmin" value="nonadnim">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required>
                </div>
                <div class="form-group mb-3">
                    <label>Telepon</label>
                    <input type="number" min="0" name="telepon" required class="form-control" placeholder="Nomor Telepon">
                </div>
                <div class="form-group mb-3">
                    <label>Alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control" required></textarea>
                </div>
                <div class="row">
                    <!-- /.col -->
                    <div class="col-12 text-center">
                        <button type="submit" class="btn btn-primary btn-block">Daftar</button>
                        <a href="/">Kembali</a>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->
<?= $this->endSection() ?>