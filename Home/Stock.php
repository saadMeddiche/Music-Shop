<?php
include "../connection.php";



//If there is no item yet , it will go to Add page
$requete = "SELECT * FROM `items`";
$query = mysqli_query($connection, $requete);
if (mysqli_num_rows($query) == 0) {
    header('location:../Home/Add.php');
}

//So no one can't access to this page using the url and without login
session_start();
if (!isset($_SESSION["name"])) header("Location:../Login/index.php");


// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="icon" type="image/x-icon" href="../img/test.png">
    <!-- <meta http-equiv="refresh" content="0.5"> -->
    <link rel="stylesheet" href="../Home/styleOfStock.css">

    <title>Music | Home</title>
</head>

<body>
    <!-- =======================header======================= -->
    <div class="sticky-top text-center p-3 header ">

        <div class="">
            <a href="../Home/Add.php"><button class="rounded ButtonInHome">Add New Item</button></a>
        </div>

        <div >
            <a href="../Home/Stock.php"><button class="ButtonInHome" title="Stock">Stock</button></a>
            <a href="../Users/Users.php"><button class="ButtonInHome" title="Users">Users</button></a>
            <a href="../Statistiques/Statistiques.php"><button class="ButtonInHome" title="Statistiques">Statis</button></a>
        </div>

        <div>
            <a href="../Profile/Profile.php"><button class="rounded ButtonInHome"><?php

                                                                                    echo $_SESSION["name"];
                                                                                    ?></button></a>
        </div>
    </div>

    <!-- =======================Cards======================= -->
    <!-- <img src="../Upload/' . $row["img"] . '" class="card-img-top image" alt="..."> -->
    <div class="container allCards">
        <div class="row">
            <?php
            include "../connection.php";
            $requete = "SELECT * FROM `items`";
            $query = mysqli_query($connection, $requete);
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<div class="col-lg-3 col-md-6 col-sm-6 ">

                <div class="card">
                    <div style="height: 150px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../Upload/' . $row["img"] . ');">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-truncate" title="' . $row["type"] . '">' . $row["type"] . ' </h5>
                        <p class="card-text"><b>Price : </b>' . $row["price"] . '<br><b>Stock : </b>' . $row["stock"] . '</p>
                        <a href="../EditAndDelete/Edit.php?id=' . $row["id"] . '"><button href="#" class="btn btn-primary edit ">Edit</button></a>
                    </div>
                </div>
                </div>';
            }

            ?>
        </div>



        <!-- <div class="">
                    <img class="image" src="../Upload/guitar.jpg" alt="">
                    <p>Type : guitar</p>
                    <p>Prix : 20dh</p>
                    <p>Quantiter: 5</p>
                </div> -->

    </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>