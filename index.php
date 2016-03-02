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
    $wantedgood = "specs";
    switch ($wantedgood) {
        case "all":
           echo "if you're 21 you can buy sausage rolls, specs and mugs";
            break;
        case "mugsandspecs":
            echo "if you're 18 you can buy mugs and specs";
            break;
        case "specs":
            echo "if you're 16 you can buy only specs";
            break;
        default:
            echo "you can buy nothing";
    }
    ?>
</p>
</body>
</html>
