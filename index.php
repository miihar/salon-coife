<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <?php
            include '../projetSalon/composant/header.php';
        ?>
    </header>

    <main>
        <!-- partie sous header "in beauty paradise" -->
        <?php
            include '../projetSalon/composant/intro.php';
        ?>

        <!-- partie our services -->
        <?php
            include '../projetSalon/composant/ourService.php';
        ?>
        <!-- partie Why to choose our salon -->
        <?php
            include '../projetSalon/composant/whyToChoose.php';
        ?>
        <!--  baderau "book a massage today" -->
        <?php
            include '../projetSalon/composant/book_massage.php';
        ?>
        <!--  partie intro massage studio -->
        <?php
            include '../projetSalon/composant/introMassage.php';
        ?>
        <!-- partie carte avec png -->
        <?php
            include '../projetSalon/composant/carteService.php';
        ?>
        <!-- partie deserve your time -->
        <?php
            include '../projetSalon/composant/deserveYourTime.php';
        ?>
    </main>




    <footer>
        <?php
            include '../projetSalon/composant/footer.php';
        ?>   
    </footer>
</body>
</html>