<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

<?php

session_start();
?>
<form action="controleur.php" method="post">

<label for=""> entrer un nombre</label>
<input type="text"  name="m" >

<input type="submit" name="ok" value="valider">


</form>
</body>
</html>