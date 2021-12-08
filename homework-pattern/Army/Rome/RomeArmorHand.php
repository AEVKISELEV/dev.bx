<?php

namespace Army\Rome;

use Army\Armor\handArmor;

class RomeArmorHand extends handArmor
{
	public function protection(): int
	{
		return parent::protection() - 2;
	}
}