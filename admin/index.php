<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>insertions dans la base de donnee</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>insertions dans la base de donnee
                        <a href="index.php" class="btn btn-danger float-end">RETOUR</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="formulaire_admin.php" method="post">
                        <div class="mb-3">
                            <label for="nom">nom</label>
                            <input type="text" name="nom" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom">prenom</label>
                            <input type="text" name="prenom" class="form-control" required>
                        </div>
                        <div class="mb-3">
                         <label for="email">email:</label>
                        <input type="email" placeholder="veuillez saisir votre email" name="email"><br><br>
                        </div>
                         <div class="mb-3">
                        <label for="mot_de_passe">MOT DE PASSE:</label>
                        <input type="password" placeholder="veuillez saisir votre mot de passe" name="mot_de_passe" required><br><br>
                        </div>
                        <div class="mb-3">
                           <button type="submit" name="admin" class="btn btn-primary">SOUSMETTRE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>