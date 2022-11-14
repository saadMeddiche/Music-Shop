<?php
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['pass'];


include "../connection.php";

$requete = "INSERT INTO `signin`(`name`, `email`,`pass`)
VALUES ('$name','$email','$pass')";

$query = mysqli_query($connection, $requete);

if (isset($query)) {

    //return to Sign.php
    //Solution for resend the the data

    header("location:../Login/index.php");
} else {
    echo 'erreur';
}
