<?php 
  	$Query = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 3")->fetchAll(\PDO::FETCH_ASSOC);
    $index = 0;
?>
<main class="container-fluid">
    <div id="carouselExperiences" class="carousel slide" data-bs-ride="carousel" data-bs-touch="true">
        <div class="carousel-indicators">
          <!-- Début de la Partie dynamique -->
          <?php 
            foreach ($Query as $key) {
              $slide = $index +1;
              if ($index == 0) {
                echo "<button type='button' data-bs-target='#carouselExperiences' data-bs-slide-to='".$index."' class='active' aria-current='true' aria-label='Slide ".$slide."'></button>";
              } else {
                echo "<button type='button' data-bs-target='#carouselExperiences' data-bs-slide-to='".$index."' aria-label='Slide ".$slide."'></button>";
              }
              $index = $index +1;
            }
            $index = 1;
          ?>
        </div>
        <div class="carousel-inner">
        <?php 
          foreach ($Query as $key) {
            if ($index == 1) {
              echo "
              <div class='carousel-item active'>
              <img src='".$key['imagelink']."' class='d-block w-100 img-fluid' alt='image qui décrit L'article du carousel'>
              <div class='carousel-caption d-none d-md-block'>
                <h5>".$key['nom']."</h5>
                <p>".$key['Article']."</p>
              </div>
            </div>
              ";
            } else {
              echo 
              "
              <div class='carousel-item'>
              <img src='".$key['imagelink']."' class='d-block w-100' alt='image qui décrit L'article du carousel'>
              <div class='carousel-caption d-none d-md-block'>
                <h5>".$key['nom']."</h5>
                <p>".$key['Article']."</p>
              </div>
            </div>
              ";
            }
          $index++;  
          }
        ?>
        </div>
        <!-- fin de la partie dynamique-->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExperiences"  data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExperiences"  data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
</main>