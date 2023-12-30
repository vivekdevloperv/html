<?php
    // Database Connection
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "loginpages";

    // $conn = new mysqli($servername, $username, $password, $database);
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn){
        echo "Could not conncet";
        die();
    }
    else{
        echo "connection is successfully";
    }
    // if ($conn->connect_error) {
    //     die("Connection failed: " . $conn->connect_error);
    // }
    ?>