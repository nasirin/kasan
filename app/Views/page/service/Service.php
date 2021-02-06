<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Service</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <!-- <li class="breadcrumb-item">Dashboard v2</li> -->
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <a href="/admin/tambah" class="btn btn-md btn-primary">Tambah</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Pelanggan</th>
                                    <th>Printer</th>
                                    <th>Type</th>
                                    <th>Kondisi</th>
                                    <th>Keterangan</th>
                                    <th>Harga</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($transaksi as $data) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['namaPel'] ?></td>
                                        <td><?= $data['namaPrinter'] ?></td>
                                        <td><?= $data['type'] ?></td>
                                        <td><?= $data['kondisi'] ?></td>
                                        <td><?= $data['keterangan'] ?></td>
                                        <td><?= $data['harga'] ?></td>
                                        <td><?= $data['statusTransaksi'] ?></td>
                                        <td>
                                            <a href="/admin/ubah/<?= $data['idTransaksi'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="/admin/hapus/<?= $data['idTransaksi'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!--/. container-fluid -->
</section>
<!-- /.content -->
<?= $this->endSection() ?>