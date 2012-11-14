<!DOCTYPE html> 
<html>

<head>
	<title>Quotely</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="./jquery.mobile-1.2.0/jquery.mobile-1.2.0.css" />

	<script src="./jQuery/jquery-1.8.2.min.js"></script>
	<script src="./jquery.mobile-1.2.0/jquery.mobile-1.2.0.js"></script>
	<style> 
		.ui-btn {text-align: left} 
	</style>

</head> 

	
<body> 

	

<!-- Start of first page: #one -->
<div data-role="page" id="quote" data-theme="c" data-content-theme="c">
		
	<div data-role="header">
		<a href="index2.html">Home</a>

		<h1 id="category">
			<?php echo $_GET['category']; ?>
			<a href="#help" data-rel="popup" data-theme="a" data-icon="info" data-mini="true" data-iconpos="notext"</a>
			<div data-role="popup" id="help">
				<p><strong>Confused?</strong><br>
					Try swiping to view another quotation.<br>
					<small>Click outside of the box to go back.</small></p>
			</div>	
		</h1>

		<?php include("header.php"); ?>		 
	</div><!-- /header -->
	<div id="content" data-role="content">	
	<?php 
		$query = "";
		$id = $_GET['id'];
		$category = $_GET['category'];
		$subcat = $_GET['subcat'];
		$subid = $_GET['subid'];
	
		include("content.php"); 

	?>
	<script type="text/javascript">
	// This handles all the swiping between each page. You really
	// needn't understand it all.

/*
if($.mobile.activePage.attr('id') != 'page1')
    {
        alert("Right");   
    }
    */
	$(document).on('pageshow', 'div:jqmData(role="page")', function(){

	     var page = $(this), nextpage, prevpage;
	     // check if the page being shown already has a binding
	      if ( page.jqmData('bound') != true ){
	            // if not, set blocker
	            page.jqmData('bound', true)
	            // bind
	                .on('swipeleft.paginate', function() {
	                	if($.mobile.activePage.attr('id') == 'quote') {
		                    console.log("binding to swipe-left on "+page.attr('id'));
		                    var subcat = getQueryVariable('subcat');
		                    if (subcat != null) {
		                    	window.location = "quote.php?subcat=" + subcat + "&subid=" + (parseInt(getQueryVariable('subid')) + 1);

		                    } else {
		                    	window.location = "quote.php?category=" + getQueryVariable('category') + "&id=" + (parseInt(getQueryVariable('id')) + 1);
		                    }
		                }
	
	                 })

	                .on('swiperight.paginate', function(){
	                	if($.mobile.activePage.attr('id') == 'quote') {
		                    console.log("binding to swipe-right " + page.attr('id'));
		                    
		                    var subcat = getQueryVariable('subcat');
		                    var subid = parseInt(getQueryVariable('subid'));
		                    if (subcat != null) {
		                    	if (subid - 1 < 1) {
		                    		window.location = "quote.php?subcat=" + subcat + "&subid=" + subid;

		                    	} else {
		                    		window.location = "quote.php?subcat=" + subcat + "&subid=" + (subid - 1);
		                    	}
		                    } else {
		                    	var id = parseInt(getQueryVariable('id'));
		                    	if (id - 1 < 1) {
		                    		window.location = "quote.php?category=" + getQueryVariable('category') + "&id=" + id;
		            			} else {
		            				window.location = "quote.php?category=" + getQueryVariable('category') + "&id=" + (id - 1);
		            			}
		                    }
		                }

	                 });
	            }
	        });
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
	    return null;
	}

	</script>
	
		<div style="text-align: center ;">
			<br>
			<img src="paginate-1.png">
		</div>
	</div><!-- /content -->

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">

		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				
				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn">Share</a></li>
			</ul>

		</div>
	</div>

</div><!-- /page one -->

<!-- Start of third page: #popup -->
<div data-role="popup" id="popup">

	<div data-role="header" data-theme="a">
		<h1>Share</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="b">	
		<h2>Share this quote with your friends.</h2>

		<p><a href="#" onclick="sharefb()" data-rel="facebook" data-role="button" data-inline="true">Facebook</a></p>
		<p><a href="#" onclick="sharetw()" data-role="button" data-inline="true">Twitter</a></p>			
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<!--<li><a href="#one" id="backOne" data-icon="custom" class="ui-btn">Cancel</a></li>-->
 				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn-active">Share</a></li>

			</ul>
		</div>
	</div>
</div><!-- /page popup -->


<script type="text/javascript">
function sharefb() {
	window.open("http://www.facebook.com/sharer.php?u=" + window.location.href.replace(/&/g, '%26') + "&t=Quotely");
	//window.location = "https://www.facebook.com/dialog/feed?link=" + window.location.href.replace(/&/g, '%26') + "&name=Quotely&caption=Check%20out%20%this%20quotation%20from%20quotely&redirect_uri=" + window.location.href.replace(/&/g, '%26');
}
</script>

<script type="text/javascript">
function sharetw() {	
	window.open("https://twitter.com/intent/tweet?url=" + window.location.href.replace(/&/g, '%26') + "&text=Quotely&original_referer=" + window.location.href.replace(/&/g, '%26'));
}
</script>




</body>
</html>