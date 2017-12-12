<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Partie 4 Exercice 7</title>
  </head>
  <body>
    <?php
    $age = 22;
    $genre = 'homme';
    function test($age,$genre){
      if($age > 18 && $genre=='homme'){
        $result = 'Vous êtes un homme et vous êtes majeur';
      }elseif ($age < 18 && $genre=='homme') {
        $result = 'Vous êtes un homme et vous êtes mineur';
      }elseif($age > 18 && $genre=='femme'  ) {
        $result = 'Vous êtes une femme et vous êtes majeur';
      }elseif($age < 18 && $genre=='femme'){
        $result = 'Vous êtes une femme et vous êtes mineur';
      }else{
        $result = 'error';
      }
      return $result;
    }
    echo test($age,$genre);
     ?>
  </body>
</html>
