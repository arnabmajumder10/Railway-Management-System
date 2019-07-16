<?php
session_start();
if(!isset($_SESSION['sess_user'])){
	header("location: login.php");
}
else{
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bangladesh Railway | Dashboard</title>
		<link rel="stylesheet" href="./css/style.css">
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
					url: "check_availability_password.php",
					data:'password='+$("#password").val(),
					type: "POST",
					success:function(data)
					{
						$("#user-availability-status").html(data);
					},
				error:function (){}
				});
			}
		</script>
	</head>

  <header>
    <div class="container">
      <div id="branding">
        <h1><span class="highlight">Bangladesh</span> Railway</h1>
      </div>
      <label for="show-menu" class="show-menu">
        <div onclick="myFunction(this)">
          <div class="bar1"></div>
          <div class="bar2"></div>
          <div class="bar3"></div>
        </div>
      </label>
      <input type="checkbox" id="show-menu" role="button">
      <ul id="menu">
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="ticket_booking.php">Purchase Ticket</a></li>
        <li class="current"><a href="change_password.php">Change Password</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
      <script>
        function myFunction(x)
				{
          x.classList.toggle("change");
      	}
      </script>
    </div>
  </header>
  <body>

		<div class="login-page">
	    <div class="form">
	      <form name="myForm" action="change_password.php" method="post">
	        <input type="text" name="password" id="password" onBlur="checkAvailability()" placeholder="Current Password"/>
					<span id="user-availability-status"></span>
					<input type="password" name="new_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="New Password" required/>
					<input type="password" name="confirm_password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required/>
					<button type="submit" name="submit">Submit</button>
	      </form>
	    </div>
	  </div>

		<?php
			if(isset($_POST['submit']) && isset($_POST['password']) && isset($_POST['new_password']) &&isset($_POST['confirm_password']))
			{
				$password=$_POST['password'];
				$new_password=$_POST['new_password'];
				$confirm_password=$_POSt['confirm_password'];
				$con=mysql_connect('localhost','root','') or die(mysql_error());
		    mysql_select_db('ticket_booking') or die("cannot select DB");
				$query=mysql_query("SELECT * FROM login WHERE username='".$_SESSION['sess_user']."' AND password='".$_POST['password']."'");
				$numrows=mysql_num_rows($query);
		    if($numrows>0)
		    {
					if($new_password==$confirm_password)
					{
						$query=mysql_query("UPDATE login SET password=$new_password WHERE username='".$_SESSION['sess_user']."'");
					}
					else
					{
					?>

					<div id="myModal" class="modal">
						<div class="modal-content">
							<div class="modal-header">
								<span class="close">&times;</span>
								<h3></h3>
							</div>
							<div class="modal-body">
								<h4>New Password & Confirm Password Didn't Matched.</h4>
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
								window.location = "change_password.php";
						}
						window.onclick = function(event)
						{
							if(event.target == modal)
							{
								modal.style.display = "none";
								window.location = "change_password.php";
							}
						}
					</script>

					<?php
					}
		    }
		    else
		    {
		    ?>
				<script>
					window.location="change_password.php";
				</script>
				<?php
		    }
			}
			?>
		<footer>
			<p>Bangladesh Railway, Copyright &copy; 2017</p>
		</footer>
  </body>
</html>

<?php
}
?>
