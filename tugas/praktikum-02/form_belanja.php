<?php
include_once 'header.php';
include_once 'sidebar.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Halaman Utama Project 1</h1>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- Default box -->
                    <div class="card-body">
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Form Belanja Online</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 15%;
            float: right;
            margin-right: 10vh;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        h2 {
            margin-top: 4vh;
            margin-left: 4vh;
        }

        .isi {
            margin-left: 10vh;
        }

        .php {
            margin-left: 11vh;
            margin-top: 3vh;
        }
    </style>
</head>

<body>
    <h2>Belanja Online</h2>
    <hr>
    <table>
        <tr>
            <th>Daftar Harga</th>
        </tr>
        <tr>
            <td>TV : 4.200.000</td>
        </tr>
        <tr>
            <td>Kulkas : 3.100.000</td>
        </tr>
        <tr>
            <td>Mesin Cuci : 3.800.000</td>
        </tr>
        <tr>
            <td>Harga Dapat Berubah Setiap Saat</td>
        </tr>
    </table>
    <div class="isi">
        <form method="POST" action="form_belanja.php">
            <div class="form-group row">
                <label for="customer" class="col-2 col-form-label">Customer</label>
                <div class="col-4">
                    <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-2">Pilih Produk</label>
                <div class="col-4">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV">
                        <label for="produk_0" class="custom-control-label">TV</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas">
                        <label for="produk_1" class="custom-control-label">Kulkas</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci">
                        <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-2 col-form-label">Jumlah</label>
                <div class="col-4">
                    <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <div class="offset-2 col-4">
                    <button name="hitung" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
    </div>
    <hr>
    <div class="php">
    <?php
    if (isset($_POST['hitung'])) {
        $customer = $_POST['customer'];
        $produk = $_POST['produk'];
        $jumlah = $_POST['jumlah'];

        echo "<br>Nama Customer : $customer";
        echo "<br>Produk : $produk";
        echo "<br>Jumlah Beli : $jumlah";

        $kulkas = 3100000 * intval($jumlah);
        $mesincuci = 3800000 * intval($jumlah);
        $TV = 4200000 * intval($jumlah);

        switch ($produk) {
            case 'KULKAS':
                echo "<br>" . "Total Belanja : " . number_format($kulkas, 0, ',', '.');
                break;
            case 'TV':
                echo "<br>" . "Total Belanja : " . number_format($TV, 0, ',', '.');
                break;
            default:
                echo "<br>" . "Total Belanja : " . number_format($mesincuci, 0, ',', '.');
                break;
        }
    }
    ?>
    </div>
</body>
<!-- /.card-body -->
</div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </section>

</div>

</html>
<?php
include_once 'footer.php';
?>