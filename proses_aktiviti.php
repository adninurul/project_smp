<?php
include('session.php');

//dapatkan data dari borang_aktiviti.php
$kod = $_POST['kd'];
$nama = $_POST['nm'];
$tarikh = $_POST['trkh'];
$tempat = $_POST['tmpt'];

//simpan data aktivti dalam jadual
$mysql= "INSERT INTO aktiviti
         (kodAktiviti, namaAktivti, tarikh, tempat, loginID)
         VALUES
         ('$kod', '$nama', '$tarikh', '$tempat', '$id')";

if (mysqli_query($sonn, $mysql))
{
	echo '<script>alert("Aktiviti kelab berjaya ditambah!");
	        window.location.href="senarai_aktivitiG.php";
	        </script>';
} else {
	echo "Error ; " . mysqli_error($conn); }

//Close connection
mysqli_close($conn);
?>