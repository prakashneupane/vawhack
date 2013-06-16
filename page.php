<!doctype html>

<html lang="en" ng-app="vawApp">

<head>

	

	<title>Violence against women</title>

	<meta name="viewport" content="width=device-width; initial-scale=1; maximum-scale=1">

		<link rel="stylesheet" href="style.css" type="text/css">

	<!--[if IE]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
       
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<script type="text/javascript" src="js/lib/angular/angular.min.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/controllers/MainController.js"></script>
        

		<script type="text/javascript" src="js/jquery.min.js"></script>
                <script type="text/javascript" src="js/bargraph.js"></script>
		<script src="js/highcharts.js"></script>

</head>

<body ng-controller="MainController">

	<header>

		<a href="#" id="logo">Violence Against Women</a>

		<nav>

			<a href="#" id="menu-icon"></a>

			<ul>

				<li><a href="#" class="current">Home</a></li>
				<li><a href="#">Reports</a></li><li><a href="#">Queries</a></li>
				
			</ul>

		</nav>

	</header>

	{{test}}
<!-------------------------------MapArea Section---------------------------->
<section id="mapSection">
<div id="reportingText"><div class="left-section">


<div class="bargraph">
<ul>
<li class="barwrapper">
<h2 class="title">What is the law for rape in Nepal? What is the maximum punishment  and penalty?</h2><br/>
<p class="desc">Hi Nisha,
<br/>
The rule of rape case depend with the nature of crime, According to the law, It categoried like:
<ul>
<li><b> Rape below 10 yrs old </b>
<p> As per law, the person who rape the girl below 10 years will get maximum punishment. He will be jailed for 10-15 years or penality or both.

</li>

<li> <b>Rape  10 -14 yrs old </b>
<p>
As per law, the person who rape the girl of 10-14 years will be jailed for 8-12 years or penality or both.
</p>
</li>
<li> <b>Rape  14 -16 yrs old </b>
<p>
As per law, the person who rape the girl of 14-16 years will be jailed for 6-8 years or penality or both.
</p>
</li>

</ol>
 Beside this, there are other issues that relate with rapes depends for panishment. 
</p>
</li>
</ul>
</div></div>
<!----------------------------------------Form Section--------------------------->
<aside id="formSection">
   
   
<div class="displyreport">
<div class="top-border">
</div>

<div class="total-wrapper">
<div class="side1">
<div class="amount">20</div>
<div class="text-label">Reports in last 1 year</div>
</div>

<div class="side2">
<div class="amount">5</div>
<div class="text-label">Districts</div>
</div>
</div>

</div>


  
	
</aside>


<div class="clear"></div>
</div>









</section>
<!-------------------------------------End----------------------------->
<div class="divider"></div>

</body>

</html>
