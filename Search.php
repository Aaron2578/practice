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

      <!--Content-1-->
      <h4 style="text-align:center;margin-top:1em;color:black">Final Year <span class="auto-type" style="color:red;font-weight: bold;"></span></h4>
<div style="margin-top:4em;">
      <div class="card-body">
    <div class="row">
    <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="" method="_GET">
        <div class="input-group mb-5" style="margin-top:5em;">
          <input type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class="form-control" placeholder="Search Data">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>

      </div>
    </div>
    <div class="col-md-4">
  </div>
<div class="col-md-12" style="margin-bottom:em;">
  <div class="card-mt-4">
    <div class="card-body">
      <table class="table table-bordered">
        <thead style="text-align:center;">
          <tr>
            <th>Roll-No</th>
            <th>Name</th>
            <th>DOB</th>
            <th>Father Name</th>
            <th>Mother Name</th>
            <th>Student Ph.no</th>
            <th>Parent Ph.no</th>
            <th>Address</th>
          </tr>
        </thead>
        <tbody>
          <?php
            $con = mysqli_connect('127.0.0.1:3308','root','','mscas');
            if(isset($_GET['search']))
            {
              $filtervalues = $_GET['search'];
              $query = "SELECT * FROM student WHERE CONCAT(Roll_No) LIKE '%$filtervalues%' ";
              $query_run = mysqli_query($con,$query);

              if(mysqli_num_rows($query_run) > 0) 
              {
                foreach($query_run as $items)
                {
                  ?>
                   <tr>
                        <td><?= $items['Roll_No']; ?></td>
                        <td><?= $items['Name']; ?></td>
                        <td><?= $items['Dob']; ?></td>
                        <td><?= $items['Father_Name']; ?></td>
                        <td><?= $items['Mother_Name']; ?></td>
                        <td><?= $items['Stu_Phone_Number']; ?></td>
                        <td><?= $items['Par_Phone_Number']; ?></td>
                        <td><?= $items['Address']; ?></td>
                    </tr>
                  <?php 
                }
              }
              else 
              {
                ?>
            <tr>
                <td colspan="2">No Record Found</td>
            </tr>
                <?php
              }
            }
          ?>
          
        </tbody>
      </table>

     


    </div>
  </div>
</div>
        </div>
      
    <!--End-->
    <footer style="background-color: black;padding-bottom: 10px;padding-top: 10px;text-align: center;">
          
        <h3 style="text-align: center;color:azure;font-family: cursive;">Department of Bsc Computer Science</h3><br>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4" style="text-align: center;">
                    <span>
                        <i class="fa fa-twitter fa-2x" aria-hidden="true" style="color:white"></i>&emsp;&emsp;
                        <i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:white"></i>&emsp;&emsp;
                        <i class="fa fa-google-plus-official fa-2x" aria-hidden="true" style="color:white"></i>&emsp;&emsp;
                        <i class="fa fa-linkedin fa-2x" aria-hidden="true" style="color:white"></i>&emsp;&emsp;
                        <i class="fa fa-whatsapp fa-2x" aria-hidden="true" style="color:white"></i>
                     </span><br><br>
                </div>
                <div class="col-md-4">
                  <h6 style="text-align: center;color:azure;">Mohamed Sathak College of Arts and Science<br>
      
                      Sholinganallur<br> Chennai, Tamil Nadu 600119</h6><br>
              </div>
                <div class="col-md-4" style="color:azure;height:50px;text-align:center;">&#169; mscasbcs@2023</div>
            </div>
        </div>
        
      
        
      
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
          </footer>
      
      
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
      
      <script>
      
        var typed = new Typed(".auto-type", {
            strings:["Search Data"],
            typeSpeed:150,
            backSpeed: 150,
            loop: true
        })
      </script>
</body>
</html>