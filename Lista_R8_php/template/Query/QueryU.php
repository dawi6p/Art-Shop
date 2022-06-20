<?php
session_start();

if(isset($_POST['query'])) 
{
    $_SESSION['QueryU'] = $_POST['query'];
}
?>