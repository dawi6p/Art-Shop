<?php
session_start();

include("Connect.php");
$query = "select * from produkty p INNER JOIN category c ON c.id = p.Category_id where c.Name = 'Tablety Graficzne';";
if(isset($_SESSION['QueryS'])) $query = $_SESSION['QueryS'];
$result = mysqli_query($con, $query);

if(isset($_SESSION['asortyment']))
{
    /*foreach($_SESSION['asortyment'] as &$ele)
    {
        echo '<div class = "produkt" id = "produkt" onclick="transfer(' . $ele[0] . ')">
        <img src = "' . $ele[1] . '" class="obraz" alt="tablet graficzny">
        <span>' . $ele[2] . '</span>
        <span>Cenna: ' . $ele[3] . ' zł</span>
        </div>';
    }*/

    while($ele = mysqli_fetch_array($result))
    {
        echo '<div class = "produkt" id = "produkt" onclick="transfer(' . $ele['Id'] . ')">
            <img src = "' . $ele['Obraz'] . '" class="obraz" alt="tablet graficzny">
            <span>' . $ele['Nazwa'] . '</span>
            <span>Cenna: ' . $ele['Cenna'] . ' zł</span>
            </div>';
    }
}
?>
