<?php
	do_action('flatsome_before_blog');
?>

<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'top'){ get_template_part('template-parts/posts/featured-posts'); } ?>

<div class="custom-page">
	<section class="submenus-sc">
		<?php
		wp_nav_menu( array( 
		    'theme_location' => 'dz-subs-menu',
		    'container'		 => '', 
		    'container_class' => 'subs-menu' ) ); 
		?>
	</section>
	<section class="main-content">
	<?php if(!is_single() && get_theme_mod('blog_featured', '') == 'content'){ get_template_part('template-parts/posts/featured-posts'); } ?>
	<?php
		if(is_single()){
			get_template_part( 'template-parts/posts/single');
			comments_template();
		} elseif(get_theme_mod('blog_style_archive', '') && (is_archive() || is_search())){
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style_archive', '') );
		} else{
			get_template_part( 'template-parts/posts/archive', get_theme_mod('blog_style', 'normal') );
		}	?>
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
	do_action('flatsome_after_blog');
?>
