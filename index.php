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
    for($x = 0; $x <= count($days) - 1; $x++) {
        echo $x, '<br>';
    }
    ?>
</p>
</body>
</html>
