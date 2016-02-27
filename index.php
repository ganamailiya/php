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
$provact = array("specs", "drugs", "rock and roll");
    $provact[1]="hugs";
    unset($provact[2]);
    foreach($provact as $x) {
        print "<p>$x</p>";
    }
    ?>
</p>
</body>
</html>
