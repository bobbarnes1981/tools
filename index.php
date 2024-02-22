<?php

$BASEPATH = dirname( __FILE__ );

function getvar( $key, $default ) {
    return isset( $_GET[ $key ] ) ? $_GET[ $key ] : $default;
}

function postvar( $key, $default ) {
    return isset( $_POST[ $key ] ) ? $_POST[ $key ] : $default;
}

$scripts = [
    [
        'src' => 'static/js/jquery-3.7.1.js',
        'language' => 'javascript'
    ],
    [
        'src' => 'static/jquery-ui-1.13.2/jquery-ui.js',
        'language' => 'javascript'
    ]
];

$links = [
    [
        'rel' => 'stylesheet',
        'href' => 'static/jquery-ui-1.13.2/jquery-ui.css'
    ]
];

$navitems = [
    [
        'href' => 'index.php?page=index',
        'name' => 'index'
    ],
    [
        'href' => 'index.php?page=unixtime',
        'name' => 'unixtime'
    ],
    [
        'href' => 'index.php?page=base64',
        'name' => 'base64'
    ],
];

$page = getvar( 'page', 'index' );

require_once( "{$BASEPATH}/app/page/{$page}.php" );
$func = "page_{$page}";
extract( $func() );

ob_start();
require_once( "{$BASEPATH}/app/template/navigation.php" );
require_once( "{$BASEPATH}/app/template/{$page}.php" );
$body = ob_get_clean();

require_once( "{$BASEPATH}/system/template/html.php" );
