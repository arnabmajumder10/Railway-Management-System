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
		<title>Bangladesh Railway | Ticket Booking</title>
		<link rel="stylesheet" href="./css/style.css">
		<link rel="stylesheet" href="./jquery-ui-1.12.1.custom/jquery-ui.css">
		<script src=./jquery-ui-1.12.1.custom/external/jquery/jquery.js></script>
		<script src=./jquery-ui-1.12.1.custom/jquery-ui.js></script>
		<script>
		$(function(){
			$("#calendar").datepicker({
				dateFormat: 'yy-mm-dd',
				minDate: 1,
				maxDate: 3
			});
		});
		</script>
		<style>
			label
			{
				color: #4CAF50;
				font-weight: bold;
				display: block;
				width: 150px;
				margin-top: 10px;
				margin-right: 6px;
				font-size: 19px;
			}
			option
			{
				background: #f4f4f4;
			}
			input
			{
				background: #ddd;
			  width: 276px;
			  padding: 5px;
				margin-bottom: 5px;
			  font-size: 16px;
			  line-height: 1;
			  border: 0;
			  border-radius: 0;
			  height: 34px;
			  -webkit-appearance: none;
				border: 1px solid #ccc;
			}
			.button
			{
		    background-color: #555555;
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
			}
			.button:hover
			{
				background-color: #19c589;
			}
		</style>
	</head>
	<body>
		<?php
			$con=mysql_connect('localhost','root','') or die(mysql_error());
			mysql_select_db('ticket_booking') or die("cannot select DB");
		?>
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
	        <li class="current"><a href="ticket_booking.php">Purchase Ticket</a></li>
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

    <div class="container" align="center">

		</br>
			<form action="ticket_booking.php" method="post">
				<label>Date of Journey:</label>
	      <input type="text" name="available_date" id="calendar" required/>

				<label>Journey From:</label>
	      <div class="styled-select">
	        <select name="station_from" required>
	          <option value=""></<option>
						<option value="Khulna">Khulna</<option>
						<option value="Dhaka">Dhaka</<option>
						<option value="Chittagong">Chittagong</<option>
	        </select>
	      </div>

				<label>Journey To:</label>
				<div class="styled-select">
	        <select name="station_to" required>
	          <option value=""></<option>
						<option value="Dhaka">Dhaka</<option>
						<option value="Chittagong">Chittagong</<option>
	        </select>
				</div>

				<label>Seat Category:</label>
	      <div class="styled-select">
	        <select name="seat_category" required>
	          <option value=""></<option>
	          <option value="Chair">Chair</option>
						<option value="AC">AC</option>
	        </select>
				</div>

			</br>

				<button type="submit" name="submit" class="button">Submit</button>

	    </form>

    <?php
      if(isset($_POST['submit']) && isset($_POST['available_date']) && isset($_POST['station_from']) && isset($_POST['station_to']) && isset($_POST['seat_category']))
      {
        $available_date=$_POST['available_date'];
        $station_from=$_POST['station_from'];
        $station_to=$_POST['station_to'];
        $seat_category=$_POST['seat_category'];
				session_start();
				$_SESSION['sess_available_date']=$available_date;
				$_SESSION['sess_station_from']=$station_from;
				$_SESSION['sess_station_to']=$station_to;
				$_SESSION['sess_seat_category']=$seat_category;
				header("Location: purchase.php");
			}
	  ?>
    </div>
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
