<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
	<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
	<!-- this is the link to BluePrint CSS -->
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/blueprint/screen.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/blueprint/print.css" type="text/css" media="print" />
	<!--[if IE]><link rel="stylesheet" href="<?php bloginfo("template_directory"); ?>/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
	<!-- this is the link to the SandBox CSS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>" />
	
	
	<script src="/mint/?js" type="text/javascript"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/jquery.imgbox.pack.js"></script>
	<script type="text/javascript" src="<?php bloginfo("template_directory"); ?>/js/hadto.js"></script>
	
<?php wp_head() // For plugins ?>

	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body class="<?php sandbox_body_class() ?>">

<div id="wrapper" class="hfeed container">

	<div id="header" class="span-18">
		<div id="blog-title" class="span-12">
		
			<a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" class="button" id="hadto-logo" rel="home">hadto.net
				
			
			</a>
		</div><!-- #blog-title -->
		<div id="hedNav" class="span-6 last">
			<span class="header-link"><a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/" title="Creative Commons Licence">LICENSE</a></span>
			<span class="meta-sep">|</span>
			<span class="header-link"><a href="/contact" title="Contact me by email">CONTACT</a></span>
			<span class="meta-sep">|</span>
			<span class="header-link"><a href="/about" title="What is this?">ABOUT</a></span>
		</div><!-- #hedNav -->
	</div><!--  #header -->
