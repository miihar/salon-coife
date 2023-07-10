<?php
class MaConnexion{
    // étape 1 : ici on met les proprietées
    private $nomBaseDeDonnees;
    private $motDePasse;
    private $nomUtilisateur;
    private $hote;
    private $connexionPDO;

    public function __construct($nomBaseDeDonnees, $motDePasse, $nomUtilisateur, $hote){
        
        $this -> nomBaseDeDonnees = $nomBaseDeDonnees;
        $this -> motDePasse = $motDePasse;
        $this -> nomUtilisateur = $nomUtilisateur;
        $this -> hote = $hote;

        try {
            $dsn = "mysql:host=$this->hote;dbname=$this->nomBaseDeDonnees;charset=utf8mb4";
            $this->connexionPDO = new PDO($dsn, $this->nomUtilisateur, $this->motDePasse);
            $this->connexionPDO->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "erreur : ".$e->getMessage();
        }        
    }

    //fonction pour selectionner des elements dans la bdd
    public function select($table, $column){
           try {
            $requete ="SELECT $column from $table";
            $resultat = $this->connexionPDO->query($requete);
            $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
            return $resultat;
            
           } catch (PDOException $e) {
            echo "erreur : ".$e->getMessage();
           }
    }

    //-----------------------------------------------------------------------

    //fonction pour introduire une donnee dans la table article
    public function insertionSecure($titre,$description,$date, $contenu, $image,$resume,$titre_2,$contenu_2,$titre_3,$contenu_3){
        try {
            $requete = " INSERT INTO article(Titre, Description, Date_de_publication, Contenu, Image, Resume, Titre_2, Contenu_2,Titre_3,Contenu_3) 
                VALUES (:Titre, :Description, :Date_de_publication, :Contenu, :Image, :Resume, :Titre_2, :Contenu_2,:Titre_3, :Contenu_3)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindParam(':Titre',$titre,PDO::PARAM_STR,30);
            $requete_preparee->bindParam(':Description',$description,PDO::PARAM_STR,50);
            $requete_preparee->bindParam(':Date_de_publication',$date,PDO::PARAM_STR);
            $requete_preparee->bindParam(':Contenu',$contenu,PDO::PARAM_STR,1000);
            $requete_preparee->bindParam(':Image',$image,PDO::PARAM_STR,1000);
            $requete_preparee->bindParam(':Resume',$resume,PDO::PARAM_STR,1000);
            $requete_preparee->bindParam(':Titre_2',$titre_2,PDO::PARAM_STR,30);
            $requete_preparee->bindParam(':Contenu_2',$contenu_2,PDO::PARAM_STR,1000);
            $requete_preparee->bindParam(':Titre_3',$titre_3,PDO::PARAM_STR,30);
            $requete_preparee->bindParam(':Contenu_3',$contenu_3,PDO::PARAM_STR,1000);

            $requete_preparee->execute();
            echo ("insertion reussi");
            return "insertion reussi";

        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    // fonction, de mis a jours des elements de la bdd
    public function miseAJour_Secure($newtitre,$newdescription,$newdate, $newcontenu, $newimage,$newresume,$newtitre_2,$newcontenu_2,$newtitre_3,$newcontenu_3){
        try {

            $requete = "UPDATE article SET Titre = ?, Description = ?, Date_de_publication = ?, Contenu = ?, Image = ?, Resume = ?, Titre_2 = ?, Contenu_2 = ?,Titre_3 = ?,Contenu_3 = ? 
                WHERE ID_Article = ?";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindValue(1, $newtitre,PDO::PARAM_STR);
            $requete_preparee->bindValue(2, $newdescription,PDO::PARAM_STR);
            $requete_preparee->bindValue(3, $newdate,PDO::PARAM_STR);
            $requete_preparee->bindValue(4, $newcontenu,PDO::PARAM_INT);
            $requete_preparee->bindValue(5, $newimage,PDO::PARAM_STR);
            $requete_preparee->bindValue(6, $newresume,PDO::PARAM_STR);
            $requete_preparee->bindValue(7, $newtitre_2,PDO::PARAM_STR);
            $requete_preparee->bindValue(8, $newcontenu_2,PDO::PARAM_STR);
            $requete_preparee->bindValue(9, $newcontenu_3,PDO::PARAM_STR);
            $requete_preparee->bindValue(10, $newtitre_3,PDO::PARAM_STR);


            $requete_preparee->execute();
            echo("mise a jour reussi");
            return "mise a jour reussi";
            

        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public function deleteArticle($valeur){
        try{
            $requete = "DELETE FROM article WHERE ID_Article = $valeur";
            $requete_prepare = $this->connexionPDO->prepare($requete);

            $requete_prepare->execute();
            echo 'modification reussie';
            return $requete_prepare;
            

        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage();
        }
    }
}





// $test = new MaConnexion("salonmassage","","root","localhost");
// $resultat=
// $test->insertionSecure("dsads","dazdza","2001/03/03","ezd&s","refqfs","dzadzad","dsads","dsadsa","dsa","dasda");
// var_dump($resultat);

// 
?>