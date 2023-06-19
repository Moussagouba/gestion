<?php session_start();
 include('dbcon.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>student gestion</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-4">
            <?php
            if(isset($_SESSION['message'])): ?>
            <h5 class="alert alert-success"><?= $_SESSION['message']; ?></h5>
            <?php
            unset($_SESSION['message']);
            endif;
            ?>
            <div class="card">
                <div class="card-header">
                    <h3>GESTION DES ELEMENTS
                        <a href="add_student.php" class="btn btn-success float-end">AJOUTER DES ETUDIANTS</a>
                    </h3>
                    <div class="cars-body">
                        <table class="table table-bordered table-striped">
                            <thead class="bg-dark text-light">
                                <tr>
                                    <th>ID</th>
                                    <th>NOM</th>
                                    <th>PRENOM</th>
                                    <th>VILLE</th>
                                    <th>DATE DE NAISSANCE</th>
                                    <th>FORMATION DE BASE</th>
                                    <th>MODIFIER</th>
                                    <th>SUPPRIMER</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                $query = "SELECT * FROM student";
                                $statement= $cnp->prepare($query);
                                $statement->execute();

                                $resultat = $statement->fetchAll(PDO::FETCH_OBJ);
                                if($resultat){
                                    foreach($resultat as $row){
                                        ?>
                                         <tr>
                                             <td><?= $row->id;?> </td>
                                             <td><?= $row->nom;?> </td>
                                             <td><?= $row->prenom;?> </td>
                                             <td><?= $row->ville;?> </td>
                                             <td><?= $row->bday;?> </td>
                                             <td><?= $row->skill;?> </td>
                                             <td>
                                                <a href="modif.php?id=<?= $row->id;?>" class="btn btn-primary">EDITER</a>
                                             </td>
                                             <td>
                                                <form action="ajout.php" method="post">
                                                    <button type="submit" name="delete" value="<?= $row->id;?> " class="btn btn-danger">SUPRIMER</button>
                                                </form>
                                             </td>
                                       </tr>
                                        <?php
                                    }
                                }
                                else{
                                    ?>
                                <tr>
                                    <td colspan="5">aucun resultat trouver</td>
                                </tr> 
                                <?php
                                }
                                ?>
                                <tr>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>