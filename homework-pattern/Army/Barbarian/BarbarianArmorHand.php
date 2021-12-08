<?php

namespace Army\Barbarian;

use Army\Armor\handArmor;

class BarbarianArmorHand extends handArmor
{
	public function protection(): int
	{
		return parent::protection() - 5;
	}
}




