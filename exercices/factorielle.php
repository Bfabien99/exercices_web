<?php
/*
Créez une fonction qui calcule la factorielle d'un nombre entier donné en entrée.
 */
function factorielle($nombre = 1)
{
    if ($nombre <= 0) {
        return 1;
    }
    return $nombre * factorielle($nombre - 1);
}

echo factorielle(0)
?>
