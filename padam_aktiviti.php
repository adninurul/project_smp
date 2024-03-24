<?php
include('session.php');

//dapatkan kodAktiviti
$kod = $_GET["kod"];

/* semak jika aktiviti yang ingin dipadam
   mempunyai kehadiran murid atau tidak */
$sql "SELECT * FROM kehadiran
      WHERE kodAktiviti = '$kod'";
$result = mysqli_query($conn, $sql) or die(mysqli_error());

/* jika ada kehadiran, padam rekod dalam jadual
   aktiviti dan kehadiran */
if (mysqli_num_rows($result) > 0)
{
	//padam aktiviti dan kehadiran aktiviti
	$mysql = "DELETE aktiviti, kehadiran
	          FROM aktiviti JOIN kehadiran
	          WHERE aktiviti.kodAktiviti = kehadirann.kodAktiviti
	          AND aktiviti.kodAktiviti = '$kod'";
}
/* jika tiada kehadiran, padam rekod dalam
   jadual aktiviti sahaja */
else {
	$mysql = "DELETE FROM aktiviti
	          WHERE kodAktiviti = '$kod'";
}

$query = $mysql;
$result = $mysqli_query($conn, $query) or die(mysql_error());

if (mysqli_query($conn, $query))
{
	echo '<script>akert("Aktiviti Kelab berjaya dipadam!");
	window.location.href="senarai_aktivitiG.php";
	      </script>';
}
    else { echo "Error ;" . mysqli_error($conn); }
?>