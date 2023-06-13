<?php
session_start();
include('dbcon.php');

if(isset($_POST['delete'])){
$student_id= $_POST['delete'];
try{
$query = "DELETE FROM student WHERE id=:stud_id";
$statement = $cnp->prepare($query);
$data= [
    ':stud_id'=>$student_id
];
$query_run = $statement->execute($data);
if($query_run){
    $_SESSION['message']= "supprimer avec succes";
    header('location: index.php');
    exit(0);
} 
else {
    $_SESSION['message']= "echec";
    header('location: index.php');
    exit(0);
}
}
catch(PDOException $a){
    echo "Erreur de connection: " . $a->getMessage();
    }
}


if(isset($_POST['mise_a_jour'])){
    $student_id = $_POST['student_id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $bday = $_POST['bday'];
    $skill = $_POST['skill'];

    try{
        $query="UPDATE student SET nom=:nom, prenom=:prenom, ville=:ville, bday=:bday, skill=:skill WHERE id=:stud_id LIMIT 1";
    $statement = $cnp->prepare($query);
    $data= [
        ':nom'=>$nom,
        ':prenom'=>$prenom,
        ':ville' =>$ville,
        ':bday' =>$bday,
        ':skill' =>$skill,
        ':stud_id'=>$student_id
    ];
    $query_run = $statement->execute($data);
    if($query_run){
        $_SESSION['message']= "modification ajouter avec succes";
        header('location: index.php');
        exit(0);
    } 
    else {
        $_SESSION['message']= "Etudiant non ajouter";
        header('location: index.php');
        exit(0);
    }
    }
    catch(PDOException $a){
            echo "Erreur de connection: " . $a->getMessage();
            }
}

if(isset($_POST['sousmettre'])){//si on clicksur le bouton soumettre  alors :

    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $bday = $_POST['bday'];
    $skill = $_POST['skill'];
    

    $sql = "INSERT INTO student( nom, prenom, ville, bday, skill) VALUES (:nom , :prenom, :ville, :bday, :skill)";
    $sql_run = $cnp->prepare($sql);
    $data = [
        ':nom' =>$nom,
        ':prenom' =>$prenom,
        ':ville' =>$ville,
        ':bday' =>$bday,
        ':skill' =>$skill,
        
    ];
    $sql_go = $sql_run->execute($data);
    if($sql_go){
        $_SESSION['message']= "Etudiant ajouter avec succes";
        header('location: index.php');
        exit(0);
    } 
    else {
        $_SESSION['message']= "Etudiant non ajouter";
        header('location: index.php');
        exit(0);
    }
}

?>