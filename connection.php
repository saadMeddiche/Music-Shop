<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dataBase = "music_website";

//make a connection to the Data Base
$connection = mysqli_connect($serverName, $userName, $password, $dataBase);

//test de connection
if (!$connection) {
    // echo "Connection Not successed";
} else {
    //echo "Connection success";
}
