<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link rel="shortcut icon" href="favicon.ico">
<title><?php wp_title('|', true, 'right'); ?></title>
  <?php 
  if($_SERVER['HTTP_HOST']=='agonda.cibirix.com' || $_SERVER['HTTP_HOST']=='www.agonda.cibirix.com') 
  {
    echo '<meta name="robots" content="noindex, nofollow">';
  }
  ?>
<meta name="Language" content="English" />
<link href="https://fonts.googleapis.com/css?family=Bad+Script&amp;subset=cyrillic" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Laila:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<section>
<nav class="navbar-lg header" style="background-color: rgba(0, 0, 0, 1);">
<div class="container">
<div class="navbar-header"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-brand brand"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/agonda-logo.png" alt="Agonda Goa Beach Huts" title="Agonda Goa Beach Huts"></a></div>
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">

<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<div class="collapse navbar-collapse menubar" id="myNavbar">
<?php
$args = array();
$args['menu'] = '6';
$args['echo'] = FALSE;
$args['menu_class'] = 'nav navbar-nav navbar-right header_menu';
$args['menu_id'] = 'header-menu';
$args['container'] = FALSE;
$header_menu = wp_nav_menu($args);
echo $header_menu;
?>
</div>
</nav>
</section>