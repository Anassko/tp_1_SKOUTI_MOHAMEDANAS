<?php
function validerMotDePasse($motDePasse){
    if (strlen($motDePasse) < 6 || strlen($motDePasse) > 10) {
        return "veuillez entrer un mot de passe entre 6 et 10 caracteres.";
}

$sel = "ABCD12345@"

$motDePasseAvecSel = $motDePasse . $sel;
$motDePasseChiffre = password_hash($motdePasseAvecSel, PASSWORD_BCRYPT);
$motDePasseCorrect = "MotDePasse1234";

if(password_verify($motdePasseCorrect . $sel, $motDePasseChiffre)) {
    return "le Mot de passe correct : Sel = $sel, Mot de passe chiffre = $motDePasseChiffre ";
} else {
    return "Mot de passe incorrect.";
}

}

$motDePasseTest = "MotDePasse123";
$resultat = validerMotDePasse($motDePasseTest);
echo $resultat;

?>