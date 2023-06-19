<?php
 include('dbcon.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>modification dans la base de donnee</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <div class="card">
                <div class="card-header">
                    <h3>modification dans la base de donnee
                        <a href="index.php" class="btn btn-danger float-end">RETOUR</a>
                    </h3>
                </div>
                <div class="card-body">
                    <?php
                        if(isset($_GET['id'])){
                            $student_id = $_GET['id'];
                            $query= "SELECT * FROM student WHERE id=:stud_id LIMIT 1";
                            $statement = $cnp->prepare($query);
                            $data = [ ':stud_id'=> $student_id ];
                            $statement->execute($data);
                            $result =  $statement->fetch(PDO::FETCH_OBJ);
                        }
                    ?>
                    <form action="ajout.php" method="post"> 
                        <input type="hidden" name="student_id" value="<?= $result->id;?>" >
                        <div class="mb-3">
                            <label for="nom">nom</label>
                            <input type="text" name="nom" value="<?= $result->nom;?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="prenom">prenom</label>
                            <input type="text" name="prenom" value="<?= $result->prenom;?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="bday"> veuillez saisir la date de naissance</label>
                            <input type="date" name="bday" value="<?= $result->bday;?>" required pattern="\d{4}-\d{2}-\d{2}">
                            <span class="validity"></span>
                        </div>
                        <div class="mb-3">
                            <label for="ville">ville</label>
                            <input type="text" name="ville" value="<?= $result->ville;?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="skill">formation de base</label>
                            <input type="text" name="skill" value="<?= $result->skill;?>" class="form-control" required>
                        </div>
                        <div class="mb-3">
                           <button type="submit" name="mise_a_jour" class="btn btn-primary">METTRE A JOUR</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>