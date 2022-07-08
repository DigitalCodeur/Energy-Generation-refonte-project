<?php


if(isset($_POST["prenom"]) && isset($_POST["nom"]) && isset($_POST["genre"]) && isset($_POST["email"]) && isset($_POST["confirme_email"]) 
        && isset($_POST["numero_whatsap"]) && isset($_POST["pays"]) && isset($_POST["niveau_etude"]) && isset($_POST["thematique_choisi"]) && isset($_POST["campus_prefere"]))
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
          $servername = "localhost";
$username = "root";
$password = "root";
$dbname = "espaceProgrammes";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO makeInscription (prenom, nom, genre, email, confirmeEmail, numeroWhatsap, pays, niveauEducation, thematiqueChoisi, campusPrefere)
  VALUES ('$prenom', '$nom', '$genre', '$email', '$confirmeEmail', '$numeroWhatsap', '$pays', ' $niveauEducation', '$thematiqueChoisi', '$campusPrefere')";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
          } else {
            echo "Email et Eamil de confirmation doivent être identique";
          }

      } else {
        echo "veillez remplir toutes les cases";
      }

?>