<!DOCTYPE html> 
<html>

<head>
	<title>Quotely</title> 
	<meta charset="utf-8">
	<meta name="apple-mobile-web-app-capable" content="yes">
 	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 
	<link rel="stylesheet" href="./jQuery/jquery.mobile-1.2.0.css" />
	<!--<link rel="stylesheet" href="jquery-ui-1.9.0.custom.css" />-->

	<script src="./jQuery/jquery-1.8.2.min.js"></script>
	<script src="./jQuery/jquery.mobile-1.2.0.js"></script>


</head> 

	
<body> 

	

<!-- Start of first page: #one -->
<div data-role="page" id="one" data-theme="c">

	
			
	<div data-role="header">
		<a href="index2.html">q</a>
		<h1 id="category">
			<?php echo $_GET['category']; ?>
		</h1>
		<div class="ui-btn-right" data-role="collapsible" data-inset="true" data-iconpos="right" data-theme="a" data-content-theme="c">
  		 <h1 id="category"><?php echo $_GET['category']; ?></h1>
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
		</div>  
	</div><!-- /header -->

	<?php 
		$query = "";
		$id = $_GET['id'];
		$category = $_GET['category'];
		
		include("content.php"); 
	?>

	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<li><a href="index2.html" id="back" data-icon="custom" class="ui-btn">Back</a></li>
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

	<div data-role="content" data-theme="a">	
		<h2>Share</h2>
		<p>Here's whre social sharing is going to be implemented.</p>
		<p><a href="#" data-rel="facebook" data-role="button" data-inline="true">Facebook</a></p>	
		<p><a href="#" data-rel="twitter" data-role="button" data-inline="true">Twitter</a></p>			
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="a">
			<ul>
				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn-active">Share</a></li>
			</ul>
		</div>
	</div>
</div><!-- /page popup -->


<script type="text/javascript">
// This handles all the swiping between each page. You really
// needn't understand it all.

$(document).on('pageshow', 'div:jqmData(role="page")', function(){


     var page = $(this), nextpage, prevpage;
     // check if the page being shown already has a binding
      if ( page.jqmData('bound') != true ){
            // if not, set blocker
            page.jqmData('bound', true)

            // bind
                .on('swipeleft.paginate', function() {
                    console.log("binding to swipe-left on "+page.attr('id'));
                    window.location = "quote.php?id=<?=$id + 1?>&category=<?=$category?>";
                    /*nextpage = page.next('div[data-role="page"]');
                    if (nextpage.length > 0) {
                    	alert("hi");

                        }*/
                    })

                .on('swiperight.paginate', function(){
                    console.log("binding to swipe-right "+page.attr('id'));
                    window.location = "quote.php?id=<?=$id - 1?>&category=<?=$category?>";
                    /*prevpage = page.prev('div[data-role="page"]');
                    if (prevpage.length > 0) {
                        $.mobile.changePage(prevpage, {transition: "slide",
                        	reverse: true}, true, true);
                        };*/

                     });
            }
        });

</script>

</body>
</html>