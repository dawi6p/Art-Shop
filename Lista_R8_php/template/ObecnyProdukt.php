<?php
    session_start();

    if(isset ($_POST['licz'] )) $_SESSION['ObecnyProdukt'] = $_POST['licz']; 
    else $_SESSION['ObecnyProdukt'] = -1;
?>