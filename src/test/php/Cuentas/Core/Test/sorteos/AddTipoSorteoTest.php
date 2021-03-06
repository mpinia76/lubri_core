<?php

namespace Lubri\Core\Test\conceptosGasto;

use Lubri\Core\model\TipoSorteo;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;

include_once dirname(__DIR__). '/conf/init.php';

class AddTipoSorteoTest extends GenericTest{


	public function test(){

		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getTipoSorteoService();

		\Logger::getLogger(__CLASS__)->info("agregando TipoSorteo");

		$concepto = new TipoSorteo();
		$concepto->setNombre("Primera");
		$service->add( $concepto );

		$concepto = new TipoSorteo();
		$concepto->setNombre("Matutina");
		$service->add( $concepto );

		$concepto = new TipoSorteo();
		$concepto->setNombre("Vespertina");
		$service->add( $concepto );

		$concepto = new TipoSorteo();
		$concepto->setNombre("Nocturna");
		$service->add( $concepto );

	}
}
?>
