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

                <form action="/editBarang/<?= $dataBarang['id_barang']; ?>" method="POST">
                    <?= csrf_field(); ?>
                    <div class="form-group">
                        <input type="hidden" class="form-control" name="id" id="id" value="<?= $dataBarang['id_barang']; ?>" aria-describedby="" required>
                        <label for="">Nama Barang</label>
                        <input type="text" class="form-control" name="name" id="name" value="<?= $dataBarang['name']; ?>" aria-describedby="" required>
                        <label for="">Jumlah</label>
                        <input type="number" class="form-control" name="qty" id="qty" value="<?= $dataBarang['qty']; ?>" aria-describedby="" required>
                        <label for="">Harga</label>
                        <input type="text" class="form-control" name="price" id="price" value="<?= $dataBarang['price']; ?>" aria-describedby="" required>

                    </div>
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </form>

            </div>
        </div>
    </div>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script src="<?= base_url('js/myjs.js'); ?>"></script>
</body>

</html>