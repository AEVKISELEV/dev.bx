<?php

namespace Service;

use Entity\Advertisement;
use Entity\AdvertisementResponse;

class FaceBookProvider extends AbstractAdvertisementProvider
{
	public function publicate(Advertisement $advertisement): AdvertisementResponse
	{
		$advertisement->setBody($this->formatter->format($advertisement->getBody()));
	}

	public function prepare(Advertisement $advertisement)
	{
		if (!$advertisement->getTitle())
		{
			$advertisement->setTitle("hello");
		}
	}

	public function check(Advertisement $advertisement)
	{

	}

	public function calculateDuration(Advertisement $advertisement)
	{

	}
}