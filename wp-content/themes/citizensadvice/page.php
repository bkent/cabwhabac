<?php 
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

get_header(); ?>
		
        <div class="main-content">
			<main role="main" class="main-content__right" id="main">
			
			<div class="articleContent">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						get_template_part( 'content' );
					endwhile;
					// pagination
				else :
					get_template_part( 'content', 'none' );
				endif;
			?>
			</div>
			
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
			
			</main>
			
			<?php get_sidebar(); ?>
			
        </div>
		
<?php get_footer(); ?>