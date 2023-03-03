<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>
            Bsc-Student_Login
        </title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="js/bootstrap.min.js"></script>
        <link rel="icon" href="Pictures/Logo of bsc.png">
        <link rel='stylesheet' href='style2.css'>
    <body>
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                </div>
            <div class="col-md-4" style="background-color:rgb(194, 194, 194); text-align:left;">
            <div class="login">
            <form method="post">
            <br><br><img src="Pictures/login.gif" style="height:50px;"><br><br>
            <label>Roll No:&emsp;</label><br><input type="text" placeholder="Roll_No" name="Roll_No"><br><br>
            <label>Name:&emsp;</label><br><input type="text" placeholder="Name" name="Name"><br><br>
            <label>DOB:&emsp;</label><br><input type="text" placeholder="Date of Birth" name="DOB"><br><br>
            <label>Year:&emsp;</label><br><input type="text" placeholder="Year" name="Year"><br>
            <label>Father Name:&emsp;</label><br><input type="text" placeholder="Father Name" name="Father_Name"><br><br>
            <label>Mother Name:&emsp;</label><br><input type="text" placeholder="Mother Name" name="Mother_Name"><br><br>
            <label>Student Phone Number:&emsp;</label><br><input type="text" placeholder="Student_Phone_Number" name="Stu_Phone_Number"><br><br>
            <label>Parent Phone Number:&emsp;</label><br><input type="text" placeholder="Parent_Phone_Number" name="Par_Phone_Number"><br><br>
            <label>Address:&emsp;</label><br><textarea rows="5" cols="40" placeholder="Address" name="Address"></textarea><br><br>
            <label>Fees:&emsp;</label><br><input type="number" placeholder="Fees" name="Fees"><br><br>
            <label>Paid:&emsp;</label><br><input type="number" placeholder="Paid" name="Paid"><br><br>
            <label>Balance:&emsp;</label><br><input type="number" placeholder="Balance" name="Balance"><br><br>
            <label>Staff Name:&emsp;</label><br><input type="text" placeholder="Staff Name" name="Staff_Name"><br><br>
            <input type="submit" class="btn button"><br><br>
         </form>
    </div>
    </div>
    </div>
    <div class="col-md-7">
    
    </div>
</div>
</div>
    </body>
</html>

<?php

$Roll_No = $Name = $Dob = $Year = $Father_Name = $Mother_Name = $Stu_Phone_Number = $Par_Phone_Number = $Address = $Fees = $Paid = $Balance = $Staff_Name ="";
$Roll_No = $_POST['Roll_No'];
$Name = $_POST['Name'];
$Dob = $_POST['DOB'];
$Year= $_POST['Year'];
$Father_Name = $_POST['Father_Name'];
$Mother_Name= $_POST['Mother_Name'];
$Stu_Phone_Number= $_POST['Stu_Phone_Number'];
$Par_Phone_Number= $_POST['Par_Phone_Number'];
$Address= $_POST['Address'];
$Fees = $_POST['Fees'];
$Paid= $_POST['Paid'];
$Balance = $_POST['Balance'];
$Staff_Name= $_POST['Staff_Name'];

// Database Connection
$conn = new mysqli('127.0.0.1:3308','root','','mscas');
if($conn->connect_error) {
die('Connection Failed :'.$conn->connect_error);
}
else {
$stmt = $conn->prepare("insert into student(Roll_No,Name,DOB,Year,Father_Name,Mother_Name,Stu_Phone_Number,Par_Phone_Number,Address,Fees,Paid,Balance,Staff_Name) values(?,?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("sssssssssiiis",$Roll_No,$Name,$Dob,$Year,$Father_Name,$Mother_Name,$Stu_Phone_Number,$Par_Phone_Number,$Address,$Fees,$Paid,$Balance,$Staff_Name);
$stmt->execute();
$stmt->close();
$conn->close();
}
?>