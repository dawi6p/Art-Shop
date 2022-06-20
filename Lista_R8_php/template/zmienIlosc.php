<?php
session_start();

if(isset($_POST['licz'] ) && isset($_POST['cos']) && isset($_SESSION['ProduktWKoszyku'] )) 
{
    $cos = 0;
    foreach($_SESSION['ProduktWKoszyku'] as &$ele)
    {
        if($ele[0] == $_POST['cos']) 
        {
            $ele[1] = $_POST['licz']; 
            if($ele[1] == 0) \array_splice($_SESSION['ProduktWKoszyku'], $cos, 1);
            return;
        }
        $cos += 1;
    }
}
?>