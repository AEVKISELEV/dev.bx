<?php

namespace External;

class FaceBookAdvertisementResult
{
	public string $targetingName;

	/**
	 * @return string
	 */
	public function getTargetingName(): string
	{
		return $this->targetingName;
	}

	/**
	 * @param string $targetingName
	 */
	public function setTargetingName(string $targetingName): FaceBookAdvertisementResult
	{
		$this->targetingName = $targetingName;
		return $this;
	}

}