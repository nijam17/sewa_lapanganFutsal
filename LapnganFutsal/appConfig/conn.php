<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "futsal";
mysql_connect($host,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("Database tidak bisa dibuka");
?>
