<?php
$conn = new mysqli('127.0.0.1:3308','root','','mscas');
if($conn->connect_error) {
die('Connection Failed :'.$conn->connect_error);
}
?>