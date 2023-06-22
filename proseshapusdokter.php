<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM data_dokter WHERE id_dokter='$ambilid' ");
 
header('location: data-dokter.php');

?>