<?php
  // buat koneksi dengan database mysql
  $koneksi = mysqli_connect("localhost","root","","db_kampus");
  
  //periksa koneksi, tampilkan pesan kesalahan jika gagal
  if(!$koneksi){
      die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
           " - ".mysqli_connect_error());
  }
  
  // buat data seolah-olah dari form
 
  $nim = htmlentities(strip_tags(trim($_POST["nim"])));
  $nama = htmlentities(strip_tags(trim($_POST["nama"])));
  $tempat_lahir = htmlentities(strip_tags(trim($_POST["tempat_lahir"])));
  $tanggal_lahir = htmlentities(strip_tags(trim($_POST["tanggal_lahir"])));
  $alamat = htmlentities(strip_tags(trim($_POST["alamat"])));
  $agama = htmlentities(strip_tags(trim($_POST["agama"])));
  $jenis_kelamin = htmlentities(strip_tags(trim($_POST["jenis_kelamin"])));
  $nama_ayah = htmlentities(strip_tags(trim($_POST["nama_ayah"])));
  $nama_ibu = htmlentities(strip_tags(trim($_POST["nama_ibu"])));
  $pekerjaan_ayah = htmlentities(strip_tags(trim($_POST["pekerjaan_ayah"])));
  $pekerjaan_ibu = htmlentities(strip_tags(trim($_POST["pekerjaan_ibu"])));
  $tinggal_sekarang = htmlentities(strip_tags(trim($_POST["tinggal_sekarang"])));
  $hp = htmlentities(strip_tags(trim($_POST["hp"])));
  $foto = $_FILES['foto']['name'];
  $tmp = $_FILES['foto']['tmp_name'];
  
 
// Rename nama fotonya dengan menambahkan tanggal dan jam upload
$fotobaru = date('dmYHis').$foto;

// Proses upload
if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO biodata VALUES('".$nim."', '".$nama."', '".$tempat_lahir."', '".$tanggal_lahir."', '".$alamat."','".$agama."','".$jenis_kelamin."','".$nama_ayah."','".$nama_ibu."','".$pekerjaan_ayah."','".$pekerjaan_ibu."','".$tinggal_sekarang."','".$hp."', '".$fotobaru."')";
  $sql = mysqli_query($koneksi, $query); // Eksekusi/ Jalankan query dari variabel $query

  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: lihat_biodata.php"); // Redirect ke halaman index.php

  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='tambah_biodata.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='tambah_biodata.php'>Kembali Ke Form</a>";
}
?>