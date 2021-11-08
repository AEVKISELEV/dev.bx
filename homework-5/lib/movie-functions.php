<?php
function convertToHoursMins(int $time, string $format = '%02d:%02d')
{
	if ($time < 1) {
		return;
	}
	$hours = floor($time / 60);
	$minutes = ($time % 60);
	return sprintf($format, $hours, $minutes);
}
function formatTitle(string $title):string
{
	if(strlen($title)>45){
		return mb_substr($title, 0, 24). "..";
	}
	return $title;
}

function formatDescription(string $descr):string
{
	if(strlen($descr)>220)
	{
		return mb_substr($descr, 0, 220). "...";
	}
	return $descr;
}

function formatGenres(array $genre):string
{
	$genre_string = implode(",", $genre);
	if(strlen($genre_string)>55){
		return mb_substr($genre_string, 0, 24). "..";
	}
	return $genre_string;
}