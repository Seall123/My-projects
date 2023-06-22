<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilno 		    = $_POST['no_rm'];

$ambilnama 	        = $_POST['nama_pasien'];

$ambilobservasi     = $_POST['observasi'];

$ambildiagnosis     = $_POST['diagnosis'];

$ambiltatalaksana   = $_POST['tatalaksana'];

$ambilobat          = $_POST['obat'];

$ambildata          = $_POST['data_penunjang'];

$ambildokter        = $_POST['dokter_pemeriksa'];

//update data di database sesuai no mr
$query = mysqli_query($koneksi, "UPDATE data_mr
								SET nama_pasien = '$ambilnama', observasi = '$ambilobservasi', diagnosis = '$ambildiagnosis', tatalaksana = '$ambiltatalaksana', obat = '$ambilobat', data_penunjang = '$ambildata', dokter_pemeriksa = '$ambildokter'
								WHERE no_rm ='$ambilno' ") ;

header("location: data-mr.php");
}
?>