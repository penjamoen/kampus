<!DOCTYPE html>
<html lang="en">
<?php
mysql_connect("localhost","root","");
mysql_select_db("db_kampus");
 ?>
<?php
    require_once 'inc/session.php';
    require_once 'inc/header.php';
 ?>
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <div class="collapse navbar-collapse" id="navbarResponsive">


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
                  <th>No</th>
                  <th>Nim</th>
                  <th>Nama</th>
                  <th>HP</th>
                  <th>Aksi</th>
                </tr>
               
  <?php 
  $halaman = 10;
  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
  $result = mysql_query("SELECT * FROM biodata");
  $total = mysql_num_rows($result);
  $pages = ceil($total/$halaman);            
  $query = mysql_query("select * from biodata LIMIT $mulai, $halaman")or die(mysql_error);
  $no =$mulai+1;


  while ($data = mysql_fetch_assoc($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>                  
      <td><?php echo $data['nim']; ?></td>  
      <td><?php echo $data['nama']; ?></td>              
      <td><?php echo $data['hp']; ?></td>              
      <td><?php echo "edit | hapus"; ?></td>              

                  
    </tr>

    <?php               
  } 
  ?>
              </thead>
             
            </table>
             <div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
  <?php } ?>
</div>
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
