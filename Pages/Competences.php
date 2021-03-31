<?php 
	$Query = $pdo->query("SELECT * FROM Article WHERE `Article`.`PageId` = 2")->fetchAll(\PDO::FETCH_ASSOC);
	$index = 1;
?>
<main class='container-fluid'>
	<section class='row d-flex justify-content-center my-5'>
		<article class='col-lg-4 col-md-8 col-sm-12 text-center p-5 border border-dark rounded-pill bgcolor3'>
			<h3>Mes Compétences</h3>
		</article>
	</section>
	<article class='col-md-8 col-sm-12 text-center p-5 border border-dark rounded-pill bgcolor3 offset-md-2'>
		<p class='fs-4'>
			Cette page va aller plus en détails sur mes compétences avec comment je l'ai obtenue ceux-ci et ceux que je maîtrise dans ceux-ci.
		</p>
	</article>
</section>
<!-- exemple compétences 1 -->
<?php 
	foreach ($Query as $key) {
		if ($index == 1) {
			echo "
			<section class='row container-fluid my-5'>
			<article class='col-lg-3 col-md-6 col-sm-12 border border-dark rounded bgcolor3'>
				<img src='".$key['imagelink']."' alt='Image qui décrit l'article' class='imageArticle'>
			</article>
			<article class='col-lg-3 col-md-6 col-sm-12 border border-dark rounded bgcolor3'>
			<h3>".$key['nom']."</h3>
			<p>".$key['Article']."</p>
			</article>
		</section>";
		$index = $index + 3;
		}
		if ($index == 2) {
			echo "
			<section class='row container-fluid my-5'>
			<article class='col-lg-3 col-md-6 col-sm-12 border border-dark rounded bgcolor3 offset-lg-6'>
				<img src='".$key['imagelink']."' alt='Image qui décrit l'article' class='imageArticle'>
			</article>
			<article class='col-lg-3 col-md-6 col-sm-12 border border-dark rounded bgcolor3'>
			<h3>".$key['nom']."</h3>
			<p>".$key['Article']."</p>
			</article>
		</section>";
		$index = $index + 3;
		}
		if ($index == 3) {
			echo "
			<section class='row container-fluid my-5'>
			<article class='col-lg-3 col-md-6 col-sm-12 border border-dark rounded bgcolor3 offset-lg-3'>
				<img src='".$key['imagelink']."' alt='Image qui décrit l'article' class='imageArticle'>
			</article>
			<article class='col-lg-3 col-md-6 col-sm-12 border border-dark rounded bgcolor3'>
				<h3>".$key['nom']."</h3>
				<p>".$key['Article']."</p>
			</article>
    </section>";
		$index = $index + 3;
		}
		$index = $index-2;
		if ($index == 4) {
			$index = $index - 3;
		}
	}
?>
	</main>
	<section class='row d-flex justify-content-center my-5'>