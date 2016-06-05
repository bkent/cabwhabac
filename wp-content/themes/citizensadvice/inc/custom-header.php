<?php

function citizensadvice_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'citizensadvice_custom_header_args', array(
		'default-text-color'     => 'fff',
		'width'                  => 500,
		'height'                 => 500,
		'flex-height'            => true,
		'wp-head-callback'       => 'citizensadvice_header_style',
		'admin-head-callback'    => 'citizensadvice_admin_header_style',
		'admin-preview-callback' => 'citizensadvice_admin_header_image',
	) ) );
	
	define( 'NO_HEADER_TEXT', true );
}
add_action( 'after_setup_theme', 'citizensadvice_custom_header_setup' );


if ( ! function_exists( 'citizensadvice_header_style' ) ) :
function citizensadvice_header_style() {
	$text_color = get_header_textcolor();

	// If no custom color for text is set, let's bail.
	if ( display_header_text() && $text_color === get_theme_support( 'custom-header', 'default-text-color' ) )
		return;

	// If we get this far, we have custom styles.
	?>
	<style type="text/css" id="citizensadvice-header-css">
	<?php
		// Has the text been hidden?
		if ( ! display_header_text() ) :
	?>
		.site-title,
		.site-description {
			clip: rect(1px 1px 1px 1px); /* IE7 */
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	<?php
		// If the user has set a custom color for the text, use that.
		elseif ( $text_color != get_theme_support( 'custom-header', 'default-text-color' ) ) :
	?>
		.site-title a {
			color: #<?php echo esc_attr( $text_color ); ?>;
		}
	<?php endif; ?>
	</style>
	<?php
}
endif; // citizensadvice_header_style


if ( ! function_exists( 'citizensadvice_admin_header_style' ) ) :
function citizensadvice_admin_header_style() {
?>
	<style type="text/css" id="citizensadvice-admin-header-css">
	.appearance_page_custom-header #headimg {
		background-color: #000;
		border: none;
		max-width: 1260px;
		min-height: 48px;
	}
	#headimg h1 {
		font-family: Lato, sans-serif;
		font-size: 18px;
		line-height: 48px;
		margin: 0 0 0 30px;
	}
	.rtl #headimg h1  {
		margin: 0 30px 0 0;
	}
	#headimg h1 a {
		color: #fff;
		text-decoration: none;
	}
	#headimg img {
		vertical-align: middle;
	}
	</style>
<?php
}
endif; // citizensadvice_admin_header_style
?>


<?php
if ( ! function_exists( 'citizensadvice_admin_header_image' ) ) :

function citizensadvice_admin_header_image() {
?>
	<div id="headimg">
		<?php if ( get_header_image() ) : ?>
		<img src="<?php header_image(); ?>" alt="">
		<?php endif; ?>
		<h1 class="displaying-header-text"><a id="name" style="<?php echo esc_attr( sprintf( 'color: #%s;', get_header_textcolor() ) ); ?>" onclick="return false;" href="<?php echo esc_url( home_url( '/' ) ); ?>" tabindex="-1"><?php bloginfo( 'name' ); ?></a></h1>
	</div>
<?php
}
endif; // citizensadvice_admin_header_image
