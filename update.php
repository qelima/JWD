<?php
include "koneksi.php";

$idLama = $_POST['idLama'];
$idBaru = $_POST['idBaru'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmptLhr = $_POST['tmptLahir'];
$tglLahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$sex = $_POST['sex'];
$tglDaftar = date("Y-m-d"); 
$info = $_POST['info1']. " ".$_POST['info2']. " ".$_POST['info3'];

$queryUpdate = "UPDATE peserta SET id='$idBaru', namaPeserta='$nama', tglLahir='$tglLahir', TmptLahir='$tmptLhr', sex='$sex', alamat='$alamat' WHERE id='$idLama'";

$hasil = mysql_query($queryUpdate);
if ($hasil) echo "Data sudah diupdate";
else echo "Data gagal diupdate ".mysql_error();

echo "<br ><a href='tampil.php'>lihat data</a>";
?>