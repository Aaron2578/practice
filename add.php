<!doctype html>
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
  <script src="https://use.fontawesome.com/7d046377ee.js"></script>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

  <link rel="stylesheet" href="style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
    integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <title>ICARST 2023</title>
  <link rel="icon" href="mscollege.png">
  <style>
  h3 {
    text-align: center;
  }

  h6 {
    text-align: right;
  }

  span {
    padding-top: 0px;

  }
</style>
</head>

<body>
<h3>Hello</h3>
  <div class="card-body">
    <div class="row">
      <div class="col-md-7">

        <form action="" method="_GET">
        <div class="input-group mb-3">
          <input type="text" name="search" value="<?php if(isset($_GET['search'])) {echo $_GET['search'];}?>" class="form-control" placeholder="Search Data">
          <button type="submit" class="btn btn-primary">Search</button>
        </div>
      </form>

      </div>
    </div>
  </div>
<div class="col-md-12">
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
</body>

</html>

