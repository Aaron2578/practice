

<html>
    <head>
        <title>Editing</title>
        <style>
            body {
                background:whitesmoke;
            }
            input{
                width:40%;
                height:5%;
                border:1px;
                border-radius:5px;
                padding:8px 15px 8px 15px;
                margin:10px 0px 15px 0px;
                box-shadow:1px 1px 2px 1px grey; 
            }
        </style>
    </head>
    <body>
        <center>
            <h1>Updation Data into Database using PHP</h1>
        
        <form action="" method='post'>
            
            <input type='text' name='Roll_No' placeholder='Roll No'><br>
            <input type='number' name='Paid' placeholder='Paid'><br>
    

            <input type="submit" name='update' value='Update'>

         </form>
        
        </center>
    </body>
</html>

<?php

$conn = mysqli_connect('127.0.0.1:3308','root','');
$db = mysqli_select_db($conn,'mscas');
if(isset($_POST['update'])) {
$roll=$_POST['Roll_No'];

$query = "UPDATE student SET Paid='$_POST[Paid]' WHERE Roll_No='$_POST[Roll_No]'";

$query1= "UPDATE student SET Balance = Fees - Paid WHERE Roll_No ='$_POST[Roll_No]'";

$query_run = mysqli_query($conn,$query);

if($query_run)
{
    echo '<script type="text/Javascript"> alert("Data are Updated") </script>';

}
else {
echo '<script type="text/Javascript"> alert("Data are Not  Updated") </script>';
} 
}

?>


