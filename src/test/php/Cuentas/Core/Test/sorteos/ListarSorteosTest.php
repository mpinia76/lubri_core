<?php

namespace Lubri\Core\Test\sorteos;

include_once dirname(__DIR__). '/conf/init.php';

use Lubri\Core\Test\GenericTest;
use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\SorteoCriteria;

use Cose\Security\service\SecurityContext;

class ListSorteosTest extends GenericTest{

	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getSorteoService();


		$criteria = new SorteoCriteria();
		$criteria->addOrder("oid", "DESC");
		$criteria->setMaxResult(1);
		$ultimo = $service->getSingleResult( $criteria );
		$this->log("Ultimo: " . $ultimo->getLoteria(), __CLASS__);

		$this->log("listando Sorteos", __CLASS__);

		$sorteos = $service->getUltimosSorteos();

		foreach ($sorteos as $sorteo) {

			$this->log("Sorteo: " . $sorteo, __CLASS__);

		}


	}
}
?>
