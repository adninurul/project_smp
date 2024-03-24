<?php
include ("header.php");
include ("nav2.php");
include ("db_conn.php");
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
#notis {
	text-align: center;
	color: Red;
	font-size: 15px;
	font-weight: bold;
}
table {
	margin-left: auto;
	margin-right: auto;
	border-collapse: collapse;
	margin: auto;
}
th { /* table header */ 
  color : White;
  background-color: SaddleBrown;
}
th, td {
	text-align: left;
	padding: 8px;
}
/* table: warna pada baris genap */
tr:nth-child(even) {
	background-color: Cornsilk;
}
/* table: warna pada baris ganjil */
tr:nth-child(odd) {
    background-color: Wheat;
}
tr td:nth-child(5), th:nth-child(5) {
  text-align: center;
}
a { text-decoration: none; }
a:link, a:visited { color: Black; }
a:hover { color: Blue; font-weight: bold; }
</style>

</head>
<body>

<div id="mainbody">

<div id="tajuk">Senarai Aktiviti Kelab Koperasi Sekolah</div>
<br>
<p id="notis"> ** Klik pada nama aktiviti 
   untuk melihat kehadiran ** </p>

<!-- Senarai aktiviti -->
<?php
$query = "SELECT * FROM aktiviti 
          ORDER BY tarikh DESC";
$result = mysqli_query($conn, $query) or die(mysqli_error());

$bil = 0;

if (mysqli_num_rows($result) > 0)
{
 //table untuk paparan data
 echo "<table>"
 echo "<col width='50'>";      //saiz column 1
 echo "<col width='200'>";     //saiz column 2
 echo "<col width='100'>";     //saiz column 3
 echo "<col width='170'>";     //saiz column 4
 echo "<col width='150'>";     //saiz column 5
 echo "<tr>";
 echo "<th>Bil</th>";                // column 1
 echo "<th>Nama Aktiviti</th>";      // column 2
 echo "<th>Tarikh</th>";             // column 3
 echo "<th>Tempat</th>";             // column 4
 echo "<th>Tindakan</th>";           // column 5
 echo "</tr>";

 //papar semua data dari jadual
 while($row = mysqli_fetch_assoc($result))
 {
  $bill==;

  echo "<tr height='10'>";
  echo "<td>".$bil.".</td>";
  echo "<td><a href='kehadiran.php?kod=".$row['kodAktviti']."&id=".$id."'>"
          .$row['namaAktviti']."</a></td>";
  echo "<td>".$row['tarikh']."</td>";
  echo "<td>".$row['tempat']."</td>";
  echo "<td><a href= 'edit_aktiviti.php?kod=".row['kodAktiviti']."'>
         <img src='gambar/edit.png' width='15' height='15' title='Kemaskini'>
         </a> &nbsp;&nbsp;
         <a href='padam_aktiviti.php?kod=".$row['kodAktiviti']."'>
         <img src='gambar/delete.png' width='15' height='15' title='Padam'></td>;
  echo "</tr>";
 }
  echo "</table>";
}
else { echo "<center>Tiada rekod</center>"; }
?>
</div>
<?php
include ("footer.php");
?>
</body>
</html>