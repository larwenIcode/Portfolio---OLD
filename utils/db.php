<?php
// Cette partie est à customiser
$server = "localhost";
$db = "Portfolio";
$user = "admin";
$passwd = "admin";
// Fin de la partie customisable

// Cette partie est générique à l'ensemble de vos projets utilisant une base de données.
$dsn = "mysql:host=$server;dbname=$db";
$pdo = new PDO($dsn, $user, $passwd);

?>