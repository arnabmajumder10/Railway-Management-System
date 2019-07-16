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
		<title>Bangladesh Railway | Confirm Booking</title>
		<link rel="stylesheet" href="./css/style.css">
		<style>
			input
			{
				background: transparent;
				width: 268px;
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
		</style>
  </head>

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
			<h1 style="color: #2b777b; margin-top: 100px;">Confirm Your Purchase:</h1>
			<h2 style="color: #2b777b;">Total Fare: <?php echo $_SESSION['sess_fare']*$_SESSION['sess_seat'];?></h2>
			<form action="confirm.php" method="post" align="center">
				<input type="text" name="account_number" placeholder="Enter Your DBBL Accout Number" required/>
			</br>
				<input type="password" name="security_key" placeholder="Enter Security Key" required/>
			</br>
				<button type="submit" name="purchase" class="button">Purchase</button>
			</form>

			<?php
				if(isset($_POST['purchase']))
				{
					$con=mysql_connect('localhost','root','') or die(mysql_error());
					mysql_select_db('ticket_booking') or die("cannot select DB");
					$account=$_POST['account_number'];
					$security=$_POST['security_key'];
					$query=mysql_query("SELECT * FROM dbbl WHERE account_number='".$_POST['account_number']."' AND security_key='".$_POST['security_key']."'");
					$numrows=mysql_num_rows($query);
					if($numrows!=0)
					{
						while($row=mysql_fetch_assoc($query))
						{
							$account_number=$row['account_number'];
							$security_key=$row['security_key'];
							$balance=$row['balance'];
							if($account_number==$account && $security_key==$security)
							{
								$fare=$_SESSION['sess_fare'];
								$seat=$_SESSION['sess_seat'];
								$total_fare=$fare*$seat;
								if($total_fare<=$balance)
								{
									$query1=mysql_query("UPDATE dbbl SET balance=balance-$total_fare WHERE account_number='".$account_number."' AND security_key='".$security_key."'");
									$query2=mysql_query("UPDATE train_available SET remaining_seat=remaining_seat-$seat WHERE train_no='".$_SESSION['sess_selected_train_no']."' AND available_date='".$_SESSION['sess_available_date']."' AND station_from='".$_SESSION['sess_station_from']."' AND station_to='".$_SESSION['sess_station_to']."' AND seat_category='".$_SESSION['sess_seat_category']."'");
									$query3=mysql_query("INSERT INTO booked_train(user, train_no, train_name, station_from, departure_time_from, station_to, arrival_time_to, seat_category, seat, available_date, fare) VALUES('{$_SESSION['sess_user']}', '{$_SESSION['sess_selected_train_no']}', '{$_SESSION['sess_train_name']}', '{$_SESSION['sess_station_from']}', '{$_SESSION['sess_departure_time_from']}', '{$_SESSION['sess_station_to']}', '{$_SESSION['sess_arrival_time_to']}', '{$_SESSION['sess_seat_category']}', '{$_SESSION['sess_seat']}', '{$_SESSION['sess_available_date']}', '$total_fare')");
								?>
									<script>
										window.location = "dashboard.php";
									</script>
								<?php
								}
								else
								{
								?>
									<div id="myModalBalance" class="modal">
										<div class="modal-content">
											<div class="modal-header">
												<span class="close">&times;</span>
												<h3>Sorry :(</h3>
											</div>
											<div class="modal-body">
												<h3>You Don't Have Sufficient Balance.</h3>
											</div>
											<div class="modal-footer">
												<h3>Please Refill Your Account</h3>
											</div>
										</div>
									</div>

									<script>
										var modal = document.getElementById('myModalBalance');
										var span = document.getElementsByClassName("close")[0];
										modal.style.display = "block";
										span.onclick = function()
										{
												modal.style.display = "none";
												window.location = "confirm.php";
										}
										window.onclick = function(event)
										{
											if(event.target == modal)
											{
												modal.style.display = "none";
												window.location = "confirm.php";
											}
										}
									</script>
								<?php
								}
						  }
						}
					}
				}
				?>
			</div>
		</br>
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
