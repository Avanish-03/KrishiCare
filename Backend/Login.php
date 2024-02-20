<?php 
require('config.php');

if (isset($_POST['adminlogin'])) {
    $admin = $_POST['admin'];
    $password = $_POST['pwd'];
    $login = mysqli_query($con, "SELECT * FROM `admin` WHERE name = '$admin' AND password = '$password' ");
    $row = mysqli_fetch_assoc($login);
    if (mysqli_num_rows($login) > 0) {
        if ($password == $row["password"]) {
            $_SESSION['adminlogin'] = true;
            $_SESSION["admin"] = $row["name"];
            header("location:../dist/Admindashboard.php");
        } else {
            echo "Invalid !";
        }
    } else {
        echo "Not Resgistered !";
    }
}

?>