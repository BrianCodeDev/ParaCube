<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$bootstrap_version = get_theme_mod( 'understrap_bootstrap_version', 'bootstrap4' );
$navbar_type       = get_theme_mod( 'understrap_navbar_type', 'collapse' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link href="assets/img/server-icon (4).png" rel="icon">

<!-- Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- Vendor CSS Files -->
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">
<div id="progress-bar-container">
  <div id="progress-bar"></div>
</div>
	<!-- ******************* The Navbar Area ******************* -->
	<header id="header" class="header">

<div class="topbar d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
	<div class="contact-info d-flex align-items-center">
	<i class="fa-brands fa-discord"></i><a href="https://discord.gg/Jr9dTZtDrb" target="_blank" style="font-size: 16px; color: white; padding-left: 10px;">Join Discord</a>
	</div>
	<div class="social-links d-none d-md-flex align-items-center">
	<p class="ping-server">
  <i class="fa-solid fa-signal" style="color: #63E6BE;"></i> 
  Online: <span id="player-count">Loading...</span>
</p>
	</div>
  </div>
</div><!-- End Top Bar -->

<div class="branding d-flex align-items-center">

  <div class="container position-relative d-flex align-items-center justify-content-between">

  <a href="<?php echo site_url('/'); ?>" class="logo d-flex align-items-center me-auto">
  <img src="http://paracube.local/wp-content/uploads/2025/02/server-icon-4.png" alt="ParaCube Logo">
  <h1 class="sitename">PARACUBE</h1>
</a>

	<nav id="navmenu" class="navmenu">
	  <ul>
		<li><a href="<?php echo site_url('/'); ?>" class="active">Home</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">About</a></li>
		<li><a href="https://paracubes-wiki-guide.gitbook.io/paracubes-wiki-guide">Wiki</a></li>
		<li><a href="<?php echo site_url('/rules'); ?>">Rules</a></li>
		<li class="dropdown"><a href="#"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
		  <ul>
			<li><a href="<?php echo site_url('/voting-links'); ?>">Vote for Rewards</a></li>
			<li><a href="https://paracube.tebex.io">Donate & Support</a></li>
			<li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>
		  </ul>
		</li>
	  </ul>
<i class="fa-solid fa-bars fa-lg d-xl-none d-lg-none d-md-none" 
   id="mobile-menu-btn" 
   data-bs-toggle="offcanvas" 
   data-bs-target="#staticBackdrop" 
   aria-controls="staticBackdrop" 
   style="color: #ffffff; font-size: 35px; margin-top: 14px;">
</i>	


</nav>


<button type="button" class="button-1 copy-ip d-none d-sm-block" id="basicToastBtn"><i class="fa-regular fa-clipboard"></i> COPY IP</button>

<div class="toast-container p-3">
  <div id="basicToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-dark">
      <h5 class="my-0">IP ADDRESS COPIED: play.paracubemc.com</h5>
    </div>
  </div>  
</div>

	<a class="button-1 d-none d-sm-block" href="https://paracube.tebex.io"><i class="fa-solid fa-store"></i> STORE</a>
  </div>

</div>

</header>

<div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
  <div class="offcanvas-header">
  <a href="<?php echo site_url('/'); ?>" class="logo d-flex align-items-center me-auto">
  <img src="http://paracube.local/wp-content/uploads/2025/02/server-icon-4.png" alt="ParaCube Logo">
  <h1 class="sitename">PARACUBE</h1>
</a>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" style="color: white;"></button>
  </div>
  <div class="offcanvas-body">
    <div>
	<ul>
		<li><a href="<?php echo site_url('/'); ?>" class="active">Home</a></li>
		<li><a href="<?php echo site_url('/about'); ?>">About</a></li>
		<li><a href="https://paracubes-wiki-guide.gitbook.io/paracubes-wiki-guide">Wiki</a></li>
		<li><a href="<?php echo site_url('/rules'); ?>">Rules</a></li>
			<li><a href="<?php echo site_url('/voting-links'); ?>">Vote for Rewards</a></li>
			<li><a href="https://paracube.tebex.io">Donate & Support</a></li>
			<li><a href="<?php echo site_url('/faq'); ?>">FAQ</a></li>
			<li>play.paracubemc.com</li>

<div class="toast-container p-3">
  <div id="basicToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header text-dark">
      <h5 class="my-0">IP ADDRESS COPIED: play.paracubemc.com</h5>
    </div>
  </div>  
</div>

	<a class="button-1 d-sm-block" href="https://paracube.tebex.io"><i class="fa-solid fa-store"></i> STORE</a>
	  </ul>

	    </div>
  </div>
</div>


