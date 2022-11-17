<?php
session_start();
// unset($_SESSION["name"]);
// unset($_SESSION["email"]);
// unset($_SESSION["pass"]);

// Jamal and anas
session_destroy();

header("Location:../Login/index.php");
