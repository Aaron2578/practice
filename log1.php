
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Bsc-Material</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link rel='stylesheet' href='style.css'>
    <script src="main.js"></script>
    <link rel="icon" href="Pictures/Logo of bsc.png">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Bungee&family=Caramel&family=Dancing+Script:wght@400;500;600;700&family=Rubik+Puddles&family=Rubik+Spray+Paint&family=Rubik+Vinyl&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container-fluid" style="margin-top:1em;">
        <h1 style="font-family: 'Rubik Vinyl'; color:rgb(252, 14, 14);">Department of Bsc</h1>
        </div>
        <div class="container-fluid">
        <div class="row" style="margin-top:1em;">
            <div class="col-lg-2"></div>
            <div class="col-lg-2 bg-link text-center text-black "><b><a href="index.php" style="text-decoration: none; color:black;"><img src="Pictures/Home.gif" style="height:20px;">&emsp;HOME</b></a></div>
            <div class="col-lg-2 bg-success text-center text-black rounded"><a href="material.html" style="text-decoration: none; color:black;"><b><img src="Pictures/study.gif" style="height:20px;">&emsp;MATERIAL</b></a></div>
            <div class="col-lg-2 bg-link text-center text-black"><b><a href="Facultytab.php" style="text-decoration: none; color:black;"><img src="Pictures/contact.gif" style="height:20px;">&emsp;FACULTY</b></a></div>
            <div class="col-lg-2 bg-link text-center text-black"><b><a href="Login.html" style="text-decoration: none; color:black;"><img src="Pictures/login.gif" style="height:20px;">&emsp;LOGGING</b></a></div>
            <div class="col-lg-2"></div>
        </div>
        </div>


        <?php
        $email= $_POST['email'];
        if($email=="Aaron@mscas.com") {
            ECHO("$email iS CRT");
        }
        else{
            ECHO("ERROR");
        }
        ?>

            </body>
            </html>
