<!-- Créer une fonction SumAll qui prend en paramètre un entier n où n > 1
Elle doit retourner la somme de tous les entiers allant de 1 à n. -->
<?php

//la fonction sumAll qui a un paramètre number
function sumAll($number)
{   //initialisation du total qui pour l'instant est = à 0
    $total = 0;
    //on boucle que tant que $i est < a mon $number, i= i + 1
    for ($i = 0; $i < $number; $i++) {
        //ce qui signifie que mon total est égal à lui-même (0) + $i (l'élément courant)
        $total = $total + $i;
    }
    return $total;
}
// soit l'écho du total de l'addition de tous les chifffres jusqu'au chiffre que j'ai choisi : 10
echo sumAll(10);
