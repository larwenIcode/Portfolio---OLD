<?php
// test si des données ont été entrer
if (isset($_POST['Pseudo']) && isset($_POST['MDP'])) {
    // on met les données du  post dans des variables
    $requetePseudo = $_POST['Pseudo'];
    $requeteMDP = $_POST['MDP'] . '-Secret';
    // préparation et éxecution de la requète SQL
    $stmt = $pdo->prepare("SELECT * FROM Administration WHERE Pseudo = ? AND Motdepasse = SHA2(?, 512)");
    $stmt -> execute([$requetePseudo,$requeteMDP]);
    $user = $stmt->fetchAll(\PDO::FETCH_ASSOC);
    // La personne existe en base de données (nous allons donc la connecter)
    if (count($user) == 1) {
        // Réussite de la connexion, on sauvegarde dans la SESSION les informations.
        $_SESSION['user'] = $user[0];
        $_SESSION['pseudo'] = $requetePseudo;
        $_SESSION['MDP'] = $requeteMDP;
        header("location: Admin.html");
        die();
    } else {
        $_SESSION['pseudo'] = $requetePseudo;
        $_SESSION['MDP'] = $requeteMDP;
        header("location: Login.html?id=error");
    }
}
include("Common/head.php");
include('Common/sidebar.php');
?>
<main class="container-fluid">
<!-- div des Erreurs et du logout-->
<section class="row">
<?php
if ($_GET['id'] == 'error') {
    echo "
    <article class='col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3 d-flex justify-content-center'>
    <div class='BDR'>
    <h3>Attention</h3>
    <p>Vous Avez inserer le mauvais Mot de Passe ou Pseudo</p>
    </div>
    </article>"
    ;}
    ?>
    </section>
    <section class="row">
    <article class="col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3 d-flex justify-content-center">
    <form action="Login.html" method="post" class="BDR">
    <fieldset>
    <legend>Login</legend>
    <div>
    <label for="Pseudo">Pseudo :</label>
    </div>
    <div>
    <input type="text" name="Pseudo" id="Pseudo">
    </div>
    <br>
    <div>
    <label for="MDP">Mot de Passe :</label>
    </div>
    <div>
    <input type="password" name="MDP" id="MDP">
    </div>
    <br>
    <div class="d-flex justify-content-center">
    <button type="submit" class="btn btn-success">Envoyer</button>
    </div>
    </fieldset>
    </form>
    </article>
    </section>
    </main>