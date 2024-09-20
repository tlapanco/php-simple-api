<main>
	<header>
		<h1>Siguiente película del UCM</h1>
	</header>
  <section>
    <img src="<?= $poster_url; ?>" width="200" alt="Poster de <?= $title ?>" style="border-radius: 16px" />
  </section>

  <hgroup>
    <h3><?= $title ?> - <?= $until_message; ?></h3>
    <p>Fecha de estreno: <?= $release_date; ?></p>
    <p>Siguiente película: <?= $following_production; ?></p>    
  </hgroup>
</main>