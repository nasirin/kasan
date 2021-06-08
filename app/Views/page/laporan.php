<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Laporan Transaksi</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4>CV GRAFITI PRINT SISTEM</h4>
            </div>
            <div class="col-12">
                <P>JL kaligawe No. 16 Semarang</P>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <h3>Laporan Transaksi</h3>
            </div>
        </div>
        <div class="row mt-5">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Pelanggan</th>
                        <th>Telepon</th>
                        <th>Printer</th>
                        <th>Type</th>
                        <th>Kondisi</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Teknisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($laporan as $data) : ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['namaPel'] ?></td>
                            <td><?= $data['notelpPel'] ?></td>
                            <td><?= $data['namaPrinter'] ?></td>
                            <td><?= $data['type'] ?></td>
                            <td><?= $data['kondisi'] ?></td>
                            <td><?= $data['keterangan'] ?></td>
                            <td>Rp <?= number_format($data['harga'], 0, ',', '.') ?></td>
                            <td><?= $data['statusTransaksi'] ?></td>
                            <td><?= $data['namaTeknisi'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript">
        window.addEventListener("load", window.print());
    </script>
</body>

</html>