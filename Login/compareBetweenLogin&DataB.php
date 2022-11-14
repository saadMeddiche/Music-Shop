<?php
include "../connection.php";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $passw = $_POST['passw'];

    // if (!empty($email) && !empty($passw)) {
    //     $requete = "SELECT * FROM signin WHERE email ='$email'";
    //     $query = mysqli_query($connection, $requete);
    //     $result = mysqli_fetch_assoc($query);

    //     if (mysqli_num_rows($query) > 0) {
    //         echo "that email exisite in data base";
    //         if ($passw == $result['pass']) {
    //             echo "mot de passe validé";
    //         } else {
    //             echo "mot de passe erroné";
    //         }
    //     } else {
    //         echo "les informations sont incorrecte";
    //     }
    // }

    // if (!empty($email) && !empty($passw)) {
    //     $requete = "SELECT * FROM signin";
    //     $query = mysqli_query($connection, $requete);
    //     while ($row = mysqli_fetch_assoc($query)) {

    //         if ($row['email'] == $email) {
    //             echo "email Yes";
    //             if ($row['pass'] == $passw) {
    //                 echo "Mode passe Yes";
    //             } else {
    //                 echo "Mode passe No";
    //             }
    //         } else {
    //             echo "email No";
    //         }
    //     }
    // } else {
    //     echo "Empty";
    // }

    if (!empty($email) && !empty($passw)) {
        $requete = "SELECT * FROM signin";
        $query = mysqli_query($connection, $requete);
        while ($row = mysqli_fetch_assoc($query)) {

            if ($row['email'] == $email) {
                if ($row['pass'] == $passw) {
                    header("Location:../Home/home.php");
                } else {
                    header("Location:../Login/index.php");
                }
            } else {
                header("Location:../Login/index.php");
            }
        }
    } else {
        header("Location:../Login/index.php");
    }
}
