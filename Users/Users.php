<?php
include "../connection.php";

$requete = "SELECT * FROM `items`";
$query = mysqli_query($connection, $requete);
if (mysqli_num_rows($query) == 0) {
    header('location:../Home/Add.php');
}

session_start();
if (!isset($_SESSION["name"])) header("Location:../Login/index.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!-- <meta http-equiv="refresh" content="0.5"> -->
    <link rel="stylesheet" href="../Users/styleOfUsers.css">

    <title>Music | Home</title>
</head>

<body>
    <!-- =======================header======================= -->
    <div class="d-flex justify-content-between p-3 header">

        <div class="">
            <a href="../Home/Add.php"><button class="rounded ButtonInHome" hidden>Add New Item</button></a>
        </div>

        <div>
            <a href="../Home/Stock.php"><button class="ButtonInHome">Stock</button></a>
            <a href="../Users/Users.php"><button class="ButtonInHome">Users</button></a>
            <button class="ButtonInHome">Soon!</button>
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
            $requete = "SELECT * FROM `signin`";
            $query = mysqli_query($connection, $requete);
            while ($row = mysqli_fetch_assoc($query)) {
                echo '<div class="col-lg-3 col-md-6">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-truncate" title="' . $row["name"] . '">' . $row["name"] . '</h5>
                        <p class="card-text"><b>Email : </b>' . $row["email"] . '<br><b>Rank : </b>Admin</p>
                        <button class="btn edit">Online</button>
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