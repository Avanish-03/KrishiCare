<?php

function generateReport($farmername,$farmeremail)
{
    $msg = "Dear, $farmername The Report of your soil is as below. We have also provided Fertilizer Recommendation for the soil.";
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", "16");
    $pdf->Cell("0", "10", "Soil Health Report", "1", "1", "C");
    $pdf->Cell("0", "10", "", "", "1", "C");
    
    $pdf->SetFont("Arial", "", "12");
    $pdf->Write("10", $msg);
    $pdf->Cell("0", "10", "", "", "1", "C");
    $pdf->Write("10", $farmeremail);

    $pdf->Cell("0", "20", "", "", "1", "C");
    $pdf->Cell("0", "10", "Routine Analysis Report", "1", "1", "");

    $pdf->SetFont("Arial", "", "8");

    $pdf->Cell("15", "10", "Nutrients", "1", "0", "C");
    $pdf->Cell("30", "10", "Soil Reaction (PH)", "1", "0", "C");
    $pdf->Cell("40", "10", "Electrical Conductivity (EC)", "1", "0", "C");
    $pdf->Cell("30", "10", "Organic Carbon (OC)", "1", "0", "C");
    $pdf->Cell("25", "10", "Nitrogen (N)", "1", "0", "C");
    $pdf->Cell("25", "10", "Phosphate (P2O5)", "1", "0", "C");
    $pdf->Cell("25", "10", "Potash (K2O)", "1", "1", "C");

    $pdf->Cell("15", "10", "References", "1", "0", "C");
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C");
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C");
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C");
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C");
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C");
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C");

    $pdf->SetFont("Arial", "B", "8");

    $pdf->Cell("15", "10", "Finding", "1", "0", "C");
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    $pdf->Cell("15", "10", "Ratings", "1", "0", "C");
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    // Space
    $pdf->Cell("0", "20", "", "", "1", "C");

    $pdf->SetFont("Arial", "B", "12");
    $pdf->Cell("85", "10", "Secondary Elements in PPM", "1", "0", "");
    $pdf->Cell("0", "10", "Micronutrients in PPM", "1", "1", "");

    $pdf->SetFont("Arial", "", "8");

    $pdf->Cell("15", "10", "Nutrients", "1", "0", "C");
    $pdf->Cell("30", "10", "Soil Reaction (PH)", "1", "0", "C");
    $pdf->Cell("40", "10", "Electrical Conductivity (EC)", "1", "0", "C");
    $pdf->Cell("30", "10", "Organic Carbon (OC)", "1", "0", "C");
    $pdf->Cell("25", "10", "Nitrogen (N)", "1", "0", "C");
    $pdf->Cell("25", "10", "Phosphate (P2O5)", "1", "0", "C");
    $pdf->Cell("25", "10", "Potash (K2O)", "1", "1", "C");

    $pdf->Cell("15", "10", "References", "1", "0", "C");
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C");
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C");
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C");
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C");
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C");
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C");

    $pdf->SetFont("Arial", "B", "8");

    $pdf->Cell("15", "10", "Finding", "1", "0", "C");
    $pdf->Cell("30", "10", "6.5 - 7.5", "1", "0", "C"); // variables
    $pdf->Cell("40", "10", "1.0 - 2.0", "1", "0", "C"); // variables
    $pdf->Cell("30", "10", "0.5 - 0.75", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "280 - 560", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "23 - 56", "1", "0", "C"); // variables
    $pdf->Cell("25", "10", "130 - 335", "1", "1", "C"); // variables

    $pdf->SetFont("Arial", "", "8");
    $pdf->Cell("15", "10", "Ratings", "1", "0", "C");
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
    $pdf->Cell("0", "10", "Fertilizer Recommendation", "1", "1", "");
    $pdf->SetFont("Arial", "", "10");
    $pdf->Cell("75", "10", "Target Yield : ", "1", "0", "C"); // variables
    $pdf->Cell("0", "10", "50 q/hq", "1", "1", "C"); // variables
    $pdf->Cell("75", "10", "Recommendation For The Land : ", "1", "0", "C"); // variables
    $pdf->Cell("0", "10", "1 Hectare", "1", "1", "C"); // variables

    $pdf->Cell("45", "10", "Crop", "1", "0", "C");
    $pdf->Cell("35", "10", "Compost", "1", "0", "C");
    $pdf->Cell("35", "10", "Nitrogen (N)", "1", "0", "C");
    $pdf->Cell("45", "10", "Phosphate (P)", "1", "0", "C");
    $pdf->Cell("0", "10", "Potash (K)", "1", "1", "C");

    $pdf->Cell("45", "10", "Paddy", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->Cell("45", "10", "Wheat", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->Cell("45", "10", "Barley", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->Cell("45", "10", "Potato", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "25", "1", "0", "C"); //variables
    $pdf->Cell("45", "10", "28.73", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36.79", "1", "1", "C"); //variables

    $pdf->Cell("0", "20", "", "", "1", "C");

    $pdf->SetFont("Arial", "B", "12");
    $pdf->Cell("0", "15", "Fertilizer To Be Used as per Market Avalability (In Kg)", "1", "1", "");
    $pdf->SetFont("Arial", "", "10");

    $pdf->Cell("35", "10", "Crop", "1", "0", "C");
    $pdf->Cell("35", "10", "Compost", "1", "0", "C");
    $pdf->Cell("35", "10", "DAP 18:46:00", "1", "0", "C");
    $pdf->Cell("25", "10", "UREA", "1", "0", "C");
    $pdf->Cell("35", "10", "SSP 16", "1", "0", "C");
    $pdf->Cell("0", "10", "MOP 60", "1", "1", "C");

    $pdf->Cell("35", "20", "Paddy", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "1000", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "54", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "22", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "51", "1", "1", "C"); //variables

    $pdf->Cell("35", "0", "", "", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 20", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 1.1", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "X 0.4", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "X 1", "1", "1", "C"); //variables

    $pdf->Cell("35", "20", "Wheat", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "1000", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "108", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "1", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "90", "1", "1", "C"); //variables

    $pdf->Cell("35", "0", "", "", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 20", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 2.2", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "X 0", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "X 1.8", "1", "1", "C"); //variables

    $pdf->Cell("35", "20", "Barley", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "1000", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "91", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "8", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "36", "1", "1", "C"); //variables

    $pdf->Cell("35", "0", "", "", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 20", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 1.8", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "X 0.2", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "X 0.7", "1", "1", "C"); //variables

    $pdf->Cell("35", "20", "Potato", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "1000", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "24", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "34", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "7", "1", "1", "C"); //variables

    $pdf->Cell("35", "0", "", "", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 20", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 0.5", "1", "0", "C"); //variables
    $pdf->Cell("25", "10", "X 0.7", "1", "0", "C"); //variables
    $pdf->Cell("35", "10", "X 0", "1", "0", "C"); //variables
    $pdf->Cell("0", "10", "X 0.1", "1", "1", "C"); //variables

    $pdf->Cell("0", "20", "", "", "1", "C");
    $pdf->Cell("0", "20", "Thank You for your Support", "1", "1", "C");

    $fileName =  'Reports/SoilTestReport/' . time() . "_" . $farmername . ".pdf";

    // $pdf->Output();
    $pdf->Output($fileName, "F");
    return $fileName;
}
