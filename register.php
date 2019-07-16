<!doctype html>
<html>
	<head>
	<title>Register</title>
		<style>
		.login-page
		{
			width: 360px;
			padding: 8% 0 0;
			margin: auto;
		}
		.form
		{
			position: relative;
			z-index: 1;
			background: #FFFFFF;
			max-width: 360px;
			margin: 0 auto 100px;
			padding: 45px;
			text-align: center;
			box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
		}
		.form input
		{
			font-family: "Roboto", sans-serif;
			outline: 0;
			background: #f2f2f2;
			width: 100%;
			border: 0;
			margin: 0 0 15px;
			padding: 15px;
			box-sizing: border-box;
			font-size: 14px;
		}
		.form button
		{
			font-family: "Roboto", sans-serif;
			text-transform: uppercase;
			outline: 0;
			background: #4CAF50;
			width: 100%;
			border: 0;
			padding: 15px;
			color: #FFFFFF;
			font-size: 14px;
			-webkit-transition: all 0.3 ease;
			transition: all 0.3 ease;
			cursor: pointer;
		}
		.form button:hover,.form button:active,.form button:focus
		{
			background: #43A047;
		}
		.form .message
		{
			margin: 15px 0 0;
			color: #b3b3b3;
			font-size: 12px;
		}
		.form .message a
		{
			color: #4CAF50;
			text-decoration: none;
		}
		.form .register-form
		{
			display: none;
		}
		.container
		{
			position: relative;
			z-index: 1;
			max-width: 300px;
			margin: 0 auto;
		}
		.container:before, .container:after
		{
			content: "";
			display: block;
			clear: both;
		}
		.container .info
		{
			margin: 50px auto;
			text-align: center;
		}
		.container .info h1
		{
			margin: 0 0 15px;
			padding: 0;
			font-size: 36px;
			font-weight: 300;
			color: #1a1a1a;
		}
		.container .info span
		{
			color: #4d4d4d;
			font-size: 12px;
		}
		.container .info span a
		{
			color: #000000;
			text-decoration: none;
		}
		.container .info span .fa
		{
			color: #EF3B3A;
		}
		body
		{
			background: #76b852;
			background: -webkit-linear-gradient(right, #76b852, #8DC26F);
			background: -moz-linear-gradient(right, #76b852, #8DC26F);
			background: -o-linear-gradient(right, #76b852, #8DC26F);
			background: linear-gradient(to left, #76b852, #8DC26F);
			font-family: "Roboto", sans-serif;
			-webkit-font-smoothing: antialiased;
			-moz-osx-font-smoothing: grayscale;
		}
		.modal
		{
				display: none;
				position: fixed;
				z-index: 1;
				padding-top: 100px;
				left: 0;
				top: 0;
				width: 100%;
				height: 100%;
				overflow: auto;
				background-color: rgb(0,0,0);
				background-color: rgba(0,0,0,0.4);
		}
		.modal-content
		{
				position: relative;
				background-color: #fefefe;
				margin: auto;
				padding: 0;
				border: 1px solid #888;
				width: 80%;
				box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
				-webkit-animation-name: animatetop;
				-webkit-animation-duration: 0.4s;
				animation-name: animatetop;
				animation-duration: 0.4s
		}
		@-webkit-keyframes animatetop
		{
				from {top:-300px; opacity:0}
				to {top:0; opacity:1}
		}
		@keyframes animatetop
		{
				from {top:-300px; opacity:0}
				to {top:0; opacity:1}
		}
		.close
		{
				color: white;
				float: right;
				font-size: 28px;
				font-weight: bold;
		}
		.close:hover,
		.close:focus
		{
				color: #000;
				text-decoration: none;
				cursor: pointer;
		}
		.modal-header
		{
				padding: 2px 16px;
				background-color: #5cb85c;
				color: white;
		}
		.modal-body
		{
				padding: 2px 16px;
				color: #5cb85c;
		}
		.modal-footer
		{
				padding: 2px 16px;
				background-color: #5cb85c;
				color: white;
		}
		.imgcontainer
		{
			text-align: center;
			margin: 24px 0 12px 0;
		}

		img.avatar
		{
			width: 40%;
			border-radius: 50%;
		}
		.status-available
		{
			color:#2FC332;
		}
		.status-not-available
		{
			color:#D60202;
		}
		</style>
		<script src="./jquery-ui-1.12.1.custom/external/jquery/jquery.js" type="text/javascript"></script>
		<script>
			function checkAvailability()
			{
				jQuery.ajax
				({
					url: "check_availability.php",
					data:'username='+$("#username").val(),
					type: "POST",
					success:function(data)
					{
						$("#user-availability-status").html(data);
					},
				error:function (){}
				});
			}
		</script>
		<script>
			function validateForm()
			{
				var x=document.forms["myForm"]["username"].value;
				if (x==null || x=="")
				{
					alert("User Name must be filled out");
					document.myForm.username.focus();
					return false;
				}
				var y=document.forms["myForm"]["pass"].value;
				if (y==null || y=="")
				{
					alert("Password name must be filled out");
					document.myForm.pass.focus();
					return false;
				}
				var z=document.forms["myForm"]["firstname"].value;
				if (z==null || z=="")
				{
					alert("First Name must be filled out");
					document.myForm.firstname.focus();
					return false;
			 	}
				var p=document.forms["myForm"]["lastname"].value;
				if (p==null || p=="")
				{
					alert("Last Name must be filled out");
					document.myForm.lastname.focus();
					return false;
				}
				var q=document.forms["myForm"]["address"].value;
				if (q==null || q=="")
				{
					alert("Address must be filled out");
					document.myForm.address.focus();
					return false;
				}
				var r=document.forms["myForm"]["contact_number"].value;
				if (r==null || r=="")
				{
					alert("Contact Number must be filled out");
					document.myForm.contact_number.focus();
					return false;
				}
				var s=document.forms["myForm"]["email"].value;
				if (s==null || s=="")
				{
					alert("Email must be filled out");
					document.myForm.email.focus();
					return false;
				}
			}
		</script>
	</head>
<body>

<div class="login-page">
  <div class="form">
    <form name="myForm" action="register.php" onSubmit="return validateForm(this)" method="post">
			<div class="imgcontainer">
				<img src="./img/avatar.png" alt="Avatar" class="avatar">
			</div>
			<input type="text" name="username" id="username" onBlur="checkAvailability()" placeholder="User Name"/>
  		<span id="user-availability-status"></span>
			<input type="password" name="pass" placeholder="Password (8 to 12 characters)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"/>
			<input type="text" name="firstname" placeholder="First Name"/>
      <input type="text" name="lastname" placeholder="Last Name"/>
			<input type="text" name="address" placeholder="Address"/>
			<input type="text" name="contact_number" placeholder="Contact Number"/>
			<input type="email" name="email" placeholder="Email Address"/>
      <button type="submit" name="submit" />Register</button>
    </form>
  </div>
</div>

<?php
if(isset($_POST["submit"]))
{
	if(!empty($_POST['username']) && !empty($_POST['pass']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['address']) && !empty($_POST['contact_number']))
	{
		$username=$_POST['username'];
		$pass=$_POST['pass'];
  	$firstname=$_POST['firstname'];
  	$lastname=$_POST['lastname'];
		$address=$_POST['address'];
		$contact_number=$_POST['contact_number'];
  	$email=$_POST['email'];

		$con=mysql_connect('localhost','root','') or die(mysql_error());
		mysql_select_db('ticket_booking') or die("cannot select DB");

		$query=mysql_query("SELECT * FROM login WHERE username='".$username."'");
		$numrows=mysql_num_rows($query);
		if($numrows==0)
		{
			$sql="INSERT INTO login(username, password, firstname, lastname, address, contact_number, email) VALUES('$username', '$pass', '$firstname', '$lastname', '$address', '$contact_number', '$email')";
			$result=mysql_query($sql);
			if($result)
			{
			?>
			<div id="myModal" class="modal">
				<div class="modal-content">
					<div class="modal-header">
						<span class="close">&times;</span>
						<h3></h3>
					</div>
					<div class="modal-body">
						<h3>Account Successfully created...</h3>
					</div>
					<div class="modal-footer">
						<h3></h3>
					</div>
				</div>
			</div>

			<script>
				var modal = document.getElementById('myModal');
				var span = document.getElementsByClassName("close")[0];
				modal.style.display = "block";
				span.onclick = function()
				{
						modal.style.display = "none";
						window.location = "login.php";
				}
				window.onclick = function(event)
				{
					if(event.target == modal)
					{
						modal.style.display = "none";
						window.location = "login.php";
					}
				}
			</script>
			<?php
			}
			else
			{
				header("Location: register.php");
			}
		}
		else
		{
		?>
		<div id="myModal" class="modal">
			<div class="modal-content">
				<div class="modal-header">
					<span class="close">&times;</span>
					<h3>Sorry :(</h3>
				</div>
				<div class="modal-body">
					<h3>This User Name already exist...</h3>
				</div>
				<div class="modal-footer">
					<h3></h3>
				</div>
			</div>
		</div>

		<script>
			var modal = document.getElementById('myModal');
			var span = document.getElementsByClassName("close")[0];
			modal.style.display = "block";
			span.onclick = function()
			{
					modal.style.display = "none";
					window.location = "register.php";
			}
			window.onclick = function(event)
			{
				if(event.target == modal)
				{
					modal.style.display = "none";
					window.location = "register.php";
				}
			}
		</script>
		<?php
		}
	}
}
?>
</body>
</html>
