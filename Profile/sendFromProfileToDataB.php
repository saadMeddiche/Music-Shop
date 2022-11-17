<?php
session_start();
include "../connection.php";
$pass = $_POST["NewPassword"];
$email= $_SESSION["email"];
$requete="UPDATE `signin` SET `pass`='$pass' WHERE email='$email'";
$query = mysqli_query($connection, $requete);

header("Location:../Profile/Profile.php");