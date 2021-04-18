<?php
    $Query = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 4")->fetchAll(\PDO::FETCH_ASSOC);
    echo "
    <article class='col-sm-12 col-lg-4 offset-lg-4'>
    <h1>Ceci est un test d'API</h1>
    </article>
    <article class='d-flex col-sm-12 col-lg-10 offset-lg-1 justify-content-evenly'>
        <div class='w-100 border border-white'>
            <h3>Placeholder d'image</h3>
        </div>
        <div class='border border-white'>
            <h3>Placeholder text <br>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores, vero! Deserunt, earum voluptatum? Beatae veniam vitae repellendus. Repellat voluptates rerum mollitia aperiam voluptas totam sint, quaerat eum ad dolorem! Itaque.</h3>
        </div>
    </article>    
    ";