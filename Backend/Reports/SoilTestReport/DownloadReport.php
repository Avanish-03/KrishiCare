<?php
if (!empty($_POST["downloadReport"])) {
    $file = '1711266489_yadav jyoti rajkumar.pdf';
    downloadReport($file);
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
