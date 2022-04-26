<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">


			<!---------------------- recent posts ----------------------->
			<div class="container overflow-hidden">	

				<!-- most recent post -->					
				<div class="row">
					<div class="container border border-2 rounded shadow-sm bg-white p-3 mb-4">	
					<?php
					$args = array( 'numberposts' => 1, 'order'=> 'DESC', 'orderby' => 'post_date' );
					$postslist = get_posts( $args );
					foreach ($postslist as $post) :  setup_postdata($post); ?> 
					    <div>
					    	<?php the_title(); ?> 
					        <br />
					        <?php the_date(); ?>
					          
					        <?php the_content(); ?>
					    </div>
					<?php endforeach; ?>
				</div>

				<!-- second through fourth most recent posts -->
				<div class="row gx-1.5 mb-5">
				    <div class="col-md">
				    	<div class="p-3 shadow p-3 bg-white rounded">
				        <?php 
						  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 1 ) ); 
						  ?>

  						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	  					    <div>
						    	<?php the_title(); ?> 
						        <br />
						        <?php the_date(); ?>
						        <?php the_excerpt(); ?>
						    </div>

						  <?php 
							endwhile;
						  wp_reset_postdata();
						  ?>
						</div>
				    </div>

				    <div class="col-md">
				    	<div class="p-3 shadow p-3 bg-white rounded">
				        <?php 
						  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 2 ) ); 
						  ?>

  						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	  					    <div>
						    	<?php the_title(); ?> 
						        <br />
						        <?php the_date(); ?>
						        <?php the_excerpt(); ?>
						    </div>

						  <?php 
							endwhile;
						  wp_reset_postdata();
						  ?>
						</div>
				    </div>

				    <div class="col-md">
				    	<div class="p-3 shadow p-3 bg-white rounded">
				        <?php 
						  $the_query = new WP_Query( array( 'posts_per_page' => 1,'offset' => 3 ) ); 
						  ?>

  						<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>

	  					    <div>
						    	<?php the_title(); ?> 
						        <br />
						        <?php the_date(); ?>
						        <?php the_excerpt(); ?>
						    </div>

						  <?php 
							endwhile;
						  wp_reset_postdata();
						  ?>
						</div>
				    </div>
				</div>

			<!---------------------- info ----------------------->

				<div class="container">
				  <div class="row gx-1.5 mb-5">
				    <div class="col-md">
				    	<div class="border border-2 rounded p-3 bg-primary">
				      		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In mollis nunc sed id semper risus in hendrerit gravida. </p>
				      	</div>
				    </div>
				    <div class="col-md">
				    	<div class="border border-2 rounded p-3 bg-primary">
				      		<p>Viverra accumsan in nisl nisi scelerisque eu ultrices vitae. Turpis egestas sed tempus urna et pharetra pharetra.</p>
				      	</div>
				    </div>
				    <div class="col-md">
				    	<div class="border border-2 rounded p-3 bg-primary">
				      		<p>Lacus suspendisse faucibus interdum posuere. Sagittis purus sit amet volutpat consequat mauris nunc congue nisi. Adipiscing diam donec adipiscing tristique risus nec feugiat in.</p>
				      	</div>
				    </div>
				  </div>
				</div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #index-wrapper -->

<?php
get_footer();
