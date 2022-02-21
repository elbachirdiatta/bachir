<?php




 
function controle($n,string $cle ,array &$tab):void
{

if(empty($n)){
   $tab[$cle]="entrer un nombre";
}

else{
   if(!is_numeric($n)){

       $tab[$cle]="vous devez saisir un nombre";
   }

else{
    if($n<=0){

       $tab[$cle]="entrer un nombre positif";
    
    } 
}
}
}
function  mult($n ):void{
   for($i=1;$i<=$n;$i++){
    echo "<br> <input> </br>";
}
}


?>