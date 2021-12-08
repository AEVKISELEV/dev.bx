<?php

namespace Army\Rome;

use Army\Weapon\Bow;

class RomeWeaponBow extends Bow
{
	public function damage(): int
	{
		return parent::damage() + 5;
	}
}