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
    <link rel="stylesheet" href="../EditAndDelete/styleOfEdit.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>Music | Edit</title>
</head>

<body>
    <!-- =====================Header===================== -->
    <div class="p-3 header text-center">

        <div class="">
            <a href="../Home/Add.php"><button class="rounded ButtonInHome" hidden>Add New Item</button></a>
        </div>

        <div>
            <a href="../Home/Stock.php"><button class="ButtonInHome">Stock</button></a>
            <a href="../Users/Users.php"><button class="ButtonInHome">Users</button></a>
            <a href="../Statistiques/Statistiques.php"><button class="ButtonInHome" title="statistiques">Statis</button></a>
        </div>

        <div>
            <button class="rounded ButtonInHome"><?php echo $_SESSION['name']; ?></button>
        </div>
    </div>
    <!-- =====================Add Modal===================== -->
    <?php
    include "../connection.php";
    $id = $_GET['id'];
    $requete = "SELECT * FROM `items` WHERE id='$id'";
    $query = mysqli_query($connection, $requete);
    $row = mysqli_fetch_assoc($query);
    if (mysqli_num_rows($query) == 0) {
        header('location:../Home/Stock.php');
    }
    ?>

    <div class="Add-Modal text-center ">


        <b class="titleOfAdd">Update The Musical instrument</b>
        <button class="newSellsAndBoughts px-3" data-bs-toggle="modal" data-bs-target="#exampleModal">New</button>
        <form action="../EditAndDelete/sendFromEditToDataB.php" method="post" enctype='multipart/form-data' data-parsley-validate>

            <div class="">

                <b>Type</b>
                <input class="rounded modalinpt" type="text" name="type" value="<?php echo $row['type']; ?>" required>
                <input type="hidden" name="idOfCard" value="<?php echo $row['id']; ?>">
            </div>
            <div>
                <b>Price</b>

                <input class="rounded modalinpt" type="number" min="0" step="0.01"  oninput="validity.valid||(value='');" name="price" value="<?php echo $row['price']; ?>" required>
            </div>
            <div>
                <b>Stock</b>
                <input class="rounded modalinpt" type="number" min="0" oninput="validity.valid||(value='');" name="stock" value="<?php echo $row['stock']; ?>" disabled required>
                <!-- Solution for disabled in line 75 -->
                <input class="rounded modalinpt" type="number" min="0" oninput="validity.valid||(value='');" name="stockHidden" value="<?php echo $row['stock']; ?>" hidden>

            </div>
            <div class="text-center">
                <input class="imgBTN" type="file" name="img_img" value="">
            </div>
            <div class="container">
                <button class="rounded updateBtn" type="submit" name="updateBtn"><b>Update</b> </button>
                <button class="rounded deleteBtn" type="submit" name="deleteBtn"><b>Delete</b> </button>
            </div>



    </div>
    <!-- The Modal of the new sells and boughts -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sells & Boughts</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- https://bootsnipp.com/snippets/O5BPO -->

                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">

                            <label>Discount</label>
                            <div class="form-group pass_show">
                                <!-- Solution for negative numbers -->
                                <!-- https://stackoverflow.com/questions/19233415/how-to-make-type-number-to-positive-numbers-only -->
                                <input type="number" name="discount" min="0" max="100" oninput="validity.valid||(value='');" class="form-control" placeholder="%Discount%">
                            </div>
                            <label>Sells</label>
                            <div class="form-group pass_show">
                                <!-- always the sells should be equal or low that it stock -->
                                <input type="number" name="sells" min="0" max="<?php echo $row['stock']; ?>" oninput="validity.valid||(value='');" class="form-control" name="NewPassword" placeholder="Sells">
                            </div>
                            <label>Boughts</label>
                            <div class="form-group pass_show">
                                <input type="number" name="boughts" min="0" oninput="validity.valid||(value='');" class="form-control" placeholder="Boughts">
                            </div>
                            <label>Price of Boughts</label>
                            <div class="form-group pass_show">
                                <input type="number" name="priceOfBoughts" min="0" step="0.01" oninput="validity.valid||(value='');" class="form-control" placeholder="Boughts">
                            </div>

                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <!-- Soufiane -->
                    <button type="button" style="background-color: grey; color:#F3ECEC; font-weight:bold;" class="btn" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name="saveButtonOfModal" style="background-color: #C6879A; color:#F3ECEC; font-weight:bold;" class="btn saveButtonOfModal">Save</button>
                </div>


            </div>
        </div>
    </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- <script src="../Profile/scriptOfProfile.js"></script> -->

</body>

</html>