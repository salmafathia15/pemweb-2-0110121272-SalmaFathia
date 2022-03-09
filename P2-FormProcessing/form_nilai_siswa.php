<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <div class="m-5 border border-success p-4 rounded">
        <form method="POST" action="form_nilai_siswa.php">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-address-card"></i>
                    </div>
                    </div> 
                    <input id="nama_lengkap" name="nama_lengkap" placeholder="Masukkan Nama Lengkap Anda" type="text" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select" required="required">
                    <option value="">Pilih Mata Kuliah</option>
                    <option value="ddp">Dasar-Dasar Pemerograman</option>
                    <option value="basis_data">Basis Data</option>
                    <option value="backend">Back End</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uts" name="nilai_uts" placeholder="Masukan Nilai UTS Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_uas" name="nilai_uas" placeholder="Masukan Nilai UAS Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
                <div class="col-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                    <div class="input-group-text">
                        <i class="fa fa-adjust"></i>
                    </div>
                    </div> 
                    <input id="nilai_tugas" name="nilai_tugas" placeholder="Masukan Nilai Tugas/Praktikum Anda" type="number" class="form-control" required="required">
                </div>
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </form>
    </div>

    <div class="m-5 border border-primary p-4 rounded">
        <?php
            if(isset($_POST['proses'])) {
                echo 'Nama : '.$nama_lengkap = $_POST['nama_lengkap'];
                echo '<br/>Mata Kuliah : '.$matkul = $_POST['matkul'];
                echo '<br/>Nilai UTS : '.$nilai_uts = $_POST['nilai_uts'];
                echo '<br/>Nilai UAS : '.$nilai_uas = $_POST['nilai_uas'];
                echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas = $_POST['nilai_tugas'];
            }

            $nilai_akhir = $nilai_uts * 0.3 + $nilai_uas * 0.35 + $nilai_tugas * 0.35;
            $min = '55';

            if($nilai_akhir >= $min ) {
                echo '<br/> Selamat Anda Lulus';
            }else { echo '<br/> Anda Tidak lulus';}

            if ($nilai_akhir >= 85) {
                echo '<br/> Predikat : A';
            }elseif ($nilai_akhir >= 70) {
                echo '<br/> Predikat : B';
            }elseif ($nilai_akhir >= 56) {
                echo '<br/> Predikat : C';
            }elseif ($nilai_akhir >= 36) {
                echo '<br/> Predikat : D';
            }elseif ($nilai_akhir >= 0) {
                echo '<br/> Predikat : E';
            }else { echo '<br/> Nilai Tidak Valid'; }

            // switch($nilai_akhir)
        ?>
    </div>
</body>
</html>