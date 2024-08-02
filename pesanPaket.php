<div class="container-fluid">
      <?php
      include "conn.php";

      function input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }


      if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = input($_POST["nama"]);
        $alamat = input($_POST["alamat"]);
        $tujuan = input($_POST["tujuan"]);
        $gender = input($_POST["gender"]);
        $paket = input($_POST["jumlahPaket"]);
        
        
        
        
        $sql = "INSERT INTO testdb (nama, alamat, tujuan, gender, paket) VALUES ('$nama', '$alamat', '$tujuan', '$gender', $paket)";
        
        $hasil = $con->query($sql);
        
        if($hasil){
          header("Location:index.php");
        }
        else{
          echo "<div class='alert alert-danger'> Data Gagal Disimpan </div>";
        }
      }
      ?>
  <h4>Pesan Paket</h4>
  <form action="" method="post">
    <!-- start input nama -->
    <div class="form-group">
      <label for="nama">Nama</label>
      <input id="nama" class="form-control" type="text" name="nama" required>
    </div>
    <!-- end input nama -->

    <!-- start input alamat -->
    <div class="form-group d-block">
      <label for="alamat">Alamat</label>
      <textarea type="text" id="alamat" name="alamat" class="form-control" required></textarea>
    </div>
    <!-- end input alamat -->

    <!-- start input tujuan -->
    <div class="form-group">
      <label for="tujuan">Tujuan</label>
      <select name="tujuan" id="tujuan" class="form-select w-100" required>
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
      <input id="jumlahPaket" class="form-control" type="number" name="jumlahPaket" required>
    </div>
    <!-- end jumlah paket -->
     
    <!-- start btn submit -->
      <button type="submit" class="btn btn-success">Kirim</button>
    <!-- end btn submit -->

  </form>
</div>