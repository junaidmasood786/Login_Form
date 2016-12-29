		
		
		function GuestMode()
		{
			window.open('Guest.php','_self');
		}
		function SignOut()
		{
			window.open('index.php','_self');
		}
		function SignUp()
		{
			window.open('Signup.php','_self');
		}
		function Member()
		{
			var u=document.getElementById('Username');
			var p=document.getElementById('Password');
			
			u.defaultValue='Member';
			p.defaultValue='member'
		}
		function Admin()
		{
			var u=document.getElementById('Username');
			var p=document.getElementById('Password');
			
			u.defaultValue='Admin';
			p.defaultValue='admin';
		}
		function showMe()
		{
			var a=document.getElementById('Data');
			a.style.visibility="visible";
	
			var d=document.getElementById('h');
			d.style.visibility="visible";
			
			//var s=document.getElementById('s');
			//s.style.visibility="hidden";		
		}