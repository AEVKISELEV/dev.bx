<?php

namespace Army\Rome;

use Army\Armor\AbstractArmor;
use Army\Armor\handArmor;
use Army\Armor\headArmor;

class RomeArmors extends AbstractArmor
{
	public function createHandArmor(): handArmor
	{
		return new RomeArmorHand();
	}
	public function createHeadArmor(): headArmor
	{
		return new RomeArmorHead();
	}
}