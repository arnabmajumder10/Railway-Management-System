<?php
session_start();
if(!isset($_SESSION['sess_user'])){
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bangladesh Railway | Home</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>

		<script>
			var i=0; // Start point
			var images=[];
			var time=4000;

			images[0]='image1.jpg';
			images[1]='image2.jpg';
			images[2]='image3.jpg';

			// Change Image
			function changeImg()
			{
				document.slideshow.src = images[i];

				if(i < images.length - 1)
				{
					i++;
				} else {
					i = 0;
				}

				setTimeout("changeImg()", time);
			}

			window.onload = changeImg;

		</script>

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
					<li class="current"><a href="home.php">Home</a></li>
					<li><a href="about.php">About BR</a></li>
					<li><a href="#">Train Schedule</a>
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

		<img name="slideshow" width="100%" height="auto">

		<section id="showcase-bottom">
			<div class="container">
				<h1>Government of the People of Republic Bangladesh</h1>
			</div>
		</section>

		<section id="news">
			<div class="container">
				<h1>Latest News</h1>
				<p>It’s the collection of news of ours trains of Bangladesh. Here you’ll find a selection of the latest news.</p>
			</div>
		</section>

		<section id="boxes">
			<div class="container">
				<div class="box" class="container">
					<img src="./img/news1.jpg">
					<h3>Bamboo used in Kurigram railway tracks</h3>
					<p>Bamboo, instead of iron, has been used in the railway tracks in at least three sections of a railway bridge in Kurigram. This is a high-risk factor for the train commuters.</p>
				</div>
				<div class="box">
					<img src="./img/news2.jpg">
					<h3>Train services to and from Kamalapur station restored</h3>
					<p>Train services from Kamalapur Railway Station resumed after two and a half hours’ halt, caused by damage of the engine of ‘Parabat Express”, as the intercity train restarted plying the Dhaka-Sylhet route, on Saturday morning.</p>
				</div>
				<div class="box">
					<img src="./img/news3.jpg">
					<h3>Humble rail hero honoured after daring rescue</h3>
					<p>A humble rail worker who shot to fame for pulling a suicidal man off train tracks was honoured by Bangladesh authorities Sunday, as footage of his heroism went viral.</p>
				</div>
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
