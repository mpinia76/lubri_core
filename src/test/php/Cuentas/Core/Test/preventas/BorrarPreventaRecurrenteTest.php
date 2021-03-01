<?php

namespace Lubri\Core\Test\preventas;

use Lubri\Core\model\DetallePreventaRecurrente;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\model\PreventaRecurrente;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\PreventaRecurrenteCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class BorrarPreventaRecurrenteTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getPreventaRecurrenteService();

		\Logger::getLogger(__CLASS__)->info("borrando PreventaRecurrente");

		$this->persistenceContext->beginTransaction();

		$service->delete( 5 );


		$this->persistenceContext->commit();
	}
}
?>
