<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php.css">
    <title>Lancer de dés</title>
    
</head>
<body>
<?php

$face = $_POST["face"] ?? false;
$dés = $_POST["dés"] ?? false;
echo ("<p class= 'face'> Vous avez choisi des dés à $face faces </p>");
while ($dés >=1){
$rand = random_int(1,$face);
echo ("<p class= 'resultat'> Le resultat du dé $dés est : $rand <br> <p/>");
$dés--;
}

echo ('</div>');
$dés = $_POST["dés"] ?? false;


echo ("<a href='index.html'><button class='btnacc'>Accueil</button></a>");

echo ("<form action='jdr.php' method='post'>
<input id='dés' name='dés' type='hidden' value='$dés'>
<input id='face' name='face' type='hidden' value='$face'>
<input id='btnrel' type='submit' value='Relancer'")

?>




    
</body>
</html>