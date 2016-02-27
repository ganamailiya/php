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
    $wantedgoods = "mugs";
    switch($wantedgoods) {
        case "specs":
            echo "should be 16";
            break;
        case "mugs":
            echo "should be 18 or over";
            break;
        case "rolls":
            echo "21 and over";
            break;
        default:
            echo "rest baba";
    }

    ?>
</p>
</body>
</html>
