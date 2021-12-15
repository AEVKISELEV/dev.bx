<?php

namespace Helper;

class Subscriber
{
	public static function onUserAdd($data)
	{
		echo $data->getId() . PHP_EOL;
	}
	public static function onUserUpdate($data)
	{
		echo $data->getName() . PHP_EOL;
	}
	public static function onUserLogging($data)
	{
		echo 'Пользователь '.$data->getName().' '.$data->getSecondName().' прошёл регистрацию.'. PHP_EOL;
	}
}