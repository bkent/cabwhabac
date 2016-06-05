<?php 
/**
 * The sidebar containing the main widget area
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

?>		
		<?php if ( is_active_sidebar( 'widget-page-nav' ) ) : ?>
			<nav class="main-content__sidebar side-nav side-nav--member">
				<?php dynamic_sidebar( 'widget-page-nav' );?>
			</nav>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<nav class="main-content__sidebar side-nav side-nav--member">
				<h2>Page, Left navigation</h2>
				<p>This block is visible for admin users only.</p>
				<ul><li>No widget has been applied to widget area <strong>Page, Left navigation</strong></li></ul>
			</nav>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'widget-page' ) ) : ?>
			<aside class="main-content__sidebar">
				<?php dynamic_sidebar( 'widget-page' ); ?>
			</aside>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<aside class="main-content__sidebar">
				<div class="index-page__box">
					<h2>Additional widgets</h2>
					<p>This block is visible for admin users only.</p>
					<p>No widget has been applied to widget area <strong>Additional widgets</strong></p>
				</div>
			</aside>
		<?php endif; ?>
		