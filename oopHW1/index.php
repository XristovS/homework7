<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class Dog
        {
            public $coatColor;
            public $breed;
            public $eyeColor;
            public $lengthCoat;
               public function walk(){
                 return "walk";
               }
               public function run(){
                 return "run";  
               }
               public function barks(){
                 return "barks";
               }
               public function bite(){
                 return "bite";  
               }
               public function drinkingWater(){
                 return "drinkingWater";  
               }
               public function eat(){
                 return "eat";  
               }
        }
        $Dog = new Dog();
        echo $Dog-> walk();
          echo "<br />";
        echo $Dog-> run();
          echo "<br />";
        echo $Dog-> barks();
          echo "<br />";
        echo $Dog-> bite();
          echo "<br />";
        echo $Dog-> drinkingWater();
          echo "<br />";
        echo $Dog-> eat();  
        ?>
    </body>
</html>
