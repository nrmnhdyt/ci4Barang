<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Data Barang</h3>
                <?php if (session()->getFlashdata('success')) : ?>
                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success'); ?>
                    </div>
                <?php elseif (session()->getFlashdata('failed')) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= session()->getFlashdata('failed'); ?>
                    </div>
                <?php endif; ?>

                <form action="/addBarang" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Nama Barang</label>
                        <input type="text" class="form-control" name="name" id="name" aria-describedby="" required autofocus>
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" name="qty" id="qty" aria-describedby="" required>
                        <label for="">Harga</label>
                        <input type="text" class="form-control" name="price" id="price" aria-describedby="" required>

                    </div>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </form>

                <hr class="mt-5">
                <h3>Daftar Barang</h3>
                <table class="table table-bordered mb-5">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Barang</th>
                            <th scope="col">Jumlah</th>
                            <th scope="col">Harga</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php $i = 1;
                        foreach ($dataBarang as $brg) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $brg['name']; ?></td>
                                <td><?= $brg['qty']; ?></td>
                                <td><?= $brg['price']; ?></td>
                                <td>
                                    <a href="editBarang/<?= $brg['id_barang'] ?>" class="badge badge-warning">ubah</a>
                                    <form action="/deleteBarang/<?= $brg['id_barang']; ?>" method="POST">
                                        <?= csrf_field(); ?>
                                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $brg['id_barang']; ?>" aria-describedby="">
                                        <input type="hidden" class="form-control" name="name" id="name" value="<?= $brg['name']; ?>" aria-describedby="">
                                        <button type="submit" class="badge badge-danger">hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/myjs.js'); ?>"></script>
</body>

</html>