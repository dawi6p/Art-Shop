<?php
include("Connect.php");
$query = "select * from category";
$result = mysqli_query($con, $query);

while($ele = mysqli_fetch_array($result))
{
    echo "<option value='".$ele['Name']."'>".$ele['Name']."</option>";
}

?>