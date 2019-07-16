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
		<style>
			input{
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
			.button{
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
      <h1 style="color: #2b777b;">Available Trains<h1>
				<div style="overflow-x:auto;">
					<table border="1" cellpadding="0" cellspacing="0" style="line-height: 12px;">
						<tbody>
			        <tr style="background-color: rgba(221, 221, 221, 0.6);">
		 			      <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Train No.</span></strong></p>
		            </td>
		            <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Train Name</span></strong></p>
		            </td>
		            <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">From</span></strong></p>
		            </td>
		            <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Departure</span></strong></p>
		            </td>
		            <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Destination</span></strong></p>
		            </td>
		            <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Arrival</span></strong></p>
		            </td>
		            <td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Seat Category</span></strong></p>
		            </td>
								<td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Date</span></strong></p>
		            </td>
								<td style="width:80px">
		              <p style="text-align:center"><strong><span style="font-size:15px">Fare (Per Person)</span></strong></p>
		            </td>
			        </tr>
							<?php
								$con=mysql_connect('localhost','root','') or die(mysql_error());
								mysql_select_db('ticket_booking') or die("cannot select DB");
								$query=mysql_query("SELECT * FROM train_available WHERE available_date='".$_SESSION['sess_available_date']."' AND station_from='".$_SESSION['sess_station_from']."' AND station_to='".$_SESSION['sess_station_to']."' AND seat_category='".$_SESSION['sess_seat_category']."'");
								$numrows=mysql_num_rows($query);
								if($numrows!=0)
								{
									while($row=mysql_fetch_assoc($query))
									{
										$train_no=$row['train_no'];
										$train_name=$row['train_name'];
										$station_from=$row['station_from'];
										$departure_time_from=$row['departure_time_from'];
										$station_to=$row['station_to'];
										$arrival_time_to=$row['arrival_time_to'];
										$seat_category=$row['seat_category'];
										$available_date=$row['available_date'];
										$fare=$row['fare']; ?>
										<tr style="background-color: rgba(221, 221, 221, 0.6);">
											<td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $train_no; ?></span></strong></p>
					            </td>
					            <td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $train_name; ?></span></strong></p>
					            </td>
					            <td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $station_from; ?></span></strong></p>
					            </td>
					            <td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $departure_time_from; ?></span></strong></p>
					            </td>
					            <td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $station_to; ?></span></strong></p>
					            </td>
					            <td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $arrival_time_to; ?></span></strong></p>
					            </td>
					            <td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $seat_category; ?></span></strong></p>
					            </td>
											<td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $available_date; ?></span></strong></p>
					            </td>
											<td style="width:80px">
					              <p style="text-align:center"><strong><span style="font-size:15px"><?php echo $fare; ?> BDT.</span></strong></p>
					            </td>
						        </tr><?php
									}
								}
							?>
						</tbody>
					</table>
				</div>
			</br>
			<form action="purchase.php" method="post">
				<input type="text" name="selected_train_no" placeholder="Enter Train No." required/>
			</br>
				<input type="number" name="no_of_seat" placeholder="Enter Seat (1-4)" required/>
			</br>
				<button type="submit" name="submit" class="button">Submit</button>
			</form>

			<?php
				if(isset($_POST['submit']))
				{
					if($_POST['no_of_seat']>0 && $_POST['no_of_seat']<5)
					{
						$selected_train_no=$_POST['selected_train_no'];
						$seat=$_POST['no_of_seat'];
						$_SESSION['sess_selected_train_no']=$selected_train_no;
						$_SESSION['sess_seat']=$seat;
						$query1=mysql_query("SELECT * from train_available WHERE train_no='".$_SESSION['sess_selected_train_no']."' AND '".$_SESSION['sess_available_date']."' AND station_from='".$_SESSION['sess_station_from']."' AND station_to='".$_SESSION['sess_station_to']."' AND seat_category='".$_SESSION['sess_seat_category']."'");
						$numrows1=mysql_num_rows($query1);
						if($numrows1!=0)
						{
							while($row1=mysql_fetch_assoc($query1))
							{
								$remaining_seat=$row1['remaining_seat'];
								$fare=$row1['fare'];
								$_SESSION['sess_fare']=$fare;
								$train_name=$row1['train_name'];
								$_SESSION['sess_train_name']=$train_name;
								$departure_time_from=$row1['departure_time_from'];
								$_SESSION['sess_departure_time_from']=$departure_time_from;
								$arrival_time_to=$row1['arrival_time_to'];
								$_SESSION['sess_arrival_time_to']=$arrival_time_to;
								if($remaining_seat>=$_SESSION['sess_seat'])
								{
								?>
								<script>
									window.location = "confirm.php";
								</script>
								<?php
								}
								else
								{
								?>
									<div id="myModal" class="modal">
								  	<div class="modal-content">
									  	<div class="modal-header">
									    	<span class="close">&times;</span>
									    	<h4>Sorry!</h4>
									  	</div>
									  	<div class="modal-body">
									    	<h3>Not Enough Seat Available</h4>
									  	</div>
									  	<div class="modal-footer">
									    	<h4>Decrease Seat Numbers</h4>
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
									  	window.location = "purchase.php";
										}
										window.onclick = function(event)
										{
									  	if(event.target == modal)
											{
									    	modal.style.display = "none";
									    	window.location = "purchase.php";
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
	<footer>
		<p>Bangladesh Railway, Copyright &copy; 2017</p>
	</footer>

  </body>
</html>
<?php
}
?>
