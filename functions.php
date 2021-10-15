<?php

function checkInputAge($age):bool
{
	return ($age>=0) && ($age<120) && (is_numeric($age));
}

function resultSortAge(int $age, array $movies):void
{
	$number = 0;
	foreach ($movies as $movie)
	{
		if($age >= $movie["age_restriction"])
		{
			$number++;
			echo "{$number}.". formatMovie($movie) . "\n";
		}
	}
}

function formatMovie(array $movie): string
{
	return "{$movie['title']} ({$movie['release_year']}), {$movie['age_restriction']}+. Rating - {$movie['rating']}";
}