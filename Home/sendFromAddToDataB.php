<?php
include "../connection.php";
if (isset($_POST["AddBtn"])) {
    $type = $_POST["type"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $img = $_POST["img"];

    if (!empty($type) && !empty($price) && !empty($stock) && !empty($img)) {
        $requete = "INSERT INTO `items`(`type`, `price`, `img`, `stock`) 
        VALUES ('$type','$price','$img','$stock')";

        $query = mysqli_query($connection, $requete);

        if (isset($query)) {
            header("location:../Home/Stock.php");
        } else {
            echo 'The data has not been sended';
        }
    } else {
        echo "The inputs are empty";
    }
}
