<?php
session_start();
if(!isset($_SESSION['sess_user'])){
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bangladesh Railway | About BR</title>
		<link rel="stylesheet" href="./css/style.css">
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
					<li><a href="home.php">Home</a></li>
					<li><a href="about.php">About BR</a></li>
					<li class="current"><a href="#">Train Schedule</a>
						<ul class="hidden">
							<li><a href="alltrainschedule.php">All Train Schedule</a></li>
							<li><a href="trainscheduleeastzone.php">East Zone Train Schedule</a></li>
							<li><a href="trainschedulewestzone.php">West Zone Train Schedule</a></li>
						</ul>
					</li>
					<li><a href="#">Ticket Fares</a>
						<ul class="hidden">
							<li><a href="ticketfarelisteastzone.php">Ticket Fare List(East Zone)</a></li>
							<li><a href="#">Ticket Fare List(West Zone)</a></li>
						</ul>
					</li>
          <li><a href="login.php">Book Now</a></li>
				</ul>
				<script>
					function myFunction(x){
	    			x.classList.toggle("change");
				}
				</script>
			</div>
		</header>

    <section id="pdf">
      <div class="container">
        <h1>All Train Schedule</h1>
        <object width="100%" height="768px" data="./pdf/alltrainschedule.pdf"></object>
      </div>
    </section>

    <footer>
			<p>Bangladesh Railway, Copyright &copy; 2017</p>
		</footer>
  </body>
</html>

<?php
}
else{
  header("Location: dashboard.php");
}
?>
