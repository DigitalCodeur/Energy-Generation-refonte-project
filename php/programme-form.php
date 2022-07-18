<?php


if(!empty($_POST["prenom"]) && !empty($_POST["nom"]) && !empty($_POST["genre"]) && !empty($_POST["email"]) && !empty($_POST["confirme_email"])
        && !empty($_POST["numero_whatsap"]) && !empty($_POST["pays"]) && !empty($_POST["niveau_etude"]) && !empty($_POST["thematique_choisi"]) && !empty($_POST["campus_prefere"]))
      {
          $prenom = $_POST["prenom"];
          $nom = $_POST["nom"];
          $genre = $_POST["genre"];
          $email = $_POST["email"];
          $confirmeEmail = $_POST["confirme_email"];
          $numeroWhatsap = $_POST["numero_whatsap"];
          $pays = $_POST["pays"];
          $niveauEducation = $_POST["niveau_etude"];
          $thematiqueChoisi = $_POST["thematique_choisi"];
          $campusPrefere = $_POST["campus_prefere"];
          // echo $prenom, $nom, $genre, $email, $confirmeEmail, $numeroWhatsap,  $pays, $niveauEducation, $thematiqueChoisi, $campusPrefere;

          if($email==$confirmeEmail) {

            $servername = "mysql-energy-generation.alwaysdata.net";
            $username = "275807";
            $password = "energyGeneration";
            $dbname = "energy-generation_db_remonte_eg";

          try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO  programme_form (prenom, nom, genre, email, confirmeEmail, numeroWhatsap, pays, niveauEducation, thematiqueChoisi, campusPrefere)
            VALUES ('$prenom', '$nom', '$genre', '$email', '$confirmeEmail', '$numeroWhatsap', '$pays', ' $niveauEducation', '$thematiqueChoisi', '$campusPrefere')";
            // use exec() because no results are returned
            $conn->exec($sql);
            //echo "New record created successfully";
          } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
          }


          $conn = null;
                    } else {
                      echo "Email et Eamil de confirmation doivent être identique, Veuillez retourné et corrigé !";
                    }

                    include '../php/inscription_reussie.php';

        }
        else{
          include '../php/echec_inscription.php';
        }
?>