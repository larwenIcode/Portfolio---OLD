<?php 
$Query = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 1 AND `Article`.`id` <= 4")->fetchAll(\PDO::FETCH_ASSOC);
$Query2 = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 1 AND `Article`.`id` > 4")->fetchAll(\PDO::FETCH_ASSOC);
?>
<main class="container-fluid">
  <section class="row d-flex justify-content-center">
    <div class="card col-md-11 col-sm-12">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Bienvenue sur mon CV</h5>
        <p class="card-text">Bienvenue sur la page de mon CV.
        Ici vous trouveriez différentes une petite Présentation de mes différentes compétences que je souligne.</p>
      </div>
    </div>
  </section>
  <section class="row d-flex justify-content-evenly my-5">
  <?php
  foreach ($Query as $key) {
    if (isset($key['imagelink'])) {
      $link=$key['imagelink'];
    } else {
      $link='';
    }
    
  echo "<div class='card col-md-3 col-sm-12'>
    <img src='".$link."' class='card-img-top' alt='Image qui décrit la card'>
      <div class='card-body'>
        <h5 class='card-title'>".$key['nom']."</h5>
        <p class='card-text'>".$key['Article']."</p>
        <a href='#' class='btn btn-primary'>Aller vers la page</a>
      </div>
    </div>";
  }
  ?>    
    </section>
    <section class="row d-flex justify-content-evenly my-5">
    <?php
  foreach ($Query2 as $key) {
    if (isset($key['imagelink'])) {
      $link=$key['imagelink'];
    } else {
      $link='';
    }
    
  echo "<div class='card col-md-3 col-sm-12'>
    <img src='".$link."' class='card-img-top' alt='Image qui décrit la card'>
      <div class='card-body'>
        <h5 class='card-title'>".$key['nom']."</h5>
        <p class='card-text'>".$key['Article']."</p>
        <a href='#' class='btn btn-primary'>Aller vers la page</a>
      </div>
    </div>";
  }
  ?>   
    </section>
  </main>
</div>