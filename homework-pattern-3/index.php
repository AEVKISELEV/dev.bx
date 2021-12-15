<?php

use Entity\Service;
use Entity\User;

spl_autoload_register(function ($class) {
	include __DIR__ . '/' . str_replace("\\", "/",  $class) . '.php';
});

//\Event\EventBus::getInstance()->subscribe("onUserAdd", "\\Helper\\Subscriber::onUserAdd");
//\Event\EventBus::getInstance()->subscribe("onUserUpdate", "\\Helper\\Subscriber::onUserUpdate");
//
//
//$user = new User();
//$user
//	->setId(1)
//	->setName('Ivan')
//	->add()
//	->update()
//;

//$service = new Service();
//$context = new \State\ServiceStateContext(new \State\ActiveState($service));
//
//var_dump($context);
//var_dump($context->changeState());
//var_dump($context->changeState());


\Event\EventBus::getInstance()->subscribe("onUserUpdate", "\\Helper\\Subscriber::onUserLogging");

$user = new User();
$user
	->setName('Ivan')
	->setSecondName('Ivanovich')
	->logging()
	->setId(1)
	->add()
	->update()
;

var_dump(\Strategy\PurchaseServiceContext::purchase(new \Strategy\PurchasePremiumLiteStrategy()));
var_dump(\Strategy\PurchaseServiceContext::purchase(new \Strategy\PurchasePremiumStrategy()));
var_dump(\Strategy\PurchaseServiceContext::purchase(new \Strategy\PurchaseTrialVersionStrategy()));