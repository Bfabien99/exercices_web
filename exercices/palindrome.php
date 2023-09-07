<?php
/*
Créez une fonction qui prend une chaîne de caractères en entrée et renvoie vrai si elle est un palindrome, sinon renvoie faux.
 */
function palindrome($chaine = "")
{
    return $chaine == strrev($chaine);
}
