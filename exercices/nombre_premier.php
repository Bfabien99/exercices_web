<?php
/*
Créez une fonction qui détermine si un nombre donné est premier ou non.
 */
function nombre_premier($nombre = 0)
{
    if ($nombre < 2) {
        return false;
    }
    for ($i = 2; $i <= ($nombre / 2); $i++) {
        if ($nombre % $i == 0) {
            return false;
        }
    }
    return true;
}
