<?php
declare(strict_types=1);
/** @var array $config */
/** @var array $genres */
/** @var array $movies */
require_once "./config/app.php";
require_once "./data/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";
// var_dump($_GET);
$MovieListPage = renderTemplate("./resources/pages/movie-home.php", [
	'movies' => $movies,
	'genres' => $genres
]);

renderLayout($MovieListPage, [
	'config' => $config,
	'currentPage' => basename($_SERVER['REQUEST_URI']),
	'genres' => $genres
]);


echo $layout;
?>
