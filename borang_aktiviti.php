<?php
include ("header.php");
include ("nav2.php");
?>
<html>
<head>
<style>
#mainbody {
	background-color: white;
	padding: 20px;
}
#tajuk {
	font-size: 30px;
	font-family: Tw Cen MT Condensed;
	font-weight: bold;
	text-align: center; 
}
table {
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	font-weight: bold;
	background-color: Khaki;
}
td:nth-child(2) {
	text-align: right;
}
tr {
	height: 20px;
}
input {
	/* saiz untuk kota input */
	width: 300px;
}
input[type=submit] {
	/* saiz untuk butang tambah */
	width: 100px;
}
</style>
</head>
<body>

<div id="mainbody">
<form action="proses_aktiviti.php" method="POST">
<div id="tajuk">Borang Tambah Aktiviti Kelab</div>
<p>
<table cellpadding='5px'>
<tr>
  <td style="width: 30px"></td>
  <td><td>
  <td><td>
  <td style="width: 40px"></td>
</tr>
<tr>
  <td><td>
  <td>Kod Aktiviti :</td>
  <td><input type="text" name="kd" required></td>
  <td><td>
</tr>
<tr>
  <td><td>
  <td>Nama Aktiviti :</td>
  <td><input type="text" name="nm" required></td>
  <td><td>
</tr>
<tr>
  <td><td>
  <td>Tarikh :</td>
  <td><input type="date" name="trkh" required></td>
      </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>Tempat :</td>
  <td><input type="text" name="tmpt" required><//td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td style="text-align: right">
    <input type="submit" name="tambah" value="TAMBAH"></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>

</form>

</div>
<?php include ("footer.php"); ?>
</body>
</html>