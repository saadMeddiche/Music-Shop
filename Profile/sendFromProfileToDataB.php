<?php
session_start();
include "../connection.php";
$newpass = $_POST["NewPassword"];
$currentpass = $_POST["CurrenPassword"];

if ($newpass == $currentpass) {
    // echo "test";
    header("Location:../Profile/Profile.php");
} else {
    $email = $_SESSION["email"];
    $requete = "UPDATE `signin` SET `pass`='$newpass' WHERE email='$email'";
    $query = mysqli_query($connection, $requete);
    header("Location:../Profile/Profile.php");
}


