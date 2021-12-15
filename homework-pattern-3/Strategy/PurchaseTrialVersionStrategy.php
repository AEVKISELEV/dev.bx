<?php

namespace Strategy;

use Entity\Service;

class PurchaseTrialVersionStrategy implements PurchaseStrategy
{
	public function purchase(): Service
	{
		// take money

		$service = new Service();
		$service->setIsTrial(true);
		$service->setActivatedUntil((new \DateTime())->modify("+ 7 days"));
		$service->setType(Service::TYPES['trial-version']);
		return $service;
	}
}