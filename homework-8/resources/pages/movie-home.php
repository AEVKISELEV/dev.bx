<?php
/** @var array $movieFilter */
/** @var string $pathCard */
?>
<div class="wrapper_movie">

	<?php foreach ($movies as $movie): ?>
		<?= renderTemplate("./resources/blocks/_movie-card.php", ['movie' => $movie]) ?>
	<?php endforeach; ?>



</div>


