<?php
    define("TITLE", "Hand Dirty!");

    $name = "Ebubekir";
    $color = "Black";
    $age = 22;

    date_default_timezone_set('America/Los_Angeles');

    $currentYear = date('Y');

    $currentDay = date('M d Y h:i:s A', time());

?>

<html>
    <body>

    <title><?php echo TITLE; ?></title>

    <h5>
    <?php

    echo " $name <br> $color <br> $age <br>";

    echo "Current Year : $currentYear <br>";

    echo "My birthday was at : " . ($currentYear - $age) . "<br>";

    echo "Current Day is : " . $currentDay . "<br>";
    ?>

    </h5>
    </body>
</html>
