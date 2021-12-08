<?php

namespace Army\Weapon;

interface Weapon
{
	public function damage(): int;

	public function efficiency(): float;
}