<?php

namespace Army\Rome;

use Army\Weapon\Knife;

class RomeWeaponKnife extends Knife
{
	public function damage(): int
	{
		return parent::damage() + 3;
	}
}