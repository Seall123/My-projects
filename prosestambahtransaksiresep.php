<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$ambilno 			= $_POST['no_rm'];

$ambilnama 		    = $_POST['nama_pasien'];

$ambilnama 			= $_POST['nama_obat'];

$ambildokter 		= $_POST['dokter_pemberi'];

$ambiltanggal 		= $_POST['tanggal_pemberian'];

$ambildosis 		= $_POST['dosis'];

$ambiljumlah 		= $_POST['jumlah_obat'];

error_log("masuk db");
//simpan data ke database
$query = mysqli_query($koneksi,"insert into data_resep
					(no_rm, nama_pasien, nama_obat, dokter_pemberi, tanggal_pemberian, dosis, jumlah_obat )			
			values ('$ambilno', '$ambilnama', '$ambilnama', '$ambildokter', '$ambiltanggal', '$ambildosis', '$ambiljumlah')");

header("location: datatransaksiresep.php");
}

?>