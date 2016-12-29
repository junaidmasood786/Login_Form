<?php

	include ('functions\db.php');

	$Edit=$_GET['edit'];
	if(empty($Edit))
	{	
		$Edit='';
	}
	else
	{
		$query="SELECT * From `admin` WHERE a_id='$Edit' ";
		$run=mysqli_query($conn,$query);	
		while($row=mysqli_fetch_array($run))
		{
			$User=$row['a_name'];
			$Pass=$row['a_pass'];
		}
	}
		
	include ("index.php");
?>