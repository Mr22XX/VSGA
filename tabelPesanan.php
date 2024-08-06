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

    if(isset($_GET['hal'])){

        if($_GET['hal']=="hapus"){
            $query = "DELETE  FROM pariwisata WHERE id = '$_GET[id]'";
            $hasil = mysqli_query($con, $query);

            if($hasil){
                echo "<script>
                    alert('Hapus data berhasil !');
                    document.location='index.php?page=tabelpesanan';
                </script>";
            }
            else{
                echo "<script>
                alert('Hapus data Gagal !');
                document.location='index.php?page=tabelpesanan';
            </script>";
            }
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

    <div class="table-responsive">
        <table class="table" id="myTable">
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
                    <th scope="col">Total</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                include "conn.php";
                $query = "SELECT * FROM pariwisata";
                $hasil = mysqli_query($con, $query);
                
                while ($data = mysqli_fetch_array($hasil)) {

                    if($data['tujuan'] == "Bali"){
                        $harga = 1000000;
                    }
                    else if($data['tujuan'] == "Bengkulu"){
                        $harga = 500000;
                    }
                    else if($data['tujuan'] == "Bandung"){
                        $harga = 800000;
                    }
                    else if($data['tujuan'] == "Surabaya"){
                        $harga = 900000;
                    }
                    else if($data['tujuan'] == "Yogjakarta"){
                        $harga = 950000;
                    }
                    else if($data['tujuan'] == "Semarang"){
                        $harga = 850000;
                    }
                   

                    if($data['sarapan'] == "1"){
                        $sarapanTot = 25000;
                    }
                    else{
                        $sarapanTot = 0;

                    }

                    if($data['kendaraan'] == "1"){
                        $kendaraanTot = 75000;
                    }
                    else{
                        $kendaraanTot = 0;

                    }

                    if($data['penginapan'] == "1"){
                        $penginapanTot = 250000;
                    }
                    else{
                        $penginapanTot = 0;

                    }
                    
                    $totalCost = ($harga + $sarapanTot + $kendaraanTot + $penginapanTot) * $data['paket'];
                
                ?>
                <tr>
                    <td><?= $data['nama']?></td>
                    <td><?= $data['alamat']?></td>
                    <td><?= $data['tujuan'] . "  /  " . $data['paket']?></td>
                    <td><?= $data['gender']?></td>
                    <td><?=rupiah($sarapanTot)?></td>
                    <td><?= rupiah($kendaraanTot)?></td>
                    <td><?= rupiah($penginapanTot)?></td>
                    <td><?= $data['tanggal']?></td>
                    <td><?= $data['email'] . "  /  " . $data['kontak']?></td>
                    <td><?= rupiah($totalCost) ?></td>
                    <td>
                        <div class=" d-flex">
                            <a  href="editPesanan.php" class="btn btn-warning m-2">EDIT</a>
                            <a href="tabelPesanan.php?hal=hapus&id=<?= $data['id'] ?>" class="btn btn-danger m-2">HAPUS</a>
                        </div>
                    </td>
                </tr>

                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
  
    </body>

</html>

