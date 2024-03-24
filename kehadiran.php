<?php
$kod = $_GET['kod'];
$id = $_GET['id'];

if($id=='0') { $nav = ("nav.php"); }
else { $nav = ("nav2.php");

include ("header.php");
include $nav;
include ("db_conn.php");

//dapatkan maklumat aktiviti
$sql = "SELECT * FROM aktiviti
        WHERE kodAktiviti='$kod'";
$res = mysqli_query($conn, $sql) or die(mysqlli_error());
$row = mysqli_fetch_array($res);
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
	margon-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	margin: auto;
}
th {
	color: White;
	background-color: Navy;
}
th, td {
	text-align: left;
	padding: 8px;
	border-bottom: 1px solid LightGray;
}
tr:hover {
	background-color: LightCyan;
}
tr {
	background-color: Ivory;
}
</style>
</head>
<body>

<div id="mainbody">
  <div id="tajuk">
    <?php echo $row['namaAktiviti']; ?>
  </div>

<center><p>
Tarikh : <?php echo $row['tarikh']; ?>
 &nbsp;&nbsp; | &nbsp;&nbsp;
 Tempat : <?php echo $row['tempat']; ?>
 </p></center><br>

 <!-- BORANG CARIAN -->
 <form action="" method=