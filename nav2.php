<?php
//session
include('session.php');
?>
<html>
<head>
<style>
ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
	overflow: hidden;
	background-color: DarkGreen;
}
li {
	float: left;
}
li a#a1, .dropbtn {
	display: inline-block;
	font-family: Trebucket MS;
	color: White;
	text-align: center;
	padding: 10px 16px;
	text-decoration: none;
	font-weight: bold;
}
li a#a1:hover, .dropdown:hover {
	background-color: YellowGreen;
	color: Black;
}
li.dropdown {
	display: inline-block;
	float:right;
}
.dropdown-content {
	display: none;
	position: absolute;
	right: 18; /* boleh adjust saiz */
	background-color: LightGrey;
	min-width: 160px;
	box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
	z-index: 1;
}
.dropdown-content a#a1 {
	color: black;
	padding: 12px 16px;
	text-decoration: none;
	display: block;
	text-align: right;
}
.dropdown-content a#a1:hover {
	background-color: YellowGreen;
}
.dropdown:hover .dropdown-content {
	display: block;
}
</style>
</head>
<body>

<ul>
  <li><a href="senarai_aktivitiG.php" id="a1">Utama</a></li>
  <li class="dropdown">
  <a href="#" class="dropbtn" id="a1">Hai,<?php echo $nama; ?></a>
    <div class="dropdown-content">
      <a href="senarai_aktivitiG.php" id="a1">Senarai Aktiviti Kelab</a>
      <a href="borang_aktiviti.php" id="a1">Tambah Aktiviti Kelab</a>
      <a href="senarai_ahli.php" id="a1">Senarai Ahli Kelab</a>
      <a href="logout.php" id="a1">Log Keluar</a>
  </div>
 </li>
</ul>

</body>
</html>