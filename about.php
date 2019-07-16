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
					<li class="current"><a href="about.php">About BR</a></li>
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

		<section id="main">
      <div class="container">
        <article id="main-col">
          <h1 class="page-title">About BR</h1>
          <p>Bangladesh Railway, a principle transportation agency of the country, is a Government owned and Government –managed organization. It covers a length of 2,877.10  route kilometers employing a total of 25,083 regular employees. As railway is a very important mode of inland transport, linking the entire length and breadth of the country, it’s healthy grow naturally contributes to the economic development of the country. Till June 2, 1982, the management and development of railway was vested with a Railway Board, comprising of a Chairman and four members. But, for administrative convenience and operational reason the Railway Board was abolished with effect from June 3, 1982 and the function of the Railway Board was vested with the Railway Division of the Ministry of Communications with the Secretary of the Division working as the Director General of Bangladesh Railway. For the same purpose the Railway bifurcated into two zones, East & West, under the administrative control of two general managers, who are accountable to the Director General of Bangladesh Railway. Subsequently on August 12, 1995 the day to day operation of the Railway was separated from the Ministry and entrusted with director general drawn from the Railway professionals. For policy guidance, a 9(nine) member Bangladesh Railway authority (BRA) was formed with the Minster Ministory of Communications as its Chairman. The Director General is assisted by Additional Director General and Joint Director General to perform all administrative and policy making jobs.</p>
          <p>The General Managers of the two zones are assisted by various specialized departments who are responsible for operation, maintenance and financial management. Each zone is again divided in two divisions, which are the basic unit of operation. The division is headed by a Divisional Railway Manager, who is assisted by Divisional Officers of various specialized Departments such as Personnel,Transportation, Commercial,Finance Mechanical, Way and Works Signaling & Telecommunication, Electrical, Medical, Nirapatta Bahini etc. Besides there are two workshop Divisions, one in each zone, located at Pahartoli and Syedpur, each being headed by a Divisional Superintendent .Further there is a locomotive workshop headed by Chief Executive at Parbatipur for general overhauling of both BG&MG locomotives.</p>
          <p>Bangladesh Railway also has Railway Training Academy headed by a Rector , a planning cell headed by a Chief Planning Officer, stores Department headed by a Chief Controller of Stores And Accounts Department headed by an Additional Director General/Finance for coordinating and advising Accounting and financial management activities of the two zones.</p>
          <p>To ensure safety of Railway transportation Government has set up a separate Directorate Under Ministry of Communications to inspect different works of BR relates with the train operation.</p>
        </article>

        <aside id="sidebar">
          <div class="dark">
	          <h3>Vision and Mission</h3>
	          <h4>Vision</h4>
	          <p>To provide safe,reliable,cost effective and time efficient rail transport service in the country through modernizing,expanding & maintaining rail system in a manner which supports government strategies for economic,social & environmental development.</p>
	          <h4>Mission</h4>
	          <p>Develop & maintain railway tracks & station infrastructures throughout the country.Maintain & upgrade locomotives,coaches & other rolling stocks.Maintain & modernize signaling & interlocking system & Telecon system of Bangladesh Railway.Ensure safe,speedy & efficient train operation.Implement Government transport policy in rail sector.Procure modern technology related rolling stocks,Track materials & signaling systems suitable for Bangladesh Railway.Manage land asset of Bangladesh Railway.Ensure optimum utilization of Development Budget & Revenue Budget of Bangladesh Railway.</p>
					</div>
				</aside>
      </div>

      </br></br>

			<div class="container">
        <h1 align="center">Passenger Trains of BR<h1>
				<div style="overflow-x:auto;">
					<table border="1" cellpadding="0" cellspacing="0" style="line-height:20.7999992370605px" align="center">
		        <tbody>
			        <tr>
	  			      <td style="width:217px">
	              <p style="text-align:center"><strong><span style="font-size:15px">ট্রেনের শ্রেনী</span></strong></p>
	              </td>
	              <td style="width:132px">
	              <p style="text-align:center"><strong><span style="font-size:15px">মোট</span></strong></p>
	              </td>
	              <td style="width:132px">
	              <p style="text-align:center"><strong><span style="font-size:15px">পূর্বাঞ্চল</span></strong></p>
	              </td>
	              <td style="width:135px">
	              <p style="text-align:center"><strong><span style="font-size:15px">পশ্চিমাঞ্চল</span></strong></p>
	              </td>
			        </tr>
			        <tr>
	          		<td style="width:217px">
	          		<p style="text-align:center"><strong><span style="font-size:15px">ইন্টারসিটি</span></strong></p>
	          		</td>
	          		<td style="width:132px">
	          		<p style="text-align:center"><strong><span style="font-size:15px">৮৬</span></strong></p>
	          		</td>
	          		<td style="width:132px">
	          		<p style="text-align:center"><strong><span style="font-size:15px">৪২</span></strong></p>
	          		</td>
	          		<td style="width:135px">
	          		<p style="text-align:center"><strong><span style="font-size:15px">৪৪</span></strong></p>
	          		</td>
	  		        </tr>
			        <tr>
	          		<td style="width:217px">
	          		<p style="text-align:center"><strong><span style="font-size:15px">মেইল এক্সপ্রেস&nbsp;</span></strong></p>
	          		</td>
	          		<td style="width:132px">
	          		<p style="text-align:center"><span style="font-size:15px"><strong>৫২</strong></span></p>
	          		</td>
	          		<td style="width:132px">
	          		<p style="text-align:center"><span style="font-size:15px"><strong>৩২</strong></span></p>
	        			</td>
	        			<td style="width:135px">
	        			<p style="text-align:center"><span style="font-size:15px"><strong>২০</strong></span></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="width:217px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">ডেমু/ কমিউটার</span></strong></p>
	        			</td>
	        			<td style="width:132px">
	        			<p style="text-align:center"><span style="font-size:15px"><strong>৬৪</strong></span></p>
	        			</td>
	        			<td style="width:132px">
	        			<p style="text-align:center"><span style="font-size:15px"><strong>৪২</strong></span></p>
	        			</td>
	          		<td style="width:135px">
	          		<p style="text-align:center"><span style="font-size:15px"><strong>২২</strong></span></p>
	          		</td>
			        </tr>
			        <tr>
	        			<td style="width:217px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">সাটল/লোকাল</span></strong></p>
	        			</td>
	        			<td style="width:132px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">১৩৫</span></strong></p>
	        			</td>
	        			<td style="width:132px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">৮৫</span></strong></p>
	        			</td>
	        			<td style="width:135px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">৫০</span></strong></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="text-align:center; width:217px">
	        			<p><strong><span style="font-size:14px">আন্তঃ দেশীয় ট্রেন</span></strong></p>
	        			</td>
	        			<td style="text-align:center; width:132px"><strong><span style="font-size:15px">২</span></strong></td>
	        			<td style="width:132px">&nbsp;</td>
	        			<td style="width:135px">&nbsp;</td>
			        </tr>
			        <tr>
	        			<td style="width:217px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">মোট</span></strong></p>
	        			</td>
	        			<td style="width:132px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">৩৩৯</span></strong></p>
	        			</td>
	        			<td style="width:132px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">২০১</span></strong></p>
	        			</td>
	        			<td style="width:135px">
	        			<p style="text-align:center"><strong><span style="font-size:15px">১৩৬</span></strong></p>
	        			</td>
			        </tr>
		        </tbody>
	        </table>
				</div>

			</br>

				<div style="overflow-x:auto;">
	        <h3 align="center">Man Power in BR<h3>
	        <table border="1" cellpadding="0" cellspacing="0" style="line-height:20.7999992370605px" align="center">
		        <tbody>
			        <tr>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">শ্রেনী</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">অনুমোদিত</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">কর্মরত</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">শুণ্য পদ</span></strong></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১ম</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৫৪৮</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৪৪৬</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১০২</span></strong></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">২য়</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১,৩৫৬</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৯৪৭</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৪০৯</span></strong></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৩য়</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">২১,৮৭৬</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১৪,৬২৫</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৭,২৫১</span></strong></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৪র্থ</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১৬,৪৮৪</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১১,৫১৭</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৪,৯৬৭</span></strong></p>
	        			</td>
			        </tr>
			        <tr>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">মোট</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">৪০,২৬৪</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">২৭,৫৩৫</span></strong></p>
	        			</td>
	        			<td style="width:154px">
	        			<p style="text-align: center;"><strong><span style="font-size:15px">১২,৭২৯</span></strong></p>
	        			</td>
			        </tr>
		        </tbody>
	        </table>
				</div>

				</br>

				<div class="dark">
          <h4>Railway links with adjacent countries<h4>
          <p style="font-size: 14px">There are bi-weekly passenger train services to India. The Maitri Express between Dhaka and Kolkata started in April 2008 using the Gede-Darsana route.In addition there is a goods train service from Singhabad and Petrapole in India to Rohanpur and Benapole in Bangladesh, respectively. A new rail link between Akhaura, Bangladesh and Agartala, India was Proposed by the Government of India in September 2011.</p>
          <p style="font-size: 14px">There is no link to Burma.</p>
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
