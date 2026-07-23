<?php

function page_urlencode() {
    $text = '';
    $processed_text = '';
    if ( postvar( 'text', false ) && postvar( 'encode', false ) == 'Encode' ) {
        $text = postvar( 'text', false );
        $processed_text = urlencode( $text );
    }
    if ( postvar( 'processed_text', false ) && postvar( 'decode', false ) == 'Decode' ) {
        $processed_text = postvar( 'processed_text', false );
        $text = urldecode( $processed_text );
    }
    return [
        'title' => 'tools - urlencode',
        'text' => $text,
        'processed_text' => $processed_text,
    ];
}

