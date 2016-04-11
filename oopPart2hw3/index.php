<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Vehicles
        {
          public $steeringWheel;
          public $brake;
          public $seat;
          public $engine;
            public function fly(){
                return "fly";
            }
            public function turn(){
                return "turn";
            }
            public function sailing(){
                return "sailing";
            } 
            public function depart(){
                return "depart";
            }
            public function stop(){
                return "stop";
            }
        }
        $Vehicles = new Vehicles();
          echo $Vehicles-> fly();
            echo "<br />";
          echo $Vehicles-> turn();
            echo "<br />";
          echo $Vehicles-> sailing();
            echo "<br />";
          echo $Vehicles->depart();
            echo "<br />";
          echo $Vehicles-> stop();
        ?>
    </body>
</html>
