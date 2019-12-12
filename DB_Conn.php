<?php
require_once 'config.php';

$conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_TABLE);

if(mysqli_connect_errno()->$conn){
    echo "Impossible to connect! ";
}

//1. Comment


//test

?>