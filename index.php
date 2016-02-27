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
    $age ="20";
    if ($age >= 21){
        print "you can buy everything";
    }
    elseif ($age >= 18) {print "you can buy mugs and specs";}
    elseif ($age >= 16) {print "you can only buy specs";}
    else {print "nothing";}
    ?>
</p>
</body>
</html>
