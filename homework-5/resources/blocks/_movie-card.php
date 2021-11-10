<?php
/** @var array $movie */
?>

<div class="movie_card">
	<div class="movie_card_active">
		<a style="text-decoration: none;" href="<?= "detailFilm.php" . "?about={$movie['id']}" ?>">
			<button class="active_button">подробнее</button>
		</a>
	</div>
	<img src="resources/img/<?= $movie['id'] ?>.jpg" alt="movie" class="movie_img">
	<div class="movie_text">
		<div class="movie_title"><?= formatTitle($movie['title']) ?></div>
		<div class="movie_subtitle"><?= $movie['original-title'] ?></div>
		<div class="movie_hr"></div>
		<div class="movie_descr"><?= formatDescription($movie['description']) ?></div>
		<div class="movie_wrapper">
			<div class="movie_data">
				<div class="movie_time">
					<img src="icons/time.svg" alt="clock">
					<div class="time_descr"><?= $movie['duration'] ?> мин. / <?= convertToHoursMins($movie['duration']) ?></div>
				</div>
				<div class="movie_genre"><?= formatGenres($movie['genres']) ?></div>
			</div>
		</div>
	</div>
</div>