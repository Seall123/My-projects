<?php
include('koneksi.php');

if(isset($_POST['ubah']))
{
//tangkap data dari form

$ambilid 		= $_POST['id_obat'];

$ambilnama 	    = $_POST['nama_obat'];

$ambiljenis	    = $_POST['jenis_obat'];

$ambilharga	    = $_POST['harga_obat'];

$ambilstok	    = $_POST['stok_obat'];

//update data di database sesuai id obat
$query = mysqli_query($koneksi, "UPDATE data_obat 
								SET 
								    nama_obat      = '$ambilnama', 
							    	jenis_obat  = '$ambiljenis', 
							    	harga_obat     = '$ambilharga'
							    		stok_obat     = '$ambilstok'
								WHERE id_obat ='$ambilid' ") ;

header("location: data-obat.php");
}
?>