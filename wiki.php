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
	<style>
		.ui-btn {text-align: left}
	</style>

</head> 

	
<body> 

	

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-theme="c" data-content-theme="c">

	
			
	<div data-role="header">
		<a href="index2.html">Home</a>
		<h1 id="category"> </h1>
		<a href="#popupAccordion" data-rel="popup" data-role="button" data-inline="true">Categories</a>
 		<div data-role="popup" id="popupAccordion" data-transition="slideup" data-theme="c" style="width:300px;">
 			<div data-role="controlgroup">
				<div data-role="collapsible" data-theme="c" data-content-theme="d" style="margin:0;" >
					<h3>News</a></h3>
					<p><a href="quote.php?category=news&id=1">All News</a> </p>
					<p><a href="quote.php?subcat=politics&subid=1">Politics</a> </p>
					<p><a href="quote.php?subcat=international&subid=1">International</a></p>
					<p><a href="quote.php?subcat=business&subid=1">Business</a> </p>
					<p><a href="quote.php?subcat=sports&subid=1">Sports</a> </p>
				</div>					
				<a href="quote.php?category=art&id=1" data-role="button" data-theme="c" data-inset="false">Arts</a>
				<a href="quote.php?category=inspiration&id=1" data-role="button" data-theme="c" data-inset="false">Thoughts</a>
			</div>
		</div>

	</div><!-- /header -->

	<div id="content" data-role="content">
		<iframe src="<?php echo $_GET['u']; ?>" width="100%" height="350px"></iframe>

	
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<?php
				$category = $_GET['c'];
				$id = $_GET['i'];
				?>
				<li><a href="<?php echo 'quote.php?category='.$category.'&id='.$id; ?>" id="back" data-icon="custom" class="ui-btn">Back</a></li>
			</ul>
		</div>
	</div>

</div><!-- /page one -->

<script type="text/javascript">

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