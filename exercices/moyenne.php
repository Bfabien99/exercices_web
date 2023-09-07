<?php
/*
Écrivez une fonction qui prend un tableau de nombres en entrée et renvoie leur moyenne.
 */
function moyenne($ensemble = [])
{
    return array_sum($ensemble) / count($ensemble);
}
