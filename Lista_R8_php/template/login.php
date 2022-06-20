<?php
include('template/Connect.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    if(!empty($Email) && !empty($Password))
    {
        $query = "select * from users where Email = '$Email' and Role != 'Admin' and Role != 'Worker' limit 1";

        $result = mysqli_query($con, $query);

        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['Password'] === $Password)
            {
                $_SESSION["user_id"] = $user_data['id'];
                $_SESSION['ProduktWKoszyku'] = array();
                header("location: StronaGlowna.php");
                die;
            }
        }
    }
    echo "Wrong password or e-mail<br><br>";
}
?>