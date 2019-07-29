<?php
//mysql_connect("localhost", "root", "");
//mysql_select_db("daftar seminar");

include "koneksi.php";

$idPeserta = $_GET['id'];
$query = "SELECT * FROM peserta WHERE id = '$idPeserta'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);

$urai= explode("-",$data['tglLahir']);
$tgl= $urai[2];
$bulan=$urai[1];
$tahun= $urai[0];

echo "<form method='post' action='update.php'>";
echo "<table>";
echo "<tr>
		<td>Id Peserta</td> <td>:</td>
		<td><input type='text' name='idBaru' value='".$data['id']."'></td>
	 </tr>";
echo "<tr>
		<td>Nama Peserta</td> <td>:</td>
		<td><input type='text' name='nama' value='".$data['namaPeserta']."'></td>
	 </tr>";
echo "<tr>
		<td>Tgl Lahir</td><td>:</td><td>
		<select name='tgl'>";
		for ($i=1; $i<=31; $i++)
		{
			if($i==$tgl) echo "<option value='".$i."' selected>".$i."</option>";
			else echo "<option value='".$i."'>".$i."</option>";
		}
			echo "</select>
		<select name='bln'>";
		for ($i=1; $i<=12; $i++)
		{
			if($i==$bulan) echo "<option value='".$i."' selected>".$i."</option>";
			else echo "<option value='".$i."'>".$i."</option>";
		}
			echo "</select>
		<select name='thn'>";
		for ($i=1980; $i<=1997; $i++)
		{
			if ($i==$tahun)	echo "<option value='".$i."'>".$i."</option>";
			else echo "<option value='".$i."'>".$i."</option>";
		}
echo "</select></td>
</tr>";
	 
echo "<tr>
		<td>Tempat Lahir</td> <td>:</td>
		<td><input type='text' name='tmptLahir' value='".$data['TmptLahir']."'></td>
	 </tr>";

echo "<tr>
		<td>Alamat</td><td>:</td>
		<td><input type='text' name='alamat' value='".$data['alamat']."'></td>
	 </tr>";	 
	 
echo "<tr>
		<td>Sex</td> <td>:</td><td>";
		if($data['sex']=="L"){echo "<input type='radio' name='sex' value='L' checked> Laki-Laki
		<input type='radio' name='sex' value='P'> Perempuan";}
		else {echo "<input type='radio' name='sex' value='L'>Laki-Laki
		<input type='radio' name='sex' value='P' checked>Perempuan";}
echo "</td></tr>";

echo "<tr>
		<td>Tanggal Daftar</td><td>:</td>
		<td><input type='date' name='tglDaftar' value='".$data['tglDaftar']."'></td>
	</tr>";

echo "<tr>
		<td>Informasi </td><td>:</td>
		<td><input type='text' name='informasi' value='".$data['informasi']."'</td>
	 </tr>";
	

echo "</table>";
echo "<input type='hidden' name='idLama' value='".$data['id']."'>";
echo "<input type='submit' name='submit' value='Submit'>";
echo "</form>";
?>