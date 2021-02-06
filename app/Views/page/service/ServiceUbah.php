<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Form Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Form Service</li>
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
            <form action="/admin/ganti/<?= $transaksi['idTransaksi'] ?>" method="post" class="form-horizontal">
                <?= csrf_field() ?>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">pelanggan</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2" style="width: 100%;" name="pelanggan" required>
                                        <option value="<?= $transaksi['idPel'] ?>"><?= $transaksi['namaPel'] ?></option>
                                        <option value="">--- Pilih Pelanggan ---</option>
                                        <?php foreach ($pelanggan as $data) : ?>
                                            <option value="<?= $data['idPel'] ?>"><?= $data['namaPel'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Printer</label>
                                <input type="text" class="form-control col-sm-9" value="<?= $transaksi['namaPrinter'] ?>" placeholder="Nama Printer" name="nama" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Type</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Type Printer" name="type" required value="<?= $transaksi['type'] ?>">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kondisi</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Kondisi Printer" name="kondisi" required value="<?= $transaksi['kondisi'] ?>">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Keterangan</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Keterangan Printer" name="keterangan" required value="<?= $transaksi['keterangan'] ?>">
                            </div>
                            <!-- /.form-group -->
                        </div>
                        <!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga</label>
                                <input type="number" min="0" class="form-control col-sm-9" placeholder="Harga Service" name="harga" required value="<?= $transaksi['harga'] ?>">
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Status</label>
                                <input type="text" class="form-control col-sm-9" placeholder="Status Service" name="status" required value="<?= $transaksi['statusTransaksi'] ?>">
                            </div>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-info">Ubah</button>
                    <a href="/admin" class="btn btn-default float-right">Cancel</a>
                </div>
            </form>
        </div>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>