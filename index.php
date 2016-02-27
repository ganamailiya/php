<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php
    echo "Hello World";
    echo 5 * 7;
    ?>
</p>
<p>
    <?php
$provact = array("specs", "drugs", "rock and roll");
    $provact[1]="hugs";
    unset($provact[2]);
    print_r($provact)
    ?>
</p>
</body>
</html>
