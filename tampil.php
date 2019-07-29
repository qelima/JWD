<html>
<head><title>Data Peserta</title></head>

<body>
<h1>Data Peserta</h1>
<table border="1">
<tr>
	<th>Id Peserta</th>
	<th>Nama Peserta</th>
	<th>Tgl Lahir</th>
	<th>Tempat Lahir</th>
	<th>Alamat</th>
	<th>Jenis Kelamin</th>
	<th>Tgl Daftar</th>
	<th>Info</th>
	
	
</tr>

<?php
include "koneksi.php";
$queryTampil = "SELECT * FROM peserta";
$hasil = mysqli_query($queryTampil);

while ($data = mysqli_fetch_assoc($hasil))
{
echo "<tr>
		  <td>".$data['id']."</td>
		  <td>".$data['namaPeserta']."</td>
		  <td>".$data['tglLahir']."</td>
		  <td>".$data['TmptLahir']."</td>
		  <td>".$data['alamat']."</td>
		  <td>".$data['sex']."</td>
		  <td>".$data['tglDaftar']."</td> 
		  <td>".$data['informasi']."</td>
		  <td width='30'><a href='edit.php?id=".$data['id']."'>update </a> </td>
		  <td width='30'><a href='hapus.php?id=".$data['id']."'>delete </a> </td>
		  
		  </tr>";
}

/**/
?>

</table>
<?php
echo "<br>";
echo "<a href='konversi pdf.php'>Cetak </a>";
?>
</body>
</html>

