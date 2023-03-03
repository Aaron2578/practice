<?php

require_once 'facultysearch3.php';

function display_data() {
    global $conn;
    $query = 'select * from faculty';
    $result = mysqli_query($conn,$query);
    return $result;
}

?>