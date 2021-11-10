<?php
/** @var array $movies */

?>
<div class="wrapper_detailmovie">
	<?php
	foreach ($movies as $movie): ?>
		<?php
		if (($_GET !== []) && isset($_GET['about']) && ((int)($_GET['about']) === $movie['id'])): ?>
			<div class="about_film_card">
				<div class="about-film-title"><?= $movie['title'] ?></div>
				<div class="wrapper-about-film-subtitle">
					<div class="about-film-subtitle"><?= $movie['original-title'] ?></div>
					<div class="age-subtitle"><?= $movie['age-restriction'] . "+" ?></div>
				</div>
				<div class="about-film-hr"></div>
				<div class="big-wrapper-about-film">
					<div class="wrapper-img-about-film">
						<img class="img-about-film" alt="movie" src="resources/img/<?= $movie['id'] ?>.jpg">
					</div>
					<div class="wrapper-data-about-film">
						<div class="wrapper-about-film-rating">
							<?php for ($i = 1; $i <= 10; $i++): ?>
								<?= movieRectangleRating($i, $movie['rating']) ?>
							<?php endfor; ?>
							<div class="rating-ellipse"><?= sprintf('%0.1f', $movie['rating']) ?></div>
						</div>
						<div class="about-film-small-descr-title">О фильме</div>
						<div class="wrapper-about-film-small-descr">
							<ul class="wrapper-about-film-small-descr-subtitle">
								<li class="about-film-small-descr-subtitle-name">Год производства:</li>
								<li class="about-film-small-descr-subtitle-name">Режиссер:</li>
								<li class="about-film-small-descr-subtitle-name">В главных ролях:</li>
							</ul>
							<ul class="wrapper-about-film-small-description">
								<li class="about-film-small-description-full"><?= $movie['release-date'] ?></li>
								<li class="about-film-small-description-full"><?= $movie['director'] ?></li>
								<li class="about-film-small-description-full"><?= implode(", ", $movie['cast']) ?></li>
							</ul>
						</div>
						<div class="about-film-descr-title">Описание</div>
						<div class="about-film-descr"><?= $movie['description'] ?></div>
					</div>
				</div>
				<div class="about-film-heart">
					<img src="./resources/img/icon-with-like.svg" alt="heart">
				</div>
			</div>
		<?php
		endif; ?>
	<?php
	endforeach; ?>
</div>
