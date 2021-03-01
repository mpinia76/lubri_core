<?php

namespace Lubri\Core\Test\ventas;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\SucursalCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AnularVentaTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getVentaService();

		\Logger::getLogger(__CLASS__)->info("anulando");

		$venta = $service->get( 62  );

		$service->anular($venta, LubriUtils::getUserByUsername("bernardo"));


	}
}
?>
