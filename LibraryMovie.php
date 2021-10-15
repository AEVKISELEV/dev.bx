<?php

require "functions.php";
require "movies.php";

echo "Welcome to movie list!\n";
$age = readline("Enter age: ");

if(CheckInputAge($age))
	{
		ResultSortAge((int)$age, $movies);
	}
else
	{
		echo "Wrong age!";
	}
