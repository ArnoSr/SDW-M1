<?php
/*
	En fonction des 2 variables heure et sexe, le script doit vous dire : «  Bon matin Madame / Monsieur »
	    1. Bon matin / Bon après-midi / Bonne soirée     
	    2. Madame ou Monsieur 

	Le résultat doit être concaténé dans une variable pour être affiché par un echo qu’à la fin du script.
*/

$resultat = "";

$heure = 0; // 0 - 1 - 2 - .... 13 - 14 - 15 - ... 24
$sexe = ""; // f - h 


// Script




if($heure >= 0 && $heure < 12){
    $resultat = "Bon matin ";
}elseif($heure >= 12 && $heure < 18){
    $resultat = "Bon après-midi ";
}else{
    $resultat = "Bonne soirée ";
}

if($sexe == "h"){
    $resultat .= " Monsieur";
}else{
    $resultat .= " Madame";
}

echo $resultat;




echo $resultat;