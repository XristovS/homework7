<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $Animals = array ("tiger","lion","cheetah","cougar");
             sort($Animals);
        foreach ($Animals as $key => $val) {
             echo "Animals[". $key ."] - " . $val . "\n";   
          }   
        ?>
    </body>
</html>
