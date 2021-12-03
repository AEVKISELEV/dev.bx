<?php
// declare(strict_types=1);
// error_reporting(-1);
/** @var array $config */
/** @var array $genres */
/** @var array $movies */
require_once "./config/app.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";
require_once "./lib/dataBase/data-base-config.php";
require_once "./lib/dataBase/data-base-functions.php";

$dataBase = getDataBase();
$genres = getGenres($dataBase);

$genresGET = $_GET['genres'];
$searchGET = $_GET['s'];

$movies = getMovies($dataBase, $genres, $genresGET, $searchGET);






$movieListPage = renderTemplate("./resources/pages/movie-home.php", [
	// 'inSearch' => $inSearch,
	'movies' => $movies
]);

renderLayout($movieListPage, [
	'config' => $config,
	'currentPage' => basename($_SERVER['REQUEST_URI']),
	'genres' => $genres
]);

