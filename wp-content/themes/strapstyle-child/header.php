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
</head>

<body <?php body_class(); ?> <?php understrap_body_attributes(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<header id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

	<nav class="navbar navbar-expand-lg navbar-light bg-secondary">
  		<div class="container">
    
    		<a class="navbar-brand" href="http://localhost:10013/">Navbar</a>
    	
	    	<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      		<span class="navbar-toggler-icon navbar-toggler-light"></span>
	    	</button>
    
	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      		<ul class="navbar-nav me-auto">
	        
		        	<div>
		                <?php
		                wp_nav_menu(
		                    array(
		                        'theme_location' => 'primary',
		                        'container_class' => 'navbar-collapse collapse',
		                        'container_id' => 'navbarSupportedContent',
		                        'menu_class'      => 'nav navbar-nav',
		                        'menu_id'        => 'main-menu',		                        
		                    )
		                );
		                ?>
		            </div>

	      		</ul>

		      <form role="search" class="search-form d-flex" method="get" action="/index.php">
		      	<label class="screen-reader-text" for="s-1">Search</label>
		      	<div class="input-group">
		      		<input type="search" class="field search-field form-control" id="s-1" name="s" value placeholder="Search">
		      		<input type="submit" class="submit search-submit btn btn-primary" name="submit">
		      	</div>
		      </form>
	    	</div>  
  		</div>
	</nav>

	<!-- nav second row -->
	    	
	<nav class="navbar navbar-expand-lg navbar-light bg-blue">
  		<div class="container">
    
	    	<div class="collapse navbar-collapse" id="navbarSupportedContent">
	      		<ul class="navbar-nav ms-auto">
	        
	        		<div>
		                <?php
		                wp_nav_menu(
		                    array(
		                    	'menu' => 'Lower menu',
		                        'container_class' => 'collapse navbar-collapse',
		                        'container_id' => 'navbarSupportedContent',
		                        'menu_class'      => 'navbar-nav',
		                        'menu_id'        => 'main-menu',	
		                    )
		                );
		                ?>
		            </div>

		           	<div class="dropdown">
					  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
					    Recipes
					  </button>
					  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
					    <li><a class="dropdown-item" href="/vegetarian-recipes/">Vegetarian</a></li>
					    <li><a class="dropdown-item" href="/localhost:10013/standard-recipes/">Omnivorous</a></li>
					  </ul>
					</div>

	      		</ul>  		
			</div>
  		</div>
	</nav>


	</header><!-- #wrapper-navbar end -->
