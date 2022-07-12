<?php

if(!empty( $_POST["name-footer"]) && !empty($_POST["email-footer"])){


  $name = $_POST["name-footer"];
  $mail = $_POST["email-footer"];
  $french = $_POST["checkbox-prefere-french"];
  $english = $_POST["checkbox-prefere-english"];

  $servername = "localhost";
  $username = "root";
  $password = "root";
  $dbname = "db_remonte_eg";

  try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "INSERT INTO  newsletter_form (name, email, langage1, langage2)
    VALUES ('$name', '$mail', '$french','$english')";
     // use exec() because no results are returned
     $conn->exec($sql);
     //echo "New record created successfully";
  } catch(PDOException $e) {
     echo $sql . "<br>" . $e->getMessage();
    }

   $conn = null;

   echo"<script language='javascript'>
alert('Merci de vous etes inscrit à notre Newsletter.');
</script>
";



}
header('Location:../index.html');
?>