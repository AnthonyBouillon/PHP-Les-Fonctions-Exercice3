<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Les fonctions Exercice 3</title>
  </head>
  <body>
<?php
   function callStringConcat(){
     $text1 = 'Une chaine, une !';
     $text2 = 'Deux chaine, deux !';
     $text = $text1 . ' ' . $text2;
     return $text;
   }
   echo callStringConcat();
 ?>
  </body>
</html>
