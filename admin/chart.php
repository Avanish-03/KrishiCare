<!DOCTYPE HTML>
<html>

<head>
	<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
	<script>
		window.onload = function() {
			var dataPoints = [{
					label: "WordPress",
					y: 60.0
				},
				{
					label: "Joomla",
					y: 6.5
				},
				{
					label: "Drupal",
					y: 4.6
				},
				{
					label: "Magento",
					y: 2.4
				},
				{
					label: "Blogger",
					y: 1.9
				},
				{
					label: "Shopify",
					y: 1.8
				},
				{
					label: "Bitrix",
					y: 1.5
				},
				{
					label: "Squarespace",
					y: 1.5
				},
				{
					label: "PrestaShop",
					y: 1.3
				},
				{
					label: "Wix",
					y: 0.9
				},
				{
					label: "OpenCart",
					y: 0.8
				}
			];

			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				theme: "light2",
				title: {
					text: "CMS Market Share - 2017"
				},
				axisY: {
					suffix: "%",
					scaleBreaks: {
						autoCalculate: true
					}
				},
				data: [{
					type: "column",
					yValueFormatString: "#,##0\"%\"",
					indexLabel: "{y}",
					indexLabelPlacement: "inside",
					indexLabelFontColor: "white",
					dataPoints: dataPoints
				}]
			});
			chart.render();
		}
	</script>
</head>

<body>
	<div id="chartContainer" style="height: 370px; width: 100%;"></div>
</body>

</html>