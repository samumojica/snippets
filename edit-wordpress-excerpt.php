
function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');


function ld_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'ld_custom_excerpt_length', 999 );
