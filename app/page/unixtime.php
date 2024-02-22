<?php

function page_unixtime() {
    $unixtime = '';
    $timestamp = '';
    if ( postvar( 'unixtime', false ) ) {
        $unixtime = $_POST[ 'unixtime' ];
        $timestamp = strtotime( $unixtime );
    }
    return [
        'title' => 'tools - unixtime',
        'unixtime' => $unixtime,
        'timestamp' => $timestamp,
    ];
}
