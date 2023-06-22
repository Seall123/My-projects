<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilid 			= $_POST['id_pasien'];

$ambilno 		= $_POST['no_rm'];
$ambilnama 		= $_POST['nama_pasien'];
$ambiltanggal 		= $_POST['tanggal_lahir'];
$ambiljenis 		= $_POST['jenis'];
$ambilusia 		= $_POST['usia'];
$ambilnohp 		= $_POST['no_hp'];
$ambilkontak 		= $_POST['kontak_darurat'];
$ambilhubungan 			= $_POST['hubungan'];

$ambilhpdar 		= $_POST['no_hpdar'];



error_log("masuk db");
//simpan data ke database
$query = mysqli_query($koneksi,"insert into data_pasien
					(id_pasien, no_rm, nama_pasien, tanggal_lahir, jenis, usia, no_hp, kontak_darurat, hubungan, no_hpdar )			
			values ('$ambilid', '$ambilno', '$ambilnama', '$ambiltanggal', '$ambiljenis', '$ambilusia', '$ambilnohp', '$ambilkontak', '$ambilhubungan', '$ambilhpdar')");

header("location: data-pasien.php");
}

?>