<?php
include ("db_conn.php");

//dapatkan noKP dan kodAktiviti pada borang_hadir.php
$nokp = $_POST['nokp'];
$kod = $_GET['kod'];

// dapatkan timestamp semasa
date_default_timezone_set('Asia/Kuala_Lumpur');
$timestamp = time();
$tarikh = date('Y-m-d h:i:s', $timestamp);

//semak nokp jika kehadiran untuk aktiviti tersebut sudah diisi
$sql = "SELECT * FROM kehadiran
        WHERE noKP='$nokp'
        AND kodAktiviti='$kod'";
$res = mysqli_query($conn, $sql) or die(mysqli_error());

//jika kehadiran belum diisi,
//semak jika nokp wujud dalam jadual murid
if (mysqli_num_rows($res) == 0)
{
	$query = "SELECT noKP FROM murid
	          WHERE noKP='$nokp'";
	$result = mysqli_query($conn, $query) or die(mysqli_error());

	//jika nokp wujud dlm jadual murid, simpan rekod kehadiran dalam jadual kehadiran
	if (mysqli_num_rows($resulkt) > 0)
{
	$mysql= "INSERT INTO kehadiran 
	         (kodAktiviti, noKP, tarikhmasa)
	         VALUES
	         ('$kod', '$nokp', '$tarikh')";

	//papar js mesej popup jika maklumat kehadiran berjaya simpan
    if (mysqli_query($conn, $mysql))
    {
      echo '<script>alert("Kehadiran anda berjaya direkodkan");
               window.location.href="index.php";
            </script>';
    } else {
        echo "Error ; " . mysqli_error($conn); }
  }

  //jika nokp tidak wujud, papar mesej popup
  else {
     echo '<script>alert("Anda belum mendaftar sebagai ahli kelab");
                window.location.href="index.php";
           </script>'; }
}

//jika kehadiran sudah isi, papar mesej popup
else {
	echo <'script>alert("Anda sudah mengisi kehadiran!!");
	           window.location.href="index.php";
	     </script>';
  }

//tutup sambungan pangkalan data
mysqli_close($conn);
?>