<?php
include "../connection.php";
if (isset($_POST["AddBtn"])) {
    $type = $_POST["type"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $nameOfImg = $_FILES['img_img']['name'];
    $tempNameOfImg = $_FILES['img_img']['tmp_name'];
    $folder = "../Upload/";
    move_uploaded_file($tempNameOfImg, $folder . $nameOfImg);

    if (!empty($type) && !empty($price) && !empty($stock)) {
        $requete = "INSERT INTO `items`(`type`, `price`, `img`, `stock`) 
        VALUES ('$type','$price','$nameOfImg','$stock')";

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
