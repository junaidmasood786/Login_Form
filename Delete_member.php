<?php
	include ('functions\db.php');
	
	$Delete=$_GET['del'];
	
	if(empty($Delete))
	{
		echo 'empty';
	}
	else
	{
		$query="DELETE From `member` WHERE m_id='$Delete' ";
		$run=mysqli_query($conn,$query);
		if($run)
		{
			echo "<meta http-equiv='refresh'";
		}
		else
		{
			echo 'nqqwqw';
		}
	}

?>