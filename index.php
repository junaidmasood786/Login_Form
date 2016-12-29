<html>
	<head>
    	<title></title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <center>
        <div class="con">
        <form method="POST" action="index.php" style="width:600">
            <div align="center" style="background-image:url(images/Background.jpg)">
          <h2 style="margin-left:230; margin-top:5">Login Form
            <input style="margin-bottom:6; font-size:10px; margin-left:100; width:100" type="button" 
                    name="showBtn2" value="Guest" onClick="GuestMode()">
          </h2>
                <div style="margin-left:20" class="text">
                  <label for="Username">Username: </label>
                    <input width="300px" type="text" name="username" placeholder="Enter UserName" value="<?php echo $User; ?>" maxlength="10" id="Username" />
                    
                    <label for="Password">Password: </label>
                    <input width="300px" type="password" id="Password" name="password" placeholder="Enter Password" value="<?php echo $Pass; ?>" maxlength="10"/></td>
          </div>
          <div style="margin-left:60; margin-top:5" class="text">
          </div>
                    <input style="margin-top:5; margin-left:50 ;height:auto" type="submit" name="sub" value="Login">
                    <input type="button" name="signup" value="SignUp" onClick="SignUp()"
                    style="width:auto; font-size:13px; margin-bottom:10"/>
<div>
          </div>
          </form>
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
	
	public function __construct($username,$password)
	{
		$this->cusername=$username;
		$this->cpassword=$password;
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
	
	public function info()
	{
		echo 'Username: '. $this->cusername . '</br>';
		echo 'Password: '.$this->cpassword . '</br>';
	}
}

if(isset($_POST['sub']))
{
	$Username=$_POST['username'];
	$Password=$_POST['password'];
	$Date=date('d M, Y G:i:s');
	
	$admin = new User($Username,$Password);
	$member = new User($Username,$Password);
	
	$select="SELECT * FROM `member`WHERE m_name='$Username' AND m_pass='$Password'
	UNION SELECT * FROM `admin` WHERE a_name='$Username' AND a_pass='$Password'";
	$run=mysqli_query($conn,$select);
	
	$select1="SELECT * FROM `member`
	UNION SELECT * FROM `admin`";
	$run1=mysqli_query($conn,$select1);

	
	if(empty($Username) || empty($Password))
	{
		is_empty();
	}
	else
	{
		while($row=mysqli_fetch_array($run))
		{
			if($row)
			{
					if($row[1]=='Junaid' && $row[2]=='ssss')
					{
						//$insert="INSERT INTO `admin` (`a_name`, `a_pass`, `created_date`) VALUES ('$Username', '$Password', '$Date')";
						//$run=mysqli_query($conn,$insert);
						//if($run)
						//{
						//	echo '<pre align="center" class="success">Successfully Registed</pre>';
							header("Location: Admin.php");
						//	echo '<p style="visibility:hidden"';
						//	echo '<p id="Data">AdminPanel</br>';
						//	echo '<p id="Data">'.$member->Info().'</p>';
						//}
						exit;
					}
					else if($row[1]==$Username && $row[2]==$Password)
					{
						//$insert="INSERT INTO `member` (`m_name`, `m_pass`, `created_date`) VALUES ('$Username', '$Password', '$Date')";
						//$run=mysqli_query($conn,$insert);
						//if($run)
						//{
						//	echo '<pre align="center" class="success">Successfully Registed</pre>';
							header("Location: Member.php");
						//	echo '<p style="visibility:hidden"';
						//	echo '<p id="Data">MemberPanel</br>';
						//	echo '<p id="Data">'.$member->Info().'</p>';
						//}
						exit;
					}
				}
		}
		while($row=mysqli_fetch_array($run1))
		{
				if($row[1]!=$Username || $row[2]!=$Password)
				{
					error();
				}
				exit;
		}
	}
	//$U=preg_replace("#[^0-9a-z]#i","",$Username);		
}

if(isset($_POST['member']))
{
	$select="SELECT * FROM `member`";
	$run=(mysqli_query($conn,$select));
	$Type=$_POST['radio'];
	
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
		while($row=mysqli_fetch_array($run))
		{
			echo '<tr align="center">';
			echo '<td>' . $row['m_id'] .'</td>';
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
		}
		echo '</table></div>';
	}
}

if(isset($_POST['admin']))
{
	$select="SELECT * FROM `admin`";
	$run=mysqli_query($conn,$select);
	$Type=$_POST['radio'];
	
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
		while($row=mysqli_fetch_array($run))
		{
			echo '<tr align="center">';
			echo '<td>'.$row['a_id'].'</td>';
			echo '<td>'.$row['a_name'].'</td>';
			echo '<td>'.$row['a_pass'].'</td>';
			echo '<td>'.$row['created_date'].'</td>';
			echo '<td>
					<a href="admin_edit.php?edit='.$row['a_id'].'">Edit</a>
				</td>';
			echo '<td>
					<a href="admin_del.php?del='.$row['a_id'].'">Delete</a>
				</td>';
			echo '</tr>';
		}
		echo '</table></div>';
	}
}
	
if(isset($_POST['find']))
{
	$Name=$_POST['findText'];
	$Name= preg_replace("#[^0-9a-z]#i","",$Name);
	$select="SELECT * FROM `guest` WHERE `g_name` LIKE '%{$Name}%' OR `g_pass` LIKE '%{$Name}%'
	UNION
	SELECT * FROM `member` WHERE `m_name` LIKE '%{$Name}%' OR `m_pass` LIKE '%{$Name}%'
	UNION
	SELECT * FROM `admin` WHERE `a_name` LIKE '%{$Name}%' OR `a_pass` LIKE '%{$Name}%'";
	$run=mysqli_query($conn,$select);
		if(mysqli_num_rows($run)>0)
		{
			if(!empty($Name))
			{
				search();
					while($row=mysqli_fetch_array($run))
					{
						echo '<tr align="center">';
						echo '<td>'.$row['g_name'].'</td>';
						echo '<td>'.$row['g_pass'].'</td>';
						echo '<td>'.$row['created_date'].'</td>';
						echo '</tr>';
					}
				echo '</table></div>';
			}
			else
			{
				search();
				echo '<tr class="find" align="center"><td colspan="3">';
				echo '<span id="Data" style="color:red;">Please Enter the Search Field</span>';
				echo '</td></tr>';
				echo '<table></div>';
			}
	}
	else
	{
		search();
		echo '<tr class="find" align="center"><td colspan="3">';
		echo '<span id="Data" style="color:red;">No Record Found</span>';
		echo '</td></tr>';
		echo '<table></div>';
	}}

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