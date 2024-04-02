<?php
require('C:\xampp\htdocs\KrishiCare\Backend\config.php');

if (!empty($_POST["downloadReport"])) {
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
            downloadReport($filename);
        }
    } else {
        echo "<script>alert('No Report Found!');</script>";
    }
    // $file = '1711266489_yadav jyoti rajkumar.pdf';
    // downloadReport($file);
} else {
    echo "Invalid Request!";
}

function downloadReport($file)
{
    header("Content-Type: application/octet-stream");

    header("Content-Type: application/download");
    header("Content-Disposition: attachment; filename=" . urlencode($file));
    header("Content-Description: File Transfer");
    header("Content-Length: " . filesize($file));

    flush(); // This doesn't really matter. 

    $fp = fopen($file, "r");
    while (!feof($fp)) {
        echo fread($fp, 65536);
        flush(); // This is essential for large downloads 
    }

    fclose($fp);
}
