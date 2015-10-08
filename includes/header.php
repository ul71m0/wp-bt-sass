<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->

<nav class="navbar navbar-default navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>
    </div>
    <div class="collapse navbar-collapse" id="navbar">
      <?php				
            $args = array(
              'theme_location' 	=> 'navbar-left',
              'depth' 		=> 0,
              'container'	=> false,
              'fallback_cb' 	=> false,
              'menu_class' 	=> 'nav navbar-nav',
              'walker' 		=> new BootstrapNavMenuWalker()
            );
            wp_nav_menu($args);
            
            get_template_part('includes/navbar-search');
            
            $args = array(
              'theme_location' 	=> 'navbar-right',
              'depth' 		=> 0,
              'container'	=> false,
              'fallback_cb' 	=> false,
              'menu_class' 	=> 'nav navbar-nav navbar-right',
              'walker' 		=> new BootstrapNavMenuWalker()
            );
            wp_nav_menu($args);
        ?>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>
  
<!--
Site Title
==========
If you are displaying your site title in the "brand" link in the Bootstrap navbar, 
then you probably don't require a site title. Alternatively you can use the example below. 
See also the accompanying CSS example in css/bst.css .

<div class="container">
  <div class="row">
    <div class="col-sm-12">
      <h1 id="site-title">
      	<a class="text-muted" href="<?php echo home_url('/'); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
      </h1>
    </div>
  </div>
</div>
-->
