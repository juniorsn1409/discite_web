<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Aula 11</title>
</head>
<body>
     <?php

     $option = true;
     $num = 1;

     while($option){
          echo"opa!! $num";

          $num = $num + 1;

          if($num < 10):
               $option = true;
          else:
               $option = false;
          endif;
     }

     echo"finalizado opa!";
     ?>
</body>
</html>