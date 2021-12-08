<?php

namespace Army\Barbarian;

use Army\Weapon\Knife;

class BarbarianWeaponKnife extends Knife
{
	public function damage(): int
	{
		return parent::damage() + 3;
	}
}