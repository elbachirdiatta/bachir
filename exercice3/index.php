
<?php

include_once('fonction.php');
define( 'val_min',4);
define('val_max',100);
$x=rand(val_min,val_max);
$y=rand(val_min,val_max);

echo('la valeur de x est:'.$x.'<br>');

echo('la valeur de y est:'.$y.'<br>');

echo ('la somme est :'.Som($x,$y)).'<br>';
echo("l'exponentiel est :" .Expo($x,$y)).'<br>';

echo('la difference est:'.Diff($x,$y)).'<br>';

echo('le produit est:'.Prod($x,$y)).'<br>';
echo ('le modulo est:'.Mod($x,$y)).'<br>';
echo('la division est :'.Div($x,$y)).'<br>';
echo ('le carré de x est:'.Carx($x)).'<br>';
echo ('le carré de y est:'.cary($y)).'<br>';






?>