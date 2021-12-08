<?php

namespace Army\Barbarian;

use Army\Armor\headArmor;

class BarbarianArmorHead extends headArmor
{
	public function protection(): int
	{
		return parent::protection() + 1;
	}
}