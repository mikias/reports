<?php 
// This file defines the main functions that give the reporting system its functionality
// You need to add a User to your database (localhost -> Privileges) with full privileges and
// with username and password both = student, and host = localhost

// Once you have done that, you should not need to change anything on this page

// Establish a connection with the data source, and define the SQL
$db = mysqli_connect("localhost", "student", "student", "Group10_DB3 (1).sql") or die("I cannot connect to the database because: " . mysqli_connect_error());  // connect to the database server   

function print_report($query, $db){

	$result=mysqli_query($db, $query) or die("Error in query: '$query'");
	$fields=mysqli_num_fields($result);

	print "<table class=\"report\">\n\t<tr>";
	for ($i=0; $i < mysqli_num_fields($result); $i++){ //Table Header
		print "<th class=\"header\">".mysqli_fetch_field($result)->name."</th>"; 
	}
	print "</tr>\n";
	$i=0;
	while ($row = mysqli_fetch_row($result)){ //Table body
		if($i % 2){ print "<tr class=\"odd\">";
	}else{ print "<tr class=\"even\">";}
	++$i;
	for($f=0; $f < $fields; $f++){
		print "<td>$row[$f]</td>"; 
	}
}
print "</tr>\n</table>";
}

function listbox($query, $name, $previous, $db){

	$result=mysqli_query($db, $query) or die("Query ($query) is incorrect!");
	print "<select name=\"$name\">\n";
	while ($row = mysqli_fetch_row($result)){ //Table body
		if($row[0] == $previous){
			print "\t<option value=\"$row[0]\" selected=\"selected\">$row[0]</option>\n";
		}else{
			print "\t<option value=\"$row[0]\">$row[0]</option>\n";
		}
	}
	print "</select>";

}
?>