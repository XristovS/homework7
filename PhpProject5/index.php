<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $x = "5";
        $y = "-5";
        var_dump($x > $y);
        $x = "10";
        $y = "0";
        var_dump($x > $y);
        $x = "12";
        $y = "0'.'2";
        var_dump ($x > $y);
        $x = "4";
        $y = "20";
        var_dump ($x < $y);
        $x = "9";
        $y = "9";
        var_dump ($x == $y);
        $x = "0";
        $y = "0";
        var_dump ($x == $y);
        ?>
    </body>
</html>
