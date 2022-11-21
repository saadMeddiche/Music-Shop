<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../Login/style.css" />
    <title>Music | Login</title>
</head>

<body class="mainBody">
    <!-- ===================Login Panel=================== -->
    <div class="text-center login ">
        <?php
        if (isset($_SESSION['message']) || !empty($_SESSION['message'])) {
            echo $_SESSION['message'];
        }

        unset($_SESSION['message']);

        ?>
        <form method="post" action="../Login/compareBetweenLogin&DataB.php">
            <div>
                <p class="fs-1 fw-bold">
                    Log In
                </p>
            </div>

            <div>
                <p>
                    <input class="rounded fw-bold text-dark  email" type="text" name="email" placeholder="Enter Your Email . . .">

                </p>
            </div>

            <div>
                <p>
                    <input class="rounded fw-bold text-dark  email password" type="text" name="passw" placeholder="Enter Your Password . . .">
                </p>
            </div>

            <div>
                <p>
                    <button name="logInBtn" type="submit" class="rounded button">
                        Log In
                    </button>
                </p>
            </div>

            <div class="">

                <input class="form-check-input feature" type="radio" name="flexRadioDefault" id="flexRadioDefault" value="Feature">
                <label class="form-check-label" for="flexRadioDefault1">
                    Remember me
                </label>


                <div class="">
                    you are not subscribed yet ? what are you waiting for !! <span><a href="../Sign_In/Sign.php" class="JoinNow">Join now</a> </span>
                </div>
            </div>
        </form>
    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>

</html>