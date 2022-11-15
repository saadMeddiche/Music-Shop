<?php
include "../connection.php";

if (isset($_POST['signButton'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];

    if (!empty($name) && !empty($email) && !empty($pass)) {
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
    } else {
        header("Location:../Sign_In/Sign.php");
    }
}
