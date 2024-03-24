<html>
<head>
<style>
#mainbody
{
	bakground-color: silver;
	padding: 20px;
}
#tajuk
{
	font-size: 30px;
	font-family: Tw Cen MT Condensed;
	font-weight: bold;
	text-align: center;
}
table {
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: whitesmoke;
}
table, td {
	text-align: right;
}
</style>
</head>
<body>
<?php
include ("header.php");
?>
<div id="mainbody">
<form action="proses_pengguna.php" method="POST">
     <div id="tajuk">Daftar Pengguna Baru</div><p>

<table cellpadding=5px>
<tr>
    <td style="width: 20px"></td>
    <td></td>
    <td></td>
    <td style="width: 20px"></td>
<tr>
    <td></td>
    <td>Emel :</td>
    <td><input type="email" name="emel" placeholder="emel@emel.com"
               required></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td>Nama :</td>
    <td><input type="text" name="nama" required></td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td>Kata Laluan :</td>
    <td><input type="password" name="katalaluan"
              placeholder="5-8 aksara sahaja"
              pattern=".{5,8}" title="5-8 aksara sahaja" required></td>
              <!-- pattern ini untuk setkan had atas dan had bawah -->
    <td></td>
</tr>
<tr>
    <td></td>
    <td>Kategori :</td>
    <td><input type="radio" name="kategori" value="G" required>Guru
        <input type="radio" name="kategori" value="M">Murid
        </td>
    <td></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="daftarBtn" value="Daftar"></td>
    <td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td><a href="index.php">Kembali</a></td>
	<td></td>
</tr>
<tr>
	<td></td>
	<td></td>
	<td></td>
	<td></td>
</tr>
</table>

</form>
</div>
<?php include ("footer.php"); ?>
</body>
</html>