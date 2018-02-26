<!DOCTYPE html>
<html lang="en">
<?php
    require_once 'inc/config.php';  
    require_once 'inc/session.php';
    require_once 'inc/header.php';
 ?>
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">


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
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Tables</li>
      </ol>
      <!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i> Biodata</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>HP</th>
                  <th>Aksi</th>
                </tr>
                 <?php
  // jalankan query
  // siapkan query untuk menampilkan seluruh data dari tabel mahasiswa
  $query = "SELECT * FROM biodata ORDER BY nama ASC";
  $result = mysqli_query($link, $query);
  
  if(!$result){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  
  //buat perulangan untuk element tabel dari data mahasiswa
  while($data = mysqli_fetch_assoc($result))
  { 
      
    echo "<tr>";
    echo "<td>$data[nim]</td>";
    echo "<td>$data[nama]</td>";
    echo "<td>$data[hp]</td>";
    echo "<td> edit | delete";
    echo "</tr>";
  }
  
  // bebaskan memory 
  mysqli_free_result($result);
  // tutup koneksi dengan database mysql
  mysqli_close($link);
  ?>
              </thead>
             
            </table>
          </div>
        </div>
<div class="card-footer small text-muted">Updated <?php echo "Tanggal: ".date("d - m - Y");  // Tanggal: 31 - 01 - 2016
?></div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
   <?php require_once 'inc/footer.php'; ?>
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
    <!-- Page level plugin JavaScript-->
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
  </div>
</body>

</html>
