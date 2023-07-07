<?php
include ("connexionbasededonnee.php");

$uneInsertion = new MaConnexion("salonmassage","","root","localhost");
    //vulnérable
$uneInsertion->insertionSecure(
    $_POST['Titre'], $_POST['Description'], $_POST['Date_de_publication'],
    $_POST['Contenu'], $_POST['Image'],
    $_POST['Resume'], $_POST['Titre_2'], $_POST['Contenu_2'], 
    $_POST['Titre_3'], $_POST['Contenu_3']
);


header("Location: interface.php");


?>