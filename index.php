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
        <section>
            <div class="flexUnPeu">
                <p class="titreMoyen"> what makes us unique</p>
                <h2>why to choose our salon</h2>
            </div>
            <div class="flexUnPeu wtcu">
                <div>
                    <p>Lorem Ipsum Dolor</p>
                    <p>Lorem Ipsum Dolor</p>
                    <p>Lorem Ipsum Dolor</p>
                </div>
                <div>
                    <p>Lorem Ipsum Dolor</p>
                    <p>Lorem Ipsum Dolor</p>
                    <p>Lorem Ipsum Dolor</p>
                </div>
                <img src="images/whytochoose.png" alt="">
            </div>
        </section>
        <!--  baderau "book a massage today" -->
        <?php
            include '../projetSalon/composant/book_massage.php';
        ?>
        <!--  partie intro massage studio -->
        <section class="flexUnPeu boites">
            <div>
                <h2>introducing massage studio</h2>
                <p>
                    In publishing and graphic design, 
                    lorem ipsum is common placeholder text used to demonstrate 
                    the graphic elements of a
                </p>
                <p>
                    Even though using “lorem ipsum” often arouses curiosity 
                    due to its resemblance to classical Latin, 
                    it is not intended to have meaning. 
                </p>
            </div>
            <img src="images/introducingmassagestudio.jpg" alt="">
        </section>
        <!-- partie carte avec png -->
        <section class="flexUnPeu">
            <div>
                <img src="images/icon/icon08.png" alt="">
                <p>Top Privacy</p>
                <p>
                    Lorem Ipsum is simply dummy text. 
                    Lorem Ipsum is simply dummy text corel ozel lorem
                </p>
            </div>
            <div>
                <img src="images/icon/icon01.png" alt="">
                <p>Best products</p>
                <p>
                    Lorem Ipsum is simply dummy text. 
                    Lorem Ipsum is simply dummy text corel ozel lorem
                </p>
            </div>
            <div>
                <img src="images/icon/icon03.png" alt="">
                <p>aromatic oils</p>
                <p>
                    Lorem Ipsum is simply dummy text. 
                    Lorem Ipsum is simply dummy text corel ozel lorem
                </p>
            </div>
            <div>
                <img src="images/icon/icon04.png" alt="">
                <p>hot stones</p>
                <p>
                    Lorem Ipsum is simply dummy text. 
                    Lorem Ipsum is simply dummy text corel ozel lorem
                </p>
            </div>
            <div>
                <img src="images/icon/icon10.png" alt="">
                <p>premium towel</p>
                <p>
                    Lorem Ipsum is simply dummy text. 
                    Lorem Ipsum is simply dummy text corel ozel lorem
                </p>
            </div>
        </section>

        <section class="flexUnPeu">
            <img src="images/youdeserveyourtime.jpg" alt="">
            <div>
                <h2>You deserve your time!</h2>
                <p>
                    In publishing and graphic design, lorem ipsum is common placeholder text used to demonstrate the graphic elements of a
                </p>
                <p>
                    Even though using “lorem ipsum” often arouses curiosity due to its resemblance to classical Latin, it is not intended to have meaning. 
                    Where text is visible in a document, people tend to focus on the textual content rather than upon overall presentation, 
                    so publishers use lorem h.
                </p>
            </div>
        </section>

    </main>




    <footer>
        <?php
            include '../projetSalon/composant/footer.php';
        ?>   
    </footer>
</body>
</html>