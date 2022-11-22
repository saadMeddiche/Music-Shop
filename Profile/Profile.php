<?php
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
    <link rel="stylesheet" href="../Profile/styleOfProfile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <link rel="icon" type="image/x-icon" href="../img/test.png">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

    <title>Music | Profile</title>
</head>

<body>
    <!-- =====================Header===================== -->
    <div class="text-center p-3 header">

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
    <!-- =====================Profile Modal===================== -->
    <div class="Add-Modal  text-center">


        <form action="#" method="post">
            <b class="titleOfAdd">Bonjour <?php
                                            echo $_SESSION["name"]; ?></b>
            <div class="">

                <b class="pe-4">Name</b>
                <input class="rounded modalinpt" type="text" name="name" value="<?php echo $_SESSION["name"];  ?>" disabled>
            </div>
            <div>
                <b class="pe-4">Email</b>

                <input class="rounded modalinpt" type="email" name="email" value="<?php echo $_SESSION["email"];  ?>" disabled>
            </div>
            <div>
                <b>Password</b>
                <input class="rounded modalinpt" type="password" name="password" value="<?php echo $_SESSION["pass"];  ?>" disabled>
            </div>
            <!-- <div>
                <input class="imgBTN" type="file" name="img_img">
            </div> -->
            <div class="Both gap-2  ">
                <!-- Button trigger modal -->
                <!-- https://stackoverflow.com/questions/8919682/remove-all-styling-formatting-from-hyperlinks -->
                    
                    <button class="rounded AddBtn" type="button" name="AddBtn" data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Change the password</b> </button>
                
                    <a class="rounded logOutBtn" type="button" href="../Profile/Log_Out.php" name="logOutBtn"> <b>Log Out</b> </a>


            </div>

        </form>
    </div>

    <!-- Change Password Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- https://bootsnipp.com/snippets/O5BPO -->
                <form action="../Profile/sendFromProfileToDataB.php" method="post" data-parsley-validate>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">

                                <label>Current Password</label>
                                <div class="form-group pass_show">
                                    <input id="current" type="text" value="<?php echo $_SESSION["pass"]; ?>" hidden>
                                    <input type="password" value="" class="form-control" placeholder="Current Password" data-parsley-equalto="#current" data-parsley-equalto-message="Incorrect password" required>
                                </div>
                                <label>New Password</label>
                                <div class="form-group pass_show">
                                    <input id="new" type="password" value="" class="form-control" name="NewPassword" placeholder="New Password" data-parsley-minlength="8" data-parsley-minlength-message="Please set a password more then 8" required>
                                </div>
                                <label>Confirm Password</label>
                                <div class="form-group pass_show">
                                    <input type="password" value="" class="form-control" placeholder="Confirm Password" data-parsley-minlength="8" data-parsley-minlength-message="Please set a password more then 8" data-parsley-equalto="#new" data-parsley-equalto-message="This is not the same password" required>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <!-- Soufiane -->
                        <button type="button" style="background-color: grey; color:#F3ECEC; font-weight:bold;" class="btn" data-bs-dismiss="modal">Close</button>
                        <button type="submit" style="background-color: #C6879A; color:#F3ECEC; font-weight:bold;" class="btn">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="../Profile/scriptOfProfile.js"></script>
</body>

</html>