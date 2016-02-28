<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php
$days = array("mon", "tues", "wed", "thurs", "fri", "sat", "sun");
    for($x = 0; $x <= 6; $x=$x+3) {
        echo "mugs are avail on " .  $days[$x], '<br>';
    }
    ?>
</p>
</body>
</html>
