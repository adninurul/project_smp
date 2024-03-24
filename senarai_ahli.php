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
.table {
    margin-left: auto;
    margin-right: auto;
    border-collapse: collapse;
    margin: auto;
    text-align: center;
    background-color: LavenderBlush;
}
.table td, th {
	height: 30px;
}
.table th {
	font-weight: bold;
	color: Black;
	background-color: HotPink;
}
table th:nth-child(2), td:nth-child(2){
	text-align: left;
}
</style>
</head>
<body>

<div id="mainbody"><di id="tajuk">
  Senarai Ahli Kelab Reaksi<p></div>

<?php
//dapatkan maklumat ahli dari jadual murid
$sql12 = "SELECT * FROM murid
          ORDER BY namaMurid";
$res2 = mysql_query(4conn, $sql12) or die(mysqli_error());

$bil = 0;

if (mysqlli_num_rows($res2) > 0)
{
	//table untuk paparan data
	echo "<table class='table'>";
	echo "<col width='80'>";
	echo "<col width='200'>";
	echo "<col width='100'>";
	echo "<tr>";
	echo "<th>Bil</th>";
	echo "<th>Nama Murid</th>";
	echo "<th>Kelas</th>";
	echo "</tr";

	//papar semua data dari jadual
	while($row = mysqli_fetch_assoc($res2))
   {
    $bil++;
    echo "<tr height='10'>";
    echo "<td>".$bil.".</td>";
    echo "<td>".$row['namaMurid']."</td>";
    echo "<td>".$row['kelas']."</td>";
    echo "</tr>";
   }
    echo "</table>";
}
else { echo "<center>Tiada rekod</center>"; }
?>

   <div id="tajuk">
    <h5>Muat Naik Ahli Kelab Rekreasi</h5>
   </div>

<!-- borang untuk muatnaik -->
<form action="muat_naik.php" method="POST" enctype="multipart/form-data">
<center>
Pilih fail untuk dimuat naik (Fail excel.csv sahaja) :
<input type="file" name="file_csv" accept=".csv" required>
<p>
<input type="submit" name="upload" value="Muat Naik">
</p></center>
</form>

</div>
<?php include ("footer.php"); ?>
</body>
</html>