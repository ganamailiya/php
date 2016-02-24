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
    elseif  ($myage >= 18) {
        echo "buy mugs and specs";
    }
    elseif ($myage >= 16) {
        echo "buy only specs";
    }
    else {echo "nothing";
    }
    ?>
    <p>
    <?php
    $wantedgood = 2;
    switch ($wantedgood) {
        case 1:
           echo "if you're 21 you can buy sausage rolls, specs and mugs";
            break;
        case 2:
            echo "if you're 18 you can buy mugs and specs";
            break;
        case 3:
            echo "if you're 16 you can buy only specs";
            break;
        default:
            echo "you can buy nothing";
    }
    ?>
</p>
</body>
</html>
