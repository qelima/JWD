<?php
include "koneksi.php";

//mysql_connect('localhost','root','');
//mysql_select_db('daftarseminar');

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tmptLhr = $_POST['tmptLhr'];
$tglLhr = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl']; 
$sex = $_POST['sex'];
$tglDaftar = date("Y-m-d"); 
$info = $_POST['info1']. " ".$_POST['info2']. " ".$_POST['info3'];


$queryinsert = "INSERT INTO peserta (namaPeserta, tglLahir, tmptLahir, sex, alamat, tglDaftar,
informasi) VALUES ('$nama', '$tglLhr', '$tmptLhr', '$sex', '$alamat', '$tglDaftar','$info' )";

$hasilInsert = mysql_query($queryinsert);

if ($hasilInsert) echo "Data sudah tersimpan ke database";
else echo "Penyimpanan data gagal" .mysql_error();

echo "<br><a href='tampil.php'>lihat data</a>";
?>
