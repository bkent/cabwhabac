<?php 
/**
 * Template Name: Home page
 *
 * This is a page template that create a custom home page.
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

get_header(); ?>
		
		<main role="main" id="main">
			<div class="main-content">
				<div class="flex-row js-equal-height home-page--member">
				
				<?php if ( is_active_sidebar( 'widget-home-1' ) ) : ?>
					<div class="home-page__box--member-welcome col-md-8">
					<?php if ( get_theme_mod( 'citizensadvice_homefeature' ) ) : ?>
						<img src="<?php echo esc_url( get_theme_mod( 'citizensadvice_homefeature' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
					<?php else : ?>
						<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
					<?php endif; ?>
						<?php dynamic_sidebar( 'widget-home-1' );?>
					</div>
				<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
					<div class="home-page__box--member-welcome col-md-8">
						<?php if ( get_theme_mod( 'citizensadvice_homefeature' ) ) : ?>
							<img src="<?php echo esc_url( get_theme_mod( 'citizensadvice_homefeature' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
						<?php endif; ?>
						<h1>Home #1</h1>
						<p>This block is visible for admin users only.</p>
						<p>No widget has been applied to widget area <strong>Home #1</strong></p>
					</div>
				<?php endif; ?>
				
				
					<div class="col-md-4 flex-column">
						<div class="flex-row js-equal-height">
							<div class="home-page__box--member-search col-md-12 col-sm-6">
								<h2>How can we help?</h2>
								<div><p>Get advice online from Citizens Advice</p></div>
								<form action="//www.citizensadvice.org.uk/resources-and-tools/navigation-tools/Search/" id="searchform" method="get">
									<label for="q" class="screenreader">
										Search Citizens Advice
									</label>
									<div class="search-inline__field">
										<input type="search" name="q" id="q" placeholder="Search Citizens Advice">
									</div>
									<div class="search-inline__button">
										<input type="submit" id="searchsubmit" value="Search"> 
									</div>
								</form>
							</div>
							
						<?php if ( is_active_sidebar( 'widget-home-3' ) ) : ?>
							<div class="home-page__box--member-contact col-md-12 col-sm-6">
								<?php dynamic_sidebar( 'widget-home-3' );?>
							</div>
						<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
							<div class="home-page__box--member-contact col-md-12 col-sm-6">
								<h2>Home #3</h2>
								<p>This block is visible for admin users only.</p>
								<p>No widget has been applied to widget area <strong>Home #3</strong></p>
							</div>
						<?php endif; ?>
						</div>
					</div>
				
				
				<?php if ( is_active_sidebar( 'widget-home-4' ) ) : ?>
					<div class="home-page__box--member-more col-md-4 col-sm-6">
						<?php dynamic_sidebar( 'widget-home-4' );?>
					</div>
				<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
					<div class="home-page__box--member-more col-md-4 col-sm-6">
						<h2>Home #4</h2>
						<p>This block is visible for admin users only.</p>
						<p>No widget has been applied to widget area <strong>Home #4</strong></p>
					</div>
				<?php endif; ?>
				
				
				<?php if ( is_active_sidebar( 'widget-home-5' ) ) : ?>
					<div class="home-page__box--member-volunteer col-md-4 col-sm-6">
						<?php dynamic_sidebar( 'widget-home-5' );?>
					</div>
				<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
					<div class="home-page__box--member-volunteer col-md-4 col-sm-6">
						<h2>Home #5</h2>
						<p>This block is visible for admin users only.</p>
						<p>No widget has been applied to widget area <strong>Home #5</strong></p>
					</div>
				<?php endif; ?>
				
				
				<?php if ( is_active_sidebar( 'widget-home-6' ) ) : ?>
					<div class="home-page__box--member-campaigns col-md-4 col-sm-6">
						<?php dynamic_sidebar( 'widget-home-6' );?>
					</div>
				<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
					<div class="home-page__box--member-campaigns col-md-4 col-sm-6">
						<h2>Home #6</h2>
						<p>This block is visible for admin users only.</p>
						<p>No widget has been applied to widget area <strong>Home #6</strong></p>
					</div>
				<?php endif; ?>
				
				
				<?php if ( is_active_sidebar( 'widget-home-7' ) ) : ?>
					<div class="home-page__box col-md-4 col-sm-6">
						<?php dynamic_sidebar( 'widget-home-7' );?>
					</div>
				<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
					<div class="home-page__box col-md-4 col-sm-6">
						<h2>Home #7</h2>
						<p>This block is visible for admin users only.</p>
						<p>No widget has been applied to widget area <strong>Home #7</strong></p>
					</div>
				<?php endif; ?>
				
				
				<?php if ( is_active_sidebar( 'widget-home-8' ) ) : ?>
					<div class="home-page__box--member-supporters col-md-8">
						<?php dynamic_sidebar( 'widget-home-8' );?>
					</div>
				<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
					<div class="home-page__box--member-supporters col-md-8">
						<h2>Home #8</h2>
						<p>This block is visible for admin users only.</p>
						<p>No widget has been applied to widget area <strong>Home #8</strong></p>
					</div>
				<?php endif; ?>
				
				</div>
            </div>
        </main>
		
<?php get_footer(); ?>