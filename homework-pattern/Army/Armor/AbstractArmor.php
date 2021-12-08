<?php

namespace Army\Armor;

use Army\Armor\handArmor;
use Army\Armor\headArmor;

abstract class AbstractArmor
{
	abstract public function createHandArmor(): handArmor;

	abstract public function createHeadArmor(): headArmor;
}