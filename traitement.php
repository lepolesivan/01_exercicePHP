<?php

// Utiliser form.php pour le formulaire

/** Exercice 1 : Validation de formulaire
 * 
 *  Objectif : Vérifier si tous les champs du formulaire ont été remplis et afficher un message d'erreur pour chaque champ manquant
 * 
 *  1 . S'assurer que tous les champs sont remplis avant d'afficher les données
 * 
 */

 if(empty($_POST['city'])){
    echo "<p>Merci de remplire le champ ville</p>";
}elseif(empty($_POST['postalCode'])){
    echo "<p>Merci de remplire le champ code postal</p>";
}elseif(empty($_POST['adress'])){
    echo "<p>Merci de remplire le champ adresse</p>";
}else {
    $adress = htmlspecialchars($_POST['adress']);
    $postalCode = htmlspecialchars($_POST['postalCode']);
    $city = htmlspecialchars($_POST['city']);
    echo "<p>Voici ton adresse : $adress, $postalCode $city</p>";
}


/** Exercice 2 : traitement et affichage sécurisé
 * 
 *  Objectif : Afficher les données du formulaire de manière sécurisée pour les éviter les attaques XSS (échapper les données) (possibilité de C/C le traitement de l'exercice 1)
 * 
 */


/** Exercice 3 : Afficher les données précédentes
 * 
 *  Objectif : Réafficher les données précédemment saisies dans le formulaire après la soumission
 * 
 *  1 . Pré-remplir les champs du formulaire avec les valeurs soumises précédemment 
 * 
 *  *  Cet exercice se fera donc dans la partie formulaire directement ! (Vous devrez supprimer la partie action du formulaire pour qu'il redirige la requête sur la même page)
 * 
 */
echo 'regarder dans l\'index';
/** Exercice 4 : Limitation de longueur pour adresse 
 * 
 *  Objectif : Limiter la longueur de l'adresse saisie par l'utilisateur à 200 caractères et afficher un message d'avertissement si ce seuil est dépassé
 * 
 *  1 . Verifier la longueur du champ adresse
 * 
 *  2 . Afficher un message si la longueur dépasse 130 caractères
 * 
 * 
 * Ne pas oublier de réactiver la partie action pour qu'il redirige la requête sur cette page
 */
$adress = $_POST['adress'];
$limite = 130;

if (strlen($adress) > $limite) {
    echo "<p>Erreur : la chaîne dépasse la limite de $limite caractères.</p>";
} else {
    echo "<p>La chaine ne dépasse pas la limite de $limite caractères.</p>";
}

/** Exercice 5 : Conversion de données
 * 
 *  Objectif : Convertir la ville en majuscule avant de l'afficher et afficher un message de confirmation 
 * 
 *  1 . Convertir la ville reçue du formulaire en majuscule
 * 
 *  2 . Afficher la ville en majuscule ainsi qu'un message de confirmation 'merci pour votre soumission'
 * 
 */

 $city = htmlspecialchars($_POST['city']);
 $cityMaj = strtoupper($city);

 if(isset($_POST['city']) && isset($_POST['codePostal']) && isset($_POST['adress'])){
    echo "<p>$cityMaj</p>";
    echo '<p>merci pour votre soumission</p>';
 }