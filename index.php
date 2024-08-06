<?php
$page = $_GET['page'] ?? "";

function rupiah($angka){
    $hasil = "Rp ". number_format($angka, "2", "," , ".");
    return $hasil;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreIndo</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/DataTables/datatables.min.css">
</head>
<body>
    <!-- start header -->
    <div class="d-flex justify-content-center w-100 position-relative">
        <img src="./assets/Pariw.png" alt="header" class="w-100" style="height: 200px; background-position: center; object-fit: cover;">
        <div class="text-white position-absolute pt-5 text-center ">
            <h2>ExploreIndo</h2>
            <p>"Menemukan Keajaiban Nusantara"</p>
        </div>
    </div>
    <!-- end header -->
        
    <!-- start navbar -->
    <nav class="  bg-dark d-flex justify-content-center align-items-center ">
            <li class="nav-item d-flex">
            <a class="nav-link text-white" href="?page=home">Home</a>
            <a class="nav-link text-white" href="?page=pesanPaket">Pesan Paket</a>
            <a class="nav-link text-white" href="?page=tabelpesanan">Lihat Pesanan</a>
        </li>
    </nav>
    <!-- end navbar -->
        
    <!-- start content -->
    <div class="container-fluid ">
        <div class="row p-2 ">
            <div class="col-8">
                <?php
                    if($page == "pesanPaket"){
                        require "pesanPaket.php";
                    }
                    else if($page == "tabelpesanan"){
                        require "tabelPesanan.php";
                    }
                    
                    else{

                    
                ?>
                <h4>Destinasi Yang Tersedia</h4>
                <div class="row">
                    <div class="col-4 pb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/bali.jpg" class="card-img-top" alt="..." height="200em">
                            <div class="card-body">
                                <h5 class="card-title">Bali</h5>
                                <p class="card-text text-danger">Harga : Rp. 1.000.000</p>
                                <a href="?page=pesanPaket" class="btn btn-primary">Order Disini</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/bkl.jpg" class="card-img-top" alt="..." height="200em">
                            <div class="card-body">
                                <h5 class="card-title">Bengkulu</h5>
                                <p class="card-text text-danger">Harga : Rp. 500.000</p>
                                <a href="?page=pesanPaket" class="btn btn-primary">Order Disini</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/bdg.jpg" class="card-img-top" alt="..." height="200em">
                            <div class="card-body">
                                <h5 class="card-title">Bandung</h5>
                                <p class="card-text text-danger">Harga : Rp. 800.000</p>
                                <a href="?page=pesanPaket" class="btn btn-primary">Order Disini</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/sby.jpg" class="card-img-top" alt="..." height="200em">
                            <div class="card-body">
                                <h5 class="card-title">Surabaya</h5>
                                <p class="card-text text-danger">Harga : Rp. 900.000</p>
                                <a href="?page=pesanPaket" class="btn btn-primary">Order Disini</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-4">
                        <div class="card" style="width: 18rem;">
                            <img src="./assets/jgj.jpeg" class="card-img-top" alt="..." height="200em">
                            <div class="card-body">
                                <h5 class="card-title">Yogyakarta</h5>
                                <p class="card-text text-danger">Harga : Rp. 950.000</p>
                                <a href="?page=pesanPaket" class="btn btn-primary">Order Disini</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-4">
                        <div class="card" style="width: 18rem;" height="200em">
                            <img src="./assets/smg.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Semarang</h5>
                                <p class="card-text text-danger">Harga : Rp. 850.000</p>
                                <a href="?page=pesanPaket" class="btn btn-primary">Order Disini</a>
                            </div>
                        </div>
                    </div>    
                </div>
                    <?php
                    }
                    ?>
            </div>

            <div class="col-4">
                <iframe width="100%" height="280" src="https://www.youtube.com/embed/TAU4jOcBx64?si=mwGQ9Awuf2CXu48w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <!-- end content -->

    <!-- start footer -->
    <footer class="position-absolute bottom-0 w-100">
         <div class="card-footer  bg-dark text-white text-center">
             VSGA-Rayhan Muhammad A
        </div>
    </footer>
    <!-- end footer -->
<!-- js untuk modal -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

<!-- js untuk datatables -->
<script src="./assets/DataTables/datatables.min.js"></script>

<!-- js untuk bootstrap -->
<script src="./js/bootstrap.min.js"></script>

<script>
    new DataTable('#myTable', {
    layout: {
        topStart: {
            buttons: [
                {
                    extend : 'copy',
                    className : 'btn btn-primary'

                }, 
                {
                    extend: 'excel',
                    className : 'btn btn-primary'

                },
                {
                    extend : 'pdfHtml5',
                    orientation : 'landscape',
                    className : 'btn btn-primary'
                }
            ]
        }
    }
});
</script>


</body>
</html>