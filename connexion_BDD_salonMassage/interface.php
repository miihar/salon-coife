
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <h1>mes donnnéer</h1>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">ajout</button>
        <!-- Modal -->
        <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <h1>paroduit</h1>
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">formulaire Article</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">insertion</h6>
                                <form method="POST" action="insertionArticle.php">
                                    <div class="mb-3">
                                        <label for="nom_produit" class="form-label">Nom article</label>
                                        <input type="text" class="form-control" id="nom_produit" placeholder="name" name ="nom" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="prix_produit" class="form-label">contenu article</label>
                                        <input type="number" class="form-control" id="prix_produit" placeholder="price" name="prix" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="description_produit" class="form-label">image article</label>
                                        <input type="text" class="form-control" id="description_produit" placeholder="description" name="description" required>
                                    </div>
                                    <button type="submit" class="btn btn-outline-primary">Valider</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>Titre</th>
                    <th>description</th>
                    <th>date publication</th>
                    <th>contenu</th>
                    <th>image</th>
                    <th>resume</th>
                    <th>titre 2</th>
                    <th>cont 2</th>
                    <th>title3</th>
                    <th>cont3</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'connexionbasededonnee.php';
                $uneDonnees = new MaConnexion("salonmassage","","root","localhost");
                $article=$uneDonnees->select("article","*");
                    foreach ($article as $donee) {
                        echo '<tr>
                                <td>'.$donee['Titre'].'</td>
                                <td>'.$donee['Date_de_publication'].'</td>
                                <td>'.$donee['Contenu'].'</td>
                                <td>'.$donee['Image'].'</td>
                                <td>'.$donee['Resume'].'</td>
                                <td>'.$donee['Titre_2'].'</td>
                                <td>'.$donee['Contenu_2'].'</td>
                                <td>'.$donee['Titre_3'].'</td>
                                <td>'.$donee['Contenu_3'].'</td>

                                <td><button type="button" class="btn btn-outline-secondary">modif</button>
                                <button type="button" class="btn btn-outline-success">suppr</button></td>
                                <tr>';
                    }
                ?>
            </tbody>
        </table>


        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    </body>
</html>
