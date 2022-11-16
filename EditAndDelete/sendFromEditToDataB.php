<?php 
include "../connection.php";

if(isset($_POST["updateBtn"])){
    $type = $_POST["type"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $nameOfImg = $_FILES['img_img']['name'];
    $tempNameOfImg = $_FILES['img_img']['tmp_name'];
    $folder = "../Upload/";
    move_uploaded_file($tempNameOfImg, $folder . $nameOfImg);

    $id=$_POST["idOfCard"];

    if (!empty($type) && !empty($price) && !empty($stock)) {
        if($nameOfImg===""){
            $requete = "UPDATE `items` SET `type`='$type',`price`='$price',`stock`='$stock' WHERE id='$id'";

        }else{
            $requete = "UPDATE `items` SET `type`='$type',`price`='$price',`img`='$nameOfImg',`stock`='$stock' WHERE id='$id'";
        }

        $query = mysqli_query($connection, $requete);

        if (isset($query)) {
            // echo "$nameOfImg";
            header("location:../Home/Stock.php");
        } else {
            echo 'The data has not been sended';
        }
    } else {
        echo "The inputs are empty";
    }








}

if(isset($_POST["deleteBtn"])){
    $id = $_POST['idOfCard'];
    $requete="DELETE FROM `items` WHERE id='$id'";
    $query = mysqli_query($connection, $requete);
    header("Location:../Home/Stock.php");
}