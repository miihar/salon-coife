
<?php

class MaConnexion{    
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

    public function selectSuperior($table){
        try {
         $requete ="SELECT * from $table";
         $resultat = $this->connexionPDO->query($requete);
         $resultat = $resultat->fetchAll(PDO::FETCH_ASSOC);
         return $resultat;
         
        } catch (PDOException $e) {
         echo "erreur : ".$e->getMessage();
        }
    }

    public function insertionProduit_Secure($nom, $prix, $description){
        try {
            $requete = " INSERT INTO Produit (Nom, Prix, Description) VALUES (:Nom, :Prix, :Description)";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindParam(':Nom',$nom,PDO::PARAM_STR, 25);
            $requete_preparee->bindParam(':Prix',$prix,PDO::PARAM_STR, 25);
            $requete_preparee->bindParam(':Description',$description,PDO::PARAM_STR, 25);

            $requete_preparee->execute();
            echo ("insertion reussi");
            return "insertion reussi";

        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }

    public function miseAJour_Secure($table, $column, $newValue, $id){
        try {
            $requete = "UPDATE $table set $column = ? WHERE ID_Categorie = ?";
            $requete_preparee = $this->connexionPDO->prepare($requete);

            $requete_preparee->bindVAlue(1, $newValue, PDO::PARAM_STR);
            $requete_preparee->bindVAlue(2, $id, PDO::PARAM_INT);

            $requete_preparee->execute();
            echo("mise a jour reussi");
            return "mise a jour reussi";
            

        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }


}
$test = new MaConnexion("entreprise fiction","","root","localhost");
$tabResultat = $test->selectSuperior("Produit", "*");
?>