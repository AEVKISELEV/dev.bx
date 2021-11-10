<?php
/** @var array $config */
/** @var array $menu */
/** @var array $content */
?>
<!DOCTYPE html>
<html lang="<?= $config['language'] ?>">
<head>
	<meta charset="<?= $config['charset'] ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $config['title'] ?></title>
	<link rel="stylesheet" href="resources/css/reset.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>

<div class="wrapper">
	<header>
		<h1 class="logo_h1">
			<?= $config['title'] ?>
		</h1>
		<nav>
			<ul class="menu">
				<li class="menu-item <?= $currentPage === "index.php" ? "menu-item__active" : "" ?>">
					<a href="<?= "index.php" ?>"><?= $config['menu']['index']?></a>
				</li>
				<?php foreach ($genres as $code => $name): ?>
					<li class="menu-item <?= $currentPage === "index.php"."?genres=$code" ? "menu-item__active" : "" ?>">
						<a href="<?= "index.php"."?genres=$code" ?>"><?= $name ?></a>
					</li>
				<?php endforeach;?>
				<li class="menu-item <?= $currentPage === "index.php"."?important=true" ? "menu-item__active" : "" ?>">
					<a href="<?= "index.php"."?important=true" ?>"><?= $config['menu']['important'] ?></a>
				</li>

			</ul>
		</nav>
	</header>
	<div class="container">
		<div class="header">
			<div class="header_wapper">
				<form class="form_search" action="" method="get">
					<div class="input_container">
						<img src="icons/search.svg" alt="search">
						<input name="s" placeholder="Поиск по каталогу..." type="search">
					</div>
					<button type="submit">Искать</button>
				</form>
				<a href="<?= "index.php"."?input=true" ?>"><button class="header_button">Добавить фильм</button></a>
			</div>
		</div>
		<div class="content"><?= $content ?></div>>
	</div>
</div>

</body>
</html>