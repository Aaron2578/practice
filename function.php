<?php

require_once 'test2.php';

function display_data() {
    global $conn;
    $query = 'select * from student';
    $result = mysqli_query($conn,$query);
    return $result;
}

?>