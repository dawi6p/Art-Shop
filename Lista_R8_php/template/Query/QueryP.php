<?php
session_start();

if(isset($_POST['query'])) 
{
    $_SESSION['QueryP'] = $_POST['query'];
}
?>