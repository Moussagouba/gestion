
<?php
include('header.php');
echo "header.php";
// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupère les valeurs soumises
  $email = $_POST["email"];
  $mot_de_passe = $_POST["mot_de_passe"];

  // Connexion à la base de données
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "gestion";

  $conn = mysqli_connect($servername, $username, $password, $database);

  // Vérifie la connexion à la base de données
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Requête pour récupérer l'utilisateur correspondant à l'email soumis
  $sql = "SELECT * FROM admins WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  // Vérifie si l'utilisateur existe dans la base de données
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row["mot_de_passe"];

    // Vérifie si le mot de passe correspond
    if (password_verify($mot_de_passe, $hashed_password)) {
      // Mot de passe correct, l'utilisateur est connecté
      echo '<a href="../index.php">vous etes connecter cliquez ici pour gerer les donnees</a>'; 
      // Vous pouvez ajouter d'autres actions ou redirections ici
    } else {
      // Mot de passe incorrect
      echo "Mot de passe incorrect.";
    }
  } else {
    // Utilisateur non trouvé dans la base de données
    echo "Email incorrect.";
  }

  // Ferme la connexion à la base de données
  mysqli_close($conn);
}
?>
