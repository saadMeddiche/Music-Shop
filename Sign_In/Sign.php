<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Sign_In/styleOfSign.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Music | Sign In</title>
    <link rel="icon" type="image/x-icon" href="../img/test.png">

    <!-- BEGIN parsley css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/doc/assets/docs.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.2/src/parsley.css">
    <!-- END parsley css-->
</head>

<body class="body">
    <?php
    session_start();
    if (isset($_SESSION['existBefore']) || !empty($_SESSION['existBefore'])) {
        echo $_SESSION['existBefore'];
    }

    unset($_SESSION['existBefore']);

    ?>
    <form method="post" action="sendFromSignToDataB.php" data-parsley-validate>
        <div class="singnIn">
            <p class="fs-1 fw-bold">Sign In</p>
        </div>

        <div>
            <p>
                <input class="rounded fw-bold text-dark name" type="text" name="name" placeholder="Enter Your Name" required>
            </p>
        </div>
        <div>
            <p>
                <input class="rounded fw-bold text-dark email" type="email" name="email" placeholder="Enter Your Email" required>
            </p>
        </div>
        <div>
            <p>
                <!-- https://parsleyjs.org/doc/examples/simple.html -->
                <input id="samepass" class="rounded fw-bold text-dark password" type="password" name="pass" placeholder="Enter Your Password" data-parsley-minlength="8" data-parsley-minlength-message="Please set a password more then 8" required>
            </p>
        </div>
        <div>
            <p>
                <!-- https://stackoverflow.com/questions/18212902/parsley-js-password-confirm-doesn-t-work -->
                <input class="rounded fw-bold text-dark password" type="password" name="" placeholder="Repeat Your Password" data-parsley-equalto="#samepass" data-parsley-equalto-message="This is not the same password" required>
            </p>
        </div>
        <div>
            <p>
                <Button type="submit" class="rounded Button" name="signButton">Sign In</Button>
            </p>
        </div>
    </form>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</body>

</html>