<?php

require "functions.php";
require "movies.php";

echo "Welcome to movie list!\n";
$age = readline("Enter age: ");

if(checkInputAge($age))
	{
		resultSortAge((int)$age, $movies);
	}
else
	{
		echo "Wrong age!";
	}
