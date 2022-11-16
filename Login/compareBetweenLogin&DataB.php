<?php
include "../connection.php";
//declaration of session
session_start();

if (isset($_POST['logInBtn'])) {
    // https://www.geeksforgeeks.org/php-strtolower-function/#:~:text=The%20strtolower()%20function%20is,in%20the%20string%20remains%20unchanged.
    $email = strtolower($_POST['email']);
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
    $requete = "SELECT COUNT(*) FROM `signin`";
    $query = mysqli_query($connection, $requete);
    $data = mysqli_fetch_assoc($query);


    if (!empty($email) && !empty($passw) && $data['COUNT(*)'] != 0) {
        $requete = "SELECT * FROM signin";
        $query = mysqli_query($connection, $requete);
        while ($row = mysqli_fetch_assoc($query)) {

            if ($row['email'] == $email) {
                if ($row['pass'] == $passw) {
                    $_SESSION['userName'] = $row['name'];
                    header("Location:../Home/Add.php");
                } else {
                    $_SESSION['message'] = "Password incorrect";
                    header("Location:../Login/index.php");
                }
            } else {
                $_SESSION['message'] = "Email incorrect";
                header("Location:..Login/index.php");
            }
        }
    } else {
        $_SESSION['message'] = "Fill the blanks";
        header("Location:../Login/index.php");
    }
}
