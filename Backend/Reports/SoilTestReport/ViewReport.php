<?php
if (!empty($_POST["viewReport"])) {

    $file = '1711266489_yadav jyoti rajkumar.pdf';
    // $filename = '1711266489_yadav jyoti rajkumar.pdf';
    viewReport($file);
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
