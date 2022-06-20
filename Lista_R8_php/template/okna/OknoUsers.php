<?php
include("Connect.php");
$query = "select * from users";
if(isset($_SESSION['QueryU'])) $query = $_SESSION['QueryU'];
$result = mysqli_query($con, $query);

while($ele = mysqli_fetch_array($result))
{
    echo "<span id='ID'>".$ele['id']."</span>
    <span id='Imie'>".$ele['Name']."</span>
    <span id='Nazwisko'>".$ele['Surname']."</span>
    <span id='E-mail'>".$ele['Email']."</span>
    <span id='Role'>".$ele['Role']."</span>";
}

?>