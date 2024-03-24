<?php
include ("header.php");
include ("nav.php");
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
	background-color: Khaki;
}
td:nth-child(2) {
	text-align: right;
}
tr {
	height: 20px
}
</style>
</head>
<body>

<div id="mainbody">
<!-- form action akan bawa pengguna untuk proses seterusnya
      selepas pengguna klik butang Log Masuk -- >
<form action="proses_login.php" method="POST">

<div id="tajuk">Log Masuk Guru Penasihat</div>
<p>

<table cellpadding='5px'>
<tr>
  <td style="width: 20px"></td>
  <td></td>
  <td></td>
  <td style="width: 20px"></td>
</tr>
<tr>
  <td></td>
  <td>Login ID :</td>
  <td><input type="text" name="logid" required>
      </td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td>Kata Laluan :</td>
  <td><input type="password" name="klaluan"
       required pattern=".{5,8"></td>
  <td></td>
</tr>
<tr>
  <td></td>
  <td></td>
  <td style="text-align: right;">
     <input type="submit" name="btnLog"
           value="Log Masuk">
     </td>
  <td></td>  
</tr>
<tr>
  <td></td>
  <td colspan="2">
      <!-- borang sign up guru penasihat -- >
      <a href="borang_daftar.php">
      <img src+"gambar/user.png" width="30"
        height="30" title="Daftar Guru Penasihat">
      </a></td>
  <td></td>
</tr>

</table>

</form>
</div>
<?php include ("footer.php"); ?>
</body>
</html>