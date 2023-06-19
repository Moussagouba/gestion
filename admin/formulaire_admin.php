
<?php
include('header.php');
          // Vérifie si le formulaire a été soumis
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Récupère les valeurs soumises
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $mot_de_passe = $_POST["mot_de_passe"];

            $server = 'localhost';
            $user = 'root';
            $password = '';
            
            //On essaie de se connecter
            try{
                $cnx = new PDO("mysql:host=$server;dbname=gestion", $user, $password);
                //On définit le mode d'erreur de PDO sur Exception
                $cnx->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // on hacher le mot de passe
                $hashed_password = password_hash($mot_de_passe, PASSWORD_DEFAULT);

             // Requête d'insertion des données
            $sql = "INSERT INTO admins (nom, prenom, email, mot_de_passe)
            VALUES ('$nom', '$prenom', '$email', '$hashed_password')"; 
            $cnx->exec($sql);
            echo 'nouveau administrateur ajouter avec succes
            <button class="btn btn-primary"><a href="index.php">ajouter un autre admin </a></button><br><button class="btn btn-dark"><a href="admin.php">se connecter </a></button>
            ';}
            /*On capture les exceptions si une exception est lancée et on affiche
             *les informations relatives à celle-ci*/
            catch(PDOException $a){
            echo "Erreur de connection: " . $a->getMessage();
            }
        }
        ?>