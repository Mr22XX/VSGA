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
      <button onclick="showModal()" type="button" class="btn btn-success">Kirim</button>
    <!-- end btn submit -->

    <!-- start modal -->
    <div class="modal" id="mymodal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Pesananan</h5>
      </div>
      <div class="modal-body">
        <h5>Nama :</h5>
        <p id="ketNama"></p>
        <h5>Alamat :</h5>
        <p id="ketAlamat"></p>
        <h5>Tujuan :</h5>
        <p id="ketTujuan"></p>
        <h5>Jenis Kelamin :</h5>
        <p id="ketGender"></p>
        <h5>Jumlah Paket :</h5>
        <p id="ketPaket"></p>
        <h5 style="color: red;">Total :</h5>
        <p id="total"></p>
      </div>
      <div class="modal-footer">
        <button onclick="back()" type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Back</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
      </div>
    </div>
  </div>
</div>
    <!-- end modal -->

  </form>
</div>

<script>
  const showModal = () =>{
    const nama = document.getElementById("nama").value
    const alamat  = document.getElementById("alamat").value;
    const tujuan = document.getElementById("tujuan").value
    const pria =document.getElementById("pria")
    const wanita =document.getElementById("wanita")
    const paket =document.getElementById("jumlahPaket").value
    const total =document.getElementById("total");
    
    if(nama === '' || alamat === ''){
      return;
    }

      const ketNama =document.getElementById("ketNama")
      ketNama.innerText = nama;      
      
      const ketAlamat =document.getElementById("ketAlamat")
      ketAlamat.innerText =alamat;

      const ketTujuan =document.getElementById("ketTujuan")
      ketTujuan.innerText =tujuan

      const ketGender =document.getElementById("ketGender")
      if(pria.checked){
        ketGender.innerText = pria.value;
      }
      else if(wanita.checked){
        ketGender.innerText =wanita.value;
      }

      const ketPaket =document.getElementById("ketPaket")
      ketPaket.innerText =paket;

      total.innerText = "Rp. "  + paket * 500000 

      const myModal = new bootstrap.Modal(document.getElementById('mymodal'));
      myModal.show();

      
  }

  const back = () =>{
    window.location.href = "pesanPaket.php";
    window.location.reload();
  }
</script>
