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
    <title>Music | Add</title>
</head>

<body>
    <!-- =====================Header===================== -->
    <div class="d-flex justify-content-between p-3 header">

        <div class="">
            <button class="rounded ButtonInHome" hidden>Add New Item</button>
        </div>

        <div>
            <a href="../Home/Stock.php"><button class="ButtonInHome">Stock</button></a>
            <button class="ButtonInHome">Soon!</button>
            <button class="ButtonInHome">Soon!</button>
        </div>

        <div>
            <button class="rounded ButtonInHome" hidden></button>
        </div>
    </div>
    <!-- =====================Add Modal===================== -->
    <div class="Add-Modal text-center">


        <form action="#" method="post" >
            <b class="titleOfAdd">Bonjour <?php session_start();
                                            echo $_SESSION["name"]; ?></b>
            <div class="">

                <b class="pe-4">Name</b>
                <input class="rounded modalinpt" type="text" name="name" value="<?php echo $_SESSION["name"];  ?>" disabled >
            </div>
            <div>
                <b class="pe-4">Email</b>

                <input class="rounded modalinpt" type="email" name="email" value="<?php echo $_SESSION["email"];  ?>" disabled >
            </div>
            <div>
                <b>Password</b>
                <input class="rounded modalinpt" type="password" name="password" value="<?php echo $_SESSION["pass"];  ?>" disabled >
            </div>
            <!-- <div>
                <input class="imgBTN" type="file" name="img_img">
            </div> -->
            <div>
                <button class="rounded AddBtn " type="submit" name="AddBtn"><b>Change the password</b> </button>
            </div>
        </form>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>