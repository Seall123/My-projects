<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilid 		    = $_POST['id_pasien'];
$ambilno 		    = $_POST['no_rm'];
$ambilnama 	    = $_POST['nama_pasien'];
$ambiltanggal 	    = $_POST['tanggal_lahir'];
$ambiljenis	= $_POST['jenis'];
$ambilusia 	    = $_POST['usia'];
$ambilnohp 	    = $_POST['no_hp'];
$ambilkontak 	    = $_POST['kontak_darurat'];
$ambilhubungan	    = $_POST['hubungan'];
$ambilnohpdar 	    = $_POST['no_hpdar'];


//update data di database sesuai id dokter
$query = mysqli_query($koneksi, "UPDATE data_pasien
								SET 
								    no_rm      = '$ambilno', 
								    nama_pasien      = '$ambilnama', 
							    	tanggal_lahir  = '$ambiltanggal', 
							    	jenis     = '$ambiljenis'
							    	usia     = '$ambilusia'
							    	no_hp     = '$ambilnohp'
							    	kontak_darurat     = '$ambilkontak'
							    	hubungan     = '$ambilhubungan'
							    	no_hpdar     = '$ambilnohpdar'
								WHERE id_dokter ='$ambilid' ") ;

header("location: data-pasien.php");
}
?>