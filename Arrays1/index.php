<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numbers = array (1,2,3,4,5,6,7,8,9,10);
        unset ($numbers[4]);
        echo "<pre>";
        print_r ($numbers);
        echo "</pre>";
        ?>
    </body>
</html>
