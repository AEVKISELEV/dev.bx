<?php

namespace Adapter;

use Entity\Advertisement;
use Entity\AdvertisementResponse;
use External\FaceBookAdvertisement;
use External\FaceBookPublicator;
use Service\AdvertisementProviderInterface;

class FaceBookAdvertisementProviderAdapter implements AdvertisementProviderInterface
{
	public function publicate(Advertisement $advertisement): AdvertisementResponse
	{
		$facebookAdvertisement = new FaceBookAdvertisement();

		if (!$advertisement->getTitle())
		{
			$advertisement->setTitle("default");
		}
		$facebookAdvertisement
			->setTitle($advertisement->getTitle())
			->setMessageBody($advertisement->getBody());

		$result = (new FaceBookPublicator())->publicate($facebookAdvertisement);

		return (new AdvertisementResponse())->setTargeting($result->getTargetingName());
	}
	public function prepare(Advertisement $advertisement)
	{
		// TODO: Implement prepare() method.
	}

	public function check(Advertisement $advertisement)
	{
		// TODO: Implement check() method.
	}

	public function calculateDuration(Advertisement $advertisement)
	{
		// TODO: Implement calculateDuration() method.
	}
}