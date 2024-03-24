<?php
//Sambungan le pangkalan data
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
	font-siz: 30px;
	font-family: Tw Cen MT Condensed;
	font-wegiht: bold;
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
th {   /* table header */
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
/* table: warna pada garis ganjil */
tr:nth-child(odd) {
	background-color: Wheat;
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

if (mysqli_num_rows($result) > 0 )
{
 //table untuk paparan data
 echo "<table>";
 echo "<col width='50'>";        //saiz colum 1
 echo "<col width='200'>";
 echo "<col width='100'>";
 echo "<col width='200'>";
 echo "<col width='150'>";
 echo "<tr>";
 echo "<th>Bil</th>";
 echo "<th>Nama Aktiviti</th>";
 echo "<th>Tarikh</th>";
 echo "<th>Tempat</th>";
 echo "<th></th>";
 echo "</tr>";

 //papar semua data dari jadual
 while($row = mysqli_fetch_assoc($result))
 {
  $bil++;
  $id='0';

  /** untuk paparkan butang daftar kehadiran 
      mengikut tarikh aktiviti **/
  date_default_timezone_set('Asia/Kuala_Lumpur');
  $tarikh_semasa = Date('Y-m-d');
  $tarikh_aktiviti = $row['tarikh'];

  if ($tarikh_aktiviti > $tarikh_semasa)
  {
    $butang = "<button type='button' disabled>
                 AKAN DATANG</button>";
  }
  else if ($tarikh_aktiviti == $tarikh_semasa)
  {
    $butang = "<button onclick=document.location='borang_hadir.php?kod=".$row['kodAktiviti']."'>
    Daftar Kehadiran</button>";
  } else { $butang = "Aktiviti Tamat"; }

  echo "<tr height='10'>";
  echo "<td>".$bil.".</td>";
  echo "<td><a href= 'kehadiran.php?kod=".$row['kodAktiviti']."&id="'>"
              .$row['namaAktiviti']."</a></td";
  echo "<td>".$row['tarikh']."</td>";
  echo "<td>".$row['tempat']."</td>";
  echo "<td>".$butang."</td>";
  echo "</tr>";
}
  echo "</table>";
}
else { echo "<center>Tiada rekod</center>"; }
?>
</div>

</body>
</html>