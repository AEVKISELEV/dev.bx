<?php
 /** @var array $movies */
/** @var array $genres */
?>
	<div class="wrapper_movie">
		<?php foreach ($movies as $movie): ?>
		<?php if ((in_array($genres[$_GET['genres']], $movie['genres'])) || ($_GET===[])): ?>
		<?= renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]); ?>
		<?php endif; ?>
			<?php if (($_GET !== []) && ($_GET['s'] !== NULL)): ?>
				<?php if (is_string(mb_stristr($movie['title'], $_GET['s'])) || is_string(mb_stristr($movie['original-title'], $_GET['s']))): ?>
					<?= renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]); ?>
				<?php endif; ?>
			<?php endif; ?>
			<?php if (($_GET !== []) && ((int)($_GET['about']) === $movie['id'])): ?>
				<?= renderTemplate("./resources/blocks/_about-movie.php", ['movie' => $movie]); ?>
			<?php endif; ?>
		<?php endforeach;?>
		<?php if (($_GET['input']==='true') || ($_GET['important']==='true')): ?>
			<?= renderTemplate("./resources/blocks/_error-block.php"); ?>
		<?php endif; ?>
	</div>