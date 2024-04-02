<?php
require('C:\xampp\htdocs\KrishiCare\Backend\config.php');

if (!empty($_POST["viewReport"])) {

    $farmerid = $_POST["farmerid"];

    $farmersqlquery = "SELECT f.farmer_id,f.first_name, f.middle_name, f.last_name, f.email, contact_number, address, city, state,farmerprofile,
    q.report_id, q.farmer_id AS report_farmer_id, q.status AS report_status, q.report_image
    FROM farmer_detail AS f
    JOIN report_detail AS q ON f.farmer_id = q.farmer_id
    WHERE f.farmer_id= '$farmerid';";
    $result = mysqli_query($con, $farmersqlquery);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $path = $row["report_image"];
            // echo $path;
            $filename = basename($path);
            // echo $filename; // Output: 1711266489_yadav jyoti rajkumar.pdf
            viewReport($filename);
        }
    } else {
        echo "<script>alert('No Report Found!');</script>";
    }
    // $file = '1711266489_yadav jyoti rajkumar.pdf';
    // $filename = '1711266489_yadav jyoti rajkumar.pdf';
} else {
    echo "Invalid Request!";
}
function viewReport($file)
{
    // Header content type
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $file . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');

    // Read the file
    @readfile($file);
}
