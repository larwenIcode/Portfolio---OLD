<main class="container-fluid">
    <section class="row" id="diaporama">
        
    </section>    
    <section class="row justify-content-center">
    <!-- Controlleur du contenu -->
    <article class="col-sm-12 col-lg-4 d-flex justify-content-center">
        <button class="btn btn-success" id="play">
            <i class="bi bi-play-fill"></i>
        </button>
        <button class="btn btn-danger" id="pause">
            <i class="bi bi-pause-fill"></i>
        </button>
    </article>
    <!-- Fin du controlleur du contenu -->
    </section>
</main>
<!-- Fetch les données de mon api en asynchrone -->
<script>
    let reprendre = document.getElementById("play");
    let arret = document.getElementById("pause");
    fetch("api.php?page=contentInterets")
        .then (
            (Response) => Response.text()
        )
        .then (
            (datas) => {
                let content = document.getElementById("diaporama");
                content.innerHTML = datas;
            }
        )
    // Fonction qui relance le diapo    
    const play = () => {
        console.log("la fonction play marche")
    }
    // Fonction qui arrete la diapo
    const pause = () => {
        console.log("la fonction pause marche")
    }
    reprendre.addEventListener("click",play);
    arret.addEventListener("click",pause);    
</script>