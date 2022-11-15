<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../Sign_In/styleOfSign.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Music | Sign In</title>
</head>

<body class="body">
    <form method="post" action="sendFromSignToDataB.php">
        <div class="singnIn">
            <p class="fs-1 fw-bold">Sign In</p>
        </div>

        <div>
            <p>
                <input class="rounded fw-bold text-dark name" type="text" name="name" placeholder="Enter Your Name">
            </p>
        </div>
        <div>
            <p>
                <input class="rounded fw-bold text-dark email" type="text" name="email" placeholder="Enter Your Email">
            </p>
        </div>
        <div>
            <p>
                <input class="rounded fw-bold text-dark email" type="text" name="pass" placeholder="Enter Your Password">
            </p>
        </div>
        <div>
            <p>
                <input class="session" type="text" name="session" placeholder="">
            </p>
        </div>
        <div>
            <p>
                <Button type="submit" class="rounded Button" name="signButton">Sign In</Button>
            </p>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>

</html>