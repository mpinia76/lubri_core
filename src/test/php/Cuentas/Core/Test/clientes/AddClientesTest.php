<?php

namespace Lubri\Core\Test\clientes;

use Lubri\Core\model\Cliente;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\ClienteCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddClientesTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getClienteService();

		\Logger::getLogger(__CLASS__)->info("agregando cliente");

		$cliente = new Cliente();
		$cliente->setNombre("CLIENTE MOSTRADOR");
		$cliente->setApellido("");
		$service->add( $cliente );


	}
}
?>
