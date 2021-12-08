<?php

namespace Army\Barbarian;

use Army\Armor\AbstractArmor;
use Army\Armor\handArmor;
use Army\Armor\headArmor;

class BarbarianArmors extends AbstractArmor
{
	public function createHandArmor(): handArmor
	{
		return new BarbarianArmorHand();
	}
	public function createHeadArmor(): headArmor
	{
		return new BarbarianArmorHead();
	}
}