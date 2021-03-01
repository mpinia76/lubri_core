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

class GenerarPreventasTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getPreventaRecurrenteService();

		\Logger::getLogger(__CLASS__)->info("generando preventas");

		$this->persistenceContext->beginTransaction();

		$fecha = new \DateTime();
		$fecha->modify("+2 days");
		$service->generarPreventas( $fecha );


		$this->persistenceContext->commit();
	}
}
?>
