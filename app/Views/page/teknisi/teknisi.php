<?= $this->extend('layout/admin') ?>
<?= $this->section('content') ?>
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Teknisi</h1>
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
                        <a href="/teknisi/tambah" class="btn btn-md btn-primary">Tambah</a>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-striped table-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Teknisi</th>
                                    <th>Username</th>
                                    <th>Password</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($teknisi as $data) : ?>
                                    <tr>
                                        <td><?= $no++ ?></td>
                                        <td><?= $data['namaTeknisi'] ?></td>
                                        <td><?= $data['username'] ?></td>
                                        <td><?= $data['password'] ?></td>
                                        <td>
                                            <a href="/teknisi/ubah/<?= $data['idTeknisi'] ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <a href="/teknisi/hapus/<?= $data['idTeknisi'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
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