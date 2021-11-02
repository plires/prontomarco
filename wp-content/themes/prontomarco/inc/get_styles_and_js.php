<?php
	add_action( 'wp_enqueue_scripts', 'porto_child_css', 1001 );

	// Load CSS
	function porto_child_css() {
		// Normalize.css
		wp_deregister_style( 'normalize-child' );
		wp_register_style( 'normalize-child', esc_url( get_stylesheet_directory_uri() ) . '/node_modules/normalize.css/normalize.css' );
		wp_enqueue_style( 'normalize-child' );

		// AOS
		wp_deregister_style( 'aos-child' );
		wp_register_style( 'aos-child', esc_url( get_stylesheet_directory_uri() ) . '/node_modules/aos/dist/aos.css' );
		wp_enqueue_style( 'aos-child' );

		// porto child theme styles
		wp_deregister_style( 'styles-child' );
		wp_register_style( 'styles-child', esc_url( get_stylesheet_directory_uri() ) . '/style.css' );
		wp_enqueue_style( 'styles-child' );

		// JS
		// AOS JS
		wp_enqueue_script( 'aos-js', get_stylesheet_directory_uri() . '/node_modules/aos/dist/aos.js' );

		// Validate Forms
		wp_enqueue_script( 'scripts-validate-forms', get_stylesheet_directory_uri() . '/js/validate-forms.js' );

		// Bootstrap 4.1
		wp_enqueue_script( 'bootstrap-4-1-js', get_stylesheet_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js' );

		if ( is_rtl() ) {
			wp_deregister_style( 'styles-child-rtl' );
			wp_register_style( 'styles-child-rtl', esc_url( get_stylesheet_directory_uri() ) . '/style_rtl.css' );
			wp_enqueue_style( 'styles-child-rtl' );
		}
	}


?>
