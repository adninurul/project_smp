<html>
<style>
ul { /* bar navigasi */
   list-style-type: none;
   margin: 0;
   padding: 0;
   overfflow: hidden;
   background-color: DarkGreen;
}
li {
	float: left;
}
li a#a1 {
	display: inline-block;
	font-family: Trebucket Ms;
    color: White; /* warna font*/
    text-align: center;
    padding: 10px 16px;
    text-decoration: none;
    font-weight: bold;
}
li a#a1:hover {
	/* warna mouse hover */
	background-color: Gold;
	color: Black;
}
</style>
<body>

<ul>
  <li><a href="index.php" id="a1">Utama</a></li>
  <li style="float:right">
      <a href="borang_login.php"id="a1">Log Masuk Guru</a></li>
</ul>

</body>
</html>