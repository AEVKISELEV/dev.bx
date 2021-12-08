<?php

namespace Army\Rome;

use Army\Weapon\AbstractWeapon;
use Army\Weapon\Bow;
use Army\Weapon\Knife;

class RomeWeapons extends AbstractWeapon
{
	public function createBow(): Bow
	{
		return new RomeWeaponBow();
	}
	public function createKnife(): Knife
	{
		return new RomeWeaponKnife();
	}
}