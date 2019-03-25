<?php

// Exemple 1
$age = 29;

if($age < 30)
{
    echo "C'est bon tu es encore jeune";
}
else
{
    echo "Salut, le vieux ! ";
}

echo "<br/><br/>";

// Exemple 2
if($age < 28)
{
    echo "C'est bon tu es encore jeune";

} elseif($age >= 28 && $age <= 32 ) {
    echo "Limite";

} else {
    echo "Salut, le vieux ! ";

}

echo "<br/><br/>";

// Les conditions multiples
$pays = "France";

if( $pays == "France" OR $pays == "Belgique" )
{
    echo "Bienvenue !";

}
elseif ($pays == "England" OR $pays == "United States")
{
    echo "Welcome !";

}

echo "<br/><br/>";

// Les bouléens
$acces = false;

if($acces) { // $acces == true
    echo "Bienvenue";
}else{
    echo "Accès refusé";
}

// Switch
$note = 16;
switch ($note) // on indique sur quelle variable on travaille
{
    case 0:
        echo "Nul";
        break;

    case 2:
        echo "Médiocre";
        break;

    case 6:
        echo "Assez bien";
        break;

    case 8:
        echo "Bien";
        break;

    case 10:
        echo "Très bien";
        break;    

    default:
        echo "Désolé, je n'ai pas de message à afficher pour cette note ";
}