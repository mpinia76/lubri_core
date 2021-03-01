<?php

namespace Lubri\Core\Test\sucursals;

use Lubri\Core\model\Sucursal;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\SucursalCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddSucursalsTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getSucursalService();

		\Logger::getLogger(__CLASS__)->info("agregando sucursal");

		$sucursal = new Sucursal();
		$sucursal->setNombre("CASA MATRIZ");
		$service->add( $sucursal );


	}
}
?>
