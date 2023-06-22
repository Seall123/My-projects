<?php
include 'koneksi.php';
//panggil file konek.php untuk menghubung ke server dan database

if(isset($_POST['tambah']))
{
//tangkap data dari form

$tangkap_no_peminjaman 		= $_POST['no_peminjaman'];

$tangkap_id_anggota	= $_POST['id_anggota'];

$tangkap_nama_anggota = $_POST['nama_anggota'];
$tangkap_id_buku = $_POST['id_buku'];
$tangkap_judul_buku = $_POST['judul_buku'];
$tangkap_no_pengembalian = $_POST['no_pengembalian'];



//simpan data ke database
$query = mysqli_query($koneksi,"insert into penggembalian 
					(no_peminjaman, id_anggota, nama_anggota, id_buku, judul_buku, no_pengembalian)			
			values ('$tangkap_no_peminjaman', '$tangkap_id_anggota',$tangkap_nama_anggota, $tangkap_id_buku, $tangkap_judul_buku, $tangkap_no_pengembalian )");

header("location: laporanpenggembalianbuku.php");

}

?>