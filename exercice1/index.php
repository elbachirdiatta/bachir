<?php
  include_once ('fonction.php');
  define('VAL_MIN',3);
  define('VAL_MAX',100);
  $a=rand(VAL_MIN,VAL_MAX);


  echo 'le coté est :'.$a.'<br>' ;
  echo'la surface est:'.Sur($a).'<br>';
echo('le périmetre est:'.Per($a)).'<br>';
echo('le diagonale est :'.Diag($a));
  



?>