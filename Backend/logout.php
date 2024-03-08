<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST["user"];
    if ($user == "admin") {

        $_SESSION["admin"] = false;
    } elseif ($user == "farmer") {
        $_SESSION["farmer"] = false;
    } elseif ($user == "laboratory") {
        $_SESSION["laboratory"] = false;
    }
}

// session_unset();
// session_destroy();
// header("location:../dist/Home.php");
