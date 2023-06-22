<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilid 			= $_POST['id_dokter'];

$ambilnama 		= $_POST['nama_dokter'];

$ambildepartemen 			= $_POST['departemen'];

$ambiljadwal 		= $_POST['jadwal_dokter'];



error_log("masuk db");
//simpan data ke database
$query = mysqli_query($koneksi,"insert into data_dokter
					(id_dokter, nama_dokter, departemen, jadwal_dokter)			
			values ('$ambilid', '$ambilnama', '$ambildepartemen', '$ambiljadwal')");

header("location: data-dokter.php");
}

?>