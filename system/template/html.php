<!DOCTYPE HTML>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <?php foreach ( $scripts AS $script ) { ?>
        <script src="<?php echo $script[ 'src' ]; ?>" language="<?php echo $script[ 'language' ]; ?>"></script>
        <?php } ?>
        <?php foreach ( $links AS $link ) { ?>
        <link rel="<?php echo $link[ 'rel' ]; ?>" href="<?php echo $link[ 'href' ]; ?>">
        <?php } ?>
    </head>
    <body>
        <?php echo $body; ?>
    </body>
</html>