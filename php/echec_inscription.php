<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inscription reussie</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body>
        <header class="bg-white">
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
                                <li class="nav-item ms-3"><a href="../php/blog.php" class="nav-link">Blog</a></li>
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

        <div class="card w-50 mx-auto my-5">
            <h5 class="card-header">Inscription</h5>
            <div class="card-body">
              <h3 class="card-title text-danger">Echec de l'inscription</h3>
              <p class="card-text">Clicker sur le bouton pour retourner a la page d'accueil.</p>
              <a href="../index.php" class="btn btn-primary">Accueil</a>
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