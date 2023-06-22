<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilno 			= $_POST['no_rm'];

$ambilnama 		= $_POST['nama_pasien'];

$ambiljenisbayar 		= $_POST['jenis_pembayaran'];

$ambilharga 		= $_POST['harga_pembayaran'];

$ambilstatus		= $_POST['status_bayar'];


error_log("masuk db");
//simpan data ke database
$query = mysqli_query($koneksi,"insert into data_pembayaran
					(no_rm, nama_pasien, jenis_pembayaran, harga_pembayaran, status_bayar )			
			values ('$ambilno', '$ambilnama', '$ambiljenisbayar', '$ambilharga', '$ambilstatus')");

header("location: data-pembayaran.php");
}

?>