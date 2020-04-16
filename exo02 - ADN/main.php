<!-- Créer une fonction DecodeDNA qui prend en paramètre 2 strings: gen1 et gen2.
Elle doit comparer ces 2 strings et retourne une string comme indiqué ci-dessous. -->

<?php

function decodeDna($gen1, $gen2)
{
    $adn = "";

    for ($i = 0; $i < strlen($gen1); $i++) {
        if ($gen1[$i] != $gen2[$i]) {
            $adn = $adn . "^";
            // $adn .= "^";
        } else {
            $adn = $adn . " ";
        }
    }
    return $adn;
}

echo decodeDna('abcm', 'aaaa');
