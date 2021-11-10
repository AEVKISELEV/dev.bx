<?php
declare(strict_types=1);
error_reporting(-1);
/** @var array $config */
/** @var array $genres */
/** @var array $movies */
require_once "./config/app.php";
require_once "./data/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";

$MovieListPage = renderTemplate("./resources/pages/movie-home.php", [
	'movies' => $movies,
	'genres' => $genres
]);

renderLayout($MovieListPage, [
	'config' => $config,
	'currentPage' => basename($_SERVER['REQUEST_URI']),
	'genres' => $genres
]);

