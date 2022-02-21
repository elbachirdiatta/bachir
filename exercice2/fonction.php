<?php


function Per( float $l,$L ):float
{

  return ($l+$L)*2;

}

function Sur( float $l,$L):float
{

  return $l*$L;
}

function Diag( float $l,$L):float
{

  return (sqrt(pow($l,2)+pow($L,2)));
}
?>