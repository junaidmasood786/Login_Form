<?php
	include ('functions\db.php');
	
	$Edit=$_GET['edit'];
	if(empty($Edit))
	{
	}
	else
	{
		$query="SELECT * From `member` WHERE m_id='$Edit' ";
		$run=mysqli_query($conn,$query);	
		while($row=mysqli_fetch_array($run))
		{
			$User=$row['m_name'];
			$Pass=$row['m_pass'];
		}
	}
		
	include ("index.php");

?>