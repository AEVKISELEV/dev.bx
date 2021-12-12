<?php

namespace External;

class FaceBookPublicator
{
	public function publicate(FaceBookAdvertisement $faceBookAdvertisement): FaceBookAdvertisementResult
	{
		//...
		return (new FaceBookAdvertisementResult())->setTargetingName("response");
	}
}