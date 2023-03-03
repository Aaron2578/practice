<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bsc CS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
    <link rel='stylesheet' href='style.css'>
    <link rel="icon" href="Pictures/Logo of bsc.png">
    <link rel='stylesheet' href='style2.css'>
    <link rel='stylesheet' href='style.css'>

    <style>

@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

#navbar {
    position: sticky;
    top: 0;
    left: 0;
    z-index: 100;
    padding: .5rem 5rem;
    box-shadow: 5px 5px 20px rgba(0,0,0,.5);
    background: black;
}

.navbar .navbar-brand {
    font-size: 20px;
    font-weight:800;
    color:aqua;
}

#navbarSupportedContent a {
    color:white;
    border-bottom: 2px solid transparent;
}

.dropdown-menu {
    background: #000;
}

.dropdown-item:hover{
    background: none;
}

#navbarSupportedContent a:hover {
    border-bottom: 2px solid cyan;
    transition: 1s;
}

#navbarSupportedContent button {
    border-radius: 15px;
    background:cyan;
}

.nav-item {
    padding-left: 1em;
    padding-right: 1em;
}

span {
    font-size: 15px;
    color:yellow;
}
</style>
        
        <script>

            const user1={Name:"james",Password:"james@123"}  // object

            const btn = document.querySelector(".btn button")  // variable

            const input1 = document.querySelector(".email")
            const input2 = document.querySelector(".password")

            btn.addEventListener("click",function() {           // function

            if(user1.Name === input1 && user1.Password === input2) {
            alert("Hi Working")
            }

            }.value
            )

        </script>

    <body>
         <!--NavBar Content-->

         <nav class="navbar navbar-expand-lg navbar-dark" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">Department of Bsc<span id="span1">&emsp;Computer Science</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Facultytab.html">Faculty</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Materials
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="material.html">Question Paper</a></li>
                  <li><a class="dropdown-item" href="main.html">Study Materials</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="syallbus.html">Syallabus</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="Contact.html">Contact</a>
              </li>
            </ul>
              <a href="Login.php"><button class="btn p-2 my-lg-0 my-2" type="submit">Sign In</button></a>
          </div>
        </div>
      </nav>
    <div class="container">

        <div class="row">

            <div class="col-md-3" style="text-align:center; padding-top:2em; background-color:red;border-radius:50px;overflow:hidden;">
            <?php

            $email = "";
            $password = "";            

            $email= $_POST['email'];
            $password= $_POST['password'];
            if($email=="Aaron@mscas.com" && $password=="Aaron@123") {
            echo("<b style='color:white'>!... Access Granted ...!</b><br><br><br><br>");
            echo ("<b><a href='Student.php' style='text-decoration: none; color:yellow;border:2px solid white;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;'>See Student</a></b><br><br><br><br>");
            echo ("<b><a href='facultysearch1.php' style='text-decoration: none; color:yellow;border:2px solid white;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;'>See Faculty</a></b>");
            }
            else{
            echo("<b style='color:white'>!... Access Denied ...!</b><br><br>");
            echo("<b style='color:white'>Try Again</b>");
            }
            ?>
                
            </div>
            <div class="col-md-1">
        </div>

            <div class="col-md-4" style="background-color:aquamarine;">

            <div class="login">

            <form  method="post">

            <br><br><img src="Pictures/login.gif" style="height:50px;"><br><br>

            <label>User Name:&emsp;</label><input type="text" class="email" name="email"><br><br>

            <label>Password:&emsp;</label><input type="text" class="password" name="password"><br><br>

            <input type="submit" class="btn button" value="Login In"><br><br>

         </form>
    </div>
        </div>
        <div class="col-md-1">
        </div>
    <div class="col-md-3" style="text-align:center; padding-top:2em; background-color:red;border-radius:50px;overflow:hidden;">

<?php

    $email = "";
    $password = "";            

    $email= $_POST['email'];
    $password= $_POST['password'];
    if($email=="Aaron@mscas.com" && $password=="Aaron@123") {
        echo("<b style='color:white'>!... Access Granted ...!</b><br><br><br><br>");
        echo ("<b><a href='log.php' style='text-decoration: none; color:yellow;border:2px solid white;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;'>Add Student</a></b><br><br><br><br>");
        echo ("<b><a href='Faculty.php' style='text-decoration: none; color:yellow;border:2px solid white;padding-top:5px;padding-bottom:5px;padding-right:5px;padding-left:5px;'>Add Faculty</a></b>");
    }
    else{
        echo("<b style='color:white'>!... Access Denied ...!</b><br><br>");
        echo("<b style='color:white'>Try Again</b>");
    }
    ?>

</div>
</div>
</div>
    </body>
</html>