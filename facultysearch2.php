<?php

/*require_once('test2.php');
$query = "select * from student";
$result = mysqli_query($conn,$query);
*/

require_once ('facultysearch3.php');
require_once ('function2.php');
$result = display_data();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://use.fontawesome.com/7d046377ee.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bsc CS</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
            padding-left: 0.5em;
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

        #span1 {
            font-size: 15px;
            color:yellow;
        }
    </style>

</head>
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
<h4 style="text-align:center;margin-top:1em;">Department Staff <span class="auto-type" style="color:red;font-weight: bold;"></span></h4>
    <div class="container-fluid">
        <div class="row mt-3">
            <div class="col">
                <div class="card mt-2">
                    <div class="card-header">
                        <h2 class="display-6 text-center"><blink><b style="color:Red;font-family:cursive;">Fetch data</b></blink></h2>
                    </div>
    <div class="card-body">
    <table class="table table-bordered text-center">
        <tr class="bg-dark text-white">
            <td>Staff Id</td>
            <td>Staff Name</td>
        </tr>
        <tr>
           <?php
                while($row = mysqli_fetch_assoc($result))
                {

                    ?>

                        <td><?php echo $row['Staff_Id']; ?></td>
                        <td><?php echo $row['Staff_Name']; ?></td>
                </tr>
                    <?php
                }

                
           ?>
        
    </table>
    </div>
</div>
</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script> 
<script>
      
      var typed = new Typed(".auto-type", {
          strings:["Full Data"],
          typeSpeed:150,
          backSpeed: 150,
          loop: true
      })
    </script>

</body>
</html>