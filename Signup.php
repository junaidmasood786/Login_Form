<html>
	<head>
    	<title></title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
		<script type="text/javascript" src="js/script.js"></script>
    </head>
    <body>
        <center>
        <div class="con">
        <form method="GET" action="SignUp.php" style="width:auto">
            <table border="0" align="center">
            <div style="background-image:url(images/Background.jpg); color:#FFF">
                <tr  align="center">
                	<th colspan="2" style="font-size:36px">
                    	<p class="regf">Registration Form</p>
                     </th>
                 </tr>
                 <tr>
                     <td align="right">
                        Username: <sup>*</sup></td><td><input type="text" name="username" style="width:250" placeholder=" Username" /><br />
                     </td>
                  </tr>
                  <tr>
                	<td align="right">
                    	Password: <sup>*</sup></td><td><input type="password" name="password" style="width:250" placeholder=" Password"/><br />
                     </td>
                   </tr>
                    <tr>
                	  <td align="right">
                    	Date of Birth: <sup>*</sup></td><td><select name="DOBM" size="1">
                                        <option selected="selected"> - Month - </option>
                                        <option value="January">January</option>
                                        <option value="Febuary">Febuary</option>
                                        <option value="March">March</option>
                                        <option value="April">April</option>
                                        <option value="May">May</option>
                                        <option value="June">June</option>
                                        <option value="July">July</option>
                                        <option value="August">August</option>
                                        <option value="September">September</option>
                                        <option value="October">October</option>
                                        <option value="November">November</option>
                                        <option value="December">December</option>
                                    </select>

                                    <select name="DOBD" size="1" style="width:64">
                                      <option selected> - Day - </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                          </select>

                                    <select name="DOBY" size="1"  style="width:83">
                                      <option selected> - Year - </option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        
                          </select><br />
                    	</td>
                   </tr>
                    <tr>
                	  <td align="right">
                    	Email: <sup>*</sup></td><td><input type="email" name="email" style="width:250" placeholder=" Email"/><br />
                    	</td>
                   </tr>
                   <tr>
                	<td align="right">
                    	 Name: <sub>*</sub>
                         </td><td><input type="text" name="name" style="width:250" placeholder=" Name"/><br />
                         </td>
                   </tr>
                    <tr>
                	  <td align="right">
                    	Surname: <sub>*</sub>
                        </td><td><input type="text" name="surname" style="width:250" placeholder=" Surname"/><br />
                        </td>
                   </tr>
                   <tr>
                    <tr>
                	  <td align="right">
                    	Telephone: <sub>*</sub>
                        </td><td><input type="tel" name="telephone" style="width:250" placeholder=" Telephone"/><br />
                    	</td>
                   </tr>
                    <tr>
                	  <td align="right">
                    	Address: <sub>*</sub>
                        </td><td><input type="text" name="address" style="width:250" placeholder=" Address"/><br />
                    	</td>
                   </tr>
                    <tr>
                	  <td align="right">
                    	Post Code: <sub>*</sub>
                        </td><td><input type="number" name="postalcode" style="width:250" placeholder=" PostalCode"/><br />
						</td>
                   </tr>

			<tr> 
            	<td colspan="2">
                	<pre style="color:#C30">Note**: 
   Please make sure your details are correct before submitting form
	  and that all fields marked with * are completed!.
                    </pre>
                    </td>
                   </tr>
                   <tr align="center">
                   	  <td colspan="2">
                   		<input type="submit" name="signup" value="SignUp" style="height:auto; margin-top:3">
                        </td>
                   </tr>
              </div>
        </div>
      </center>
    </body>
</html>


<?php

include('functions\db.php');

class User
{
	public $cname, $csurname, $cusername, $cpassword, $cdobm, $cbobd, 
	$cdoby, $cemail, $ctelephone, $caddress, $cpostalcode;
	
	public function __construct($Name, $Surname, $Username, $Password,
	$DOBM, $DOBD, $DOBY, $Email, $Telephone, $Address, $Postalcode)
	{
		$this->cname=$Name;
		$this->csurname=$Surname;
		$this->cusername=$Username;
		$this->cpassword=$Password;
		$this->cdobm=$DOBM;
		$this->cdobd=$DOBD;
		$this->cdoby=$DOBY;
		$this->cemail=$Email;
		$this->ctelephone=$Telephone;
		$this->caddress=$Address;
		$this->cpostalcode=$Postalcode;
	}
	
	public function info()
	{
		echo 'Name: '. $this->cname=$Name . '</br>';;
		echo 'Surname: '. $this->csurname=$Surname . '</br>';;
		echo 'Username: '. $this->cusername=$Username . '</br>';;
		echo 'Password: '. $this->cpassword=$Password . '</br>';;
		echo 'DOB(Month): '. $this->cdobm=$DOBM . '</br>';;
		echo 'DOB(Day): '. $this->cdobd=$DOBD . '</br>';;
		echo 'DOB(Date): '. $this->cdoby=$DOBY . '</br>';;
		echo 'Email: '. $this->cemail=$Email . '</br>';;
		echo 'Telephone: '. $this->ctelephone=$Telephone . '</br>';;
		echo 'Address: '. $this->caddress=$Address . '</br>';;
		echo 'PostalCode: '. $this->cpostalcode=$Postalcode . '</br>';;
	}
}

if(isset($_GET['signup']))
{	
	$Name=$_GET['name'];
	$Surname=$_GET['surname'];
	$Username=$_GET['username'];
	$Password=$_GET['password'];
	$DOBD=$_GET['DOBD'];
	$DOBM=$_GET['DOBM'];
	$DOBY=$_GET['DOBY'];
	$Email=$_GET['email'];
	$Telephone=$_GET['telephone'];
	$Address=$_GET['address'];
	$Postalcode=$_GET['postalcode'];
	$Date=date('d M, Y G:i:s');
	
	$Signup = new User($Name, $Surname, $Username, $Password,
	$DOBM, $DOBD, $DOBY, $Email, $Telephone, $Address, $Postalcode);
	
	//if(empty($Name) || empty($Username) || empty($Password) || empty($DOBM) || 
	//empty($DOBD) || empty($DOBY) || empty($Email))
	
	$Insert="INSERT INTO `signup` (`Name`, `Surname`, `Username`, `Password`, `DOBD`, `DOBM`, `DOBY`, `Email`, `Telephone`, 
	`Address`, `Postal_code`, `Created_date`) 
		VALUES 
  ('$Name', '$Surname', '$Username', '$Password', '$DOBD', '$DOBM', '$DOBY', '$Email', '$Telephone', '$Address', '$Postalcode', '$Date')";
		
	$Run=mysqli_query($conn,$Insert);

	if ($Run)
	{
		echo '<script language="javascript">';
        echo 'setTimeout(function(){ window.close()},2000)';
        echo "window.close();</script>";
	}
	else
	{
		echo 'Not Run';
	}
		
	//header("location: index.php");
	/*
	$admin = new User($Username,$Password);
	$member = new User($Username,$Password);
	
	while($row=mysqli_fetch_array($run))
	{
		if($row)
		{
			if(empty($Username) || empty($Password))
			{
				is_empty();
			}
			else
			{
				$insert="INSERT INTO `signup` (`Name`, `Surname`, `Username`, `Password`, `DOB`, `Email`,
				`Telephone`, `Address`, `Postal_code`, `Created_date`)
				VALUES ('', NULL, '', '', '', '', NULL, NULL, NULL, '')";
					$run=mysqli_query($conn,$insert);
					if($run)
					{
						//echo '<pre align="center" class="success">Successfully Registed</pre>';
						echo "<script>window.open('Admin.php')</script>";
						echo '<p style="visibility:hidden"';
						echo '<p id="Data">AdminPanel</br>';
						echo '<p id="Data">'.$member->Info().'</p>';
					}
					exit;
				}
				if($row[1]==$Username && $row[2]==$Password)
				{
					$insert="INSERT INTO `member` (`m_id`, `m_name`, `m_pass`, `created_date`) VALUES (NULL, '$Username', '$Password', '$Date')";
					$run=mysqli_query($conn,$insert);
					if($run)
					{
						echo "<script>window.open('Member.php')</script>";
						echo '<p style="visibility:hidden"';
						echo '<p id="Data">MemberPanel</br>';
						echo '<p id="Data">'.$member->Info().'</p>';
					}
				}
				else if(!$row[1]==$Username && !$row[2]==$Password )
				{
					error();
				}
			}
		}*/
	}
	//$U=preg_replace("#[^0-9a-z]#i","",$Username);
	
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