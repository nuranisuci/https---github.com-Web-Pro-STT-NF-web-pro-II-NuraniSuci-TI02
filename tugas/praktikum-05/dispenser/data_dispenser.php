<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dispenser</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="text-center container mr-5">
        <div class="card mt-5 ms-4" style="width: 50rem;">
            <h2 class="card-header">Data Dispenser</h2>
            <div class="card-body">
                <?php
                require_once "class_dispenser.php";
                $pembeli1 = new dispenser("Niki","Lemon Tea",9000);

                echo "Nama: ", $pembeli1->getNama(), "<br/>";
                echo "Membeli: ", $pembeli1->getMinum(), "<br/>";

                $pembeli1->setVolume(7400);

                echo "Volume Wadah Awal: " . $pembeli1->getVolume() . "<br>";
                echo $pembeli1->lemon_tea() . "<br>";
                echo $pembeli1->tambah_teh() . "<br>";
                echo $pembeli1->tambah_teh_lagi() . "<br>";
                echo "Volume Sisa Dari Wadah Teh: " . $pembeli1->getVolume() . "<br>";
                ?>
            </div>
        </div>
    </div>
</body>
</html>