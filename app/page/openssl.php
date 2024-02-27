<?php

function page_openssl() {
    $encoded = '';
    $hexkey = '';
    $nonce = '';
    $result = false;
    if ( postvar( 'encoded', false ) && postvar( 'hexkey', false ) && postvar( 'nonce', false ) ) {
        $encoded = $_POST[ 'encoded' ];
        $hexkey = $_POST[ 'hexkey' ];
        $nonce = $_POST[ 'nonce' ];
        $result = decode( $encoded, $hexkey, $nonce );
    }
    return [
        'title' => 'tools - cron',
        'encoded' => $encoded,
        'hexkey' => $hexkey,
        'nonce' => $nonce,
        'result' => $result,
    ];
}

function decode( $password_enc, $hexkey, $nonce ) {
    $cipher = 'aes-256-ctr';
    $key = hex2bin( $hexkey );
    $nonce = base64_decode( $nonce );
    return openssl_decrypt( base64_decode( $password_enc ), $cipher, $key, OPENSSL_RAW_DATA, $nonce );
}

