<?php
session_start();
include("template/Connect.php");
include("template/script.php");

$user_data = check_login($con);
if($user_data == null) 
{
    header("location: StronaGlowna.php");
    die;
}
else
{
    if($user_data['Role'] != 'Admin') 
    {
        header("location: StronaGlowna.php");
        die;
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("template/head.php"); ?>
</head>

<body>
    <div class = "wraper" id = "wraper">
        <?php
            include("template/navbar.php");
        ?>
        <div class = "content" id = "content">
            <div class = "dostawa">
                <div class="tabTitleU">
                    <span>ID</span>
                    <span>Name</span>
                    <span>Surname</span>
                    <span>E-mail</span>
                    <span>Role</span>
                </div>
            </div>
            <div class = "dostawa">
                <div class="tabContentU">
                    <input id="id">
                    <input id="Name">
                    <input id="Surname">
                    <input id="Email">
                    <select id="Role">
                        <option value="">Not Selected</option>
                        <option value="User">User</option>
                        <option value="Worker">Worker</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>
                <div class="tabContentB">
                    <button class="Serch" id="Serch"><img class="nie" src = "loupe.png"></button>
                    <button class="Create" id="Create">Create</button>
                    <button class="Edit" id="Edit">Edit</button>
                    <button class="Delete" id="Delete" style = "background-color: red; color: white">delete</button>
                </div>
            </div>
            <div class = "dostawa">
                <div class="tabContentU" id="tabContentU">
                    <?php include("template/okna/OknoUsers.php"); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>