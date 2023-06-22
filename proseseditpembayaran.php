<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilno 		    = $_POST['no_mr'];

$ambilnama 	        = $_POST['nama_pasien'];

$ambiljenisbayar     = $_POST['jenis_pembayaran'];

$ambilharga    = $_POST['harga_pembayaran'];

$ambilstatus   = $_POST['status_bayar'];

//update data di database sesuai no mr
$query = mysqli_query($koneksi, "UPDATE data_pembayaran
								SET nama_pasien = '$ambilnama', jenis_pembayaran = '$ambiljenisbayar', jenis_pembayaran = '$ambiljenisbayar', harga_pembayan = '$ambilharga', status_bayar = '$ambilstatus'
								WHERE no_mr ='$ambilno' ") ;

header("location: data-pembayaran.php");
}
?>