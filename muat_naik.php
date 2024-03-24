<?php
//session
include('session.php');

$jenis = array(
         'text/x-comma-separated-values',
         'text/comma-separated-values',
         'application/x-csv',
         'text/x-csv',
         'text/csv',
         'application/csv');

//dapatkan file csv yang dimuat naik
$file = $_FILES["file_csv"]["tmp_name"];

//dapatkan hanya file csv sahaja yang diterima
if (in_array($_FILES['file_csv']['type'], $jenis))
{
	//buka dan baca file tersebut, r = read-only
	$file_open = fopen($file,"r");
    
    //baca data line by line
    while(($data = fgetcsv($file_open)) !== FALSE)
    {
       $nokp = $data[0];
       $nama = $data[1];
       $kelas = $data[2];

       //semak jika nokp sudah wujud dakam jadual
       $sql = "SELECT * FROM murid
               WHERE noKP='$nokp'";
       $res = mysqli_query($conn, $sql) or die(mysqli_error());

       //jika nokp wujud, paparkan mesej
       if (mysqli_num_rows($res) > 0)
       {
         echo '<script>
               alert("Ahli kelab sudah wujud!");
               window.location.href="senarai_ahli.php";
               </script>';
       } else {
         $mysql= "INSERT INTO murid
                (noKP, namaMurid, kelas) VALUES
                ('$nokp', '$nama', '$kelas')";

         if (mysqli_query($conn, $mysql))
         {
           echo '<script>
                 alert("Berjaya muat naik maklumat ahli kelab!");
                 window.location.href="senarai_ahli.php";
                </script>';
        } else {
          echo "Error; ". mysqli_error($conn);
        }
      }
    }

}
//paparkan popup mesej jika bukan fail csv
else
{
  echo '<script>alert("Pilih fail .csv sahaja!");
         window.location.href="senarai_ahli.php";
        </script>';
}

//Close connection
mysqli_close($conn);
?>