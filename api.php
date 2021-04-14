<?php
header("content-type: application/json");

include('utils/db.php');
// API autorisées (configuration à sortir dans un autre fichier PHP)
$whitelist = array('contentInterets');

// Gestion de l'affichage de l'API demandée
if(isset($_GET['page']) && in_array($_GET['page'], $whitelist)) {
  include("api/" . $_GET['page'] . '.php');
} else {
    header('HTTP/1.1 401 Unauthorized');
}

?>