<!DOCTYPE html>
<html lang="en">
    <head>
        <title>SITE D'ACTUALITE DU MGLSI</title>
        <meta content="text/html; charset=utf-8" />
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <div id="titre">SITE D'ACTUALITE DU MGLSI</div>
        <div>
            <div id="actualite">
                <?php
                    require 'conn.php';
                if (isset($_GET['section'])){
                    if($_GET['section'] == 'tout'){
                        foreach($bdd->query('SELECT * from ARTICLE') as $row) {
                        ?>
                <div id="article">
                    <h3 id="titreArticle">
                        <a href="">
                            <?php
                            print_r($row['titre']);
                            ?>
                        </a>
                    </h3>
                    <p id="contenuArticle">
                        <?php
                            print_r($row['contenu']);
                        ?>
                    </p>
                </div>
                    <?php
                        }
                        $articlesStatement = $bdd->prepare('SELECT * from ARTICLE');
                        $articlesStatement->execute();
                        $articles = $articlesStatement->fetchAll();
                        echo count($articles);
                        if (count($articles)==0){
                            echo 'Aucun article trouvé !';
                        }
                    }
                    if($_GET['section'] == 'sport'){
                        foreach($bdd->query('SELECT * from ARTICLE where categorie = 1') as $row) {
                            ?>
                            <div id="article">
                                <h3 id="titreArticle">
                                    <a href="">
                                        <?php
                                        print_r($row['titre']);
                                        ?>
                                    </a>
                                </h3>
                                <p id="contenuArticle">
                                    <?php
                                    print_r($row['contenu']);
                                    ?>
                                </p>
                            </div>
                            <?php
                        }
                        $articlesStatement = $bdd->prepare('SELECT * from ARTICLE where categorie = 1');
                        $articlesStatement->execute();
                        $articles = $articlesStatement->fetchAll();
                        if (count($articles)==0){
                            echo 'Aucun article trouvé !';
                        }
                    }
                    if($_GET['section'] == 'sante'){
                        foreach($bdd->query('SELECT * from ARTICLE where categorie = 2') as $row) {
                            ?>
                            <div id="article">
                                <h3 id="titreArticle">
                                    <a href="">
                                        <?php
                                        print_r($row['titre']);
                                        ?>
                                    </a>
                                </h3>
                                <p id="contenuArticle">
                                    <?php
                                    print_r($row['contenu']);
                                    ?>
                                </p>
                            </div>
                            <?php
                        }
                        $articlesStatement = $bdd->prepare('SELECT * from ARTICLE where categorie = 2');
                        $articlesStatement->execute();
                        $articles = $articlesStatement->fetchAll();
                        if (count($articles)==0){
                            echo 'Aucun article trouvé !';
                        }
                    }
                    if($_GET['section'] == 'education'){
                        foreach($bdd->query('SELECT * from ARTICLE where categorie = 3') as $row) {
                            ?>
                            <div id="article">
                                <h3 id="titreArticle">
                                    <a href="">
                                        <?php
                                        print_r($row['titre']);
                                        ?>
                                    </a>
                                </h3>
                                <p id="contenuArticle">
                                    <?php
                                    print_r($row['contenu']);
                                    ?>
                                </p>
                            </div>
                            <?php
                        }
                        $articlesStatement = $bdd->prepare('SELECT * from ARTICLE where categorie = 3');
                        $articlesStatement->execute();
                        $articles = $articlesStatement->fetchAll();
                        if (count($articles)==0){
                            echo 'Aucun article trouvé !';
                        }
                    }
                    if($_GET['section'] == 'politique'){
                        foreach($bdd->query('SELECT * from ARTICLE where categorie = 4') as $row) {
                            ?>
                            <div id="article">
                                <h3 id="titreArticle">
                                    <a href="">
                                        <?php
                                        print_r($row['titre']);
                                        ?>
                                    </a>
                                </h3>
                                <p id="contenuArticle">
                                    <?php
                                    print_r($row['contenu']);
                                    ?>
                                </p>
                            </div>
                            <?php
                        }
                        $articlesStatement = $bdd->prepare('SELECT * from ARTICLE where categorie = 4');
                        $articlesStatement->execute();
                        $articles = $articlesStatement->fetchAll();
                        if (count($articles)==0){
                            echo 'Aucun article trouvé !';
                        }
                    }
                }
                else{
                    foreach($bdd->query('SELECT * from ARTICLE') as $row) {
                        ?>
                        <div id="article">
                            <h3 id="titreArticle">
                                <a href="">
                                    <?php
                                    print_r($row['titre']);
                                    ?>
                                </a>
                            </h3>
                            <p id="contenuArticle">
                                <?php
                                print_r($row['contenu']);
                                ?>
                            </p>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
            <div id="categorie">
                <div id="titreCategories">CATEGORIES</div>
                <hr>
                <ul>
                    <li><a href="index.php?section=tout">Tout</a></li>
                    <li><a href="index.php?section=sport">Sport</a></li>
                    <li><a href="index.php?section=sante">Santé</a></li>
                    <li><a href="index.php?section=education">Education</a></li>
                    <li><a href="index.php?section=politique">Politique</a></li>
                </ul>
            </div>
        </div>
    </body>
    <footer>

    </footer>
</html>