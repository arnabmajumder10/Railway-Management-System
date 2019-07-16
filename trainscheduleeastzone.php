<?php
session_start();
if(!isset($_SESSION['sess_user'])){
?>

<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Bangladesh Railway | Train Schedule East Zone</title>
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
        <h1>East Zone Train Schedule</h1>
        <div style="overflow-x:auto;">
          <table border="1" cellpadding="0" cellspacing="0" style="line-height:20.7999992370605px" align="center">
          	<tbody>
          		<tr>
          			<td style="width:43px">
          			<p>01</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/akhauraschedule.pdf" title="Akhaura Schedule">Akhaura Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>16</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/saiestaganjschedule.pdf" title="Saiestaganj Schedule">Saiestaganj Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>02</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/bhairabschedule.pdf" title="Bhairab Schedule">Bhairab Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>17</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/sarishabarischedule.pdf" title="Sarishabari Schedule">Sarishabari Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>03</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/bimanbandareschedule.pdf" title="Biman Bandare Schedule">Biman Bandare Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>18</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/srimangalschedule.pdf" title="Srimangal Schedule">Srimangal Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>04</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/brahmanbariaschedule.pdf" title="Brahmanbaria Schedule">Brahmanbaria Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>19</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/sylhetschedule.pdf" title="Sylhet Schedule">Sylhet Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>05</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/chandpurschedule.pdf" title="Chandpur Schedule">Chandpur Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>20</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/joydebpurschedule.pdf" title="Joydebpur Schedule">Joydebpur Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>06</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/chittagongschedule.pdf" title="Chittagong Schedule">Chittagong Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>21</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/tarakandischedule.pdf" title="Tarakandi Schedule">Tarakandi Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>07</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/comillaschedule.pdf" title="Comilla Schedule">Comilla Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>22</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/goforgaonschedule.pdf" title="Goforgaon Schedule">Goforgaon Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>08</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/dhakaschedule.pdf" title="Dhaka Schedule">Dhaka Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>23</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/narsingdischedule.pdf" title="Narsingdi Schedule">Narsingdi Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>09</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/fenischedule.pdf" title="Feni Schedule">Feni Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>24</p>
          			</td>
          			<td style="width:283px">
          			<p><a href="./pdf/dhakacantonmentschedule.pdf" title="Dhaka Cantonment Schedule">Dhaka Cantonment Schedule</a></p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>10</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/jamalpurschedule.pdf" title="Jamalpur Schedule">Jamalpur Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>&nbsp;</p>
          			</td>
          			<td style="width:283px">
          			<p>&nbsp;</p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>11</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/kishoreganjschedule.pdf" title="Kishoreganj Schedule">Kishoreganj Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>&nbsp;</p>
          			</td>
          			<td style="width:283px">
          			<p>&nbsp;</p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>12</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/kulauraschedule.pdf" title="Kulaura Schedule">Kulaura Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>&nbsp;</p>
          			</td>
          			<td style="width:283px">
          			<p>&nbsp;</p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>13</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/laksamschedule.pdf" title="Laksam Schedule">Laksam Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>&nbsp;</p>
          			</td>
          			<td style="width:283px">
          			<p>&nbsp;</p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>14</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/mymensinghschedule.pdf" title="Mymensingh Schedule">Mymensingh Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>&nbsp;</p>
          			</td>
          			<td style="width:283px">
          			<p>&nbsp;</p>
          			</td>
          		</tr>
          		<tr>
          			<td style="width:43px">
          			<p>15</p>
          			</td>
          			<td style="width:276px">
          			<p><a href="./pdf/noakhalischedule.pdf" title="Noakhali Schedule">Noakhali Schedule</a></p>
          			</td>
          			<td style="width:36px">
          			<p>&nbsp;</p>
          			</td>
          			<td style="width:283px">
          			<p>&nbsp;</p>
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
