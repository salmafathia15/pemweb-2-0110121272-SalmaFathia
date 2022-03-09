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
        <form method="GET" action="form_nilai_siswa.php" autocomplete="off">
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
                    <option value="ddp">Dasar-Dasar Pemograman</option>
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
                <button name="submit" type="submit" class="btn btn-primary">Proses</button>
                </div>
            </div>
        </form>
    </div>

    <div class="m-5 border border-primary p-4 rounded">
    <?php
            if(isset($_GET['submit'])){
                //variable
                $nama_lengkap = $_GET['nama_lengkap'];
                $matkul = $_GET['matkul'];
                $nilai_uts = $_GET['nilai_uts'];
                $nilai_uas = $_GET['nilai_uas'];
                $nilai_tugas = $_GET['nilai_tugas'];


                //if else nama matkul
                //if($_GET['matkul'] == 'ddp'){
                //    $nama_matkul = "Dasar Dasar Pemrograman";
                //}elseif($_GET['matkul'] == 'basis_data'){
                //    $nama_matkul = "Basis Data";
                //}elseif($_GET['matkul'] == 'backend'){
                //    $nama_matkul = "Back End";
                //}

                //swicth case nama matkul
                switch($matkul){
                    case 'ddp': $nama_matkul = 'Dasar Dasar Pemerograman'; break;
                    case 'basis_data': $nama_matkul = 'Basis Data'; break;
                    case 'backend': $nama_matkul = 'Back End'; break;
                    default: $nama_matkul = '';
                }
                //if else grade
                $nilai_siswa = $_GET['nilai_siswa'];
                if($nilai_siswa >= 85 && $nilai_siswa <= 100){
                    $grade = 'A';
                }elseif($nilai_siswa >= 70 && $nilai_siswa <=84){
                    $grade = 'B';
                }elseif($nilai_siswa >= 56 && $nilai_siswa <=69){
                    $grade = 'C';
                }elseif($nilai_siswa >= 36 && $nilai_siswa <=55){
                    $grade = 'D';
                }elseif($nilai_siswa >= 0 && $nilai_siswa <=35){
                    $grade = 'E';
                }else{
                    $grade = 'I';
                }

                echo 'Nama : ' .$nama_lengkap.'<br>';
                echo 'Matkul : ' .$matkul.'<br>';
                echo 'Nilai UTS : ' .$nilai_uts.'<br>';
                echo 'Nilai UAS : ' .$nilai_uas.'<br>';
                echo 'Nilai Tugas : ' .$nilai_tugas.'<br>';
                echo 'Grade : ' .$grade.'<br>';
            }
        ?>
    </div>
</body>
</html>