<?php

require('../database.php');
require('../header.php');



 $query = "select userName, FName, LName, Age, Email, Year from Guys";
 
 

	
	

	
	 $result = $db->query($query);

  	$num_results = $result->num_rows;
	//prints the number of rows returned (which is the number of books for this query)
	if ($num_results > 1)
	{
		echo "<h3>Guys - ".$num_results."</h3><br />\n";
	  echo "<div class=\"results-div\">\n";
  
	  echo "<table class=\"grid_table\" border=\"0\" cellspacing=\"0\">\n";
	  echo '<tr class="grid_header">';
	  echo '<td>User Name</td>';
	  echo '<td>First Name</td>';
	  echo '<td>Last Name</td>';
	  echo '<td>Age</td>';
	  echo '<td>Email</td>';
	  echo '<td>Year</td>';
	  echo "<td>&nbsp;</td>\n<td>&nbsp;</td>\n<td>&nbsp;</td>";
	  echo '</tr>';
	}
	else
	echo "You're not supposed to be here...";

	$result->free();   //free up the results
	$db->close();  //closes the database
?>