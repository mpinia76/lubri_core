<?php

namespace Lubri\Core\Test\cuentaSocios;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\model\CuentaSocio;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\CuentaSocioCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddCuentaSociosTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getCuentaSocioService();

		\Logger::getLogger(__CLASS__)->info("agregando cuentaSocio");

		$cuentaSocio = new CuentaSocio();
		$cuentaSocio->setNombre("Marcos");
		$cuentaSocio->setNumero("1");
		$cuentaSocio->setFecha( new \Datetime() );
		$cuentaSocio->setSaldoInicial( 0 );
		$service->add( $cuentaSocio );

		$cuentaSocio = new CuentaSocio();
		$cuentaSocio->setNombre("Hernán");
		$cuentaSocio->setNumero("2");
		$cuentaSocio->setFecha( new \Datetime() );
		$cuentaSocio->setSaldoInicial( 0 );
		$service->add( $cuentaSocio );

	}
}
?>
