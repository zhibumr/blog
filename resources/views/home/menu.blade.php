<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<title>祇步末日 - @yield('title')</title>
	<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
	<meta name="description" content="Empire - XHTML Template" />

	<!-- CSS -->	
	<link href='fonts/sansation.css' rel="stylesheet" type="text/css" />	<!-- Get any font from here easily: http://www.google.com/webfonts -->	
	<link href="css/style.css" rel="stylesheet" type="text/css" />	
	<link href="fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-slider.css" rel="stylesheet" type="text/css" />
	<link href="css/styler-farbtastic.css" rel="stylesheet" type="text/css" />
	@section('link')
	@show
	<!-- UPDATE BROWSER WARNING IF IE 7 OR LOWER -->
	<!--[if lt IE 8]>
	<link href="css/stop_ie.css" rel="stylesheet" type="text/css" />
	<![endif]-->

	
	<!-- JAVASCRIPTS -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.8.17.custom.min.js"></script>			
	<script type="text/javascript" src="fancybox/jquery.fancybox-1.3.4.pack.js"></script>	
	<script type="text/javascript" src="js/jquery.nivo.slider.js"></script>			
	<script type="text/javascript" src="js/jquery.bgslider.js"></script>
	<script type="text/javascript" src="js/preloader.js"></script>
	<script type="text/javascript" src="js/farbtastic.js"></script>
	<script type="text/javascript" src="js/basic.js"></script>
	<script type="text/javascript" src="js/styler.js"></script>
	<script type="text/javascript">		
		
		//PAGE IS CLOSED ON START
		jQuery(document).ready(function(){
			jQuery('#page').css({'display':'inline','width':'300px','overflow':'hidden','margin-right':'340px'});
			jQuery('#sidebar').css({'margin-left':'326px'});	
		});
		
		//WHEN ALL ELEMENTS ARE LOADED
		jQuery(window).load(
			function() {			
				jQuery('#hp_preloader').delay(800).animate({'opacity':'0'},1400,function(){
					
					//HOMEPAGE NIVO SLIDER STARTS
					
					jQuery('#slider-nivo').nivoSlider({
						controlNav:true,
						controlNavThumbs:false,			
						keyboardNav:false,
						pauseOnHover:false,
						prevText:'',			
						nextText:'',
						effect:'fade',
						animSpeed:300,
						pauseTime:4000
					});
					
							
					
					//REMOVE LOADING 
					jQuery(this).remove();
						
					//PAGE OPENING ANIMATION	
					jQuery('#sidebar').delay(800).animate({'margin-left':'0px'},2100);		
					jQuery('#page').delay(800).animate({'margin-right':'0px','width':'666px'},2100);		
					
				});				
			}
		);			
	</script>
	@section('script')
	@show	
	<!-- PAGE OPENING ANIMATION -->
	
		
</head>
<body>
	
	<!-- DISPLAY MESSAGE IF JAVA IS TURNED OFF -->
	<noscript>		
		<div id="notification">Please turn on javascript in your browser for the maximum experience!</div>
	</noscript>

	<!-- DISPLAY THIS MESSAGE IF USER'S BROWSER IS IE7 OR LOWER -->
	<div id="ie_warning"><img src="images/warning.png" alt="IE Warning" /><br /><strong>Your browser is out of date!</strong><br /><br />This website uses the latest web technologies so it requires an up-to-date, fast browser!<br />Try <a href="http://www.mozilla.org/en-US/firefox/new/?from=getfirefox">Firefox</a> or <a href="https://www.google.com/chrome">Chrome</a>!</div>

	<!-- PAGE LOADING -->
	

	<!-- STYLER FOR DEMO -->
	
		<div id="styler">
		<div id="styler-button"><a href="#"><h1 text-align="center"><br><br>目<br><br><br>录</h1></a></div>
			
		<div class="styler-title"><h3>最新动态</h3></div>
		<div id="second">
				<ul class="archives">
					<li><a href="#" title="March 2012">March 2012</a></li>
					<li><a href="#" title="February 2012">February 2012</a></li>
					<li><a href="#" title="January 2012">January 2012</a></li>
					<li><a href="#" title="December 2011">December 2011</a></li>
					<li><a href="#" title="December 2011">December 2011</a></li>
				</ul>					
			</div>
		<ul id="texture">	
			<li><a href="#" id="styler-texture-1">None</a></li>
			<li id="selected"><a href="#" id="styler-texture-2">Leather</a></li>
			<li><a href="#" id="styler-texture-3">Carbon</a></li>
		</ul>		
		@yield("styler")

	</div>

	<!-- SITE WRAPPER -->
	<div id="wrapper">
	
		<!-- PAGE WITH CONTENTS -->
		<div id="page">
			@yield("content")
		</div><!-- #page ends -->

		<div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div> 
		
		<!-- SIDEBAR -->
		<div id="sidebar">	
			<div id="sidebar-color"></div>		<!-- SIDEBAR COLOR LAYER -->
			<div id="sidebar-border"></div>		<!-- SIDEBAR BORDER LAYER -->
			<div id="sidebar-light"></div>		<!-- SIDEBAR RADIAL GRADIENT LIGHT LAYER -->
			<div id="sidebar-texture"></div>	<!-- SIDEBAR TEXTURE LAYER -->
			
			<!-- SIDEBAR CONTENT LAYER -->
			<div id="sidebar-content">	
			
				<!-- LOGO -->
				<div id="logo">
					<a href="/"><img src="images/logo.png" alt="" /></a>
				</div>
					
				<!-- MENU -->
				<ul id="menu">
					<li class="current"><a href="/">HOME</a></li>
					<li><a href="blog">博客</a>
						<ul>
							<li><a href="personal">个人</a></li>
							<li><a href="reprinted">转载</a></li>
						</ul>
					</li>
					<li><a href="portfolio-3c.html">笔记</a>
						<ul>
							<li><a href="portfolio-3c.html">学习</a></li>
							<li><a href="portfolio-2c.html">生活</a></li>							
						</ul>
					</li>
					
					<li><a href="#">相册</a>
						<ul>
							<li><a href="stylings-texts.html">生活</a></li>
							<li><a href="stylings-table_columns.html">喜好</a></li>
							<li><a href="stylings-tabs_toggles.html">专业</a></li>
							<!-- <li><a href="stylings-images_videos.html">IMAGES &#038; VIDEOS</a></li>
							<li><a href="stylings-contact_buttons.html">CONTACT FORM &#038; BUTTONS</a></li> -->
						</ul>
					</li>
					<li><a href="gallery.html">关于</a></li>
				</ul>
			

			</div><!-- #sidebar-content ends -->	
			
			<!-- SOCIAL ICONS ON SIDEBAR'S BOTTOM PART -->
			<ul id="sidebar-bottom">			
				<li><a href="#"><img src="images/sidebar_icons/facebook.png" alt="" /></a></li>
				<li><a href="#"><img src="images/sidebar_icons/twitter.png" alt="" /></a></li>
				<li><a href="#"><img src="images/sidebar_icons/rss.png" alt="" /></a></li>
			</ul>
			
			<!-- COPYRIGHT TEXT -->
			<p id="copyright">EMPIRE XHTML. More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></p>
			
		</div><!-- #sidebar ends -->			
					
	</div><!-- #wrapper ends -->

	
	<!-- BACKGROUND SLIDER -->
	<div id="bg_slider">	
		<img src="images/bgslider-1.jpg" alt="" />
		<img src="images/bgslider-2.jpg" alt="" />		
		<img src="images/bgslider-3.jpg" alt="" />		
	</div>


</body>
</html>