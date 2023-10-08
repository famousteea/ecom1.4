<?php

function valider_mot_de_passe($mot_de_passe) {
    // Vérifier la longueur du mot de passe
    if (strlen($mot_de_passe) < 6 || strlen($mot_de_passe) > 10) {
        return "Erreur : Le mot de passe doit avoir entre 6 et 10 caractères.";
    }

    // Le « salt » statique
    $salt = "ABC1234@";

    // Concaténer le « salt » au mot de passe
    $mot_de_passe_salt = $mot_de_passe . $salt;

    // Chiffrer le mot de passe avec SHA-256
    $mot_de_passe_chiffre = hash('sha256', $mot_de_passe_salt);

    // Afficher le message avec le « salt » et le mot de passe chiffré
    echo "Mot de passe chiffré : $mot_de_passe_chiffre<br>";
    echo "Salt : $salt<br>";

    // Tester le mot de passe
    $mot_de_passe_test = "abcdef"; // Remplacez par le mot de passe que vous voulez tester

    if (hash('sha256', $mot_de_passe_test . $salt) == $mot_de_passe_chiffre) {
        return "Mot de passe correct !";
    } else {
        return "Mot de passe incorrect.";
    }
}

// Exemple d'utilisation

?>
