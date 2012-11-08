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


</head> 

	
<body> 

	

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-theme="c" data-content-theme="c">

	
			
	<div data-role="header">
		<a href="index2.html">Home</a>
		<h1 id="category">
		</h1>

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