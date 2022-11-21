<?php
include "../connection.php";

if (isset($_POST["updateBtn"])) {
    $type = $_POST["type"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $nameOfImg = $_FILES['img_img']['name'];
    $tempNameOfImg = $_FILES['img_img']['tmp_name'];
    $folder = "../Upload/";
    move_uploaded_file($tempNameOfImg, $folder . $nameOfImg);

    $id = $_POST["idOfCard"];

    if (!empty($type) && !empty($price) && !empty($stock)) {
        if ($nameOfImg === "") {
            $requete = "UPDATE `items` SET `type`='$type',`price`='$price',`stock`='$stock' WHERE id='$id'";
        } else {
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

if (isset($_POST["deleteBtn"])) {
    $id = $_POST['idOfCard'];
    $requete = "DELETE FROM `items` WHERE id='$id'";
    $query = mysqli_query($connection, $requete);
    header("Location:../Home/Stock.php");
}

if (isset($_POST["saveButtonOfModal"])) {



    session_start();

    $requete = "SELECT * FROM `statistique`";
    $query = mysqli_query($connection, $requete);
    $row = mysqli_fetch_assoc($query);

    $sumOfSells = $row["sumOfSells"];
    $sumOfBoughts = $row["sumOfBoughts"];
    $priceOfSells = $row["priceOfSells"];
    $priceOfBoughts = $row["priceOfBoughts"];

    $priceOfBought = $_POST["priceOfBoughts"];
    $boughts = $_POST["boughts"];
    $sells = $_POST["sells"];
    $discount = $_POST["discount"];

    $price = $_POST["price"];
    $stock = $_POST["stock"];

    // echo "$price<br>";
    // echo "$stock<br><br>";

    // $stock = $stock + $boughts - $sells;
    // $price = $price -($price * ($discount / 100));

    // echo "$priceOfBoughts<br>";
    // echo "$boughts<br>";
    // echo "$sells<br>";
    // echo "$discount<br><br>";

    // echo "$price<br>";
    // echo "$stock<br>";

    // echo "test";

    // Solution for string + string when the blanks are empty
    if ($boughts == null) $boughts = 0;

    if ($sells == null)  $sells = 0;

    if ($discount == null) $discount = 0;


    $priceOfSells += $price * $sells;
    $priceOfBoughts += $priceOfBought * $boughts;
    $sumOfSells += $sells;
    $sumOfBoughts += $boughts;

    $stock = $stock + $boughts - $sells;
    $price = $price - ($price * ($discount / 100));

    if($stock<0) $stock=0;

    $id = $_POST["idOfCard"];
    $requete = "UPDATE `items` SET `price`='$price',`stock`='$stock' WHERE id='$id'";
    $query = mysqli_query($connection, $requete);

    $requete = "UPDATE `statistique` SET
    `sumOfSells`='$sumOfSells',
    `sumOfBoughts`='$sumOfBoughts',
    `priceOfSells`='$priceOfSells',
    `priceOfBoughts`='$priceOfBoughts'
    WHERE id='99'";
    $query = mysqli_query($connection, $requete);



    header("Location:../EditAndDelete/Edit.php?id=$id");
}
