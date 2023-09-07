<?php
/*
Écrivez une fonction qui convertit une température de degrés Celsius en degrés Fahrenheit en utilisant la formule appropriée.
 */
function celsus_fahrenheit($temperature = 1)
{
    $tauxChange = 33.8;
    return $temperature * $tauxChange;
}
