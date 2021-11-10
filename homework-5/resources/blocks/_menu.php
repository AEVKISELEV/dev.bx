<?php
/** @var array $config */
/** @var array $genres */
/** @var array $currentPage */
?>
<ul class="menu">
	<li class="menu-item <?= $currentPage === "index.php" ? "menu-item__active" : "" ?>">
		<a href="<?= "index.php" ?>"><?= $config['menu']['index']?></a>
	</li>
	<?php foreach ($genres as $code => $name): ?>
		<li class="menu-item <?= $currentPage === "index.php"."?genres=$code" ? "menu-item__active" : "" ?>">
			<a href="<?= "index.php"."?genres=$code" ?>"><?= $name ?></a>
		</li>
	<?php endforeach;?>
	<li class="menu-item <?= $currentPage === "favorites.php" ? "menu-item__active" : "" ?>">
		<a href="<?= "favorites.php" ?>"><?= $config['menu']['important'] ?></a>
	</li>
</ul>