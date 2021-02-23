<?php 
session_start();
include('utils/db.php');
include("Common/head.php");
include("Common/navbar.php");
$whitelist = array("Main","interets","experiences","CV","Contact","Competences");
if (isset($_SESSION['user'])) {
    array_push($whitelist, "Admin");
}
if (isset($_GET['page']) && in_array($_GET['page'], $whitelist)) {
    include("Pages/" . $_GET['page'] . ".php");
} else {
    include("Pages/Main.php");
}
include("Common/footer.php");
?>