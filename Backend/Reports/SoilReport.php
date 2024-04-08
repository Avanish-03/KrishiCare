<?php

function generateReport($farmername, $farmeremail, $sampleid, $contact)
{
    $msg1 = "The Report of your soil is as below.We have also provided Fertilizer Recommendation for the soil.";
    $msg2 = "We extend our heartfelt gratitude to you for selecting Our Laboratory for conducting the soil test. It has been our honor to serve you in analyzing the soil samples you provided.";
    $msg3 = "At Laboratory, we understand the critical role soil health plays in agricultural productivity and sustainability. By choosing us, you've placed your trust in our expertise and commitment to delivering accurate and insightful results.";
    $msg4 = "Your decision to collaborate with us reinforces our dedication to providing exceptional services to farmers like you who are at the forefront of driving positive change in agriculture. We are deeply thankful for the opportunity to contribute to your project's success and support your efforts in making informed decisions for your farm.";
    $msg5 = "Please do not hesitate to reach out to us if you have any further questions or require additional assistance. We look forward to continuing our partnership and serving you in the future.";
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", "16");
    $pdf->Cell("0", "10", "Soil Health Report", "1", "1", "C");
    $pdf->Cell("0", "10", "", "", "1", "C");

    $pdf->SetFont("Arial", "", "12");
    $pdf->Cell("143", "10", "Farmer Name : " . $farmername . " ", "", "0");
    $pdf->Cell("0", "10", "Sample Id : " . $sampleid . " ", "", "1", "r");

    $pdf->Cell("143", "10", "Email : " . $farmeremail . " ", "", "0");
    $pdf->Cell("0", "10", "Contact : " . $contact . " ", "", "1");

    $pdf->Cell("0", "10", "", "", "1", "1");
    $pdf->Write("10", "Dear, " . $farmername . " ", "1");

    $pdf->Cell("0", "10", "", "", "1", "1");
    $pdf->Write("10", $msg1);
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", $msg2);
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", $msg3);
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", $msg4);
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", $msg5);
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", "With warm regards,");
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", "[Laboratory Name]");
    $pdf->Cell("0", "15", "", "", "1", "1");
    $pdf->Write("10", "[Contact Information]");
    $pdf->Cell("0", "15", "", "", "1", "1");

    $pdf->SetFont("Arial", "b", "12");
    $pdf->Cell("0", "20", "", "", "1", "C");
    $pdf->Cell("0", "10", "Routine Analysis Report", "1", "1", "");

    $pdf->SetFont("Arial", "", "8");
    $pdf->SetFillColor(231, 222, 220);
    $pdf->Cell("75", "10", "INDICATORS", "1", "0", "C", true);
    $pdf->Cell("50", "10", "VALUE", "1", "0", "C", true);
    $pdf->Cell("20", "10", "RATINGS", "1", "0", "C", true);
    $pdf->Cell("0", "10", "CONSTRAINT", "1", "1", "C", true);

    $pdf->SetFont("Arial", "", "10");
    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("75", "15", "Aggregate Stability", "1", "0", "C", true);
    $pdf->Cell("50", "15", "6.0", "1", "0", "C");
    $pdf->SetFillColor(255, 0, 0);
    $pdf->Cell("20", "15", "1", "1", "0", "C", true);
    $pdf->Cell("0", "15", "aeration, infilteration, rooting", "1", "1", "C", "");

    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("75", "15", "Available water capacity", "1", "0", "C", true);
    $pdf->Cell("50", "15", "0.19", "1", "0", "C");
    $pdf->SetFillColor(255, 255, 0);
    $pdf->Cell("20", "15", "4", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("75", "15", "Surface Hardness", 1, 0, "C", true);
    $pdf->Cell("50", "15", "162", "1", "0", "C");
    $pdf->SetFillColor(255, 255, 0);
    $pdf->Cell("20", "15", "5", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("75", "15", "Subsurface Hardness", "1", "0", "C", true);
    $pdf->Cell("50", "15", "313", "1", "0", "C");
    $pdf->SetFillColor(255, 0, 0);
    $pdf->Cell("20", "15", "1", "1", "0", "C", true);
    $pdf->Cell("0", "15", "Subsurface Compaction ", "1", "1", "C", "");

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("75", "15", "Organic Matter", "1", "0", "C", true);
    $pdf->Cell("50", "15", "1.5", "1", "0", "C");
    $pdf->SetFillColor(255, 0, 0);
    $pdf->Cell("20", "15", "1", "1", "0", "C", true);
    $pdf->Cell("0", "15", "Energy Storage", "1", "1", "C", "");

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("75", "15", "Avtive Carbon", "1", "0", "C", true);
    $pdf->Cell("50", "15", "284", "1", "0", "C");
    $pdf->SetFillColor(255, 0, 0);
    $pdf->Cell("20", "15", "1", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("75", "15", "Potentially Mineralizable Nitrogen", "1", "0", "C", true);
    $pdf->Cell("50", "15", "1.7", "1", "0", "C");
    $pdf->SetFillColor(255, 0, 0);
    $pdf->Cell("20", "15", "1", "1", "0", "C", true);
    $pdf->Cell("0", "15", "Soil biological activity", "1", "1", "C", "");

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("75", "15", "Root Health Rating", "1", "0", "C", true);
    $pdf->Cell("50", "15", "2.0", "1", "0", "C");
    $pdf->SetFillColor(43, 131, 10);
    $pdf->Cell("20", "15", "9", "1", "0", "C", true);
    $pdf->Cell("0", "15", "N Supply Capacity", "1", "1", "C", "");

    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("75", "15", "PH", "1", "0", "C", true);
    $pdf->Cell("50", "15", "6.0", "1", "0", "C");
    $pdf->SetFillColor(255, 255, 0);
    $pdf->Cell("20", "15", "6", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("75", "15", "Extractable Phosphorus", "1", "0", "C", true);
    $pdf->Cell("50", "15", "21.8", "1", "0", "C");
    $pdf->SetFillColor(43, 131, 10);
    $pdf->Cell("20", "15", "10", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("75", "15", "Extractable Potassium", "1", "0", "C", true);
    $pdf->Cell("50", "15", "115", "1", "0", "C");
    $pdf->SetFillColor(43, 131, 10);
    $pdf->Cell("20", "15", "10", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("75", "15", "Minor Elements", "1", "0", "C", true);
    $pdf->Cell("50", "15", "", "1", "0", "C");
    $pdf->SetFillColor(43, 131, 10);
    $pdf->Cell("20", "15", "10", "1", "0", "C", true);
    $pdf->Cell("0", "15", "", "1", "1", "C", "");

    // $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("75", "15", "Overall Quality Score (out Of 100)", "1", "0", "C");
    $pdf->SetFillColor(231, 222, 220);
    $pdf->Cell("50", "15", "Low", "1", "0", "C", true);
    $pdf->Cell("0", "15", "49.2", "1", "1", "C");

    $pdf->Cell("0", "20", "", "", "1", "C");
    $pdf->Cell("0", "10", "", "", "1", "C");
    $pdf->Cell("0", "20", "", "", "1", "C");
    $pdf->Cell("0", "10", "Routine Analysis Report", "1", "1", "", true);

    $pdf->SetFont("Arial", "", "8");

    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("15", "10", "Nutrients", "1", "0", "C", true);
    $pdf->Cell("30", "10", "Soil Reaction (PH)", "1", "0", "C", true);
    $pdf->Cell("40", "10", "Electrical Conductivity (EC)", "1", "0", "C", true);
    $pdf->Cell("30", "10", "Organic Carbon (OC)", "1", "0", "C", true);
    $pdf->Cell("25", "10", "Nitrogen (N)", "1", "0", "C", true);
    $pdf->Cell("25", "10", "Phosphate (P2O5)", "1", "0", "C", true);
    $pdf->Cell("25", "10", "Potash (K2O)", "1", "1", "C", true);


    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("15", "10", "References", "1", "0", "C", true);
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C");
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C");
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C");
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C");
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C");
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C");

    $pdf->SetFont("Arial", "B", "8");

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("15", "10", "Finding", "1", "0", "C", true);
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    $pdf->SetFillColor(252, 79, 68);
    $pdf->Cell("15", "10", "Ratings", "1", "0", "C", true);
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    // Space
    $pdf->Cell("0", "20", "", "", "1", "C");

    $pdf->SetFont("Arial", "B", "12");
    $pdf->SetFillColor(231, 222, 220);
    $pdf->Cell("85", "10", "Secondary Elements in PPM", "1", "0", "", true);
    $pdf->Cell("0", "10", "Micronutrients in PPM", "1", "1", "", true);

    $pdf->SetFont("Arial", "", "8");

    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("15", "10", "Nutrients", "1", "0", "C", true);
    $pdf->Cell("30", "10", "Soil Reaction (PH)", "1", "0", "C", true);
    $pdf->Cell("40", "10", "Electrical Conductivity (EC)", "1", "0", "C", true);
    $pdf->Cell("30", "10", "Organic Carbon (OC)", "1", "0", "C", true);
    $pdf->Cell("25", "10", "Nitrogen (N)", "1", "0", "C", true);
    $pdf->Cell("25", "10", "Phosphate (P2O5)", "1", "0", "C", true);
    $pdf->Cell("25", "10", "Potash (K2O)", "1", "1", "C", true);

    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("15", "10", "References", "1", "0", "C", true);
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C");
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C");
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C");
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C");
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C");
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C");

    $pdf->SetFont("Arial", "B", "8");

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("15", "10", "Finding", "1", "0", "C", true);
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    $pdf->SetFont("Arial", "", "8");

    $pdf->SetFillColor(252, 79, 68);
    $pdf->Cell("15", "10", "Ratings", "1", "0", "C", true);
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    $pdf->Cell("0", "10", "", "", "1", "C");
    $pdf->Cell("0", "0.2", "", "1", "1", "C");

    $pdf->Cell("0", "10", "", "", "1", "C");

    $pdf->SetFont("Arial", "B", "12");
    $pdf->SetFillColor(231, 222, 220);
    $pdf->Cell("0", "10", "Fertilizer Recommendation", "1", "1", "", true);
    $pdf->SetFont("Arial", "", "10");
    $pdf->SetFillColor(152, 252, 231);
    $pdf->Cell("75", "10", "Target Yield : ", "1", "0", "C", true); // variables
    $pdf->Cell("0", "10", "50 q/hq", "1", "1", "C"); // variables
    $pdf->Cell("75", "10", "Recommendation For The Land : ", "1", "0", "C", true); // variables
    $pdf->Cell("0", "10", "1 Hectare", "1", "1", "C"); // variables

    $pdf->SetFillColor(231, 222, 220);
    $pdf->Cell("45", "10", "Crop", "1", "0", "C", true);
    $pdf->Cell("35", "10", "Compost", "1", "0", "C", true);
    $pdf->Cell("35", "10", "Nitrogen (N)", "1", "0", "C", true);
    $pdf->Cell("45", "10", "Phosphate (P)", "1", "0", "C", true);
    $pdf->Cell("0", "10", "Potash (K)", "1", "1", "C", true);

    $pdf->SetFillColor(249, 253, 126);
    $pdf->Cell("45", "10", "Paddy", "1", "0", "C", true); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->SetFillColor(133, 234, 90);
    $pdf->Cell("45", "10", "Wheat", "1", "0", "C", true); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->SetFillColor(68, 252, 121);
    $pdf->Cell("45", "10", "Barley", "1", "0", "C", true); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->SetFillColor(252, 79, 68);
    $pdf->Cell("45", "10", "Potato", "1", "0", "C", true); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->Cell("0", "10", "", "", "1", "C");

    $pdf->Cell("0", "0.2", "", "1", "1", "C");

    $pdf->Cell("0", "20", "", "", "1", "C");
    $pdf->SetFont("Arial", "B", "12");
    $pdf->Cell("0", "20", "Thank You for your Support", "1", "1", "C");


    $fileName =  'Reports/SoilTestReport/' . time() . "_" . $farmername . ".pdf";

    // $pdf->Output();
    $pdf->Output($fileName, "F");
    return $fileName;
}
