<?php
include ("header.php");
include ("nav.php");
include ("db_conn.php");

//dapatkan kodAktiviti
$kod = $_GET['kod'];

$query = "SELECT * FROM aktiviti
          WHERE kodAktiviti='$kod'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$row = mysqli_fetch_array($result);
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
	font-family: Tw cen MT Condensed;
	font-weight: bold;
	font-align: center;
}
table {
	border: 2px solid black;
	border-collapse: collapse;
	margin: auto;
	background-color: Aquamarine;
}
td:nth-child(2) {
	text-align: right;
	text-weight: bold;
}
tr {
	height: 20px;
}
/* saiz untuk textbox */
input[type=text] {
	width: 170px;
}
/* saiz untuk butang */
input[type=submit] {
	width: 170px;
}
</style>
</head>
<body>

<div id="mainbody">
<div id="tajuk">Daftar Kehadiran Aktiviti</div>

<form action="proses_hadir.php?kod=<?php echo $kod; ?>" method="POST">
<br>
<table cellpadding='5px'>
<tr>
  <td style="width: 40px"></td>
  <td></td>
  <td></td>
  <td style="width: 250px"></td>
  <td style="width: 30px"></td>
</tr>
<tr>
  <td></td>
  <td>Nama Aktiviti</td>
  <td>:</td>
  <td><?php echo $row['namaAktiviti']; ?></td>
  <td></td>
</tr>
<tr>
  <td></td>.
  <td>Tarikh</td>
  <td>:</td>
  <td><?php echo $row['tarikh']; ?></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>Tempat</td>
  <td>:</td>
  <td><?php echo row['tempat']; ?></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td colspan="3" style="text-align: center">
      Masukkan No Kad Pengenalan :</td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td colspan="3" style="text-align: center">
      <input type="text" name="nokp" pattern="[0-9]{12,12}"
             title="Masukkan 12 digit nombor sahaja" required></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td colspan="3" style="text-align: center">
      <input type="submit" name="daftar" value="Daftar Kehadiran"></td>
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