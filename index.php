<?php
$page = $_GET['page'] ?? "";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExploreIndo</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
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
    <nav class="nav nav-fill  bg-dark ">
        <li class="nav-item">
            <a class="nav-link text-white" href="?page=home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="?page=pesanPaket">Pesan Paket</a>
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
                    }else{

                    
                ?>
                <h4>Destinasi Yang Tersedia</h4>
                <div class="row">
                    <div class="col-3 pb-2">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>    
                    <div class="col-3">
                        <div class="card" style="width: 18rem;">
                            <img src="https://img.freepik.com/free-vector/workplace-with-checklist_23-2147609104.jpg?size=626&ext=jpg&ga=GA1.1.1056261084.1721702025&semt=ais_hybrid" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="./js/bootstrap.min.js"></script>


</body>
</html>