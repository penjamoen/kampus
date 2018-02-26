<?php   //file sessi
        include 'inc/session.php';
       //header website-->
        include 'inc/header.php';
 ?>
    <div class="collapse navbar-collapse" id="navbarResponsive">

 <!DOCTYPE html>
<html lang="en">
 
      <!-- menu di kiri halaman admin-->
      <?php require_once 'inc/left_sidebar.php';
            //menu di atas halaman admin
            require_once 'inc/top_sidebar.php';
       ?>
       
    </div>
  </nav>
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Input Biodata</li>
      </ol>
      <div class="row">
        <div class="col-12">
           <form action="simpan_biodata.php" method="post" enctype="multipart/form-data">
          <div class="form-group">
            <div class="form-control">
            <div class="form-row">
             <div class="col-md-6">
             <label for="InputNim">NIM/NPM</label>
             <input class="form-control" name="nim" type="text" required="yes" maxlength="20">
             </div>
           <div class="col-md-6">
           <label for="InputNamaLengkap">Nama Lengkap</label>
           <input class="form-control" name="nama" type="text" required="yes" maxlength="50">
           </div>
              <div class="col-md-6">
                <label for="InputTempatLahir">Tempat Lahir</label>
                <input class="form-control" name="tempat_lahir" type="text" required="yes" maxlength="20">
              </div>    
                <div class="col-md-6">
                <label for="InputTanggalLahir">Tanggal Lahir</label>
                <input class="form-control" name="tanggal_lahir" type="text" required="yes" maxlength="20" placeholder="1990-02-28">
              </div>
          </div>
          <div class="form-group">
            <label for="InputAlamat">Alamat</label>
            <input class="form-control" name="alamat" type="textarea" required="yes" maxlength="300">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="InputAgama">Agama</label> 
                <input class="form-control" name="agama" type="textarea" required="yes" maxlength="20">
              </div>
                <div class="col-md-6">
                <label for="InputJenisKelamin">Jenis Kelamin</label>
                <input class="form-control" name="jenis_kelamin" type="text" required="yes" maxlength="20">
              </div>
               <div class="col-md-6">
                <label for="InputNamaAyah">Nama Ayah</label>
                <input class="form-control" name="nama_ayah" type="text" required="yes" maxlength="30">
              </div>
               <div class="col-md-6">
                <label for="InputNamaIbu">Nama Ibu Kandung</label>
                <input class="form-control" name="nama_ibu" type="text" required="yes" maxlength="30">
              </div>
               <div class="col-md-6">
                <label for="InputPekerjaanAyah">Pekerjaan Ayah</label>
                <input class="form-control" name="pekerjaan_ayah" type="text" required="yes" maxlength="30">
              </div>
               <div class="col-md-6">
                <label for="InputPekerjaanIbu">Pekerjaan Ibu</label>
                <input class="form-control" name="pekerjaan_ibu" type="text" required="yes" maxlength="30">
              </div>
               <div class="col-md-6">
                <label for="InputTempatTinggal">Tempat Tinggal Sekarang</label>
                <input class="form-control" name="tinggal_sekarang" type="text" required="yes" maxlength="300">
              </div>
               <div class="col-md-6">
                <label for="InputHP">Nomor HP</label>
                <input class="form-control" name="hp" type="text" required="yes" max="30">
              </div>
                <div class="col-md-6">
                <label for="InputGambar">Masukan Gambar</label>
                <input class="form-control" name="foto" type="file" >
              </div>
             </div>
           </div>
                <input type="submit" class="btn btn-block btn-custom-green" value="simpan" accept="image/*"/>
        </form>
        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <?php include 'inc/footer.php'; ?>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
       <?php require_once 'inc/logout_modal.php'; ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
  </div>
</body>

</html>
