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
<h2 class="postLeft">Listing Reporting</h2>

<div class="bargraph">
<ul>
<li class="barwrapper">
<h2 class="title">[2013/06/24] &nbsp;&nbsp;&nbsp; This is title</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li>
<li class="barwrapper">
<h2 class="title">[2013/06/24] &nbsp;&nbsp;&nbsp; This is title</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li>
<li class="barwrapper">
<h2 class="title">[2013/06/24] &nbsp;&nbsp;&nbsp; This is title</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li>
<li class="barwrapper">
<h2 class="title">[2013/06/24] &nbsp;&nbsp;&nbsp; This is title</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li><li class="barwrapper">
<h2 class="title">[2013/06/24] &nbsp;&nbsp;&nbsp; This is title</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li></ul>
</div></div>
<!----------------------------------------Form Section--------------------------->
<aside id="formSection">
   
<div class="displyreport">
<div class="top-border">
</div>

<div class="total-wrapper">
<div class="amount">20</div>
<div class="text-labe">Reports in last 1 year</div>
</div>

</div>


  <!--  <form>
       <label style="font-weight: bold; border-bottom: 1px dotted #800000; width: 156%;">Fill up the form to report</label><br>

		<input type="name" name="date" placeholder="Date" />
		<select value="Select">Select District
		<option>Udayapur</option>
		<option>Kantipur</option>
                </select>
		<input type="name" name="title" placeholder="Title/Subject"/>
                <textarea cols="30" rows="5" placeholder="Write your story"></textarea>
		<input type="name" name="name" placeholder="name[optional]"/>
		<input type="name" name="phone" placeholder="phone[optional]"/>
		<input type="name" name="email" placeholder="email[optional]"/>
		<div id="lower">
		
		<input type="submit" value="Report">
		
		</div>
		
		</form>-->
	
</aside>


<div class="clear"></div>
</div>


<div id="reportingText">



<!----------------------------------------Form Section--------------------------->
<aside id="formSection1">
   
    <form>
       <label style="font-weight: bold; border-bottom: 1px dotted #800000; width: 95%;">Post your Query</label><br>

		<input type="name" name="title" placeholder="Post your Query here" />
	
                <textarea cols="30" rows="8" placeholder="Write your story"></textarea>
		<input type="name" name="name" placeholder="name"/>
		<input type="name" name="phone" placeholder="phone[optional]"/>
		<input type="name" name="email" placeholder="email[optional]"/>
		<div id="lower1">
		
		<input type="submit" value="Report">
		
		</div>
		
		</form>
	
</aside>
<h2 class="postLeft">&nbsp; &nbsp;List of Queries </h2>
<div class="bargraph1">
<ul>
<li class="barwrapper">
<h2 class="title">How can i do the case?</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li>
<li class="barwrapper">
<h2 class="title">Which organizations are working in my region</h2>
<p class="desc">Categories of sexual violence against children. 10. 1.2 This ... In light of the UK government's new initiative on sexual violence in conflict and the opportunities ..... children never report incidents of sexual violence and.</p>
</li>
</ul>
</div>
<div class="clear"></div>
</div>


</section>
<!-------------------------------------End----------------------------->
<div class="divider"></div>

</body>

</html>
