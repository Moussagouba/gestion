<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>student gestion</title>
</head>
<body>
    <div class="card">
  <h2>Connexion</h2>
  <div class="card-body">
  <form action="admin.php" method="POST">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="mot_de_passe">Mot de passe:</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required><br><br>
    </div>
    <div class="card-footer">
    <button type="submit" name="connecter" value="connecter"> se connecter</button>
  </form>
  </div>
  </div>
</body>

</html>