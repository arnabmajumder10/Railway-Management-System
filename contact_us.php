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
		#stylish_table
		{
			font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}
		#stylish_table td, #stylish_table th
		{
			border: 1px solid #ddd;
			padding: 8px;
			font-size: 18px;
		}
		#stylish_table tr:nth-child(even)
		{
			background-color: #f2f2f2;
		}
		#stylish_table tr:hover
		{
			background-color: #ddd;
		}
		#stylish_table th
		{
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
		</style>
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
        <li><a href="change_password.php">Change Password</a></li>
        <li  class="current"><a href="contact_us.php">Contact Us</a></li>
        <li><a href="logout.php">Log Out</a></li>
      </ul>
      <script>
        function myFunction(x){
          x.classList.toggle("change");
      }
      </script>
    </div>
  </header>
  <body>

		<div class="container">
		</br>
		</br>
		</br>
		</br>
		</br>
		</br>
			<div style="overflow-x:auto;">
				<table id="stylish_table">
					<tr>
						<th>Contact Us</th>
					</tr>
					<tr>
          	<td>For refund of unsuccessful purchases and card charging issues</td>
						<td>DBBL Nexus Cards:</td>
						<td>16216 (Bangladesh Only)</td>
          </tr>
					<tr>
						<td>For refund of successfully purchased tickets</td>
						<td>Visit your originating station ( Name of the Station From which you wanted to travel ) and contact the refund counter</td>
          </tr>
          <tr>
          	<td>For Complains</td>
          	<td>Please contact related Bangladesh Railway Officers only (In connection with Ticketing and Commercial Issues)</td>
						<td><a href="http://railway.gov.bd">http://railway.gov.bd</a></td>
					</tr>
  			</table>
			</div>
		</div>

	</br>
	</br>
	</br>
	</br>
	</br>
	<footer>
		<p>Bangladesh Railway, Copyright &copy; 2017</p>
	</footer>

  </body>
</html>

<?php
}
?>
