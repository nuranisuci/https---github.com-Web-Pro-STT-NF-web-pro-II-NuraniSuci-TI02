<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai POST</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container card">
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Sistem Penilaian</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>Form Nilai siswa</p>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <form method="POST" action="form_nilai_post.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                        <div class="col-8">
                            <select id="matkul" name="matkul" class="custom-select">
                                <option value="Dasar-Dasar Pemograman">Dasar-Dasar Pemograman</option>
                                <option value="Basis Data">Basis Data I</option>
                                <option value="Pemograman Web">Pemograman Web</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                        <div class="col-8">
                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                        <div class="col-8">
                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                        <div class="col-8">
                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="proses" type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                </form>
                <?php
                $proses = isset ($_POST['proses']);
                $nama_lengkap = isset ($_POST['nama']);
                $mata_kuliah = isset ($_POST['matkul']);
                $nilai_uts = isset ($_POST['nilai_uts']);
                $nilai_uas = isset ($_POST['nilai_uas']);
                $nilai_tugas = isset ($_POST['nilai_tugas']);

                echo "Nama : $nama_lengkap";
                echo "<br/>Mata Kuliah : $mata_kuliah";
                echo "<br/>Nilai UTS : $nilai_uts";
                echo "<br/>Nilai UAS : $nilai_uas";
                echo "<br/>Nilai Tugas : $nilai_tugas";
                ?>
            </div>
        </div>
        <div class="row">
            <div class="col-12 bg-light pt-3">
                <p>Developed by @nuranisuci ©2022</p>
            </div>
        </div>
    </div>
</body>

</html>