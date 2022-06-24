<?php

// fichier indispensable pour le fonctionnement du site


//connexion à la base de données

//1- connexion
$pdoSITE = new PDO(
    'mysql:host=localhost;dbname=parisiens',// driver mysql (pourrait être oracle, IBM, ODBC...) + nom de la BDD
    'root', // pseudo de la BDD
    '', // mdp de la BDD
    array(
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // pour afficher les messages d'erreur SQL
        PDO::MYSQL_ATTR_INIT_COMMAND => 'set NAMES utf8'// définition du jeu de caractère des échanges avec la BDD
    )
);


/// 2- ouverture de la session
session_start();

/// 3- chemin du site avec une constante

/// 4- variable pour les contenus 
$contenu = '';

/// 5- inclusion des fonctions
require_once ('functions.php');




?>