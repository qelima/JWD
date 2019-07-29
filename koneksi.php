<?php
$koneksi= mysqli_connect('localhost','root','');// or die("tidak terkoneksi" .mysqli_error());
mysqli_select_db('daftarseminar');
if ($koneksi == true)
{
	echo "koneksi berhasil";
} else
	echo "koneksi gagal " .mysql_error();

//mysql_connect('localhost','root','');


?>