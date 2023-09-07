<?php
/*
Écrivez une fonction qui vérifie si une adresse email est valide en fonction de certaines règles (par exemple, la présence d'un "@" et d'un domaine valide).
 */
function validation_email($email)
{
    if (!str_contains($email, '@')) {
        return false;
    }

    $emailExplode = explode('@', $email);
    if (!str_contains($emailExplode[1], '.') or $emailExplode[0] == "") {
        return false;
    }

    $finalExplode = explode('.', $emailExplode[1]);
    if ($finalExplode[0] == "") {
        return false;
    }

    return true;
}
