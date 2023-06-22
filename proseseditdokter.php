<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilid 		    = $_POST['id_dokter'];

$ambilnama 	    = $_POST['nama_dokter'];

$ambildepartemen	= $_POST['departemen'];

$ambiljadwal	    = $_POST['jadwal_dokter'];


//update data di database sesuai id dokter
$query = mysqli_query($koneksi, "UPDATE data_dokter 
								SET 
								    nama_dokter      = '$ambilnama', 
							    	departemen  = '$ambildepartemen', 
							    	jadwal_dokter     = '$ambiljadwal'
								WHERE id_dokter ='$ambilid' ") ;

header("location: data-dokter.php");
}
?>