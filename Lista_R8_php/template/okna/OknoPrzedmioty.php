<?php
include("Connect.php");
$query = "select * from produkty p INNER JOIN category c ON c.id = p.Category_id;";
if(isset($_SESSION['QueryP'])) $query = $_SESSION['QueryP'];
$result = mysqli_query($con, $query);

while($ele = mysqli_fetch_array($result))
{
    echo "<span>". $ele['Id']."</span>
    <img src = ". $ele['Obraz'] ." alt='tablet graficzny'>
    <span>".$ele['Name']."</span>
    <span>".$ele['Nazwa']."</span>
    <span>".$ele['Cenna']." zł</span>";
}

?>