<?php
//start  session
session_start();

//Sambungan ke DB
include ("db_conn.php");

//Dapatkan data dari borang login
$login = $_POST['logid'];
$pwd = md5($_POST['klaluan']);
//md5 untuk sulitkan katalaluan

//semak login_id dan katalaluan dalam jadual
$sql = "SELECT * FROM guru WHERE loginID= '$login'
        AND katalaluan= '$pwd'";
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);

//jika WUJUD LoginID dan katalaluan yang sama 
if(mysqli_num_rows($res) > 0)
{
//simpan data session
$_SESSION['id'] = $row['loginID'];

//dapatkan nama guru
$nama = $row['namaGuru'];

//link redirect selepas berjaya login
$link = "senarai_aktivitiG.php";

//papar popup mesej jika berjaya login
echo '<script>alert("Selamat datang '.$nama.'");
    window.location.href="'.$link.'"</script';
}

//jika TIDAK WUJUD LoginID dan katalaluan yang sama 
else
{
 echo '<script>alert("Login ID atau Katalaluan SALAH!!");
       window.location.href="borang_login.php"; </script>';
       //kembali semula ke borang login
}

//close db connection
mysqli_close($conn);
?>