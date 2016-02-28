<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php
    for ($i = 1; $i < 10; $i++)
    {
        echo "<p>Hello!</p>";
    }
    ?>
</p>
<p>
    <?php
$days = array("mon", "tues", "wed", "thurs", "fri", "sat", "sun");
    for($x = 0; $x <= 6; $x=$x+2) {
        echo "specs are avail on " .  $days[$x], '<br>';
    }
    ?>
</p>
</body>
</html>
