<?php 
if (isset($_POST['Nom']) && isset($_POST['Desc']) && isset($_POST['PageId'])) {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
    } else {
        $id = NULL;
    }
    if (isset($_POST['Img'])) {
        $img = $_POST['Img'];
    } else {
        $img = NULL;
    }
    $stmt = $pdo->prepare("INSERT INTO `Article` (`UUID`, `id`, `nom`, `Article`, `imagelink`, `PageId`) VALUES (NULL, ?, ?, ?, ?, ?);");
    $stmt->execute([ $id, $_POST['Nom'], $_POST['Desc'], $img, $_POST['PageId'] ]);
}
if (isset($_POST['ArticleId'])) {
    $stmt = $pdo->prepare("DELETE FROM `Article` WHERE `Article`.`id` = ?");
    $stmt->execute([$_POST['ArticleId']]);
}
$Page = $pdo->query("SELECT * FROM Page")->fetchAll(\PDO::FETCH_ASSOC);
$Article = $pdo->query("SELECT * FROM Article")->fetchAll(\PDO::FETCH_ASSOC);
?>
<main class="container-fluid">
    <section class="row justify-content-center">
        <article id="InsertArticle" class="col-4 text-center">
            <form action="Admin.html" method="post">
                <fieldset>
                    <legend>Insertion des Données</legend>
                    <label for="Nom">Nom de l'article</label><br>
                    <input type="text" name="Nom" id="Nom" required><br><br>
                    <label for="Desc">Contenu de l'Article</label><br>
                    <textarea name="Desc" id="Desc" cols="30" rows="10" required>
                    </textarea><br><br>
                    <label for="Img">Image de Description</label><br>
                    <input type="url" name="Img" id="Img"><br>
                    <label for="PageId">Nom de la page ou l'article sera insérer</label><br>
                    <select name="PageId" id="PageId"><br>
                        <?php 
                        foreach ($Page as $key) {
                            echo "<option value='". $key['id'] ."'>". $key['nom'] ."</option>";
                        }
                        ?>
                    </select>
                </fieldset>
                <fieldset>
                    <legend>Envoi et Reset</legend>
                    <button type="submit" class="btn btn-success">Envoi</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </fieldset>
            </form>
        </article>
    </section>
    <section class="row justify-content-center text-center">
        <h2>Gestion des Données</h2>
        <article id="articleDisplay" class="col-8 ">
            <table>
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th class="text-center">Nom</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Lien Image</th>
                        <th class="text-center">ID de la page</th>
                        <th class="text-center">Supprimer L'article</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        foreach($Article as $key) {
                            echo "<tr>
                                <td class='text-center'>". $key['id'] ."</td>
                                <td class='text-center'>". $key['nom'] ."</td>
                                <td class='text-center'>". $key['Article'] ."</td>
                                <td class='text-center'>". $key['imagelink'] ."</td>
                                <td class='text-center'>". $key['PageId'] ."</td>
                                <td>
                                    <form action='Admin.html' method='POST'>
                                        <input type='hidden' name='ArticleId' value='". $key['id'] ."'>
                                        <button type='submit'><i class='bi bi-x'></i>Supprimer</button>
                                    </form>
                                </td>
                            </tr>";
                        }
                    ?>
                </tbody>
            </table>
        </article>
    </section>
</main>