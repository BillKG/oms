<?php
session_start();
$servername = "localhost";
$server_user = "S11124711";
$server_pass = "filimoni";
$dbname = "oder_management_system";
$name = $_SESSION['name'];
$role = $_SESSION['role'];
$con = new mysqli($servername, $server_user, $server_pass, $dbname);
?>