<?php

namespace Army\Rome;

use Army\Armor\headArmor;

class RomeArmorHead extends headArmor
{
	public function protection(): int
	{
		return parent::protection() - 5;
	}
}