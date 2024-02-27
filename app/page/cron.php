<?php

function page_cron() {
    $cron = '';
    $result = false;
    if ( postvar( 'cron', false ) ) {
        $cron = $_POST[ 'cron' ];
        $result = parse_cron( $cron );
    }
    return [
        'title' => 'tools - cron',
        'cron' => $cron,
        'result' => $result,
    ];
}

function parse_cron( $cron ) {
    $names = [
        'Seconds',
        'Minutes',
        'Hours',
        'Day of Month',
        'Month',
        'Day of Week',
        'Year'
    ];
    $parts = explode( ' ', $cron );

    $result = '';

    for ( $i = 0; $i < count( $names ); $i++ ) {
        $val = $parts[ $i ];
        if ( $val == '*' ) {
            $val = 'Every';
        }
        $result.= "{$val} {$names[$i]}<br/>";
    }

    return $result;
}
