<?php

$Name = $Dob = $Email = $Stu_Phone_Number = $Par_Phone_Number = $Address = "";
$Name = $_POST['Name'];
$Dob = $_POST['DOB'];
$Email = $_POST['Email'];
$Stu_Phone_Number= $_POST['Student_Phone_No'];
$Par_Phone_Number= $_POST['Parent_Phone_No'];
$Address= $_POST['Address'];

$conn = new mysqli('127.0.0.1:3308','root','','mscas');
if($conn->connect_error) {
    die('Connection Failed :'.$conn->connect_error);
}
else {
    $stmt = $conn->prepare("insert into admission(Name,DOB,Email,Student_Phone_No,Parent_Phone_No,Address) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssiis",$Name,$Dob,$Email,$Stu_Phone_Number,$Par_Phone_Number,$Address);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>