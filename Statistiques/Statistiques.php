<?php
include "../connection.php";

// $requete = "SELECT * FROM `items`";
// $query = mysqli_query($connection, $requete);
// if (mysqli_num_rows($query) == 0) {
//     header('location:../Home/Add.php');
// }

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
    <link rel="stylesheet" href="../Statistiques/styleOfStatics.css">
    <link rel="icon" type="image/x-icon" href="../img/test.png">

    <title>Music | Statistics</title>
</head>

<body>
    <!-- =======================header======================= -->
    <!-- Fix the navbar -->
    <!-- https://getbootstrap.com/docs/4.0/components/navbar/ -->
    <div class="text-center p-3 header sticky-top">

        <div class="">
            <a href="../Home/Add.php"><button class="rounded ButtonInHome">Add New Item</button></a>
        </div>

        <div>
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

    <div class="container allCards ">

        <?php
        include "../connection.php";
        $requete = "SELECT * FROM `statistique` WHERE id='99'";
        $query = mysqli_query($connection, $requete);
        $row = mysqli_fetch_assoc($query);
        ?>

        <div class="row">
            <div class="col-sm-6 test">
                <div class="card-body card ">
                    <div class="row">
                        <div class="col-lg-6 py-3">
                            <h5 class=""><b>Total Of Sells : </b><?php echo $row["sumOfSells"] ;?></h5>
                            <h5 class=""><b>Cash : </b><?php echo $row["priceOfSells"] ;?></h5>
                        </div>
                        <div class="col " style="height: 100px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/sells.jpg)">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 test">
                <div class="card-body card ">
                    <div class="row">
                        <div class="col-lg-6 py-3">
                            <h5 class=""><b>Total Of Boughts : </b><?php echo $row["sumOfBoughts"] ;?></h5>
                            <h5 class=""><b>Cash : </b><?php echo $row["priceOfBoughts"] ;?></h5>
                        </div>
                        <div class="col " style="height: 100px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/boughts.jpg)">

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 test">
                <div style="<?php if($row["priceOfSells"]-$row["priceOfBoughts"]<0){echo "border:4px solid red; background-color:rgb(244, 139, 139);"; }else{echo "border:4px solid green; background-color:#8bedb7;";}?>"class="card-body card">
                    <div class="row">
                        <div class="col-lg-6 py-3">
                            <h5 class=""><b>Income : </b><?php echo $row["priceOfSells"]-$row["priceOfBoughts"] ;?></h5>
                        </div>
                        <div class="col " style="height: 100px; background-position: center; background-size: cover; background-repeat: no-repeat; background-image: url(../img/income1.jpg)">

                        </div>
                    </div>
                </div>
            </div>

        </div>



        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>