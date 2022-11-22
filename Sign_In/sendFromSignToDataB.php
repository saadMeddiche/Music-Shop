<?php
include "../connection.php";
session_start();

if (isset($_POST['signButton'])) {
    $name = $_POST['name'];
    $email = strtolower($_POST['email']);
    $pass = $_POST['pass'];

    if (!empty($name) && !empty($email) && !empty($pass)) {
        //check if this email and the name exist before
        $requete = "SELECT * FROM `signin` Where email='$email' OR name='$name'";
        $query = mysqli_query($connection, $requete);
        if (mysqli_num_rows($query) != 0) {
            $_SESSION['existBefore']="The name Or the Email Has been Used Before";
            header("Location:../Sign_In/Sign.php");
        } else {
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
        }
    } else {
        if (empty($email)) $_SESSION['existBefore'] = "The Blank Of email was empty";
        if (empty($passw)) $_SESSION['existBefore'] = "The Blank Of password was empty";
        if (empty($email) && empty($pass)) $_SESSION['existBefore'] = "The Blank Of email and password are empty";
        header("Location:../Sign_In/Sign.php");
    }
}
