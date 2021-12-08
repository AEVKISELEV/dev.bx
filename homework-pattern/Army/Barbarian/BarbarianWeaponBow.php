<?php

namespace Army\Barbarian;

use Army\Weapon\Bow;

class BarbarianWeaponBow extends Bow
{
	public function damage(): int
	{
		return parent::damage() + 3;
	}
}