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

   <!--
        ======================
        Insertion de la navbar
        ======================
    -->
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

        <div class="container my-5">
            <div class="d-flex flex-wrap-mobile border w-75 mx-auto">
                <div class="w-100 me-5">
                    <img src="../image/image-blog1.jpg" class="h-100 w-100 w-img-blog" alt="">
                </div>
                <div class="">
                    <div class="d-flex py-3">
                        <img src="../image/image-article-perso.png" width="50" height="50" alt="">
                        <p>Odjouman Allagbe <br> 18 mars 2020 <br> 3 Min</p>
                    </div>
                    <div class="me-5">
                       <a href="../php/article-blog.php" class="fs-4 text-decoration-none text-black">Coup de projecteur sur le parcours <br> entrepreneuriat de la Formation Solaire à Energy Generation</a>
                       <br> <br>
                        <p class="fs-5">Parce que le solaire représente une véritable opportunité de création d'emplois pour les jeunes, tout en participant au développement...</p>
                        <hr>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <span>226vues</span>
                                <a href="../php/article-blog.php" class="ms-md-5 text-decoration-none text-black ">
                                    <span>0commentaire</span>
                                </a>
                            </div>
                            <div>
                                <button class="border-0 bg-white">
                                    <span>22</span>
                                    <img src="../image/coeur.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="d-flex flex-wrap-mobile border w-75 mx-auto">
                <div class="w-100 me-5">
                    <img src="../image/image-blog1.jpg" class="h-100 w-100 w-img-blog" alt="">
                </div>
                <div class="">
                    <div class="d-flex py-3">
                        <img src="../image/image-article-perso.png" width="50" height="50" alt="">
                        <p>Odjouman Allagbe <br> 18 mars 2020 <br> 3 Min</p>
                    </div>
                    <div class="me-5">
                       <a href="../php/article-blog2.php" class="fs-4 text-decoration-none text-black">Spotlight on the entrepreneurial journey from Solar Training to Energy Generation</a>
                       <br> <br>
                        <p class="fs-5">As solar represents a real opportunity to create jobs for young people while participating in the socio-economic development of African...</p>
                        <hr>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <span>226vues</span>
                                <a href="../php/article-blog2.php" class="ms-md-5 text-decoration-none text-black ">
                                    <span>0commentaire</span>
                                </a>
                            </div>
                            <div>
                                <button class="border-0 bg-white">
                                    <span>22</span>
                                    <img src="../image/coeur.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="d-flex flex-wrap-mobile border w-75 mx-auto">
                <div class="w-100 me-5">
                    <img src="../image/image-blog2.jpg" class="h-100 w-100 w-img-blog" alt="">
                </div>
                <div class="">
                    <div class="d-flex py-3">
                        <img src="../image/image-article-perso.png" width="50" height="50" alt="">
                        <p>Odjouman Allagbe <br> 18 mars 2020 <br> 3 Min</p>
                    </div>
                    <div class="me-5">
                       <a href="../php/article-blog3.php" class="fs-4 text-decoration-none text-black">Bilan d’étape très positif pour la première Formation en Entrepreneuriat Solaire à Energy Generation</a>
                       <br> <br>
                        <p class="fs-5">Au Togo, le Gouvernement a amorcé sa nouvelle stratégie d’électrification, prévoyant la création de milliers d’emploi dans le secteur du...</p>
                        <hr>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <span>226vues</span>
                                <a href="../php/article-blog3.php" class="ms-md-5 text-decoration-none text-black ">
                                    <span>0commentaire</span>
                                </a>
                            </div>
                            <div>
                                <button class="border-0 bg-white">
                                    <span>22</span>
                                    <img src="../image/coeur.png" alt="">
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container my-5">
            <div class="d-flex flex-wrap-mobile border w-75 mx-auto">
                <div class="w-100 me-5">
                    <img src="../image/image-blog2.jpg" class="h-100 w-100 w-img-blog" alt="">
                </div>
                <div class="">
                    <div class="d-flex py-3">
                        <img src="../image/image-article-perso.png" width="50" height="50" alt="">
                        <p>Odjouman Allagbe <br> 18 mars 2020 <br> 3 Min</p>
                    </div>
                    <div class="me-5">
                       <a href="../php/article-blog4.php" class="fs-4 text-decoration-none text-black">Progress report for the first session of the Training in Solar Entrepreneurship at Energy Generation</a>
                       <br> <br>
                        <p class="fs-5">In Togo, the government has launched its new electrification strategy, providing for the creation of thousands of jobs in the...</p>
                        <hr>
                        <div class="d-flex flex-wrap justify-content-between">
                            <div>
                                <span>226vues</span>
                                <a href="../php/article-blog4.php" class="ms-md-5 text-decoration-none text-black ">
                                    <span>0commentaire</span>
                                </a>
                            </div>
                            <div>
                                <button class="border-0 bg-white">
                                    <span>22</span>
                                    <img src="../image/coeur.png" alt="">
                                </button>
                            </div>
                        </div>
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
</php>