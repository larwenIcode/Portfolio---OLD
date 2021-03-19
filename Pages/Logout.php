<main class="container-fluid">
    <!-- div des Erreurs et du logout-->
    <section class="row">
        <article class="col-sm-12 col-md-8 col-lg-6 offset-md-2 offset-lg-3 d-flex justify-content-center">
            <div class="BDR">
                <h3>Notice</h3>
                <p>Vous êtes maintenant déconectée</p>
            </div>
        </article>
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