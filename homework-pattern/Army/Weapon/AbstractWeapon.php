<?php

namespace Army\Weapon;

use Army\Weapon\Bow;
use Army\Weapon\knife;

abstract class AbstractWeapon
{
	abstract public function createKnife(): Knife;

	abstract public function createBow(): Bow;
}