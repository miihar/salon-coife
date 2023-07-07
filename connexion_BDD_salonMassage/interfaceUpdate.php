<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <thead>
        <tr>
            <th>Titre</th>
            <th>date publication</th>
            <th>description</th>
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
        $uneDonnees = new MaConnexion("salonmassage", "", "root", "localhost");
        $article = $uneDonnees->select("article", "*");
        foreach ($article as $donee) {
            echo  '<tr>
                    <td>' . $donee['Titre'] . '</td>
                    <td>' . $donee['Date_de_publication'] . '</td>
                    <td>' . $donee['Contenu'] . '</td>
                    <td>' . $donee['Image'] . '</td>
                    <td>' . $donee['Resume'] . '</td>
                    <td>' . $donee['Titre_2'] . '</td>
                    <td>' . $donee['Contenu_2'] . '</td>
                    <td>' . $donee['Titre_3'] . '</td>
                    <td>' . $donee['Contenu_3'] . '</td>

                    <td><button type="button" class="btn btn-outline-secondary">modif</button>
                    <button type="button" class="btn btn-outline-success">suppr</button></td>
            <tr>';
        }
        ?>
    </tbody>
</body>

</html>