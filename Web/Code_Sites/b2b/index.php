<?php

// On crée la connexion
// Les variables servername, username, password et dbname ne sont pas présentes dans ce fichier git pour assurer sécurité supplémentaire.
// Elles sont néanmoins bien présentes en local.
$conn = new mysqli($servername, $username, $password, $dbname);

// On vérifie la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Vérification du formulaire
if(isset($_POST["submit"])){
  if(!empty($_POST)){
    if(
      isset($_POST["article"], $_POST["description"], $_POST["prix"])
      && !empty($_POST["article"]) && !empty($_POST["description"]) && !empty($_POST["prix"])
    ){
      // formulaire complet
      $article = $_POST["article"];
      $prix = $_POST["prix"];
      $description = $_POST["description"];
  
      // on écrit et exécute la requête
      $sql = "INSERT INTO `table_jouets` (nom_jouet, description_jouet, prix_jouet) VALUES (?, ?, ?)";
      $query = $conn->prepare($sql);
      $query->bind_param("ssi", $article, $description, $prix);
      $query->execute();
  
    }
  }
}

?>

<h1>Bienvenue sur le site B2B de Woody Toys</h1>

<h3>Voici les articles déjà enregistrés dans la base de données :</h3>
<?php
$query = "SELECT * FROM table_jouets";  
        $affichage = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_array($affichage)) {
            echo $row['id_jouet'] . ': ' . $row['nom_jouet'] . ' <br /> Description : ' . $row['description_jouet'] . ' <br />Prix : ' .$row['prix_jouet'] . '€ <br /><br/>';
        }
?>

<h3>Voici un formulaire pour ajouter de nouveaux articles dans la base de données :</h3>

<form method="post">
  <div>
    <label for="article">Article :</label><br/>
    <input type="text" name="article" id="article">
  </div>
  <div>
    <label for="description">Description :</label><br/>
    <textarea name="description" id="description"></textarea>
  </div>
  <div>
    <label for="prix">Prix (En euros) :</label><br/>
    <input type="number" name="prix" id="prix"> 
  </div>
  <input name="submit" type="submit" value="Envoyer">
</form>
