<?php

getDataBaseConfig();

function getDataBase(string $host = DB_HOST, string $userName = DB_USERNAME,
					 string $password = DB_PASSWORD, string $nameDB = DB_NAME):mysqli
{
	$database = mysqli_init();
	$connectionResult = mysqli_real_connect(
		$database,
		$host,
		$userName,
		$password,
		$nameDB
	);

	if(!$connectionResult)
	{
		$error = mysqli_connect_errno() . ": ". mysqli_connect_error();
		trigger_error($error, E_USER_ERROR);
	}

	$result = mysqli_set_charset($database, 'utf8');

	if(!$result)
	{
		trigger_error(mysqli_error($database), E_USER_ERROR);
	}

	return $database;
}
