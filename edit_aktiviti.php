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
	background-color Khaki;
}
td:nth-child(2) {
	text-align: right;
}
tr {
	height: 20px;
}
input {
	/* saiz untuk kotak input */
	width: 300px;
}
input[type=submit] {
	/* saiz untuk butamg kemaskini */
	width: 100px;
}
input[type=button] {
	/* saiz untuk butang kembali */
	width: 100px;
}
</style>
</head>
<body>

<?php
//dapatkan kodAktiviti
$kodd = $_GET['kod'];

###### jika user klik butang KEMASKINI, #######
###### update record dalam jadual ############
if(isset($_POST['edit']))
{
	$sql = "UPDATE aktiviti
	        SET namaAktiviti = '".$_POST["nm"]."',
	            tarikh = '".$_POST["trkh"]."',
	            tempat = '".$_POST["tmpt"]."'
	        WHERE kodAktiviti = '$kod'";

	if (mysqli_query($conn, $sql)) {
	  echo '<script>alert("Berjaya Kemaskini Aktiviti Kelab!";
	          window.location.href="senarai_aktiviti.php";
	       </script>';
	} else {
	  echo "Error ; " . mysqli_error($conn); }
}
############# PROSES KEMASKINI TAMAT #############

// jika pengguna klik ikon pensel, dapatkan data aktiviti
// paparkan data aktiviti dalam borang
$sql2 = "SELECT * FROM aktiviti
         WHERE kodAktiviti = '$kod'";
$result2 = mysqli_query($conn, $sql2) or die(mysqli_error());
$row2 = mysqli_fetch_array($result2);
?>

<div id="mainbody">
<form action="edit_aktiviti.php?kod=<?php echo $kod; ?>" method="POST">
<div id="tajuk"Borang Kemaskini Aktiviti Kelab</div>
<p>
<table cellpadding='5px'>
<tr>
  <td style="width: 30px"></td>
  <td></td>
  <td></td>
  <td style="width: 40px"></td>
</tr>
<tr>
  <td></td>
  <td>Kod Aktiviti :</td>
  <td><?php echo $row2['kodAktiviti']; ?></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>Nama Aktiviti :</td>
  <td><input type="text" name="nm" value="<?php echo $row2['namaAktivti'];?> "required>
      </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>Tarikh :</td>
  <td><input type="date" name="trkh" value="<?php echo $row2['tarikh'];?>" required>
      </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>Tempat :</td>
  <td><input type="text" name="tmpt" value="<?php echo $row2['tempat'];?>" required>
      </td>
  td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td style="text-align: right">
     <input type="button" name="back" value="KEMBALI"
         onClick="javascript:history.go(-1)">
     <input type+"submit" name="edit" value="KEMASKINI"></td>
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