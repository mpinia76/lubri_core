<?php

namespace Lubri\Core\Test\gastos;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\model\EstadoGasto;

use Lubri\Core\model\Gasto;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\GastoCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddGastoTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getSucursalService();

		\Logger::getLogger(__CLASS__)->info("agregando Gasto");

		$gasto = new Gasto();
		$gasto->setEstado(EstadoGasto::Realizado);
		$gasto->setFechaHora( new \Datetime() );
		$gasto->setMonto(380);

		$gasto->setVendedor( LubriUtils::getEmpleadoDefault() );

		$gasto->setUser(LubriUtils::getUserByUsername("bernardo"));
		$gasto->setConcepto( LubriUtils::getConceptoGastoVarios() );

		$service->add( $gasto );


	}
}
?>
