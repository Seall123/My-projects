<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM data_obat WHERE id_obat='$ambilid' ");
 
header('location: data-obat.php');

?>