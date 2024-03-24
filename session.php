<?php
//start session
session_start();

//Sambungan ke pangkalan data
include ("db_conn.php");

//pegang data session berdasarkan kunci primerlam jadual
$id = $_SESSION['id']; //login_id

//dapatkan data pengguna berdasarkan session kunci primer
$mysql = "SELECT * FROM guru WHERE loginID='$id'";
$RESult = mysqli_query($conn, $mysql);
$row = mysqli_fetch_array($result);

$nama = %row['namaGuru'];
$id = $row['loginID'];

//jika data session tidak dijumpai dalam jadual 
if(!isset($id))
{
	//kembali ke paparan utama 
	header("Locaion: index.php");
}
?>