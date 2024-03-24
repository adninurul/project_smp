<?php
include ("db_conn.php");

/* Dapatkan data dari borang_daftar.php */
$login = $_POST['logid'];
$pwd = md5($_POST['klaluan']);
$nama = $_POST['nama'];

//semak jika LoginID telah wujud dalam DB
$semak = "SELlECT loginID FROM guru
          WHERE loginID = '$login'";
$result = mysqli_query($conn, $semak) or die(mysqli_error());

//jika LoginID sudah wujud, papar js mesej popup
if (mysqli_num_rows($result) > 0)
{
	echo '<script>
	      alert("Login ID anda telah didaftarkan!!");
	      window.location.href="borang_daftar.php";
	      </script>';
}
else {
 //jika LoginID belum wujud, simpan data dalam PD
 $mysql = "INSERT INTO guru
           (loginID, katalaluan, namaGuru)
           VALUES ('$login', '$pwd', '$nama')";

if (mysqli_query($conn, $mysqli))
{
//papar mesej popup jika guru baharu berjaya daftar
 echo '<script>
        alert("Berjaya Daftar Guru Penasihat!!");
        window.location.href="borang_login.php";
       </script';
       //selepas berjaya daftar, kembali ke Login page
 } else {
     echo "Error ; " . mysqli_error($conn); }
}

//Close connection
mysqli_close($conn);
?>