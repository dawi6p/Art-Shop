<?php
session_start();
include("Connect.php");

if(isset($_SESSION['ProduktWKoszyku']) && isset($_SESSION['ObecnyProdukt']))
{
    $query = "select * from produkty p INNER JOIN category c ON c.id = p.Category_id WHERE p.Id = '" . $_SESSION['ObecnyProdukt'] . "';";
    $result = mysqli_query($con, $query);
    if($result && mysqli_num_rows($result) > 0) $ele = mysqli_fetch_array($result);

    $temp;

    if(!isset($_POST['licz'])) $temp = 1;
    else $temp = $_POST['licz'];

    $item = array($ele['Id'], $temp, $ele['Obraz'], $ele['Nazwa'], $ele['Cenna']);

    foreach($_SESSION['ProduktWKoszyku'] as &$pro)
    {
        if($pro[0] == $ele[0]) return;
    }

    if(isset($_SESSION['produkty'])) $_SESSION['produkty'] += 1;
    else $_SESSION['produkty'] = 1;

    array_push($_SESSION['ProduktWKoszyku'], $item);
}
?>