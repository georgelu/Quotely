<!DOCTYPE html> 
<html>

<head>
	<title>Quotely</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="./jQuery/jquery.mobile-1.2.0.css" />

	<script src="./jQuery/jquery-1.8.2.min.js"></script>
	<script src="./jQuery/jquery.mobile-1.2.0.js"></script>
	<script type="text/javascript">
	document.getElementById('sharepage').src = "http://www.facebook.com/sharer.php?u=" +getQueryVariable("u") + "&t="getQueryVariable("t");
	</script>

</head> 

	
<body> 

	

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-theme="c" data-content-theme="c">

	
			
	<div data-role="header">
		<a href="index2.html">q</a>
		<h1 id="category">
			<!--<?php //echo $_GET['category']; ?>-->
		</h1>
		<!--
		<div class="ui-btn-right" data-role="collapsible" data-inset="true" data-iconpos="right" data-theme="a" data-content-theme="c">
  		 <h1 id="category"><?php //echo $_GET['category']; ?></h1>
	  		<ul>
	    	  <li> <a href="quote.php?category=news">News </a></li>
	    	  <li> <a href="quote.php?category=news&subcategory=science">Science </a></li>
	    	  <li> <a href="quote.php?category=news&subcategory=politics">Politics </a></li>
	    	  <li> <a href="quote.php?category=news&subcategory=international">International </a></li>
	    	  <li> <a href="quote.php?category=news&subcategory=business">Business </a></li>
	    	  <li> <a href="quote.php?category=news&subcategory=sports">Sports </a></li>
	          <li> <a href="quote.php?category=art">Art </a> </li>
	          <li> <a href="quote.php?category=inspiration">Inspiration</a></li>

	      </ul>
		</div>-->  
	</div><!-- /header -->

	<iframe id="sharepage" src="#"></iframe>

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<li><a href="index2.html" id="back" data-icon="custom" class="ui-btn">Back</a></li>
				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn">Share</a></li>
			</ul>
		</div>
	</div>

</div><!-- /page one -->





<script type="text/javascript">
// This handles all the swiping between each page. You really
// needn't understand it all.

function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split('&');
    for (var i = 0; i < vars.length; i++) {
        var pair = vars[i].split('=');
        if (decodeURIComponent(pair[0]) == variable) {
        	
            return decodeURIComponent(pair[1]);
        }
    }
    console.log('Query variable %s not found', variable);
}

</script>

</body>
</html>