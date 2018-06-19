<?php
$link = mysqli_connect("127.0.0.1", "root", "password", "db_students");

/* Vérification de la connexion */ 
if (!$link) {
    printf("Echec de la connexion : %s\n", mysqli_connect_error());
    exit();
}

//printf("Information sur le serveur : %s\n", mysqli_get_host_info($link));

/* Fermeture de la connexion */
//mysqli_close($link);