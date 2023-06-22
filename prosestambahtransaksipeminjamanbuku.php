<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$tangkap_no_peminjaman 		= $_POST['no_peminjaman'];

$tangkap_anggota	= $_POST['anggota'];

$tangkap_buku = $_POST['buku'];



//simpan data ke database
$query = mysqli_query($koneksi,"insert into peminjaman  
					(no_peminjaman, anggota, buku)			
			values ('$tangkap_no_peminjaman', '$tangkap_anggota','$tangkap_buku')");

header("location: laporanpeminjamanbuku.php");

}

?>