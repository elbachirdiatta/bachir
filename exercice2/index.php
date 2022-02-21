<?php
include_once('fonction.php');

 define ('val_min',3);
 define ('val_max',100);
 $l=rand(val_min,val_max);
 $L=rand(val_min,val_max);

 echo('la longueur est:'.$L.'<br>');
 echo('la largeur est :'.$l.'<br>');
 echo('la surface est:'.sur($l,$L)).'<br>';

echo('le périmetre est :'.Per($l,$L).'<br>');
echo ('le diagonale est:'.Diag($l,$L));
?>