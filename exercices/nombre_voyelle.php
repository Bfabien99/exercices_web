<?php
/*
Écrivez une fonction qui prend une chaîne de caractères en entrée et renvoie le nombre de voyelles qu'elle contient.
 */
function nombre_voyelle($chaine = "")
{
    $voyelle = ["e", "i", "o", "u", "a"];
    $count = 0;
    for ($i = 0; $i < strlen($chaine); $i++) {
        if (in_array($chaine[$i], $voyelle)) {
            $count++;
        }
    }
    return $count;
}
