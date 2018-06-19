<?php
//---------------
// Ce fichier qui contient différentes fonctions pour récupérer des informations dans la base.
//---------------

require('connect.php');

function getStudents()
{
    // 1- Requête de selection des étudiants
    $req = "SELECT * FROM students";
    $result = mysqli_query(dbConnect(), $req);
    while($row = mysqli_fetch_assoc($result)){
        $students[] = $row;
    }
    return $students;
}

/**
 * Fonction qui permet de vérifier qui les paramètres d'authentification existe.
 * @var string
 * @var string
 */
function checkAuth($login, $password) {
    // 1- Requête de selection de l'étudiant qui souhaite se connecter en fonction 
    // de son login et de son mot de passe.

    var_dump($login);
    var_dump($password);
    $req = sprintf("SELECT * FROM students WHERE login = '%s' AND password = '%s'", $login, $password);
    $result = mysqli_query(dbConnect(), $req);
    $row = mysqli_num_rows($result);
    
    if($row == 1) {
        $auth = TRUE;
    } else {
        $auth = FALSE;
    }
    return $auth;

}

/**
 * Fonction qui permet d'obtenir le lien de connexion à la base de données
 * 
 */
function dbConnect()
{
    $link = mysqli_connect("127.0.0.1", "root", "password", "db_students");

    /* Vérification de la connexion */ 
    if (!$link) {
    printf("Echec de la connexion : %s\n", mysqli_connect_error());
    exit();
    }

    return $link;
}