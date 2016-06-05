<?php 
/**
 * The template for displaying the footer
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

?>

	</div>
	
	
    <footer id="footer" role="contentinfo" class="main-footer" data-track-zone="footer">
        <div class="main-footer__content flex-row js-equal-height">
		
		<?php if ( is_active_sidebar( 'widget-footer-1' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<?php dynamic_sidebar( 'widget-footer-1' );?>
			</div>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<h2>Footer #1</h2>
				<p>This block is visible for admin users only.</p>
				<p>No widget has been applied to widget area <strong>Footer #1</strong></p>
			</div>
		<?php endif; ?>		
		
		<?php if ( is_active_sidebar( 'widget-footer-2' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<?php dynamic_sidebar( 'widget-footer-2' );?>
			</div>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<h2>Footer #2</h2>
				<p>This block is visible for admin users only.</p>
				<p>No widget has been applied to widget area <strong>Footer #2</strong></p>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'widget-footer-3' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<?php dynamic_sidebar( 'widget-footer-3' );?>
			</div>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<h2>Footer #3</h2>
				<p>This block is visible for admin users only.</p>
				<p>No widget has been applied to widget area <strong>Footer #3</strong></p>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'widget-footer-4' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<?php dynamic_sidebar( 'widget-footer-4' );?>
			</div>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<div class="main-footer__box col-md-3 col-sm-6">
				<h2>Footer #4</h2>
				<p>This block is visible for admin users only.</p>
				<p>No widget has been applied to widget area <strong>Footer #4</strong></p>
			</div>
		<?php endif; ?>
		
		<?php if ( is_active_sidebar( 'widget-footer-5' ) ) : ?>
			<div class="main-footer__box">
				<?php dynamic_sidebar( 'widget-footer-5' );?>
			</div>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<div class="main-footer__box">
				<h2>Footer #5</h2>
				<p>This block is visible for admin users only.</p>
				<p>No widget has been applied to widget area <strong>Footer #5</strong></p>
			</div>
		<?php endif; ?>
		
        </div>
    </footer>
	

    <!--[if gt IE 7]><i -->
	<script src="<?php bloginfo( 'template_url' ); ?>/js/core.js"></script>
	
    <!--<![endif]-->

    <!--[if IE 8]></div><![endif]-->

	<?php wp_footer(); ?>
	
</body>
</html>
