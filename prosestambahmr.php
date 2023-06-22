<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilno 		    = $_POST['no_mr'];

$ambilnama 	        = $_POST['nama_pasien'];

$ambilobservasi     = $_POST['observasi'];

$ambildiagnosis     = $_POST['diagnosis'];

$ambiltatalaksana   = $_POST['tatalaksana'];

$ambilobat          = $_POST['obat'];

$ambildata          = $_POST['data_penunjang'];

$ambildokter        = $_POST['dokter_pemeriksa'];

error_log("masuk db");
//simpan data ke database
$query = mysqli_query($koneksi,"insert into data_mr 
					(no_rm, nama_pasien, observasi, diagnosis, tatalaksana, obat, data_penunjang, dokter_pemeriksa )			
			values ('$ambilno', '$ambilnama','$ambilobservasi', '$ambildiagnosis', '$ambiltatalaksana', '$ambilobat', '$ambildata',
			'$ambildokter')");

header("location: data-mr.php");
}

?>