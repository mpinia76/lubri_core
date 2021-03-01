<?php

namespace Lubri\Core\Test\gastos;


include_once dirname(__DIR__). '/conf/init.php';

use Lubri\Core\Test\GenericTest;
use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\GastoCriteria;

use Cose\Security\service\SecurityContext;

class ListGastoTest extends GenericTest{

	/**
	 */
	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getGastoService();

		$this->log("listando gastoss", __CLASS__);

		$criteria = new GastoCriteria();

		$entities = $service->getList( $criteria );

		foreach ($entities as $entity) {

			$this->log("Gasto: " . $entity, __CLASS__);

		}

	}
}
?>
