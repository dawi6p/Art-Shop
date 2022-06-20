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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("template/head.php"); ?>
    <script>
        function minus(cos)
        {
            document.getElementById('quantity'+ cos).value -= 1;

            if(document.getElementById('quantity'+ cos).value < 0) 
            {
                document.getElementById('quantity'+ cos).value = 0;
            }

            if(document.getElementById('quantity'+ cos).value == 0) 
            {
                
            }

            let temp = Number(document.getElementById("quantity"+ cos).value);

            $.ajax ({
                data: {"licz": temp, "cos": cos},
                url:  'template/zmienIlosc.php',
                type: 'post'
            }); 

            $('#cenna').load('template/cenna.php');
            $('#koszyk').load('template/CartNumber.php');

                $('#Cart').load('template/ProduktDoKoszyka.php');
        }
        function plus(cos)
        {
            document.getElementById('quantity'+ cos).value = Number(document.getElementById('quantity'+ cos).value) + 1;
            
            let temp = Number(document.getElementById("quantity"+ cos).value);

            $.ajax ({
                data: {"licz": temp, "cos": cos},
                url:  'template/zmienIlosc.php',
                type: 'post'
            }); 

            $('#cenna').load('template/cenna.php');
        }
    </script>
</head>

<body>
    <div class = "wraper" id = "wraper">
        
        <?php
            include("template/navbar.php");
        ?>
        <div class = "content" id = "content">
            <div id = "Cart">
                
            </div>
        </div>
    </div>
</body>
</html>