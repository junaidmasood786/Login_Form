<html>
	<head>
    	<title></title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <center>
        <div class="con">
        <form method="POST" action="Admin.php" style="width:600">
            <div align="center" style="background-image:url(images/Background.jpg)">
                <h2>Admin Panel</h2>
                <div style="margin-left:20" class="text">
                	<div class="find">
                    <input type="textarea" name="findText" placeholder="Enter Member Name..."
                    maxlength="15" style="width:255; height:25; font-size:8px;" />
                    <input type="submit" name="find" value="Find" style="width:100; height:25; font-size:8px;"/>
                  </div>
                  <div>
                    <input type="submit" name="member" value="Show Member Record" style="width:150; font-size:13px; margin-top:5"/>
                    <input type="submit" name="admin" value="Show Admin Record" style="width:150; font-size:13px"/>
                    <!--<input type="submit" name="guest" value="Show Guest Record" style="width:150; font-size:13px"/>-->
                  </div>
                  	<input type="submit" name="db" value="Show All Record" style="width:350; margin-top:5; margin-left:80 ;font-size:13px"/>
                    <input type="button" name="back" value="SignOut" style="width:45; height:20; margin-left:30; font-size:8px"
                    	onClick="SignOut()"/>
                  </form>
                  <pre style="margin-top:-8"> </pre>
              </div>
        </div>
      </center>
    </body>
</html>

<?php

include('functions\db.php');

class User
{
	public $cusername;
	public $cpassword;
	public $ctype;
	
	public function __construct($username,$password,$type)
	{
		$this->cusername=$username;
		$this->cpassword=$password;
		$this->ctype=$type;
	}
	
	public function set_username($username)
	{
		$this->cusername=$username;
	}
	
	public function get_username()
	{
		echo $this->cusername;
	}
	
	public function set_password($password)
	{
		$this->cpassword=$password;
	}
	
	public function get_password()
	{
		echo $this->cpassword;
	}
	
	public function set_type($type)
	{
		$this->ctype=$type;
	}
	
	public function get_type()
	{
		echo $this->ctype;
	}
	
	public function info()
	{
		echo 'Username: '. $this->cusername . '</br>';
		echo 'Password: '.$this->cpassword . '</br>';
		echo 'Type: '.$this->ctype . '</br>';
	}
}	
/*
if(isset($_POST['guest']))
{
	$select="SELECT * FROM `guest`";
	$run=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($run)>0)
	{
		echo'<div id="Data" style="margin-top:10">
				<table border="1" align="center">
					<form method="POST" action="index.php">
						<tr><td colspan="6" align="center"><h3>Guest Record</h3></td></tr>
							<tr align="center">
								<th>ID </th>
								<th>Name</th>
								<th>Password</th>
								<th>Created_Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
		';
		$count=1;
		while($row=mysqli_fetch_array($run))
		{
			echo '<tr align="center">';
			echo '<td>' . $count . '</td>';
			echo '<td>' . $row['g_name'] . '</td>';
			echo '<td>' . $row['g_pass'] . '</td>';
			echo '<td>' . $row['created_date'] . '</td>';
			echo '<td>
					<a href="Edit_guest.php?edit='.$row['g_id'].'">Edit</a>
				</td>';
			echo '<td>
					<a href="Delete_guest.php?del='.$row['g_id'].'">Delete</a>
				</td>';
			echo '</tr>';
			$count++;
		}
		echo '<td colspan="6" align="center" style="color:red; height:50; font-size:20">No More Result Found</td>';
		echo '</form></table></div>';
	}
}*/

if(isset($_POST['member']))
{
	$select="SELECT * FROM `member`";
	$run=(mysqli_query($conn,$select));
	
	if(mysqli_num_rows($run)>0)
	{
		echo'<div id="Data" style="margin-top:10">
				<table border="1" align="center">
					<form method="POST" action="index.php">
						<tr><td colspan="6" align="center"><h3>Member Record</h3></td></tr>
							<tr align="center">
								<th>ID </th>
								<th>Name</th>
								<th>Password</th>
								<th>Created_Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
		';
		$count=1;
		while($row=mysqli_fetch_array($run))
		{
			echo '<tr align="center">';
			echo '<td>' . $count .'</td>';
			echo '<td>' . $row['m_name'] .'</td>';
			echo '<td>' . $row['m_pass'] .'</td>';
			echo '<td>' . $row['created_date'] .'</td>';
			echo '<td>
					<a href="Edit_member.php?edit='.$row['m_id'].'">Edit</a>
				</td>';
			echo '<td>
					<a href="Delete_member.php?del='.$row['m_id'].'">Delete</a>
				</td>';
			echo '</tr>';
			$count++;
		}
		echo '<td colspan="6" align="center" style="color:red; height:50; font-size:20">No More Result Found</td>';
		echo '</table></div>';
	}}

if(isset($_POST['admin']))
{
	$select="SELECT * FROM `admin`";
	$run=mysqli_query($conn,$select);
	
	if(mysqli_num_rows($run)>0)
	{
		echo'<div id="Data" style="margin-top:10" align="center">
				<table border="1" align="center">
					<form method="POST" action="index.php">
						<tr><td colspan="6" align="center"><h3>Admin Record</h3></td></tr>
							<tr align="center">
								<th>ID </th>
								<th>Name</th>
								<th>Password</th>
								<th>Created_Date</th>
								<th>Edit</th>
								<th>Delete</th>
							</tr>
		';
		$count=1;
		while($row=mysqli_fetch_array($run))
		{
			echo '<tr align="center">';
			echo '<td>'.$count.'</td>';
			echo '<td>'.$row['a_name'].'</td>';
			echo '<td>'.$row['a_pass'].'</td>';
			echo '<td>'.$row['created_date'].'</td>';
			echo '<td>
					<a href="Edit_admin.php?edit='.$row['a_id'].'">Edit</a>
				</td>';
			echo '<td>
					<a href="Delete_admin.php?del='.$row['a_id'].'">Delete</a>
				</td>';
			echo '</tr>';
			$count++;
		}
		echo '<td colspan="6" align="center" style="color:red; height:50; font-size:20">No More Result Found</td>';
		echo '</table></div>';
	}}
	
if(isset($_POST['find']))
{
	$Name=$_POST['findText'];
	$Name= preg_replace("#[^0-9a-z]#i","",$Name);
	$select="SELECT * FROM `member` WHERE `m_name` LIKE '%{$Name}%' OR `m_pass` LIKE '%{$Name}%'
	UNION
	SELECT * FROM `admin` WHERE `a_name` LIKE '%{$Name}%' OR `a_pass` LIKE '%{$Name}%'";
	$run=mysqli_query($conn,$select);
	
	$select1="SELECT * FROM `member`
	UNION
	SELECT * FROM `admin`";
	$run1=mysqli_query($conn,$select1);

		if(mysqli_num_rows($run)>0 && mysqli_num_rows($run1)>0)
		{
			$count=1;
			if(!empty($Name))
			{
				search();
					while($row=mysqli_fetch_array($run))
					{
						echo '<tr align="center">';
						echo '<td>'.$count.'</td>';
						echo '<td>'.$row['m_name'].'</td>';
						echo '<td>'.$row['m_pass'].'</td>';
						echo '<td>'.$row['created_date'].'</td>';
						echo '</tr>';
						$count++;
					}
				echo '<td colspan="6" align="center" style="color:red; height:50; font-size:20">No More Result Found</td>';
				echo '</table></div>';
			}
			else
			{
				echo'<div id="Data" style="margin-top:10" align="center">
				<table border="1" align="center">
					<form method="POST" action="index.php">
						<tr><td colspan="6" align="center"><h3>All Record</h3></td></tr>
							<tr align="center">
								<th>ID </th>
								<th>Name</th>
								<th>Password</th>
								<th>Created_Date</th>
							</tr>
				';
					while($row=mysqli_fetch_array($run1))
					{
						echo '<tr align="center">';
						echo '<td>'.$count.'</td>';
						echo '<td>'.$row['m_name'].'</td>';
						echo '<td>'.$row['m_pass'].'</td>';
						echo '<td>'.$row['created_date'].'</td>';
						echo '</tr>';
						$count++;
					}
				echo '<td colspan="6" align="center" style="color:red; height:50; font-size:20">No More Result Found</td>';
				echo '</table></div>';
			}
	}
	else
	{
		search();
		echo '<tr class="find" align="center"><td colspan="4">';
		echo '<span id="Data" style="color:red;">No Record Found</span>';
		echo '</td></tr>';
		echo '<table></div>';
	}
}

if(isset($_POST['db']))
{
	$select="SELECT * FROM `member` UNION SELECT * FROM `admin`";
	$run=mysqli_query($conn,$select);
	if(mysqli_num_rows($run)>0)
	{
		echo'<div id="Data" style="margin-top:10" align="center">
				<table border="1" align="center">
					<form method="POST" action="index.php">
						<tr><td colspan="6" align="center"><h3>All Record</h3></td></tr>
							<tr align="center">
								<th>ID </th>
								<th>Name</th>
								<th>Password</th>
								<th>Created_Date</th>
							</tr>
		';
		$count=1;
		while($row=mysqli_fetch_array($run))
		{
			echo '<tr align="center">';
			echo '<td>'.$count.'</td>';
			echo '<td>'.$row['m_name'].'</td>';
			echo '<td>'.$row['m_pass'].'</td>';
			echo '<td>'.$row['created_date'].'</td>';
			echo '</tr>';
			$count++;
		}
		echo '<td colspan="6" align="center" style="color:red; height:50; font-size:20">No More Result Found</td>';
		echo '</table></div>';
	}
}

function search()
{
	include('functions\find_res.php');
}

function find_empty()
{
	include('functions\find_isEmpty.php');
}

function error()
{
	echo '<p id="Data">Your Entered Username or Password Wrong </br>
	<style>
		input[type="text"]
		{
			border-color:red;
			font-size:15;
			background-color:#FF9B9B;
		}
		input[type="password"]
		{
			border-color:red;
			font-size:15;
			background-color:#FF9B9B;
		}
	</style></p>';}

function is_empty()
{
	echo '<p id="Data">Please Enter the Username or Password, You Missed Some Fields. </br>
	<style>
		input[type="text"]
		{
			border-color:red;
			font-size:15;
			background-color:#FF9B9B;
		}
		input[type="password"]
		{
			border-color:red;
			font-size:15;
			background-color:#FF9B9B;
		}
	</style></p>';
}

?>