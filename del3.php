<?php // Simple report generating an output table based on the specified SQL statement
// The only information you should need to change to run a new report of this type is within these first nine lines

$page_title = "Cruize Management Service";
$report_title = "Ship Management";
$main_page = "main.php";

// $strSQL = "Select emp_id AS `Employee ID`, emp_firstname AS `First Name`, emp_lastname AS `Last Name`, date_format(emp_hiredate, '%m-%d-%Y') AS `Hire Date` from employee";
?>
<?Php

$todo=$_POST['todo'];

if(isset($todo) and $todo=="submit"){

	$month=$_POST['month'];

	$dt=$_POST['dt'];

	$year=$_POST['year'];

	$date_value="$month/$dt/$year";

	echo "mm/dd/yyyy format :$date_value<br>";

	$date_value="$year-$month-$dt";

	echo "YYYY-mm-dd format :$date_value<br>";

}
 // $strSQL = "SELECT Lunch_ID,Item_Number,LI_Quantity FROM Lunch_item
 //  WHERE Lunch_Date <= '$date_value'";
$strSQL = "SELECT Cust_First, Cust_Last, DATE_FORMAT(NOW(), '%Y') - DATE_FORMAT(Cust_DOB, '%Y') - (DATE_FORMAT(NOW(), '00-%m-%d') < DATE_FORMAT(Cust_DOB, '00-%m-%d')) AS AGE FROM Customer";

 // $strSQL = "SELECT Emp_LastName AS 'Employee Last Name' , Date(Emp_HireDate) AS 'Hire Date' FROM Employee WHERE Emp_HireDate <= '$date_value'";
?>

<form method=post name=f1 action=''><input type=hidden name=todo value=submit>

	<table border="0" cellspacing="0" >

		<tr><td  align=left  >   

			Month<select name=month value=''>Select Month</option>
			<option value='01'>January</option>
			<option value='02'>February</option>
			<option value='03'>March</option>
			<option value='04'>April</option>
			<option value='05'>May</option>
			<option value='06'>June</option>
			<option value='07'>July</option>
			<option value='08'>August</option>
			<option value='09'>September</option>
			<option value='10'>October</option>
			<option value='11'>November</option>
			<option value='12'>December</option>
		</select>



	</td><td  align=left  >   

	Date<select name=dt >

	<option value='01'>01</option>
	<option value='02'>02</option>
	<option value='03'>03</option>
	<option value='04'>04</option>
	<option value='05'>05</option>
	<option value='06'>06</option>
	<option value='07'>07</option>
	<option value='08'>08</option>
	<option value='09'>09</option>
	<option value='10'>10</option>
	<option value='11'>11</option>
	<option value='12'>12</option>
	<option value='13'>13</option>
	<option value='14'>14</option>
	<option value='15'>15</option>
	<option value='16'>16</option>
	<option value='17'>17</option>
	<option value='18'>18</option>
	<option value='19'>19</option>
	<option value='20'>20</option>
	<option value='21'>21</option>
	<option value='22'>22</option>
	<option value='23'>23</option>
	<option value='24'>24</option>
	<option value='25'>25</option>
	<option value='26'>26</option>
	<option value='27'>27</option>
	<option value='28'>28</option>
	<option value='29'>29</option>
	<option value='30'>30</option>
	<option value='31'>31</option>
</select>
</td><td  align=left  >   
Year(yyyy)<input type=text name=year size=4 value=2005>
<input type=submit value=Submit>
</table>
</form>


<?php include("functions.php"); ?> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title><?php print $page_title ?></title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="report_style.css" rel="stylesheet" type="text/css" />
</head>

<body>

	<div class="report-header">
		<br /><?= $report_title ?><br /><br />
	</div>

	<?php print_report($strSQL, $db); ?>

	<div class="report-footer">
		<br /><hr /><input type="button" value="Return to main page" onclick="javascript: location.href='<?php print $main_page?>';" />
	</div>

</body>
</html>