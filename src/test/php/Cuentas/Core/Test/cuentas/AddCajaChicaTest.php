<?php

namespace Lubri\Core\Test\cajas;

use Lubri\Core\model\CajaChica;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\model\Caja;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\CajaCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddCajasTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getCajaChicaService();

		\Logger::getLogger(__CLASS__)->info("agregando caja chica");

		$caja = new CajaChica();
		$caja->setNumero("1");
		$caja->setFecha( new \Datetime() );
		$caja->setSaldoInicial( 0 );
		$caja->setSaldo( 0 );
		$service->add( $caja );


	}
}
?>
