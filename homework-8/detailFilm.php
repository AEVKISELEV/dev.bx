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
require_once "./lib/dataBase/data-base-config.php";
require_once "./lib/dataBase/data-base-functions.php";


$dataBase = getDataBase();
$genres = getGenres($dataBase);

$aboutGET =$_GET['about'];
$movieNew = [];
foreach($movies as $movie){
	if (($_GET !== []) && isset($_GET['about']) && ((int)($_GET['about']) === $movie['id'])){
		$movieNew=$movie;
	}
}


$movieListPage = renderTemplate("./resources/pages/_about-movie.php", [
	'movieNew' => $movieNew,
	'genres' => $genres
]);

renderLayout($movieListPage, [
	'config' => $config,
	'currentPage' => basename($_SERVER['REQUEST_URI']),
	'genres' => $genres
]);

