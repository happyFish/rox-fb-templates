<!doctype html>  

	<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
	<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
	<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
	<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
	<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
	
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		
		<title></title>
		
		<?php echo $html->css('tab') ?>
		<script src="/js/modernizr-1.6.min.js"></script>
	
	</head>
	
	<body>
		<div id="container">
		
			<header>
			
			</header>
			
			<div id="main">
				<?php echo $rox_layout_content ?>
			</div>
			
			<footer>
			
			</footer>
		</div> <!-- end of #container -->
		
		<div id="fb-root"></div>
		
		<script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>   
		<script type="text/javascript">
			window.fbAsyncInit = function(){
				FB.Canvas.setSize({ width: 520, height: 880 });
				FB.init({
					appId  : '111111111111',
					status : true, // check login status
					cookie : true, // enable cookies to allow the server to access the session
					xfbml  : true  // parse XFBML
				});
				FB.Canvas.setAutoResize();
			};
		
		</script>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
		<script>!window.jQuery && document.write(unescape('%3Cscript src="/js/libs/jquery-1.5.1.js"%3E%3C/script%3E'))</script>

		<!--[if lt IE 7 ]>
		<script src="/js/libs/dd_belatedpng.js"></script>
		<script> DD_belatedPNG.fix('img, .png_bg'); </script>
		<![endif]-->
				
		<!-- change the UA-XXXXX-X to be your site's ID -->
		<script>
			var _gaq = [['_setAccount', 'UA-XXXXX-X'], ['_trackPageview']];
			(function(d, t) {
				var g = d.createElement(t),
				s = d.getElementsByTagName(t)[0];
				g.async = true;
				g.src = ('https:' == location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				s.parentNode.insertBefore(g, s);
			})(document, 'script');
		</script>
	
	</body>
</html>