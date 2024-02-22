<ul>
    <?php foreach ( $navitems AS $navitem ) { ?>
    <li><a href="<?php echo $navitem[ 'href' ]; ?>"><?php echo $navitem[ 'name' ]; ?></a></li>
    <?php } ?>
</ul>