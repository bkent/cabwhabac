<?php 
/**
 * The template for displaying all tags
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

get_header(); ?>
		
        <div class="main-content">
			<main role="main" class="main-content__right" id="main">
			
			<div class="articleContent">
			<?php
				if ( have_posts() ) : ?>
					<h1 class="page-title">Posts tagged: <?php single_tag_title(); ?></h1>
			<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'content' );
					endwhile;
					// pagination
				else :
					get_template_part( 'content', 'none' );
				endif;
			?>
			</div>
			
			<?php citizensadvice_paging_nav(); ?>
			
			</main>
			
			<?php get_sidebar(); ?>
			
        </div>
		
<?php get_footer(); ?>