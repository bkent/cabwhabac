<?php 
/**
 * The template for displaying 404 pages (not found)
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

get_header(); ?>
        
		<div class="main-content">
			<main role="main" class="main-content__right" id="main">
				
				<div class="articleContent index-page__box">
				<?php if ( is_active_sidebar( 'widget-404' ) ) : ?>
						<?php dynamic_sidebar( 'widget-404' ); ?>
				<?php else : ?>
					<h1 class="page-title">That page can&rsquo;t be found.</h1>
					<p>It looks like nothing was found at this location. Maybe try a search?</p>
					<?php get_search_form(); ?>
				<?php endif; ?>
				</div>
				
			</main>
			
		<?php get_sidebar(); ?>
		
        </div>
			
<?php get_footer(); ?>