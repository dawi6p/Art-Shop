<?php
session_start();
include("../Connect.php");

if(isset($_POST['query'])) 
{
    $query = $_POST['query'];
    mysqli_query($con, $query);
}
?>