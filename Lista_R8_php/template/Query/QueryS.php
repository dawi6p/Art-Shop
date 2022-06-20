<?php
session_start();

if(isset($_POST['query'])) 
{
    $_SESSION['QueryS'] = $_POST['query'];
}
?>