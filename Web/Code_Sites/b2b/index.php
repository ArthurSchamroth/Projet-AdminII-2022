<?php
$servername = "51.178.45.190:3306";
$username = "admin";
$password = "PasswordDB";
$dbname = "DataBase_Woody";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";

$query = "SELECT * FROM table_jouets";  
        $affichage = mysqli_query($conn, $query);
        
        while ($row = mysqli_fetch_array($affichage)) {
            echo $row['id_jouet'] . ': ' . $row['nom_jouet'] . ' ' . $row['prix_jouet'] . ' <br />';
        }
?>