<?php
include "../Backend/config.php";


//------------------ADD Fremer by admin from Admin Dashboard---------------
if (isset($_POST['addfarmer'])) {
    $first_name = $_POST['firstname'];
    $middle_name = $_POST['middlename'];
    $last_name = $_POST['lastname'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $password = $_POST['pwd'];

    // Establish your database connection first

    // Assuming $con is your database connection
    $query = "INSERT INTO `farmer_detail` (`first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state`, `password`) VALUES ('$first_name', '$middle_name', '$last_name', '$email', '$contact_number', '$address', '$city', '$state', '$password')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "<script>alert('error')</script>";
    } else {
        echo "<script>window.location.href='../admin/Admindashboard.php'</script>";
    }
}




// --------------UPDATE the detail of farmer from admin dashboard----------------
if (isset($_POST['updatefarmer'])) {
    $query = "UPDATE `farmer_detail` SET '$first_name', '$middle_name', '$last_name', '$email', '$contact_number', '$address', '$city', '$state', '$password')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "<script>alert('error')</script>";
    } else {
        echo "<script>window.location.href='../admin/Admindashboard.php'</script>";
    }
}



// -------------DELETE the farmer from the table--------------------------------
if (isset($_POST['deleteFarmer'])) {
?>
    <script>
        var display = 0;

        function hideshow() {
            if (display == 1) {
                document.getElementById(deleteFarmer).style.display = 'block';
                display = 0;
            } else {
                document.getElementById(deleteFarmer).style.display = 'none';
                display = 1;
            }
        }
    </script>
<?php
    echo "<script>window.location.href='../admin/Admindashboard.php'</script>";
}
?>