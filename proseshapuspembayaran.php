<?php
include('koneksi.php');

$ambilid = $_GET['id'];
 
$query = mysqli_query($koneksi, 
	"DELETE FROM data_pembayaran WHERE id_pembayaran='$ambilid' ");
 
header('location: data-pembayaran.php');

?>