<?php

namespace Army\Barbarian;

use Army\Weapon\AbstractWeapon;
use Army\Weapon\Bow;
use Army\Weapon\Knife;

class BarbarianWeapons extends AbstractWeapon
{
	public function createBow(): Bow
	{
		return new BarbarianWeaponBow();
	}
	public function createKnife(): Knife
	{
		return new BarbarianWeaponKnife();
	}
}