<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "carbook";

// create connection

$conn = new mysqli($servername,$username,$password,$database);


// check connection

if($conn->connect_error){

    die("failed to connect: ". $conn->connect_error);

}else{

    // echo "connected success!";
}

?>