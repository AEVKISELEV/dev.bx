<?php

namespace Army\Rome;

use Army\Weapon\Khife;

class RomeWeaponKnife extends Knife
{
	public function damage(): int
	{
		return parent::damage() + 3;
	}
}