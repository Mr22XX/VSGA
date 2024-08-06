<?php
include "conn.php";


$vNama = "";
$vAlamat = "";
$vTujuan = "";
$vGender = "";
$vPaket = "";
$vSarapan = "";
$vKendaraan = "";
$vPenginapan = "";
$vEmail = "";
$vKontak = "";
$vTanggal = "";

    if(isset($_GET['hal'])){

        if ($_GET['hal'] == "edit") {
            $query = "SELECT * FROM pariwisata WHERE id = '$_GET[id]'";
            $hasil = mysqli_query($con, $query);
            $data = mysqli_fetch_array($hasil);
            if($data){
                $vNama = $data['nama'];
                $vAlamat = $data['alamat'];
                $vTujuan = $data['tujuan'];
                $vGender = $data['gender'];
                $vPaket = $data['paket'];
                $vTanggal = $data['tanggal'];
                $vSarapan = $data['sarapan'];
                $vKendaraan = $data['kendaraan'];
                $vPenginapan = $data['penginapan'];
                $vEmail = $data['email'];
                $vKontak = $data['kontak'];
            }
        }
    }


    if(isset($_POST['simpan'])){
        if($_GET['hal'] == "edit"){
            $query = "UPDATE pariwisata SET
                                    nama = '$_POST[nama]',
                                    alamat = '$_POST[alamat]',
                                    tujuan = '$_POST[tujuan]',
                                    gender = '$_POST[gender]',
                                    paket = '$_POST[jumlahPaket]',
                                    sarapan = '$_POST[sarapan]',
                                    kendaraan = '$_POST[kendaraan]',
                                    penginapan = '$_POST[penginapan]',
                                    tanggal = '$_POST[tanggal]',
                                    email = '$_POST[email]',
                                    kontak = '$_POST[kontak]'
                                    WHERE id = '$_GET[id]'
            ";
            $hasil = mysqli_query($con, $query);

        }

        if($hasil){
            echo "<script>
                alert('Edit data berhasil !');
                document.location='index.php?page=tabelpesanan';
            </script>";
        }
        else{
            echo "<script>
            alert('Edit data Gagal !');
            document.location='index.php?page=tabelpesanan';
        </script>";
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>


<div class="table-responsive">
        <table class="table" >
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">tujuan / Paket</th>
                    <th scope="col">gender</th>
                    <th scope="col">Sarapan</th>
                    <th scope="col">Kendaraan</th>
                    <th scope="col">Penginapan</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">email / kontak</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "conn.php";
                $query = "SELECT * FROM pariwisata";
                $hasil = mysqli_query($con, $query);
                
                while ($data = mysqli_fetch_array($hasil)) {
                    
                
                ?>
                <tr>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['tujuan'] . "  /  " . $data['paket']?></td>
                    <td><?= $data['gender']?></td>
                    <td><?= $data['sarapan']?></td>
                    <td><?= $data['kendaraan']?></td>
                    <td><?= $data['penginapan']?></td>
                    <td><?= $data['tanggal']?></td>
                    <td><?= $data['email'] . "  /  " . $data['kontak']?></td>
                    <td>
                        <div class=" d-flex">
                            <a  href="editPesanan.php?hal=edit&id=<?= $data['id'] ?>" class="btn btn-warning p-2 m-1 ">EDIT</a>
                            <a  href="index.php?page=tabelpesanan" class="btn btn-primary p-2 m-1">BACK</a>
                        </div>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<div class="container">
        
        <form action="" method="post">
            <!-- start input nama -->
            <div class="form-group">
                <label for="nama">Nama</label>
                <input id="nama" class="form-control" type="text" name="nama" value="<?= $vNama?>" required>
            </div>
            <!-- end input nama -->
            
            <!-- start input alamat -->
            <div class="form-group d-block">
                <label for="alamat">Alamat</label>
                <input id="alamat" class="form-control" type="text" name="alamat" value="<?= $vAlamat?>" required>
            </div>
            <!-- end input alamat -->
            
            <!-- start input tujuan -->
            <div class="form-group">
                <label for="tujuan">Tujuan</label>
                <select name="tujuan" id="tujuan" class="form-select w-100" value="<?= $vTujuan?>" required>
                    <option>Bali</option>
                    <option>Bengkulu</option>
                    <option>Bandung</option>
                    <option>Jogjakarta</option>
                    <option>Lombok</option>
                    <option>Labuan Bajo</option>
                    <option>Surabaya</option>
                    <option>Solo</option>
                </select>
            </div>
            <!-- end input tujuan -->
            
            <!-- start input gender -->
            <div>
                <label for="">Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check">
                        <input id="pria" class="form-check-input" type="radio" name="gender" value="pria" <?= $vGender == 'pria' ? 'checked' : '' ?> required>
                        <label for="pria" class="form-check-label mr-4">Pria</label>
                    </div>
                    <div class="form-check">
                        <input id="wanita" class="form-check-input" type="radio" name="gender" value="wanita" <?= $vGender == 'wanita' ? 'checked' : '' ?> required>
                        <label for="wanita" class="form-check-label mr-4">wanita</label>  
                    </div>
                </div>
            </div>
            <!-- end input gender -->
            
            <!-- start jumlah paket -->
            <div class="form-group">
                <label for="jumlahPaket">Jumlah Paket</label>
                <input id="jumlahPaket" class="form-control" type="number" name="jumlahPaket" value="<?= $vPaket?>" required>
            </div>
            <!-- end jumlah paket -->

            <!-- start akomodasi -->
            <div class="form-check">
            <h6 for="">Akomodasi Tambahan</h6>
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" id="sarapan" name="sarapan"  value="1" <?= $vSarapan == '1' ? 'checked' : '' ?> >
                Akomodasi tambahan Sarapan
            </div>
            </label>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="kendaraan" id="kendaraan"  value="1" <?= $vKendaraan == '1' ? 'checked' : '' ?> >
                Akomodasi tambahan kendaraan
            </label>
            </div>
            <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input" name="penginapan" id="penginapan"  value="1" >
                Akomodasi tambahan penginapan
            </label>
            </div>
            <!-- end akomodasi -->

            <!-- start tanggal berangkat -->
            <div class="form-group">
                <label for="inputTanggal">Tanggal Berangkat</label>
                <input id="tanggal" class="form-control" type="date" name="tanggal" value="<?=$vTanggal?>">
            </div>
            <!-- end tanggal berangkat -->

      <!-- input email -->
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input id="email" class="form-control" type="email" name="email" value="<?=$vEmail?>">
    </div>
    <!-- end input email -->

    <!-- input no hp -->
    <div class="form-group">
        <label for="inputNo">No HP</label>
        <input id="kontak" class="form-control" type="number" name="kontak" value="<?=$vKontak?>">
    </div>
    <!-- end input no hp -->
            
            <!-- start btn submit -->
            <button  type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
            <!-- end btn submit -->
        </div>
</body>
</html>