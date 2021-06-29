<?php

$sname = "52.6.114.59";
$uname = "chithanh";
$password = "123@123a";

$db_name = "shopmusic";
$conn = mysqli_connect($sname,$uname, $password,$db_name);

if (!$conn) {
	echo "Connetion fail";
	exit();
}
