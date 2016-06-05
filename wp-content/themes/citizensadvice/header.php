<?php 
/**
 * The template for displaying the header
 *
 * @package CitizensAdvice
 * @since CitizensAdvice 1.0
 */

?><!DOCTYPE html>
<html class="js" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="content-type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2.0">
	
    <!--[if gt IE 7]><meta -->
    <script>(function (n, t) { var i = n.documentElement; i.className = i.className.replace(/\bno-js\b/, "js"); t.$ = function (n) { var i = t.$.q = t.$.q || []; if (i.push(n), typeof n != "function") throw new Error("jQuery not yet loaded"); }; /\beprivacy=3(;|$)/i.test(n.cookie) && (i.className += " hide-cookie-monster"); n.cookie = "z=1; path=/"; /(?:^| )z=1(?:;|$)/.test(n.cookie) ? n.cookie = "z=; expires=" + new Date(0).toUTCString() + "; path=/" : i.className = i.className += " no-cookies"; $.bind || n.write('<script src="<?php bloginfo( 'template_url' ); ?>/js/polyfill.js"><\/script>') })(document, window)</script>
    <!--<![endif]-->
	
    <!--[if lt IE 9]><script src="<?php bloginfo( 'template_url' ); ?>/js/html5.min.js"></script>
	<script src="<?php bloginfo( 'template_url' ); ?>/js/ie7-dummy-$.js"></script>
	<![endif]-->
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
    <!--[if IE 8]><div class="ie8"><![endif]-->

    <div class="skip-nav">
        <a class="screenreader screenreader--focusable" href="#main">Skip to content</a>
        <a class="screenreader screenreader--focusable" href="#footer">Skip to footer</a>
    </div>
	
	
    <header class="main-header">
        <div class="main-header__content">
		<?php if ( get_theme_mod( 'citizensadvice_logo' ) ) : ?>
			<a class="main-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
				<img src="<?php echo esc_url( get_theme_mod( 'citizensadvice_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			</a>
		<?php else : ?>
			<a class="main-header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" rel="home">
				<img src="<?php bloginfo( 'template_url' ); ?>/img/logo_100px.png" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
			</a>
		<?php endif; ?>
			
			

            <div class="main-header__links" data-track-zone="top-bar">
                <a class="main-header__menu-link js-toggle-menu" href="#footer">
                    <i class="icon-menu" aria-hidden="true"></i>Menu
                </a>
				
                <nav class="main-header__top-nav">
                    <?php if ( has_nav_menu( 'header_top-nav' ) ) : ?>
						<?php
							$headerTopNav = array(
								'container'			=> false,
								'menu_class'		=> '',
								'theme_location'	=> 'header_top-nav',
								'depth'				=> 1,
								'fallback_cb'		=> false,
								'echo'            	=> false,
							);
							echo strip_tags( wp_nav_menu( $headerTopNav ), '<a>' );
						?>
					<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
							<p>No menu assigned to <strong>Header top navigation</strong></p>
					<?php endif; ?>
                </nav>
				
				<form method="get" id="searchform" action="<?php echo home_url(); ?>" role="search" class="main-header__search">
					<label for="main-header__search__input" class="screenreader">Search <?php bloginfo( 'name' ); ?></label>
					<input type="search" id="main-header__search__input" name="s" placeholder="Search <?php bloginfo( 'name' ); ?>" class="main-header__search__input">
					<button type="submit" title="Search" class="main-header__search__submit" id="searchsubmit">
						<i aria-hidden="true" class="icon-search icon--no-text"></i>
						<span class="screenreader">Search</span>
					</button>
				</form>

            </div>
        </div>
    </header>
	
	
    <nav style="overflow: visible;" class="main-nav" role="navigation" aria-label="Main navigation" data-track-zone="main-nav">
		<ul class="nav-list-primary">
		<?php if ( has_nav_menu( 'primary_menu' ) ) : ?>
			<?php
				wp_nav_menu( array(
					'container'			=> false,
					'menu_class'		=> 'nav-list-primary',
					'theme_location'	=> 'primary_menu',
					'depth'				=> 1,
					'fallback_cb'		=> false,
					'items_wrap'		=> '%3$s',
				) );
			?>
		<?php elseif ( current_user_can( 'manage_options' ) ) : ?>
			<li class="top-item"><a>No menu assigned to <strong>Primary menu</strong></a></li>
		<?php endif; ?>
			<li class="nav-list-primary-more js-more-menu" style="display:none;">
				<a href="#!">More<i class="icon-caret-down"></i></a>
				<ul class="main-nav__more-links"></ul>
			</li>
		</nav>
    </nav>
	
	<?php if ( !is_home() && !is_front_page() ) : ?>
        <nav role="navigation" class="main-breadcrumb" aria-label="Breadcrumb" data-track-zone="breadcrumb">
            <div class="main-breadcrumb__content breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span class="breadcrumb__item">
				<i aria-hidden="true" class="icon-guillemet-right"></i>
				<a><?php echo get_the_title(); ?></a>
				</span> 
            </div>
        </nav>
	<?php endif; ?>
		
		