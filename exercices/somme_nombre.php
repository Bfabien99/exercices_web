<?php
/*
Écrivez une fonction qui prend un nombre entier en entrée et renvoie la somme de ses chiffres.
 */
function somme_nombre($nombre = 0)
{
    $chaine = str_split((string) $nombre);
    return array_sum($chaine);
}
