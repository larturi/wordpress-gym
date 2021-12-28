<?php

function foobar_func( $atts ){
	$ubicacion = get_field('ubicacion');
    var_dump($ubicacion);
}
add_shortcode( 'foobar', 'foobar_func' );