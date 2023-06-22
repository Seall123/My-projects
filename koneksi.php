<?php

$server 	= "localhost";
$user 		= "u1673329_unitrawatjalan";
$password 	= "unitrawatjalan";
$db 		= "u1673329_unitrawatjalan";
$koneksi 	= mysqli_connect($server, $user, $password, $db);
if(!$koneksi)
{
	echo "Tidak Terdeteksi";
}
?>