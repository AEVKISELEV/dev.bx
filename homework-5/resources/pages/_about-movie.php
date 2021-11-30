<?php
/** @var array $movieNew */

?>
<div class="wrapper_detailmovie">
			<div class="about_film_card">
				<div class="about-film-title"><?= $movieNew['title'] ?></div>
				<div class="wrapper-about-film-subtitle">
					<div class="about-film-subtitle"><?= $movieNew['original-title'] ?></div>
					<div class="age-subtitle"><?= $movieNew['age-restriction'] . "+" ?></div>
				</div>
				<div class="about-film-hr"></div>
				<div class="big-wrapper-about-film">
					<div class="wrapper-img-about-film">
						<img class="img-about-film" alt="movie" src="resources/img/<?= $movieNew['id'] ?>.jpg">
					</div>
					<div class="wrapper-data-about-film">
						<div class="wrapper-about-film-rating">
							<?php for ($i = 1; $i <= 10; $i++): ?>
								<?= movieRectangleRating($i, $movieNew['rating']) ?>
							<?php endfor; ?>
							<div class="rating-ellipse"><?= sprintf('%0.1f', $movieNew['rating']) ?></div>
						</div>
						<div class="about-film-small-descr-title">О фильме</div>
						<div class="wrapper-about-film-small-descr">
							<ul class="wrapper-about-film-small-descr-subtitle">
								<li class="about-film-small-descr-subtitle-name">Год производства:</li>
								<li class="about-film-small-descr-subtitle-name">Режиссер:</li>
								<li class="about-film-small-descr-subtitle-name">В главных ролях:</li>
							</ul>
							<ul class="wrapper-about-film-small-description">
								<li class="about-film-small-description-full"><?= $movieNew['release-date'] ?></li>
								<li class="about-film-small-description-full"><?= $movieNew['director'] ?></li>
								<li class="about-film-small-description-full"><?= implode(", ", $movieNew['cast']) ?></li>
							</ul>
						</div>
						<div class="about-film-descr-title">Описание</div>
						<div class="about-film-descr"><?= $movieNew['description'] ?></div>
					</div>
				</div>
				<div class="about-film-heart" id="like">

				</div>
				<div class="notify" id="notify">"<?= $movieNew['title'] ?>" добавлен в избранное </div>
			</div>

</div>
<script>
	var likeNode = document.getElementById('like');
	var notifyNode = document.getElementById('notify');

	likeNode.addEventListener('click', function()
	{

		if(!likeNode.classList.contains('about-film-heart-active')){
			likeNode.classList.add('about-film-heart-active');
			notifyNode.classList.add('notify-active');
		}
		else{
			likeNode.classList.remove('about-film-heart-active');
		}


		setTimeout(function()
		{
			notifyNode.classList.remove('notify-active');
		}, 2000)
	});
</script>
