<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "shoop_db";

if(!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname))
{
    die("faild to connect");
}
?>