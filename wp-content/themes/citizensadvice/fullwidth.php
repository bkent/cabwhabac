<?php 
/**
 *
 * Template Name: Full Width
 * The template for displaying all single posts and attachments
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

get_header(); ?>
		
        <div class="main" style="width:100%;">
			<main role="main" class="main-content" id="main" style="width:100%;">
			
			<div class="articleContent" style="width:100%;">
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
			
        </div>
		
<?php get_footer(); ?>