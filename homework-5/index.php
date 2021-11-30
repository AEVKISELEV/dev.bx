<?php
// declare(strict_types=1);
// error_reporting(-1);
/** @var array $config */
/** @var array $genres */
/** @var array $movies */
require_once "./config/app.php";
require_once "./data/movies.php";
require_once "./lib/template-functions.php";
require_once "./lib/movie-functions.php";



$genresGET = $_GET['genres'];
$searchGET = $_GET['s'];
$movieFilter= [];
$inSearch = false;

foreach ($movies as $movie) {
	if (isset($genresGET) && (in_array($genres[$genresGET], $movie['genres'])) || ($_GET === [])){
		$movieFilter[] = $movie;
	}
	if (isset($searchGET) && ($searchGET !== '') && searchMovies($movie['title'],$movie['original-title'], $_GET['s'])){
		$movieFilter[] = $movie;
		$inSearch = true;
	}
}




$movieListPage = renderTemplate("./resources/pages/movie-home.php", [
	'inSearch' => $inSearch,
	'movieFilter' => $movieFilter
]);

renderLayout($movieListPage, [
	'config' => $config,
	'currentPage' => basename($_SERVER['REQUEST_URI']),
	'genres' => $genres
]);

