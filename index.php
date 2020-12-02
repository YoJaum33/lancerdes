<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lancer de dés</title>
    
</head>
<body>
<?php

$dés = $_POST["face"] ?? false;
$face = $_POST["dés"] ?? false;
echo ("<p class= 'face'> Vous avez choisi des dés à $face faces </p>");
echo ("div class= 'resultat'");
while ($face >=1){
$rand = random_int(1,$face);
echo ("<p> Le resultat du dé $dés est : $rand <br> <p/>");
$dés--;
}

echo ('</div>');
$dés = $_POST["dés"] ?? false;

echo ("<a href='index.php'><button class='btmacc'>Accueil</button></a>");

echo ("<form action='dice.php' method='post'>
<input id='dés' name='dés' type='hidden' value='$dés'>
<input id='face' name='face' type='hidden' value='$face'>
<input id='btmrel' name='dés' type='submit' value='relancer'")

?>




    
</body>
</html>