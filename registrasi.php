<html>
<head>
<title>Registrasi Peserta Seminar</title>
</head>

<body>
<h1 align="center">Form Registrasi Peserta </h1>
<form method="post" action="submit.php">
<table>
	<tr>
		<td>Nama Lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama"/></td>
	</tr>
<tr><td>Alamat</td><td>:</td><td><textarea
name="alamat"></textarea></td></tr>
<tr><td>Tempat Lahir</td><td>:</td><td><input type="text" name="tmptLhr"
/></td></tr>
<tr><td>Tanggal Lahir</td><td>:</td>
<td>
<select name="tgl">
<?php
for($i=1; $i<=31; $i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
<select name="bln">
<?php
for($i=1; $i<=12; $i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
<select name="thn">
<?php
for($i=1980; $i<=2016; $i++)
{
echo "<option value='".$i."'>".$i."</option>";
}
?>
</select>
</td>
</tr>
<tr><td>Jenis Kelamin</td><td>:</td><td><input type="radio" name="sex"
value="L" /> Laki-laki <br/><input type="radio" name="sex" value="P" />
Perempuan</td></tr>
<tr><td>Tahu informasi seminar dari mana?</td><td>:</td><td><input
type="checkbox" name="info1" value="TV" /> Televisi<br /><input type="checkbox"
name="info2" value="Koran" /> Surat Kabar<br /><input type="checkbox"
name="info3" value="Teman" /> Teman</td></tr>
<tr><td></td><td></td><td><input type="submit" name="submit"
value="Submit" /></td></tr>
</table>
</form>
</body>
</html>