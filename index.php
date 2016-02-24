<!DOCTYPE html>
<html>
<head></head>
<body>
<p>
    <?php
    echo "Hello World";
    ?>
</p>
<p>
    <?php
    $myage = "20";
    if ($myage >= 21) {
        echo "buy sausage rolls, specs and mugs";
    }
    elseif  ($myage >= 16) {
        echo "buy mugs and specs";
    }
    elseif ($myage >= 18) {
        echo "buy only specs";
    }
    else {echo "nothing";
    }
    ?>
    <?php

    ?>
</p>
</body>
</html>
