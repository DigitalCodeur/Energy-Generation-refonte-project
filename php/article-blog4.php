<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header class=" fixed-top bg-white">
        <nav class="navbar navbar-expand-lg py-4 navbar-light">
            <div class="container">
                <a href="../index.php" class="d-flex align-items-baseline mb-3 mb-md-0 m me-md-auto text-dark text-decoration-none navbar-brand">
                    <img src="../image/EG_logo.webp" class="logo-eg navbar-brand" alt="logo energy generation">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="d-flex justify-content-end">

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item ms-3"><a href="../index.php" class="nav-link">Accueil</a></li>
                            <li class="nav-item ms-3"><a href="../php/programmes.php" class="nav-link">Nos programmes</a></li>
                            <li class="nav-item ms-3"><a href="../php/energy-space.php" class="nav-link">Energy Space</a></li>
                            <li class="nav-item ms-3"><a href="../php/blog.php" class="nav-link active" aria-current="page">Blog</a></li>
                            <li class="nav-item ms-3"><a href="../php/devenir_mentor.php" class="nav-link">Devenir Mentor</a></li>
                            <li class="nav-item ms-3"><a href="#" class="nav-link"><img src="../image/achat.webp" width="30" height="30" alt=""></a></li>
                        </ul>
                        <div id="google_translate_element"></div>

                            <script>
                            function googleTranslateElementInit() {
                            new google.translate.TranslateElement({pageLanguage: 'fr'}, 'google_translate_element');
                            }
                            </script>

                            <script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="pt-5">
        <div class="container mt-5 pt-5">
            <ul class="nav justify-content-between">
                <li class="nav-item">
                    <a href="#" class="nav-link text-black">All Posts</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-black">Formation Solaire</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-black">formation</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link text-black">énergie renouvelable</a>
                </li>
                <li class="nav-item">
                    <select class="form-select w-25 border-0"  aria-label="Default select example">
                        <option selected>Plus</option>
                        <option value="1">formation entrepreneuriale</option>
                        <option value="2">formation entrepreneuriale solaire</option>
                        <option value="3">solar training</option>
                    </select>
                </li>
                <li>
                    <form>
                        <input class="form-control" type="text" placeholder="Recherche" aria-label="Chercher">
                      </form>
                </li>
            </ul>
        </div>
    </div>

    <div class="container my-5 py-5 ">
        <div class="d-flex flex-wrap-mobile border mx-auto">
            
            <div class="px-5">
                <div class="d-flex py-3">
                    <img src="../image/image-article-perso.png" width="50" height="50" alt="">
                    <p>Odjouman Allagbe <br> 18 mars 2020 <br> 3 Min</p>
                </div>
                <div class="me-5 fs-4">
                   <p class="fs-4">Progress report for the first session of the Training in Solar Entrepreneurship at Energy Generation</p>
                   <br> <br>

                    <div class="w-100 me-5">
                        <img src="../image/image-blog1.jpg" class="h-100 w-100 w-img-blog" alt="">
                    </div>
                    <br> <br>
                    <p class="fs-5">In Togo, the government has launched its new electrification strategy, providing for the creation of thousands of jobs in the photovoltaic solar sector. Unfortunately, the companies concerned are forced to have recourse to outside operators because the country faces a lack of adequate training that would allow local players to invest in the field.</p>
                    <p>Indeed, today there are not enough training offers for technicians in  installation and maintenance. Faced with this growing need, Energy Generation has developed the “Training of installers and technicians for the maintenance of solar photovoltaic systems” program to broaden its impact in creating economic opportunities and jobs for young people in Africa through the promotion of renewable energies.</p>
                    <p>At the end of this training, the learners will have acquired the skills necessary to carry out an installation of an autonomous photovoltaic solar system, functional and adapted to the challenges and needs of end users.</p>
                    <p>In addition, they will be equipped to create, manage and develop an economic activity built around the installation and maintenance of solar systems.</p>
                    <hr>
                    <div class="d-flex flex-wrap justify-content-between">
                        <div class="d-flex">
                           

                              <form action="#" method="post" class="mb-3 ms-5 d-flex flex-wrap-mobile">
                                   <span>226vues</span>
                                <textarea class="form-control mx-3" name="commentaire" placeholder="Entrer votre commentaire ici" cols="50"></textarea>

                                    <button type="submit" class="btn btn-primary py-3 px-5 w-25 m-3">Send</button>

                              </form>
                        </div>
                        <div>
                            <button class="border-0 bg-white">
                                <span>22</span>
                                <img src="../image/coeur.png" alt="">
                            </button>
                        </div>
                    </div>

                    <div>
                        <h2 class="fs-3">Comment</h2>
                        <hr>
                    </div>

                    <?php
             //$servername = "localhost";
             //$username = "root";
            // $password = "root";
             //$dbname = "energy-generation_db_remonte_eg";
         
                 $servername = "mysql-energy-generation.alwaysdata.net";
                 $username = "275807";
                 $password = "energyGeneration";
                 $dbname = "energy-generation_db_remonte_eg";

                 try {
                     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                     // set the PDO error mode to exception
                     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                     // On récupère tout le contenu de la table recipes
                     $sqlQuery = 'SELECT commentaire FROM article_form';
                     $recipesStatement = $conn->prepare($sqlQuery);
                     $recipesStatement->execute();
                     $recipes = $recipesStatement->fetchAll();

                     // On affiche chaque recette une à une
                     foreach ($recipes as $recipe) {
                     ?>
                         <p><?php echo $recipe['commentaire']; ?></p>
                     <?php
                     }

                     //echo "New record created successfully";
                 } catch(PDOException $e) {
                     echo $sql . "<br>" . $e->getMessage();
                     }

                     $conn = null;
            ?>


      <?php

        if(!empty( $_POST["commentaire"])){

        $commentaire = $_POST["commentaire"];
        $comment = addslashes($commentaire);

        $servername = "mysql-energy-generation.alwaysdata.net";
        $username = "275807";
        $password = "energyGeneration";
        $dbname = "energy-generation_db_remonte_eg";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $sql = "INSERT INTO  article_form (commentaire)
            VALUES ('$comment')";
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "New record created successfully";
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            }

            $conn = null;
        }

        ?>
                </div>
            </div>
        </div>
    </div>

    <!--
        ===================================
        Insertion de la division partenaire
        ===================================
    -->

    <?php include'../php/partenaire.php' ?>
    <!--
        ============================
        Section Ils parlent de nous
        ============================
    -->
    <?php include'../php/section_journaux.php' ?>

    <!--
        ============================
        footer
        ============================
    -->
    <?php include'../php/footer.php' ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
    </html>