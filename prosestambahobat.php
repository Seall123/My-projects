<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilid 			= $_POST['id_obat'];

$ambilnama 		= $_POST['nama_obat'];

$ambiljenis 			= $_POST['jenis_obat'];

$ambilharga 		= $_POST['harga_obat'];

$ambilstok 		= $_POST['stok_obat'];

error_log("masuk db");
//simpan data ke database
$query = mysqli_query($koneksi,"insert into data_obat
					(id_obat, nama_obat, jenis_obat, harga_obat, stok_obat)			
			values ('$ambilid', '$ambilnama', '$ambiljenis', '$ambilharga', '$ambilstok')");

header("location: data-obat.php");
}

?>