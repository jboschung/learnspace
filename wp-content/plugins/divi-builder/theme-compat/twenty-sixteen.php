<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme Compatibility for Twenty Sixteen theme
 * @see https://wordpress.org/themes/twentysixteen/
 *
 * @since ??
 */
class ET_Builder_Theme_Compat_Twentysixteen {
	/**
	 * Unique instance of class
	 *
	 * @since ??
	 */
	public static $instance;

	/**
	 * Constructor
	 *
	 * @since ??
	 */
	private function __construct(){
		$this->init_hooks();
	}

	/**
	 * Gets the instance of the class
	 *
	 * @since ??
	 */
	public static function init(){
		if ( null === self::$instance ){
			self::$instance = new self();
		}

		return self::$instance;
	}

	/**
	 * Hook methods to WordPress
	 *
	 * @since ??
	 */
	function init_hooks() {
		$theme   = wp_get_theme();
		$version = isset( $theme['Version'] ) ? $theme['Version'] : false;

		// Bail if no theme version found
		if ( ! $version ) {
			return;
		}

		add_action(
			'wp_enqueue_scripts',
			array( $this, 'enqueue_non_singular_builder_inline_style' ),
			20
		);
	}

	/**
	 * Enqueue inline style needed to fix style glitch due to main query's loop being wrapped
	 * when one of the post use builder
	 *
	 * @since ??
	 */
	function enqueue_non_singular_builder_inline_style() {
		global $wp_query;

		if ( ! et_dbp_should_wrap_content_has_builder( $wp_query ) ) {
			return;
		}

		$inline_styles = <<<EOT
.et_builder_outer_content > article {
	margin-bottom: 3.5em;
	position: relative;
}

@media screen and (min-width: 44.375em) {
	.et_builder_outer_content > article {
		margin-bottom: 5.25em;
	}
}

@media screen and (min-width: 61.5625em) {
	.et_builder_outer_content > article {
		margin-bottom: 7.0em;
	}
}

.et_builder_outer_content > article:before,
.et_builder_outer_content > article:after {
	content: "";
	display: table;
}

.et_builder_outer_content > article:after {
	clear: both;
}
EOT;

		wp_add_inline_style( 'et-builder-modules-style', $inline_styles );
	}
}
ET_Builder_Theme_Compat_Twentysixteen::init();
