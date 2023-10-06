<?php
function validerMotDePasse($motDePasse){

    //longueur du mot de passe

    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "veuillez entrer un mot de passe entre 6 et 10 caracteres.";
}

// definir le sel
$sel = "ABCD12345@"

// concatenation du sel au mdp

$motDePasseAvecSel = $motDePasse . $sel;

// chiffrement avec hachage

$motDePasseChiffre = password_hash($motdePasseAvecSel, PASSWORD_BCRYPT);

//mot de passe correct de test
$motDePasseCorrect = "MotDePasse1234";

// Vérifier si le mot de passe est correct

if(password_verify($motdePasseCorrect . $sel, $motDePasseChiffre)) {
    return "le Mot de passe correct : Sel = $sel, Mot de passe chiffre = $motDePasseChiffre ";
} else {
    return "Mot de passe incorrect.";
}

}

// Test fonction
$motDePasseTest = "MotDePasse123";
$resultat = validerMotDePasse($motDePasseTest);
echo $resultat;
?>