<?php
include ("connexionbasededonnee.php");

$uneMaj = new MaConnexion("salonmassage","","root","localhost");

$uneMaj->miseAJour_Secure(
    $_POST['Titre'], $_POST['Description'], $_POST['Date_de_publication'],
    $_POST['Contenu'], $_POST['Image'],
    $_POST['Resume'], $_POST['Titre_2'], $_POST['Contenu_2'], 
    $_POST['Titre_3'], $_POST['Contenu_3']
);

header("Location: interface.php");

?>