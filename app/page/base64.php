<?php

function page_base64() {
    $text = '';
    $processed_text = '';
    if ( postvar( 'text', false ) && postvar( 'encode', false ) == 'Encode' ) {
        $text = postvar( 'text', false );
        $processed_text = base64_encode( $text );
    }
    if ( postvar( 'processed_text', false ) && postvar( 'decode', false ) == 'Decode' ) {
        $processed_text = postvar( 'processed_text', false );
        $text = base64_decode( $processed_text );
    }
    return [
        'title' => 'tools - base64',
        'text' => $text,
        'processed_text' => $processed_text,
    ];
}
