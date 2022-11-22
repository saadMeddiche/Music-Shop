<?php
session_start();
if (!isset($_SESSION['name'])) {
    header("Location:../Login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../Home/styleOfAdd.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <link rel="icon" type="image/x-icon" href="../img/test.png">
    <title>Music | Add</title>
</head>

<body>
    <!-- =====================Header===================== -->
    <div class="p-3 header text-center">

        <!-- <div class="">
            <a href="../Home/Add.php"><button class="rounded ButtonInHome " HIDDEN>Add New Item</button></a>
        </div> -->

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
    <!-- =====================Add Modal===================== -->
    <div class="Add-Modal  text-center ">


        <form action="../Home/sendFromAddToDataB.php" method="post" enctype='multipart/form-data' data-parsley-validate>
            <b class="titleOfAdd">Add New Musical instrument</b>
            <div class="">

                <b>Type</b>
                <input class="rounded modalinpt" type="text" name="type" required>
            </div>
            <div>
                <b>Price</b>

                <input class="rounded modalinpt" min="0" step="0.01" oninput="validity.valid||(value='');" type="number" name="price" required>
            </div>
            <!-- <div>
                <b>Stock</b>
                <input class="rounded modalinpt" min="0"  oninput="validity.valid||(value='');"type="number" name="stock" required>
            </div> -->
            <div class="">
                <input class="imgBTN" type="file" name="img_img">
                <button class="rounded AddBtn" type="submit" name="AddBtn"><b>ADD</b> </button>

            </div>
            
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>