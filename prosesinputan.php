<!-- get data dari form -->
 <?php
 include 'config.php';
  
 if ($_SERVER['REQUEST_METHOD'] == "POST") {
     $nama = $_POST["nama"];
     $kelas = $_POST["kelas"];
     $nohp = $_POST["nohp"];
     $alamat = $_POST["alamat"];

     // insert data ke database
     $sql = "INSERT INTO tbidentitas (nama, kelas, nohp, alamat) VALUES ('$nama', '$kelas', '$nohp' , '$alamat')";
     $result = mysqli_query( $koneksi,  $sql);

     // tutup koneksi 
     mysql_close($koneksi);
     // Resicert kehalaman index.php
     header("Location: index.php");
     exit();

 }
 ?>