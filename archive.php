<?php get_header(); ?>

<?php // Get Theme Options from Database
	$theme_options = rubine_theme_options();
?>

	<div id="wrap" class="container clearfix">
		
		<section id="content" class="primary" role="main">

			<?php // Display breadcrumbs or archive title
			if ( function_exists( 'themezee_breadcrumbs' ) ) :

				themezee_breadcrumbs(); 
				
			else : ?>
			
				<header class="page-header">
					<?php the_archive_title( '<h2 class="archive-title">', '</h2>' ); ?>
				</header>
			
			<?php
			endif;
		
			if (have_posts()) : while (have_posts()) : the_post();
		
				get_template_part( 'content' );
		
			endwhile;
			
			rubine_display_pagination();

			endif; ?>
			
		</section>
		
		<?php get_sidebar(); ?>
	</div>
	
<?php get_footer(); ?>