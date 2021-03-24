<?php 
session_start();
include('utils/db.php');
if ($_GET['page'] != 'Login') {
    include("Common/sidebar.php");
    include("Common/head.php");
}
$whitelist = array("Main","interets","experiences","CV","Contact","Competences","Login","Logout");
if (isset($_SESSION['user'])) {
    array_push($whitelist, "Admin");
}
if (isset($_GET['page']) && in_array($_GET['page'], $whitelist)) {
    include("Pages/" . $_GET['page'] . ".php");
} else {
    include("Pages/Main.php");
}
?>
</div>
</div>
<?php
include("Common/footer.php");
?>