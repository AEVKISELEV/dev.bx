<?php

namespace Army\Builder;

use Army\Armor\Armor;
use Army\Armor\handArmor;
use Army\Armor\headArmor;
use Army\WarriorTemplate;
use Army\Weapon\Bow;
use Army\Weapon\Knife;
use Army\Weapon\Weapon;

class ArcherBuilder implements WarriorBuilder
{

	private $warriorTemplate;
	public function addRightHandWeapon(?Weapon $weapon = null): WarriorBuilder
	{
		$this->warriorTemplate->set('rightHandWeapon', $weapon ?: new Bow());
		return $this;
	}

	public function addLeftHandWeapon(?Weapon $weapon = null): WarriorBuilder
	{
		$this->warriorTemplate->set('leftHandWeapon', $weapon ?: new Knife());
		return $this;
	}

	public function addRightHandArmor(?Armor $armor = null): WarriorBuilder
	{
		$this->warriorTemplate->set('rightHandArmor', $armor ?: new handArmor());
		return $this;
	}

	public function addLeftHandArmor(?Armor $armor = null): WarriorBuilder
	{
		$this->warriorTemplate->set('leftHandArmor', $armor ?: new handArmor());
		return $this;
	}

	public function addHeadArmor(?Armor $armor = null): WarriorBuilder
	{
		$this->warriorTemplate->set('headArmor', $armor ?: new headArmor());
		return $this;
	}

	public function createWarriorTemplate(): WarriorBuilder
	{
		$this->warriorTemplate = new WarriorTemplate();
		return $this;
	}

	public function getWarrior(): WarriorTemplate
	{
		return $this->warriorTemplate;
	}
}