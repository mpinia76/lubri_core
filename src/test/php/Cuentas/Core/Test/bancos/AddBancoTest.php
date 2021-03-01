<?php

namespace Lubri\Core\Test\bancos;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\model\Banco;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\BancoCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddBancosTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getBancoService();

		\Logger::getLogger(__CLASS__)->info("agregando banco");

		$banco = new Banco();
		$banco->setNombre("BAPRO");
		$banco->setNumero("33322");
		$banco->setFecha( new \Datetime() );
		$banco->setTitular("Marcos Iribarne");
		$banco->setCbu("434000003333403944");
		$banco->setCuit("20-28070832-2");
		$banco->setSaldoInicial( 0 );
		$service->add( $banco );


	}
}
?>
