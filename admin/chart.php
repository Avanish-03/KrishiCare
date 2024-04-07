<?php // content="text/plain; charset=utf-8"
// session_start(); // Start the session if not already started
require_once('../Backend/config.php');
require_once('../Backend/Graph/jpgraph-4.4.2/src/jpgraph.php');
require_once('../Backend/Graph/jpgraph-4.4.2/src/jpgraph_pie.php');
require_once('../Backend/Graph/jpgraph-4.4.2/src/jpgraph_pie3d.php');
// Some data

$farmerquery = "SELECT count(*) as total FROM `farmer_detail`;";
$labquery = "SELECT count(*) as total FROM `laboratory_detail`;";
$reportquery = "SELECT count(*) as total FROM `report_detail`;";

$farmerresult = mysqli_query($con, $farmerquery);
if ($farmerresult) { // Check if the query was successful
    $row = mysqli_fetch_assoc($farmerresult);
    $totalfarmer = $row['total'];
} else {
    $totalfarmer = 0; // Set to 0 if query fails
}

$labresult = mysqli_query($con, $labquery);
if ($labresult) { // Check if the query was successful
    $row = mysqli_fetch_assoc($labresult);
    $totallab = $row['total'];
} else {
    $totallab = 0; // Set to 0 if query fails
}

$reportresult = mysqli_query($con, $reportquery);
if ($reportresult) { // Check if the query was successful
    $row = mysqli_fetch_assoc($reportresult);
    $totalreport = $row['total'];
} else {
    $totalreport = 0; // Set to 0 if query fails
}
// $totavisitor = 0;
$data = array($totalfarmer, $totallab, $totalreport);
$labels = array("Farmers", "Laboratories", "Reports"); // Labels for the data

// Create the Pie Graph. 
$graph = new PieGraph(550, 320);

$theme_class = "";
// $graph->SetTheme(new $theme_class());
// $graph->SetBackgroundColor('transparent');

// Set A title for the plot
$graph->title->Set("Active users in Krishicare");
$graph->SetBox(true);
$graph->SetTitleBackgroundFillStyle("auto", "transparent", "white");
// Create
// $p1 = new PiePlot($data);
$p1 = new PiePlot3D($data);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
$p1->ExplodeSlice(1);
// $p1->SetSliceColors(array('#16a34a', '#DC143C', '#facc15'));
$p1->SetLegends($labels);

ob_start();
$graph->Stroke();
$image_data = ob_get_clean();
// Set the session variable with the image data
$_SESSION['chart_image'] = $image_data;
?>