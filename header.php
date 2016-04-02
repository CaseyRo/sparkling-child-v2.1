<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package sparkling
 */
?><!doctype html>
	<!--[if !IE]>
	<html class="no-js non-ie" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 7 ]>
	<html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 8 ]>
	<html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
	<!--[if IE 9 ]>
	<html class="no-js ie9" <?php language_attributes(); ?>> <![endif]-->
	<!--[if gt IE 9]><!-->
<html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri();?>/img/favicon/favicon-128.png" sizes="128x128" />

<!-- start using LESS --> 
<link rel="stylesheet/less" type="text/css" href="<?php echo get_stylesheet_directory_uri()?>/styles.less" />
<script src="<?php echo get_stylesheet_directory_uri()?>/inc/less.min.js" type="text/javascript"></script>
<script src="<?php echo get_stylesheet_directory_uri()?>/inc/jquery-2.2.2.min.js" type="text/javascript"></script>
<!-- END USING LESS -->


<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#FFFFFF" />
<meta name="msapplication-TileImage" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="<?php echo get_stylesheet_directory_uri();?>/img/favicon/mstile-310x310.png" />
<meta name="google-translate-customization" content="df91bde63ecb4d3c-7202aa15cf35a49b-gfc1749ca37b3f1ff-15"></meta>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">


<?php wp_head(); ?>

<!-- ANALYTICS --> 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42811101-3', 'auto');
  ga('send', 'pageview');

</script>
<script async src="<?php echo get_stylesheet_directory_uri()?>/inc/riveted.min.js"></script>

<!-- END OF ANALYTICS --> 

<!-- Hotjar Tracking Code for http://www.wattedoeninberlijn.nl -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:150084,hjsv:5};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
</script>
<!-- End Hotjar Tracking Code for http://www.wattedoeninberlijn.nl -->

<!--  THIS IS CODE FOR A STICKY HEADER. BE AWARE, THIS WONT DO SHIT WHEN YOU HAVE A LENGTHY MENU! -->
<script>
	$window = $(window);
	$window.scroll(function() {

	  	$scroll_position = $window.scrollTop();
	  	//console.log($scroll_position);
	  	$( document ).ready(function() {      
		    var isMobile = window.matchMedia("only screen and (max-width: 767px)");

		    if (isMobile.matches) {
		    	/* DO JACK SHIT 
		        if ($scroll_position > $('#backgroundimage').innerHeight()) {
			        $('.menunavigation').addClass('stickynav');

			        // to get rid of jerk
			        header_height = $('.menunavigation').innerHeight();
			        $('#masthead').css('padding-top' , header_height);
			    } else {
			        $('#masthead').css('padding-top' , '0');
			        $('.menunavigation').removeClass('stickynav');
			    }*/
		    }
		    else 
		    {
		    	if ($scroll_position > $('#backgroundimage').innerHeight()) {
			        $('.menunavigation').addClass('stickynav');
			        
			        // to get rid of jerk
			        //header_height = $('.menunavigation').innerHeight();
			        header_height = 40;
			        margin_bottom = -24;
			        $('#masthead').css('padding-top' , header_height);
			        $('#masthead').css('margin-bottom' , margin_bottom);
			    } else {
			        $('#masthead').css('padding-top' , '0');
			        $('#masthead').css('margin-bottom' , '0');
			        $('.menunavigation').removeClass('stickynav');
			    }
		    }
		 });
	    
	 });
</script>

</head>

<body <?php body_class(); ?>>


<div id="page" class="hfeed site">

	<header id="masthead" class="site-header" role="banner">
		<div id="logo" >
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<img src="<?php echo get_stylesheet_directory_uri();?>/img/wattedoeninberlijn_logo.png" style="position:absolute; width:15vw; margin-left:3vw" alt="<?php bloginfo( 'name' ); ?>"/>
			
			</a>
        </div>
		<div id="backgroundimage">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>">

			<?php 

			$currentMonth=DATE("m");
			 
			IF ($currentMonth>="03" && $currentMonth<="05")
			  $thumb = get_stylesheet_directory_uri() . '/img/lente.jpg';
			ELSEIF ($currentMonth>="06" && $currentMonth<="08")
			  $thumb = get_stylesheet_directory_uri() . '/img/zomer.jpg';
			ELSEIF ($currentMonth>="09" && $currentMonth<="11")
			  $thumb = get_stylesheet_directory_uri() . '/img/herfst.jpg';
			ELSEIF ($currentMonth>="12" && $currentMonth<="02")
			  $thumb = get_stylesheet_directory_uri() . '/img/winter.jpg';
			ELSE
			  $thumb = get_stylesheet_directory_uri() . '/img/winter.jpg';

			?>
			<img src="<?php echo $thumb?>"  style="width:100vw;" alt="<?php bloginfo( 'name' ); ?>"/>
			
			</a>
        </div>	
    	
			<div class="menunavigation">
				<div class="container">
					
					<div class="row">

						<div class="main-content-inner col-sm-12 col-md-12">
							<nav>
					
				    		<?php if ( function_exists('max_mega_menu_is_enabled') ) : ?>
							 <?php wp_nav_menu( array( 'theme_location' => 'footer-links') ); ?>
							
							<?php endif; ?>
								
							
		
							</nav><!-- .site-navigation -->
						</div>
					</div>
				
				</div>
			</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
        
        <div class="top-section">
			
		</div>

		<div class="container main-content-area">
			
			<div class="row">

				<div class="main-content-inner <?php echo sparkling_main_content_bootstrap_classes(); ?> <?php echo of_get_option( 'site_layout' ); ?>">
					
				