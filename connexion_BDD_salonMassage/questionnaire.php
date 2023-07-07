
<body>
    <form method="POST" action="insertionArticle.php">
        <!-- titre -->
        <div class="mb-3">
            <label for="Titre" class="form-label">titre article</label>
            <input type="text" class="form-control" id="titre_article" placeholder="name" name="Titre" required>
        </div>
        <!-- description -->
        <div class="mb-3">
            <label for="Description" class="form-label">description article</label>
            <input type="text" class="form-control" id="Description" placeholder="description" name="Description" required>
        </div>
        <!-- date publication -->
        <div class="mb-3">
            <label for="datePublication" class="form-label">date publication</label>
            <input type="date" class="form-control" id="datePubli" placeholder="date" name="Date_de_publication" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- contenu -->
        <div class="mb-3">
            <label for="contenu" class="form-label">contenu</label>
            <input type="text" class="form-control" id="contenu" placeholder="contenu" name="Contenu" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- image -->
        <div class="mb-3">
            <label for="image" class="form-label">image</label>
            <input type="text" class="form-control" id="image" placeholder="image" name="Image" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- Résumé -->
        <div class="mb-3">
            <label for="resume" class="form-label">resume</label>
            <input type="text" class="form-control" id="resume" placeholder="resume" name="Resume" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- Titre 2 -->
        <div class="mb-3">
            <label for="titre_deux" class="form-label">titre deux</label>
            <input type="text" class="form-control" id="titre_deux" placeholder="titre_deux" name="Titre_2" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- Contenu 2 -->
        <div class="mb-3">
            <label for="contenu_deux" class="form-label">conetenu deux</label>
            <input type="text" class="form-control" id="contenu_deux" placeholder="contenu_deux" name="Contenu_2" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- Titre 3 -->
        <div class="mb-3">
            <label for="titre_trois" class="form-label">titre trois</label>
            <input type="text" class="form-control" id="titre_trois" placeholder="titre_trois" name="Titre_3" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
        <!-- Contenu 3 -->
        <div class="mb-3">
            <label for="contenu_trois" class="form-label">description trois</label>
            <input type="text" class="form-control" id="contenu_trois" placeholder="contenu_trois" name="Contenu_3" required>
        </div>
        <button type="submit" class="btn btn-outline-primary">Valider</button>
    </form>
