<?php

add_theme_support( 'post-thumbnails' );


function rtl_excerpt( $string ) {
	return substr( $string, 0, 150 );
}