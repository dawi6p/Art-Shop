<?php
session_start();

if(isset($_SESSION['user_id']))
{
    unset($_SESSION['user_id']);
}
if(isset($_SESSION['ProduktWKoszyku']))
{
    unset($_SESSION['ProduktWKoszyku']);
}
header('location: /lista_R8/StronaKoszyk.php');
die;
?>