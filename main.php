<?php // This is the main navigation page for the reporting system
// The only information you should need to change to run new reports is within these first 16 lines (other than adding additional reports)

$page_title = "Cruiz Management Services";
$page_header = "Cruiz Management Made Easy";

$report1_name = "Customer Management";
$page_header1 = "Here you can Manage Existing and new Customers";
$report1_page = "del1.php";

$report2_name = "Employee Management";
$page_header2 = "Here you can Manage Cruiz ship Personnel";
$report2_page = "del2.php";

$report3_name = "Ship Management"; 
$page_header3 = "Here you can Manage any Ship related Information";
$report3_page = "del3.php";

$report4_name = "Bar Management"; 
$page_header4 = "Here you can Manage any Food/Beverage related Information";
$report4_page = "del4.php";
?>

<?php include("functions.php"); ?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php print $page_header ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="report_style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="header">
		<br /><?php print $page_header ?><br /><hr />
	</div>
	
	<div class="main">
		<input type="button" style="width:200px; height:400px;" value=" <?php print $report1_name ?>" onclick="javascript: location.href='<?php print $report1_page ?>';" /><br /><br />

		<input type="button" style="width:200px; height:400px;" value="<?php print $report2_name ?>" onclick="javascript: location.href='<?php print $report2_page ?>';" /><br /><br />
		<input type="button" style="width:200px; height:400px;" value="<?php print $report3_name ?>" onclick="javascript: location.href='<?php print $report3_page ?>';" /><br /><br />
		<input type="button" style="width:200px; height:400px;" value="<?php print $report4_name ?>" onclick="javascript: location.href='<?php print $report4_page ?>';" /><br /><br />


	</div>

</body>
</html>