//Update Canonical for specific pages on AMP 
	add_action( 'amp_post_template_head', 'wpse_amp_post_template_add_canonical', 1 );
	function wpse_amp_post_template_add_canonical( $amp_template ) {

		if( is_page( 92471 ) || is_page( 39112 )  || is_page( 39175 )) {
		remove_action( 'amp_post_template_head', 'amp_post_template_add_canonical' );
		printf(
			'<link rel="canonical" href="https://www.google.com/" />'
			//esc_url( $amp_template->get( 'site_url' ) )
		);
		}
	}
