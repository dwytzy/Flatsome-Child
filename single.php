<?php
/**
 * The template for displaying all pages.
 *
 * @package flatsome
 */


if(flatsome_option('pages_template') != 'default') {
	
	// Get default template from theme options.
	get_template_part('page', flatsome_option('pages_template'));
	return;

} else {

get_header();
do_action( 'flatsome_before_page' ); ?>

<div id="content" class="content-area page-wrapper custom-page" role="main">
	<section class="submenus-sc">
		<?php
		wp_nav_menu( array( 
		    'theme_location' => 'dz-subs-menu',
		    'container'		 => '', 
		    'container_class' => 'subs-menu' ) ); 
		?>
	</section>
	<section class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<header class="entry-header text-center">
				<h1 class="entry-title"><?php the_title(); ?></h1>
				<div class="is-divider medium"></div>
			</header>

			<div class="entry-content">
				<?php the_content(); ?>

				<?php if ( comments_open() || '0' != get_comments_number() ){
					comments_template(); } ?>
			</div>


		<?php endwhile; // end of the loop. ?>
	</section>
	<section class="main-buttons">
		<?php echo get_custom_logo(); ?>
		<?php
		wp_nav_menu( array( 
		    'theme_location' => 'dz-side-menu',
		    'container'		 => '', 
		    'container_class' => 'footer-menu' ) ); 
		?>
	</section>
</div>
<?php
do_action( 'flatsome_after_page' );
get_footer();

}

?>