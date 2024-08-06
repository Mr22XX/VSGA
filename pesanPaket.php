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
        $sarapan = input($_POST["sarapan"]);
        $kendaraan = input($_POST["kendaraan"]);
        $penginapan = input($_POST["penginapan"]);
        $tanggal = input($_POST["tanggal"]);
        $email = input($_POST["email"]);
        $kontak = input($_POST["kontak"]);
        
        
        
        
        $query = "INSERT INTO pariwisata (nama, alamat, tujuan, gender, paket, sarapan, kendaraan, penginapan, tanggal, email, kontak)
         VALUES ('$nama', '$alamat', '$tujuan', '$gender', $paket, '$sarapan', '$kendaraan', '$penginapan', '$tanggal', '$email', '$kontak')";
        
        $hasil = mysqli_query($con, $query);
        
        if($hasil){
          header("Location:index.php?page=tabelpesanan");
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
      <input id="nama" class="form-control" type="text" name="nama"  required>
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
        <option>Yogjakarta</option>
        <option>Surabaya</option>
        <option>Semarang</option>
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

     <!-- start akomodasi -->
     <div class="form-check">
      <h6 for="">Akomodasi Tambahan</h6>
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" id="sarapan" name="sarapan"  value="1" >
        Akomodasi tambahan Sarapan
    </div>
      </label>
      <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="kendaraan" id="kendaraan" value="1" >
        Akomodasi tambahan kendaraan
      </label>
      </div>
      <div class="form-check">
      <label class="form-check-label">
        <input type="checkbox" class="form-check-input" name="penginapan" id="penginapan" value="1" >
        Akomodasi tambahan penginapan
      </label>
    </div>
     <!-- end akomodasi -->

     <!-- start tanggal berangkat -->
     <div class="form-group">
        <label for="inputTanggal">Tanggal Berangkat</label>
        <input id="tanggal" class="form-control" type="date" name="tanggal">
    </div>
     <!-- end tanggal berangkat -->

      <!-- input email -->
    <div class="form-group">
        <label for="inputEmail">Email</label>
        <input id="email" class="form-control" type="email" name="email">
    </div>
    <!-- end input email -->

    <!-- input no hp -->
    <div class="form-group">
        <label for="inputNo">No HP</label>
        <input id="kontak" class="form-control" type="number" name="kontak">
    </div>
    <!-- end input no hp -->
     
    <!-- start btn submit -->
      <button onclick="showModal()" type="button" class="btn btn-success">Kirim</button>
    <!-- end btn submit -->

    <!-- start modal -->
    <div class="modal" id="mymodal" tabindex="-1">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Pesanan</h5>
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
            <h5>Tanggal Pesanan :</h5>
            <p id="ketTanggal"></p>
            <h5>Email :</h5>
            <p id="ketEmail"></p>
            <h5>No HP :</h5>
            <p id="ketHp"></p>
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

<!-- js untuk menampilkan modal atau konfirmasi setelah data diinputkan -->
<script>
  const showModal = () =>{
    const nama = document.getElementById("nama").value
    const alamat  = document.getElementById("alamat").value;
    const tujuan = document.getElementById("tujuan").value
    const pria =document.getElementById("pria")
    const wanita =document.getElementById("wanita")
    const paket =document.getElementById("jumlahPaket").value
    const tanggal =document.getElementById("tanggal").value
    const email =document.getElementById("email").value
    const kontak =document.getElementById("kontak").value
    
    if(nama === '' || alamat === '' || tujuan === ''
      || pria === '' || wanita === '' || paket === ''
      || tanggal === ''|| email === '' || kontak === '' ){
        alert('Semua field harus diisi!');
      return;
    }

      const ketNama = document.getElementById("ketNama")
      ketNama.innerText = nama;      
      
      const ketAlamat = document.getElementById("ketAlamat")
      ketAlamat.innerText =alamat;

      const ketTujuan = document.getElementById("ketTujuan")
      ketTujuan.innerText =tujuan

      const ketGender = document.getElementById("ketGender")
      if(pria.checked){
        ketGender.innerText = pria.value;
      }
      else if(wanita.checked){
        ketGender.innerText =wanita.value;
      }

      const ketPaket = document.getElementById("ketPaket")
      ketPaket.innerText = paket;

      const ketTanggal = document.getElementById("ketTanggal")
      ketTanggal.innerText = tanggal;

      const ketEmail = document.getElementById("ketEmail")
      ketEmail.innerText = email;

      const ketHp = document.getElementById("ketHp")
      ketHp.innerText = kontak;


      const myModal = new bootstrap.Modal(document.getElementById('mymodal'));
      myModal.show();

      
  }

  const back = () =>{
    window.location.replace("index.php?page=tabelpesanan");
  }
</script>
