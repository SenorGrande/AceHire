		<script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-72803641-1', 'auto');
			ga('send', 'pageview');
 
        </script>
		
		<script async src="js/dw_paus_scroller.js" type="text/javascript"></script>
		<script src="js/jquery-1.11.0.min.js"></script>
		<script async src="js/lightbox.min.js"></script>
		
		<script type="text/javascript">
		if ( DYN_WEB.Scroll_Div.isSupported() ) {
			
			DYN_WEB.Event.add( window, 'load', function() {
				var wndo = new DYN_WEB.Scroll_Div('wn', 'lyr');
				
				var options = {
					axis:'h',
					bRepeat:true,
					repeatId:'rpt',
					dur:3000, // duration of glide-scroll
					bPauseResume:true,
					distance: 940, // distance of glide-scroll

					};
				
				wndo.makePauseAuto( options );
				
			});
		}
		</script>
		<head>
			<meta charset="utf-8">
			<meta name="author" content="Connor Hewett">
			<meta name="copyright" content="Copyright 2014 Ace Hire Ltd">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<link rel="stylesheet" type="text/css" href="css/stylesheet.css"> <!-- -->
			<link rel="icon" type="image/x-icon" href="favicon.ico" />
			
			<meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no"/>
			<!--Using jQuery and jQuery UI for display effects-->
			<script src="js/jquery-2.1.1.min.js"></script>
			<script src="js/jquery-ui.min.js"></script>

			<!--Using the hamburger menu display code-->
			<script src="js/hamburger.js"></script>

			<!--Using Media Queries, if the viewport is smaller than 700px use another stylesheet-->
			<link rel="stylesheet" type="text/css" media="all" href="css/hamburger.css"/>
			
			<!-- Add bootstrap here or at the top??? -->
		</head>