<?php
/*
	A l’aide d’une boucle while ou for créé un tableau tableau $eleves de 28 occurrences de valeur «élève XX ».
    XX étant le numéro de clé de l’élément.
*/

$eleves = [];
for ( $i=0; $i<28; $i++){
    $eleves[] = "élève " . $i;
}

var_dump($eleves);


function direBonjour($prenom) {
    echo 'Bonjour ' . $prenom . ' !<br />';
}

/*
 *
 * Faire une boucle qui dit bonjour à chaque élève
 *
 */


foreach($eleves as $eleve)
{
    direBonjour($eleve);
}


