<?php
$config = [
	'title' => "BITFLIX",
	'charset' => "UTF-8",
	'language' => "ru",
	'menu' => [
		'index' => 'Главная',
		'important' =>'Избранное']
];
function getDataBaseConfig (string $iniName='db_config.ini'):void
{
	$iniArray = parse_ini_file($iniName);
	define('DB_HOST', $iniArray['db_host']);
	define('DB_USERNAME', $iniArray['db_userName']);
	define('DB_PASSWORD', $iniArray['db_password']);
	define('DB_NAME', $iniArray['db_name']);
}