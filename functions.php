<?php

// enqueue styles
function theme_styles() {
	wp_enqueue_style('main_css', get_template_directory_uri(). '/css/main.css?v=' .time() );
	}
add_action('wp_enqueue_scripts', 'theme_styles');


// enable featured images
add_theme_support('post-thumbnails');

// show admin bar
add_filter('show_admin_bar', '__return_true');

//hex to rgb
 function hex2rgba( $colour , $opacity = 1) {
        if ( !$colour) return 'transparent';
        if ( $colour[0] == '#' ) {
                $colour = substr( $colour, 1 );
        }
        if ( strlen( $colour ) == 6 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
        } elseif ( strlen( $colour ) == 3 ) {
                list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
        } else {
                return false;
        }
        $r = hexdec( $r );
        $g = hexdec( $g );
        $b = hexdec( $b );
        return "rgba( {$r}, {$g}, {$b}, {$opacity} )";
}

// stop empty strings output
function wp_get_actual_attachment_image_src($image_id, $size = 'full') {
    return ($i = wp_get_attachment_image_src($image_id, $size)) ? $i[0] : '';
}















