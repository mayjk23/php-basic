<?php

$DB_HOST = "localhost";
$DB_DATABASE = "wordpress";
$DB_USERNAME = "root";
$DB_PASSWORD = "sss";

$conn = mysqli_connect($DB_HOST, $DB_USERNAME, $DB_PASSWORD) or die("ไม่สามารถเชื่อมต่อฐานข้อมูลได้");
mysql_select_db($DB_DATABASE, $conn);
mysql_query("SET NAMES utf8");
