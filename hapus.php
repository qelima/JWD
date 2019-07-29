<?php
include "koneksi.php";

$idPeserta = $_GET['id'];
$queryHapus="DELETE from peserta WHERE id='$idPeserta'";
$hasil = mysql_query($queryHapus);	

if($hasil) echo "data berhasil dihapus";
else echo "data gagal dihapus".mysql_error();
	
?>