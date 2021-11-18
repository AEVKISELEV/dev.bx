<?php
/** @var array $movies */
/** @var array $genres */
?>
<div class="wrapper_movie">

<?php $i = false; ?>

	<?php foreach ($movies as $movie): ?>

		<?php if (isset($_GET['genres']) && (in_array($genres[$_GET['genres']], $movie['genres'])) || ($_GET === [])): ?>
			<?= renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]); ?>
		<?php endif; ?>

		<?php if (isset($_GET['s']) && ($_GET['s'] !== '') && searchMovies($movie['title'],$movie['original-title'], $_GET['s'])): ?>
				<?= renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]); ?>
				<?php $i = true; ?>
		<?php endif; ?>

	<?php endforeach; ?>

	<?php if (isset($_GET['s']) && ($_GET['s'] !== '') && ($i === false)): ?>
	<?= renderTemplate("./resources/pages/error-search.php"); ?>
	<?php endif; ?>
</div>


