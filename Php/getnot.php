<?php
header('Access-Control-Allow-Origin: *'); //To ajax request from cross domains also
mysql_connect("localhost", "root", ""); //connecting to database
mysql_select_db("project");
		$query = "select * from project.notifications";
		$output = mysql_query($query);
		$result_array = array();
		if(mysql_num_rows($output))
		{
			while($row=mysql_fetch_assoc($output))
			{
				$result_array[] = $row;
			}
		}
		echo json_encode($result_array); 
?>