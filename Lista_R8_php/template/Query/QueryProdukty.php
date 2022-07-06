<?php
session_start();
include("../Connect.php");

if(isset($_POST['obraz']) && isset($_POST['Category']) && isset($_POST['nazwa']) && isset($_POST['cenna']) && isset($_POST['opis'])) 
{
    $query = "SELECT * FROM category WHERE Name = '" . $_POST['Category'] . "' LIMIT 1";
    $result = mysqli_query($con, $query);

    if($result && mysqli_num_rows($result) > 0)
    {
        $result = mysqli_fetch_assoc($result);
        $query = "INSERT INTO produkty (`id`, `Obraz`, `Category_id`, `Nazwa`, `Cenna`, `Opis`) VALUES ('NULL','" . $_POST['obraz'] . "','" . $result['id'] . "','" . $_POST['nazwa'] . "','".$_POST['cenna']."','" . $_POST['opis'] . "');";
        mysqli_query($con, $query);
    }
}
?>