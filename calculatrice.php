<?php
/**
 * fonction somme
 * renvoie la somme des deux paramètres.
 * 
 */
function somme($x , $y) 
{
    $calcul = $x + $y;

    return $calcul;
}

if (somme(3,2) != 5 ) {
    echo "Erreur";
}
else {
    echo "Ok !!! 3+2 = 5";
}
