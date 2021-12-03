<?php

function getGenres(mysqli $database)
{

	$query = "select ID, CODE, NAME from genre";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
	trigger_error($database->error, E_USER_ERROR);
	}

	return mysqli_fetch_all($result, MYSQLI_ASSOC);

}

function getMovies(mysqli $database, array $genres, string $nameGenre=null, string $search = null):array
{
	if(!$nameGenre)
	{
		$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION,
       m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING,d.NAME,
	  (SELECT GROUP_CONCAT(mg.GENRE_ID) 
	  FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as 'genres',
	   (SELECT GROUP_CONCAT(ma.ACTOR_ID)
	   FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as 'ACTORS'
		FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID";
	}

	else
	{
		$nameGenre = mysqli_real_escape_string($database, $nameGenre);
		$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION,
       m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING,d.NAME,
	  (SELECT GROUP_CONCAT(mg.GENRE_ID) FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as 'genres',
	   (SELECT GROUP_CONCAT(ma.ACTOR_ID) FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as 'ACTORS'
		FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID
		INNER JOIN movie_genre mg2 on mg2.MOVIE_ID = m.ID
		INNER JOIN genre g on mg2.GENRE_ID = g.ID
		WHERE g.CODE LIKE '{$nameGenre}'";
	}
	if ($search)
	   {
		   $search = mysqli_real_escape_string($database, $search);
			$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION,
		   m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING,d.NAME,
		   (SELECT GROUP_CONCAT(mg.GENRE_ID) FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as 'genres',
		   (SELECT GROUP_CONCAT(ma.ACTOR_ID) FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as 'ACTORS'
			FROM movie m
			 INNER JOIN director d on m.DIRECTOR_ID = d.ID
			WHERE ((m.TITLE  LIKE '{$search}%') OR (m.TITLE  REGEXP '{$search}')) OR ((m.ORIGINAL_TITLE  LIKE '{$search}%') OR (m.ORIGINAL_TITLE  REGEXP '{$search}'))";
		}





	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}

	$arrayMovie = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return getMovieWithGenres($arrayMovie, $genres);


}

function getMovieByID(mysqli $database, string $ID)
{
	$query = "SELECT m.ID, m.TITLE, m.ORIGINAL_TITLE, m.DESCRIPTION,
       m.DURATION, m.AGE_RESTRICTION, m.RELEASE_DATE, m.RATING,d.NAME,
	  (SELECT GROUP_CONCAT(mg.GENRE_ID) 
	  FROM movie_genre mg WHERE mg.MOVIE_ID = m.ID) as 'genres',
	   (SELECT GROUP_CONCAT(ma.ACTOR_ID)
	   FROM movie_actor ma WHERE ma.MOVIE_ID = m.ID) as 'ACTORS'
		FROM movie m
		INNER JOIN director d on m.DIRECTOR_ID = d.ID
		WHERE m.ID LIKE '{$ID}'";

	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}
	$arrayMovie = mysqli_fetch_all($result, MYSQLI_ASSOC);
	$arrayActor = getActor($database);


	return getMoviesWithActor($arrayMovie,$arrayActor);
}


function getMovieWithGenres(array $movies, array $genres):array
{
	foreach ($movies as $index => $movie)
	{
		$newArrayGenres = [];
		$arrayGenres= explode(',', $movie['genres']);
		foreach ($genres as $genre)
		{
			if(in_array($genre["ID"], $arrayGenres))
			{
				$newArrayGenres[]= $genre['NAME'];
			}
		}
		$movies[$index]["genres"]=$newArrayGenres;
	}
	return $movies;
}

function getActor(mysqli $database):array
{
	$query = "SELECT ID, NAME FROM actor";
	$result = mysqli_query($database, $query);

	if (!$result)
	{
		trigger_error($database->error, E_USER_ERROR);
	}
	return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

function getMoviesWithActor(array $movies, array $arrayActor):array
{
	foreach ($movies as $index => $movie)
	{
		$array= explode(',', $movie['ACTORS']);
		$newArrayActors = [];
		foreach ($arrayActor as $actor)
		{
			if(in_array($actor["ID"], $array))
			{
				$newArrayActors[]= $actor;
			}
		}
		$movies[$index]['ACTORS']=$newArrayActors;
	}
	return $movies;
}
