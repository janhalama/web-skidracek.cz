<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Ski_Dracek
 * @since Ski Dracek 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link type="text/css" href="/wp-content/themes/dracek/css/font-awesome.min.css" rel="stylesheet">
<link type="text/css" href="/wp-content/themes/dracek/css/reveal.css" rel="stylesheet">
<style>
#hlsjslive {
  background-color: #2f2f4f;
}
</style>

<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.8.3.js"></script>
<script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
<script type="text/javascript" src="/wp-content/themes/dracek/js/jquery.reveal.js"></script>
<script type="text/javascript" src="/wp-content/themes/dracek/js/temperature.js"></script>
<script>
window.onload = function () {
};
</script>
<script>
$(function() {
			$('ul.nav a').bind('click',function(event){
				var $anchor = $(this);
				
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1500,'easeInOutExpo');
				/*
				if you don't want to use the easing effects:
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 1000);
				*/
				event.preventDefault();
			});
			TemperatureLookupNowAndRepeate();
		});

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-13162973-2', 'auto');
  ga('send', 'pageview');

</script>
</head>

<body <?php body_class(); ?>>

<div id="sd-id-modal-ask-question" class="reveal-modal">
	 <a class="close-reveal-modal"><span class="fa fa-close"></span></a>
     <iframe width="700" height="715" src="https://dracek.wufoo.com/forms/zbz2mit0em65ev/"></iframe>
</div>

<div id="sd-id-modal-inquiry-skischool" class="reveal-modal">
	 <a class="close-reveal-modal"><span class="fa fa-close"></span></a>
     <iframe width="700" height="750" src="https://dracek.wufoo.com/forms/m4bqm3n0w7v3wv/"></iframe>
</div>

<!-- menu section top placeholder--> 
<!-- menu section top placeholder--> 
<div id="sd-id-section-menu-placeholder" class="section scroll">
</div>
<!-- menu section --> 
  <div id="sd-id-section-menu" class="section scroll">
   <div class="section-body">
   <div class="nav-container">
   <div class="menu">
    <div class="navigace">
      <ul class="nav">
        <li><a href="#sd-id-section-actions-header-handle" class="nav_a_a">Aktuální akce</a></li>
        <li><a href="#sd-id-section-parameters-header-handle" class="nav_a_a">Parametry vleku</a></li>
        <li><a href="#sd-id-section-skischool-header-handle" class="nav_a_a">Lyžařská škola</a></li>
        <li><a href="#sd-id-section-pricelist-header-handle" class="nav_a_a">Ceník</a></li>
        <li><a href="#sd-id-section-navigation-header-handle" class="nav_a_a">Kudy k Dráčkovi?</a></li>
		<li><a href="#sd-id-section-contacts-header-handle" class="nav_a_a">Kontakty</a></li>
        <li><a href="#sd-id-section-gallery-header-handle" class="nav_a_a">Dráček v obrazech</a></li>
      </ul>
      <div class="cleaner">&nbsp;</div> 
     </div>
     </div>
    </div>
	</div>
  </div>
