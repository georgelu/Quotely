<!DOCTYPE html> 
<html>

<head>
	<title>Quotely</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="./jQuery/jquery.mobile-1.2.0.css" />

	<script src="//cdn.optimizely.com/js/140796700.js"></script>
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
		<?php
			$category = $_GET['c'];
			$id = $_GET['i'];
		?>
		<a href="<?php echo 'quote.php?category='.$category.'&id='.$id; ?>">Back</a>
		<h1 id="category"></h1>

		<?php include("header.php") ?>
	</div><!-- /header -->

	<div id="content" data-role="content">	
		<iframe src="<?php echo $_GET['u']; ?>" frameborder="0" border="0" width="100%" height="350px"></iframe>
		
	</div><!-- /content -->



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