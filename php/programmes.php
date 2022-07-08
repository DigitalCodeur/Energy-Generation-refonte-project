<?php

    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbnam = "espaceProgrammes";


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




    // try {
    // $conn = new PDO("mysql:host=$servername;dbname=$dbnam", $username, $password);
    // // set the PDO error mode to exception
    // $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // $sql = "INSERT INTO makeInscription (
    //     $prenom, 
    //     $nom, 
    //     $genre, 
    //     $email, 
    //     $confirmeEmail, 
    //     $numeroWhatsap, 
    //     $pays, 
    //     $niveauEducation, 
    //     $thematiqueChoisi, 
    //     $campusPrefere)
    // VALUES (
    //     'prenom', 
    //     'nom', 
    //     'genre', 
    //     'email', 
    //     'confirme_email', 
    //     'numero_whatsap', 
    //     'pays', 
    //     'niveau_etude', 
    //     'thematique_choisi', 
    //     'campus_prefere')";
    // // use exec() because no results are returned
    // $conn->exec($sql);
    // echo "New record created successfully";
    // } catch(PDOException $e) {
    // echo $sql . "<br>" . $e->getMessage();
    // }

    // $conn = null;
?>