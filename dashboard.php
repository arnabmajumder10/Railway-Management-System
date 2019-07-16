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
	</head>
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
	<body>
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
        	<li class="current"><a href="dashboard.php">Dashboard</a></li>
        	<li><a href="ticket_booking.php">Purchase Ticket</a></li>
        	<li><a href="change_password.php">Change Password</a></li>
        	<li><a href="contact_us.php">Contact Us</a></li>
        	<li><a href="logout.php">Log Out</a></li>
      	</ul>
      	<script>
        	function myFunction(x){
          	x.classList.toggle("change");
      		}
      	</script>
    	</div>
  	</header>

		<?php
			$con=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('ticket_booking') or die("cannot select DB");
			$query=mysql_query("SELECT * FROM login WHERE username='".$_SESSION['sess_user']."'");
			$row=mysql_fetch_assoc($query);
		?>

		<div class="container">
		</br>
		</br>
			<div style="overflow-x:auto;">
				<table id="stylish_table">
					<tr>
          	<th>Personal Information:</th>
          </tr>
					<tr>
          	<td>Name</td>
            <td><?php echo $row['firstname'].' '.$row['lastname']; ?></td>
          </tr>
          <tr>
          	<td>Email Address</td>
          	<td><?php echo $row['email']; ?></td>
          </tr>
          <tr>
          	<td>Address</td>
          	<td><?php echo $row['address']; ?></td>
        	</tr>
          <tr>
          	<td>Cell Phone Number</td>
          	<td><?php echo $row['contact_number']; ?></td>
          </tr>
  			</table>
			</br>
			</br>
			</br>
			</br>

			<table id="stylish_table">
				<tr>
					<th>Successfull Puchases:</th>
				</tr>
				<tr>
					<td>Journey Date</td>
					<td>Train No.</td>
					<td>Train Name</td>
					<td>Station From</td>
					<td>Departure</td>
					<td>Station To</td>
					<td>Arrival</td>
					<td>Seat Category</td>
					<td>Seat</td>
					<td>Fare</td>
					<td>eTicket Number</td>
				</tr>
		<?php
		 	$today=date('Y-m-d');
			$query1=mysql_query("SELECT * FROM booked_train WHERE user='".$_SESSION['sess_user']."'");
			$numrows=mysql_num_rows($query1);
			if($numrows!=0)
			{
				while($row1=mysql_fetch_array($query1))
				{
					$journey_date=$row1['available_date'];
					$train_no=$row1['train_no'];
					$train_name=$row1['train_name'];
					$station_from=$row1['station_from'];
					$departure=$row1['departure_time_from'];
					$station_to=$row1['station_to'];
					$arrival=$row1['arrival_time_to'];
					$seat_category=$row1['seat_category'];
					$seat=$row1['seat'];
					$fare=$row1['fare'];
					$eticket_number=$row1['eticket_number'];
		?>

				<tr>
					<td><?php echo $journey_date; ?></td>
					<td><?php echo $train_no; ?></td>
					<td><?php echo $train_name; ?></td>
					<td><?php echo $station_from; ?></td>
					<td><?php echo $departure; ?></td>
					<td><?php echo $station_to; ?></td>
					<td><?php echo $arrival; ?></td>
					<td><?php echo $seat_category; ?></td>
					<td><?php echo $seat; ?></td>
					<td><?php echo $fare; ?></td>
					<td><?php echo $eticket_number; ?></td>
				</tr>
					<?php
					}
				}
				?>
  			</table>

			</div>
		</div>
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
