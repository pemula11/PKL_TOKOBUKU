<?php
include '../koneksi.php';
if(isset($_POST['lanjut'])) {

$pesawat = $_POST['pesawat'];
$maskapai = $_POST['maskapai'];
$kode = $_POST['kelas'];
 

   $query = "INSERT INTO tbl_pesawat VALUES ('', '$pesawat', '$maskapai', '$kode')";
            $input = mysqli_query($dbconnect, $query);

header("location:../menu.php?menu=datapesawat");
}
?>