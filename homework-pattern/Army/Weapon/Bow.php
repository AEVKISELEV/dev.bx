<?php

namespace Army\Weapon;

class Bow implements Weapon
{
	public function damage():int
	{
		return 15;
	}
	public function efficiency():float
	{
		return (rand(90,110)/100);
	}
}