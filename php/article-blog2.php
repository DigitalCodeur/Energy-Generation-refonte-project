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
                   <p class="fs-4">Spotlight on the entrepreneurial journey from Solar Training to Energy Generation</p>
                   <br> <br>

                    <div class="w-100 me-5">
                        <img src="../image/image-blog1.jpg" class="h-100 w-100 w-img-blog" alt="">
                    </div>
                    <br> <br>
                    <p class="fs-5">As solar represents a real opportunity to create jobs for young people while participating in the socio-economic development of African rural areas in particular, Energy Generation has created a 10-month program to meet training needs in the field: “Training installers and maintenance technicians of solar photovoltaic systems”.</p>
                    <p>The programme benefits from technical and educational support from the Schneider Electric Foundation and financial support from the global leader in energy- Electricité de France (EDF), in the form of grants for young women.</p>
                    <p>Ladies, don't hesitate to get in touch with us to find out more!</p>
                    <p>The training is subdivided into two parts: the technical course which was the subject of the previous article and the entrepreneurship course which is rich in several modules and  taught by different speakers.</p>
                    <p>Raymond Ramazani-Saleh, one of our learners who came from the DR Congo to follow the training testifies:</p>
                    <p class="text-primary">"After having acquired the technical bases on the installation and the maintenance of photovoltaic solar systems, we continued with the entrepreneurship course with several modules like accounting, financial management,marketing and communication, management and development of a company, business model, business plan development, leadership and personal development. This training was instructive and full of motivation, surprises, inspiration. We are ready to put our technical and entrepreneurial skills to good use on the African market. We thank EG for the quality of learning and the selection of trainers from all over the world. We invite all young people to come and enjoy this experience at Energy Generation.” </p>
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