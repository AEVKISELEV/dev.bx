<?php

namespace External;

class FaceBookAdvertisement
{
	private string $title;
	private string $messageBody;

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @param string $title
	 */
	public function setTitle(string $title): FaceBookAdvertisement
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getMessageBody(): string
	{
		return $this->messageBody;
	}

	/**
	 * @param string $messageBody
	 */
	public function setMessageBody(string $messageBody): FaceBookAdvertisement
	{
		$this->messageBody = $messageBody;
	}
}