<?php
/** @var array $config */
/** @var array $genres */
/** @var array $currentPage */
/** @var array $content */
?>
<!DOCTYPE html>
<html lang="<?= $config['language'] ?>">
<head>
	<meta charset="<?= $config['charset'] ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?= $config['title'] ?></title>
	<link rel="stylesheet" href="./resources/css/reset.css">
	<link rel="stylesheet" href="./resources/css/style.css">
</head>
<body>

<div class="wrapper">
	<header>
		<h1 class="logo_h1">
			<?= $config['title'] ?>
		</h1>
		<nav>
			<?= renderTemplate("./resources/blocks/_menu.php", [
				'genres' => $genres,
				'currentPage' => $currentPage,
				'config' => $config,
			]); ?>
		</nav>
	</header>
	<div class="container">
		<div class="header">
			<div class="header_wapper">
				<form class="form_search" action="index.php" method="get">
					<div class="input_container">
						<img src="./icons/search.svg" alt="search">
						<?php if(isset($_GET['s'])): ?>
						<input name="s" placeholder="<?= strip_tags($_GET['s']) ?>" type="search" required>
						<?php else: ?>
						<?= '<input name="s" placeholder="Поиск по каталогу... " type="search" required>'?>
						<?php endif; ?>
					</div>
					<button type="submit">Искать</button>
				</form>
				<a href="<?= "inputFilm.php" ?>">
					<button class="header_button">Добавить фильм</button>
				</a>
			</div>
		</div>
		<div class="content"><?= $content ?></div>
	</div>
</div>

</body>
</html>