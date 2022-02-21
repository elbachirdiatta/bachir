<?php
include_once('fonction.php');
session_start();
if (isset($_POST['ok'])){

    $yup=$_POST['m'];
    $_SESSION['post']=$_POST;
    $tab=[];
    controle($yup,'m',$tab);
    if(count($tab)==0)
    {
        mult($yup);
    }

else{
    $_SESSION['error']=$tab;
    header('location:index.php');
    exit();
}
}
else{
    header('location:index.php');
    exit();
}
