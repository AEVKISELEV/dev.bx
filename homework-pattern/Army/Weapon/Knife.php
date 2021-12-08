<?php

namespace Army\Weapon;

class Knife implements Weapon
{
	public function damage():int
	{
		return 10;
	}
	public function efficiency():float
	{
		return (rand(95,105)/100);
	}
}