<main class="container-fluid">
    <section class="row d-flex justify-content-center">
        <article class="border border-dark border-4 rounded col-sm-12 col-md-8 col-lg-4 bgcolor3">
            <form action="#" method="post" class="text-center container-fluid">
                <div class="row">
                <label for="Nom" class="fs-4">Nom :</label>
                <input type="text" name="Nom" id="Nom" required><br>
            </div>
            <div class="row">
                <label for="Prenom" class="fs-4">Prenom :</label>
                <input type="text" name="Prenom" id="Prenom" required><br>
            </div>
            <div class="row">
                <label for="Mail" class="fs-4">Addresse Mail :</label>
                <input type="email" name="Mail" id="Mail" required><br>
            </div>
            <div class="row">
                <label for="Obj" class="fs-4">Objet :</label>
                <input type="text" name="Obj" id="Obj" required><br>
            </div>
            <div class="row">
                <label for="Msg" class="fs-4">Message :</label><br>
                <textarea name="Msg" id="Msg" cols="62" rows="10" required></textarea><br>
            </div>
                <button type="submit" class="btn btn-success">Envoyer</button>
                <button type="reset" class="btn btn-danger">Reinitialiser</button>
            </form>
        </article>
    </section>
</main>