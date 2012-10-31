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
		<a href="http://stanford.edu/~sanzovo/cgi-bin/Quotely/">q</a>
		<h1 id="category">#HERE IS A CATEGORY#</h1>
		<a href="#subcategories" id="subcategory" data-mini="true" data-role="button">More</a>
	</div><!-- /header -->

	<div data-role="content">	
		
		<blockquote id="quotation"> 
			#HERE IS A QUOTATION#
		</blockquote>
		<cite id="speaker">
			<p>- #HERE IS A SPEAKER#</p>
		</cite>
		<small id="source"> 
			<a href="#">+ #HERE IS A SOURCE# &raquo;</a>
		</small>
		
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn">Share</a></li>
			</ul>
		</div>
	</div>

	
</div><!-- /page one -->

<!-- Start of third page: #popup -->
<div data-role="page" id="popup">

	<div data-role="header" data-theme="c">
		<h1>Share</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="c">	
		<h2>Share</h2>
		<p>Here's whre social sharing is going to be implemented.</p>
		<p><a href="#" data-rel="facebook" data-role="button" data-inline="true">Facebook</a></p>	
		<p><a href="#" data-rel="twitter" data-role="button" data-inline="true">Twitter</a></p>			
		<p><a href="#one" data-rel="back" data-role="button" data-inline="true" data-icon="back">Back to page "one"</a></p>	
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn-active">Share</a></li>
			</ul>
		</div>
	</div>
</div><!-- /page popup -->


<div data-role="popup" id="subcategories" data-overlay-theme="c">
	<div data-role="header" data-theme="c">
		<h1>Share</h1>
	</div><!-- /header -->

	<div data-role="content" data-theme="c">	
		<ul data-role="listview" data-inset="true" style="width:180px;" data-theme="c">
	        <li><a data-rel="politics" href="#one">Politics</a></li>
	        <li><a data-rel="international" href="#one">International</a></li>
	        <li><a data-rel="business" href="#one">Business</a></li>
	        <li><a data-rel="science" href="#one">Science</a></li>
	        <li><a data-rel="sports" href="#one">Sports</a></li>
	        <li><a data-rel="back" href="#one" data-icon="back">Back</a></li>
    	</ul>
	</div><!-- /content -->
	
	<div data-role="footer" data-id="samebar" class="nav-glyphish-example" data-position="fixed" data-tap-toggle="false">
		<div data-role="navbar" class="nav-glyphish-example" data-grid="c">
			<ul>
				<li><a href="#popup" id="share" data-icon="custom" class="ui-btn-active">Share</a></li>
			</ul>
		</div>
	</div>
    
</div>

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
                    nextpage = page.next('div[data-role="page"]');
                    if (nextpage.length > 0) {
                       $.mobile.changePage(nextpage,{transition: "slide"}, false, true);
                        }
                    })

                .on('swiperight.paginate', function(){
                    console.log("binding to swipe-right "+page.attr('id'));
                    prevpage = page.prev('div[data-role="page"]');
                    if (prevpage.length > 0) {
                        $.mobile.changePage(prevpage, {transition: "slide",
                        	reverse: true}, true, true);
                        };

                     });
            }
        });

</script>

</body>
</html>