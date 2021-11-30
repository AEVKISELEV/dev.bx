<?php
/** @var array $movieFilter */
/** @var string $pathCard */
?>
<div class="wrapper_movie">

	<?php foreach ($movieFilter as $movie): ?>
		<?= renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]) ?>
	<?php endforeach; ?>
	<?php if (!$inSearch): ?>
		<?= renderTemplate("./resources/pages/error-search.php"); ?>
	<?php endif; ?>


</div>


