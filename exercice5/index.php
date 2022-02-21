<?php

include_once('fonction.php');

define('val_min',1);

define('val_max',100);
$x1=rand(val_min,val_max);
$y1=rand(val_min,val_max);
$x2=rand(val_min,val_max);
$y2=rand(val_min,val_max);
$tant=Dist($x1,$x2,$y1,$y2);
echo("le point A($x1,$y1)<br>");
echo("le point B($x2,$y2)<br>");

echo" la distance entre A et B est $tant"


?>