<main class="container-fluid">
    <section class="row" id="diaporama">
        
    </section>    
    <section class="row justify-content-center">
    <!-- Controlleur du contenu -->
    <article class="col-sm-12 col-lg-4 d-flex justify-content-center">
        <button class="btn btn-success">
            <i class="bi bi-play-fill"></i>
        </button>
        <button class="btn btn-danger">
            <i class="bi bi-pause-fill"></i>
        </button>
    </article>
    <!-- Fin du controlleur du contenu -->
    </section>
</main>
<!-- Fetch les données de mon api en asynchrone -->
<script>
    fetch("api.php?page=contentInterets")
        .then (
            (Response) => Response.text()
        )
        .then (
            (datas) => {
                
            }
        )
</script>