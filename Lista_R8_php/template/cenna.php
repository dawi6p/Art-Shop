<?php
session_start();
if(isset($_SESSION['ProduktWKoszyku']))
{
    $cenna = 0;
    foreach($_SESSION['ProduktWKoszyku'] as &$ele)
    {
        $cenna += $ele[1] * $ele[4];
    }
    echo "Łącznie: " . $cenna . " zł";
}
else
{
    echo "Łącznie: zł";
}
?>