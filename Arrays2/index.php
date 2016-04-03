<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numbers = range (11,12);
        shuffle ($numbers);
        Foreach ($numbers as $number){
            echo "$number";
        }
        ?>
    </body>
</html>
