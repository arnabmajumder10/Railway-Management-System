<?php
session_start();
if(!isset($_SESSION['sess_user'])){
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bangladesh Railway | Train Schedule West Zone</title>
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

    <section id="table">
      <div class="container">
        <h1>West Zone Train Schedule</h1>
        <div style="overflow-x:auto;">
          <table border="1" cellpadding="0" cellspacing="0" style="line-height:20.7999992370605px" align="center">
						<tbody>
							<tr>
								<td style="height:18px; width:37px">
								<p>01</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/bograschedule.pdf" title="Bogra Schedule">Bogra Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>11</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/sirajganjbazarschedule.pdf" title="Sirajganj Bazar Schedule">Sirajganj Bazar Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:17px; width:37px">
								<p>02</p>
								</td>
								<td style="height:17px; width:237px">
								<p><a href="./pdf/chuadangaschedule.pdf" title="Chuadanga Schedule">Chuadanga Schedule</a></p>
								</td>
								<td style="height:17px; width:31px">
								<p>12></p>
								</td>
								<td style="height:17px; width:243px">
								<p><a href="./pdf/joypurhatschedule.pdf" title="Joypurhat Schedule">Joypurhat Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:18px; width:37px">
								<p>03</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/dinajpurschedule.pdf" title="Dinajpur Schedule">Dinajpur Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>13</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/natoreschedule.pdf" title="Natore Schedule">Natore Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:18px; width:37px">
								<p>04</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/gaibandhaschedule.pdf" title="Gaibandha Schedule">Gaibandha Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>14</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/poradhaschedule.pdf" title="Poradha Schedule">Poradha Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:17px; width:37px">
								<p>05</p>
								</td>
								<td style="height:17px; width:237px">
								<p><a href="./pdf/ishwardischedule.pdf" title="Ishwardi Schedule">Ishwardi Schedule</a></p>
								</td>
								<td style="height:17px; width:31px">
								<p>15</p>
								</td>
								<td style="height:17px; width:243px">
								<p><a href="./pdf/ullahparaschedule.pdf" title="Ullahpara Schedule">Ullahpara Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:18px; width:37px">
								<p>06</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/jessoreschedule.pdf" title="Jesssore Schedule">Jesssore Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>16</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/rangpurschedule.pdf" title="Rangpur Schedule">Rangpur Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:18px; width:37px">
								<p>07</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/parbatipurschedule.pdf" title="Parbatipur Schedule">Parbatipur Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>17</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/tangailschedule.pdf" title="Tangail Schedule">Tangail Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:17px; width:37px">
								<p>08</p>
								</td>
								<td style="height:17px; width:237px">
								<p><a href="./pdf/khulnaschedule.pdf" title="Khulna Schedule">Khulna Schedule</a></p>
								</td>
								<td style="height:17px; width:31px">
								<p>18</p>
								</td>
								<td style="height:17px; width:243px">
								<p><a href="./pdf/bangabondhusetueastschedule.pdf" title="Banga Bondhu Setu East">Bango Bondho Setu Purba</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:18px; width:37px">
								<p>09</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/rajshahischedule.pdf" title="Rajshahi Schedule">Rajshahi Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>19</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/shaheedm.monsuralischedule.pdf" title="Shaheed M. Monsur Ali Schedule">Shaheed M. Monsur Ali Schedule</a></p>
								</td>
							</tr>
							<tr>
								<td style="height:18px; width:37px">
								<p>10</p>
								</td>
								<td style="height:18px; width:237px">
								<p><a href="./pdf/santaharschedule.pdf" title="Santahar Schedule">Santahar Schedule</a></p>
								</td>
								<td style="height:18px; width:31px">
								<p>20</p>
								</td>
								<td style="height:18px; width:243px">
								<p><a href="./pdf/lalmonirhatschedule.pdf" title="Lalmonirhat Schedule">Lalmonirhat Schedule</a></p>
								</td>
							</tr>
						</tbody>
          </table>
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
