<?php
include "conn.php";

$vNama = "";
$vAlamat = "";
$vTujuan = "";
$vGender = "";
$vPaket = "";

    if(isset($_GET['hal'])){

        if ($_GET['hal'] == "edit") {
            $query = "SELECT * FROM testdb WHERE nama = '$_GET[nama]'";
            $hasil = $con->query($query);
            $data = mysqli_fetch_array($hasil);
            if($data){
                $vNama = $data['nama'];
                $vAlamat = $data['alamat'];
                $vTujuan = $data['tujuan'];
                $vGender = $data['gender'];
                $vPaket = $data['paket'];
            }
        }else if($_GET['hal']=="hapus"){
            $query = "DELETE  FROM testdb WHERE nama = '$_GET[nama]'";
            $hasil = $con->query($query);

            if($hasil){
                echo "<script>
                    alert('Hapus data berhasil !');
                    document.location='tabelPesanan.php';
                </script>";
            }
            else{
                echo "<script>
                alert('Hapus data Gagal !');
                document.location='tabelPesanan.php';
            </script>";
            }
        }
    }

    if(isset($_POST['simpan'])){
        if($_GET['hal'] == "edit"){
            $query = "UPDATE testdb SET
                                    nama = '$_POST[nama]',
                                    alamat = '$_POST[alamat]',
                                    tujuan = '$_POST[tujuan]',
                                    gender = '$_POST[gender]',
                                    paket = '$_POST[jumlahPaket]'
                                    WHERE nama = '$_GET[nama]'
            ";
            $hasil = $con->query($query);
        }

        if($hasil){
            echo "<script>
                alert('Edit data berhasil !');
                document.location='tabelPesanan.php';
            </script>";
        }
        else{
            echo "<script>
            alert('Edit data Gagal !');
            document.location='tabelPesanan.php';
        </script>";
        }
    }

    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pesanan</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body>
    
    <nav class="navbar text-white bg-primary">
        <span class="navbar-brand mb-0 h1">DASHBOARD ADMIN</span>
        <button class="btn btn-danger">Logout</button>
    </nav>


    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">tujuan</th>
                <th scope="col">gender</th>
                <th scope="col">Jumlah Paket</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
         <tbody>
            <?php 
            include "conn.php";
            $sql = "SELECT * FROM testdb";
            $hasil = $con->query($sql);
            
            while ($data = mysqli_fetch_array($hasil)) {
                
            
            ?>
            <tr>
                <td><?= $data['nama']?></td>
                <td><?= $data['alamat']?></td>
                <td><?= $data['tujuan']?></td>
                <td><?= $data['gender']?></td>
                <td><?= $data['paket']?></td>
                <td>
                    <a href="tabelPesanan.php?hal=edit&nama=<?= $data['nama'] ?>" class="btn btn-warning">EDIT</a>
                    <a href="tabelPesanan.php?hal=hapus&nama=<?= $data['nama'] ?>" class="btn btn-danger">HAPUS</a>
                </td>
            </tr>

            <?php
            }
            ?>
        </tbody>
    </table>

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
                        <input id="pria" class="form-check-input" type="radio" name="gender" value="pria" required>
                        <label for="pria" class="form-check-label mr-4">Pria</label>
                    </div>
                    <div class="form-check">
                        <input id="wanita" class="form-check-input" type="radio" name="gender" value="wanita" required>
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
            
            <!-- start btn submit -->
            <button  type="submit" name="simpan" class="btn btn-primary">SIMPAN</button>
            <!-- end btn submit -->
        </div>
            
    </body>
</html>

