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

    $query = "INSERT INTO `farmer_detail` (`first_name`, `middle_name`, `last_name`, `email`, `contact_number`, `address`, `city`, `state`, `password`)$irst_name', '$middle_name', '$last_name', '$email', '$contact_number', '$address', '$city', '$state', '$password')";

    $result = mysqli_query($con, $query);

    if (!$result) {
        echo "<script>alert('error')</script>";
    } else {
        echo "<script>window.location.href='../admin/Admindashboard.php'</script>";
    }
}


//------------------UPDATE ditail lab by himself from his Dashboard---------------
if (isset($_POST['updateLabDetail'])) {
    $labid = $_POST['labid'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];

    $updatelabdetail = "UPDATE `laboratory_detail` SET `lab_name`='$fullname',`email`='$email',`contact`='$contact',`lab_add`='$address',`city`='$city',`state`='$state' WHERE `lab_id`='$labid'";
    $result = mysqli_query($con, $updatelabdetail);

    if (!$result) {
        echo "<script>alert('error !')</script>";
    } else {
        echo "<script>alert('Update Succsessfully ')</script>";
        echo "<script>window.location.href='../laboratory/LaboratoryDashboard.php'</script>";
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