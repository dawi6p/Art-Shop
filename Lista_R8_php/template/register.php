<?php
    include('template/Connect.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $Name = $_POST['Name'];
        $Surname = $_POST['Surname'];
        $Email = $_POST['Email'];
        $Password = $_POST['Password'];
        $User = "User";
    
        $query = "select * from users where Email = '$Email' limit 1";
    
        $result = mysqli_query($con, $query);
    
        if($result && mysqli_num_rows($result) > 0)
        {
            echo "This email is already taken<br><br>";
        }
        else
        {
            if(!empty($Email) && !empty($Password))
            {
                $query = "insert into users (Name,Surname,Email,Password,Role) values('$Name','$Surname','$Email','$Password','$User')";
    
                mysqli_query($con, $query);
                header("location: StronaLogin.php");
                die;
            }
            else
            {
                echo "Password and Email fields are mandatory<br><br>";
            }
        }
    }
?>