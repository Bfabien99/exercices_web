<?php
/*
Écrivez une fonction qui convertit un montant en dollars américains en euros en utilisant un taux de change fixe.
 */
function dollar_euro($somme = 1)
{
    $tauxChange = 0.93;
    return $somme * $tauxChange;
}
