<?php

namespace Entity;

class Service
{
	public const TYPES = [
		"premium" => 0,
		"premium_lite" => 1,
		"trial-version" => 2,
	];

	private $isLite;
	private $isTrial;
	private $activatedAt;
	private $activatedUntil;
	private $pausedAd;
	private $canceledDate;

	private $type;

	/**
	 * @return mixed
	 */
	public function getActivatedAt()
	{
		return $this->activatedAt;
	}

	/**
	 * @param mixed $activatedAt
	 * @return Service
	 */
	public function setActivatedAt($activatedAt)
	{
		$this->activatedAt = $activatedAt;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getActivatedUntil()
	{
		return $this->activatedUntil;
	}

	/**
	 * @param mixed $activatedUntil
	 * @return Service
	 */
	public function setActivatedUntil($activatedUntil)
	{
		$this->activatedUntil = $activatedUntil;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPausedAd()
	{
		return $this->pausedAd;
	}

	/**
	 * @param mixed $pausedAd
	 * @return Service
	 */
	public function setPausedAd($pausedAd)
	{
		$this->pausedAd = $pausedAd;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCanceledDate()
	{
		return $this->canceledDate;
	}

	/**
	 * @param mixed $canceledDate
	 * @return Service
	 */
	public function setCanceledDate($canceledDate)
	{
		$this->canceledDate = $canceledDate;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIsLite()
	{
		return $this->isLite;
	}

	/**
	 * @param mixed $isLite
	 * @return Service
	 */
	public function setIsLite($isLite)
	{
		$this->isLite = $isLite;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getType()
	{
		return $this->type;
	}

	/**
	 * @param mixed $type
	 * @return Service
	 */
	public function setType($type)
	{
		$this->type = $type;
		return $this;
	}
	/**
	 * @param mixed $isTrial
	 */
	public function setIsTrial($isTrial)
	{
		$this->isTrial = $isTrial;
		return $this;
	}
	/**
	 * @return mixed
	 */
	public function getIsTrial()
	{
		return $this->isTrial;
	}
}