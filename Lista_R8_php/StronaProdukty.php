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
    if($user_data['Role'] != 'Worker' && $user_data['Role'] != 'Admin') 
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
                    <span>Image</span>
                    <span>Category</span>
                    <span>Name</span>
                    <span>Price</span>
                </div>
            </div>
            <div class = "dostawa">
                <div class="tabContentU">
                    <input id="id" type="number">
                    <input id="Image">
                    <select id="Category">
                        <option value="">Not selected</option>
                        <?php include("template/Category.php"); ?>
                    </select>
                    <input id="Name">
                    <input id="Price" type="number">
                </div>
                <div class="tabContentB">
                    <button class="Serch" id="SerchP"><img class="nie" src = "loupe.png"></button>
                    <button class="Create" id="CreateP">Create</button>
                    <button class="Edit" id="EditP">Edit</button>
                    <button class="Delete" id="DeleteP" style = "background-color: red; color: white">delete</button>
                </div>
            </div>
            <div class = "dostawa">
                <div class="tabContentP" id="tabContentP">
                    <?php include("template/okna/OknoPrzedmioty.php"); ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>