<?php
add_theme_support( 'post-thumbnails' );

add_theme_support(
	'custom-logo', array(
		'height'      => 250,
		'width'       => 250,
		'flex-width'  => true,
		'flex-height' => true,
	)
);

add_theme_support(
	'custom-background', apply_filters(
		'wp_hcms_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)
	)
);

register_nav_menus(
	array(
		'main-menu' => esc_html__( 'Main Menu', 'wp_hcms' ),
	)
);

if ( ! function_exists( 'wp_hcms_widgets_init' ) ) :
	function wp_hcms_widgets_init() {
		register_sidebar(
			array(
				'name'          => esc_html__( 'Sidebar', 'wp_hcms' ),
				'id'            => 'main-sidebar',
				'description'   => esc_html__( 'Add widgets here.', 'wp_hcms' ),
				'before_widget' => '<section id="%1$s" class="widget %2$s">',
				'after_widget'  => '</section>',
				'before_title'  => '<h2 class="widget-title">',
				'after_title'   => '</h2>',
			)
		);
	}
endif;
add_action( 'widgets_init', 'wp_hcms_widgets_init' );

