<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM data_pasien WHERE id_pasien ='$ambilid' ");
 
header('location: data-pasien.php');

?>