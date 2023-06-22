<?php
include('koneksi.php');

$ambilno = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM data_resep WHERE no_rm ='$ambilno' ");
 
header('location: datatransaksiresep.php');

?>