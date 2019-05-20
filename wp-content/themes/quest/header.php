<?php
/**
 * The header for quest.
 *
 * Displays all of the <head> section and everything up till end of </header>
 *
 * @package Quest
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class( quest_get_mod( 'layout_global_site' ) ); ?>>
	<?php
		/**
		 * Custom action before page
		 */
		do_action( 'quest_before_page' );
	?>
	
	<div id="page" class="hfeed site">

		<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'quest' ); ?></a>

		<?php

		/**
		 * Custom action before main header
		 */
		do_action( 'quest_before_header' );

		/**
		 * Filter Header container class
		 */
		$header_container_cls = apply_filters( 'quest_header_container_cls', 'container' );
		?>

		<?php if ( quest_get_mod( 'layout_header_secondary' ) ) : ?>
			<header id="secondary-head" class="secondary-header" role="banner">
				<div class="<?php echo $header_container_cls; ?>">
					<div class="row">
						<?php quest_second_header(); ?>
					</div>
				</div>
			</header>
			<!-- #secondary-head -->
		<?php endif; ?>

		<header id="masthead" class="main-header" role="banner">
			<div class="<?php echo $header_container_cls; ?>">
				<div class="row">
					<?php quest_site_branding( 'col-md-4' ); ?>
					
					<?php echo quest_main_menu_html(); ?>
				</div>
			</div>
		</header>
		<!-- #masthead -->

		<?php

		/**
		 * Custom action after main header
		 */
		do_action( 'quest_after_header' );
		?>
		<link rel="stylesheet" type="text/css" href="https://www.bochsystems.net/wp-content/themes/quest/css/component.css" />
		<script src="https://www.bochsystems.net/wp-content/themes/quest/js/modernizr.custom.js"></script>
		
<?php if(is_front_page()): ?>		
    
<link rel='stylesheet' id='dashicons-css'  href='https://bochsystems.net/https://bochsystems.net/wp-content/themes/quest/wp-content/themes/quest/wp-includes/css/dashicons.mine100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='wp-jquery-ui-dialog-css'  href='https://bochsystems.net/https://bochsystems.net/wp-content/themes/quest/wp-content/themes/quest/wp-includes/css/jquery-ui-dialog.mine100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/contact-form-7/includes/css/styles167b.css?ver=4.6' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/revslider/public/assets/css/settingsbdeb.css?ver=5.1.3' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
.tp-caption.Twitter-Content a,.tp-caption.Twitter-Content a:visited{color:#0084B4 !important}.tp-caption.Twitter-Content a:hover{color:#0084B4 !important; text-decoration:underline !important}
</style>
<link rel='stylesheet' id='vntd-google-font-heading-css'  href='http://fonts.googleapis.com/css?family=Raleway%3A300%2C400%2C500%2C700%2C800&amp;ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/bootstrap.mine1001.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='simple-line-icons-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/simple-line-icons/simple-line-iconse100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/scripts/animate.mine100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.minb2ab.css?ver=4.11' type='text/css' media='all' />
<link rel='stylesheet' id='waxom-styles-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/stylee100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='socials-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/socialse100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='waxom-dynamic-styles-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/style-dynamice100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='waxom-responsive-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/responsivee100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='cubePortfolio-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/scripts/cubeportfolio.mine100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/scripts/magnific-popupe100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/scripts/owl.carousele100.css?ver=4.7.2' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/js_composer/assets/css/js_composer.minb2ab.css?ver=4.11' type='text/css' media='all' />
<script type='text/javascript' src='https://bochsystems.net/https://bochsystems.net/wp-content/themes/quest/wp-content/themes/quest/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://bochsystems.net/https://bochsystems.net/wp-content/themes/quest/wp-content/themes/quest/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.tools.minbdeb.js?ver=5.1.3'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/revslider/public/assets/js/jquery.themepunch.revolution.minbdeb.js?ver=5.1.3'></script>
<style type="text/css" data-type="vc_shortcodes-custom-css">
    .vc_custom_1446920005212{margin-top: -80px !important;margin-bottom: 0px !important;}.vc_custom_1448797867942{padding-top: 35px !important;padding-bottom: 5px !important;}.vc_custom_1446401129310{margin-bottom: 0px !important;padding-top: 50px !important;padding-bottom: 60px !important;background-color: #f8f8f8 !important;}.vc_custom_1448799226273{margin-bottom: 0px !important;}.vc_custom_1427402977108{margin-bottom: 30px !important;}
</style>
<noscript>
<style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript>        
<style type="text/css" media="all">
    
</style>


	
	
<div style="">

		
<div id="page-content" >
	
	
    <div class="page-holder page-layout-fullwidth" style="">
	
	<div style=""id="first" data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_custom_1446920005212 vc_row-no-padding">
            <div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner "><div class="wpb_wrapper">    
    <div id="veented-slider-8359" class="veented-slider-holder " data-slider-autoplay="7000" data-slider-effect="slide">
	
		<div class="veented-slider-loader">
			<div class="spinner">
			  <div class="dot1"></div>
			  <div class="dot2"></div>
			</div>
		</div>
		
		<div class="veented-slider swiper-containers">
		
			<div class="veented-slider-inner swiper-wrapper">
			
								
				<div class="swiper-slide veented-slide swiper-lazy veented-slide-1 veented-slide-align-center veented-slide-color-white veented-slide-heading-transform- veented-slide-heading-weight- veented-slide-overlay-none" style="background-image:url(https://bochsystems.net/wp-content/themes/quest/ban13.png);" data-background="https://bochsystems.net/wp-content/themes/quest/ban13.png">
				
					<div class="inner">
						<div class="veented-slide-inner">
<h2 class="veented-slide-secondary-heading animated animatedSlider" style="color:#fff;font-size:50px;font-family: 'HelveticaNeueLT-Heavy', Helvetica, Arial, sans-serif;
letter-spacing: -3px;font-weight: 900;text-transform: uppercase;">
    Network & cyber security services</h2>
<h2 class="veented-slide-heading animated animatedSlider"style="color:#fff;font-size:50px;font-family: 'HelveticaNeueLT-Heavy', Helvetica, Arial, sans-serif;
letter-spacing: -3px;font-weight: 900;text-transform: uppercase;">
    Enterprise firewall, advanced threat protection, Endpoint security</h2>
<p class="veented-slide-paragraph animated animatedSlider" style="color: #ffffff;line-height: 1em;text-shadow: rgba(0, 0, 0, 0.25) 1px 1px 5px;
text-transform: uppercase;font-size: 18px;font-weight: 900;">
    Web application security, vulnerability assessment</p>
<div class="veented-slide-buttons animated animatedSlider">
    <a class="btn btn-accent3 btn-hover-white veented-slide-button1" style="text-transform: uppercase;background: #dc291e;border-color: transparent;
color: #ffffff;height: inherit;padding: 20px 30px;line-height: 1em;
font-family: 'HelveticaNeueW01-75Bold', Helvetica, Arial, sans-serif;font-size: 18px"href="http://bochsystems.net/security-solutions/">Learn More</a></div>						</div>
						
					</div>
				
				</div>
									
								
				
									
								
				<div class="swiper-slide veented-slide swiper-lazy veented-slide-3 veented-slide-align-center veented-slide-color-white veented-slide-heading-transform- veented-slide-heading-weight- veented-slide-overlay-none" style="background-image:url(https://bochsystems.net/wp-content/themes/quest/ban22.png);" data-background="https://bochsystems.net/wp-content/themes/quest/ban22.png">
				
					<div class="inner">
						<div class="veented-slide-inner">
<h2 class="veented-slide-secondary-heading animated animatedSlider"style="color:#fff;font-size:50px;font-family: 'HelveticaNeueLT-Heavy', Helvetica, Arial, sans-serif;
letter-spacing: -3px;font-weight: 900;text-transform: uppercase;">
    Collection of physical and virtual resources that support</h2>
<h2 class="veented-slide-heading animated animatedSlider"style="color:#fff;font-size:50px;font-family: 'HelveticaNeueLT-Heavy', Helvetica, Arial, sans-serif;
letter-spacing: -3px;font-weight: 900;text-transform: uppercase;"> 
    an overall IT environment </h2>
<p class="veented-slide-paragraph animated animatedSlider" style="color: #ffffff;line-height: 1em;text-shadow: rgba(0, 0, 0, 0.25) 1px 1px 5px;
text-transform: uppercase;font-size: 18px;font-weight: 900;">Server, Storage and network component </p>
<div class="veented-slide-buttons animated animatedSlider">
 <a class="btn btn-accent3 btn-hover-white veented-slide-button1" style="text-transform: uppercase;background: #dc291e;border-color: transparent;
color: #ffffff;height: inherit;padding: 20px 30px;font-size: 18px;line-height: 1em;
font-family: 'HelveticaNeueW01-75Bold', Helvetica, Arial, sans-serif;"href="http://bochsystems.net/information-availability-details/#Enterprise%20Servers%20and%20Storage">Learn more</a></div>						</div>
						
					</div>
				
				</div>
				<div class="swiper-slide veented-slide swiper-lazy veented-slide-2 veented-slide-align-center veented-slide-color-white veented-slide-heading-transform- veented-slide-heading-weight- veented-slide-overlay-none" style="background-image:url(https://bochsystems.net/wp-content/themes/quest/banner31.png);" data-background="https://bochsystems.net/wp-content/themes/quest/banner31.png">
				
					<div class="inner">
						<div class="veented-slide-inner">
<h2 class="veented-slide-secondary-heading animated animatedSlider"style="color:#fff;font-size:50px;font-family: 'HelveticaNeueLT-Heavy', Helvetica, Arial, sans-serif;
letter-spacing: -3px;font-weight: 900;text-transform: uppercase;">
    Restore your vital systems and business critical application  </h2>
<h2 class="veented-slide-heading animated animatedSlider"style="color:#fff;font-size:50px;font-family: 'HelveticaNeueLT-Heavy', Helvetica, Arial, sans-serif;
letter-spacing: -3px;font-weight: 900;text-transform: uppercase;"> 
    with light quick replication</h2>
<p class="veented-slide-paragraph animated animatedSlider" style="color: #ffffff;line-height: 1em;text-shadow: rgba(0, 0, 0, 0.25) 1px 1px 5px;
text-transform: uppercase;font-size: 18px;font-weight: 900;">
    Replicate to either a private or public cloud</p>
<div class="veented-slide-buttons animated animatedSlider">
<a class="btn btn-accent3 btn-hover-white veented-slide-button1" style="text-transform: uppercase;background: #dc291e;border-color: transparent;
color: #ffffff;height: inherit;padding: 20px 30px;line-height: 1em;
font-family: 'HelveticaNeueW01-75Bold', Helvetica, Arial, sans-serif;font-size: 18px"href="http://bochsystems.net/information-availability-details/#Business%20continuity%20and%20disaster%20recovery">Read more &gt;&gt;</a></div>						</div>
						
					</div>
				
				</div>					
				    
		
			</div>
		
			<!-- Slider Pagination -->
		
			<div class="veented-slider-pagination swiper-pagination"></div>
			
			<!-- Slider Arrows -->
			
			<div class="swiper-button-next"><i class="fa fa-angle-right"></i></div>
			<div class="swiper-button-prev"><i class="fa fa-angle-left"></i></div>

					
		</div>
	
	</div>
	
	</div></div></div></div><div class="vc_row-full-width"></div>
        
        
    </div></div></div>
	<!-- End Footer -->

	<!-- Back To Top Button -->

	
	
	<!-- End Back To Top Button -->

<link rel='stylesheet' id='swiperCSS-css'  href='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/css/scripts/swiper.mine100.css?ver=4.7.2' type='text/css' media='all' />

<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/contact-form-7/includes/js/scripts167b.js?ver=4.6'></script>
<script type='text/javascript' src='https://bochsystems.net/https://bochsystems.net/wp-content/themes/quest/wp-content/themes/quest/wp-includes/js/comment-reply.mine100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/js/bootstrap.mine100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.minb2ab.js?ver=4.11'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/js/jquery.appeare100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/js/jquery.easing.1.3e100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/js/jquery.custome100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/https://bochsystems.net/wp-content/themes/quest/wp-content/themes/quest/wp-includes/js/wp-embed.mine100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/plugins/js_composer/assets/js/dist/js_composer_front.minb2ab.js?ver=4.11'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/js/swiper.mine100.js?ver=4.7.2'></script>
<script type='text/javascript' src='https://bochsystems.net/wp-content/themes/quest/wp-content/themes/waxom/js/owl.carousel.mine100.js?ver=4.7.2'></script>
<?php endif; ?>
<style>
#icon-social{
position: fixed;
top: 30%;
right:0;
width:50px;
 
z-index:999999;
background:#fff;
border: 2px solid #eee;
padding:3px;
}
#icon-social {


}
#team{
    border: 1px solid #317856 !important;
    color: #09658e !important;
    background: rgba(0,0,0,0);
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 18px !important;
    cursor: pointer;
    }
    #team1 #team:hover{ background: #09658e;color: #fff !important;}
</style>
<div id="icon-social">
<a href="http://facebook.com/bochsystem"target="_blank"><img src="https://bochsystems.net/wp-content/themes/quest//fb.png"></a>
<a href="https://twitter.com/SystemsBoch"target="_blank"><img src="https://bochsystems.net/wp-content/themes/quest/t.png"></a>
<a href="http://instagram.com/bochsystems"target="_blank"><img src="https://bochsystems.net/wp-content/themes/quest/i.png"></a>
</div>

