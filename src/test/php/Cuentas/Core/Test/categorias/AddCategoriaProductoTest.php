<?php

namespace Lubri\Core\Test\categorias;

use Lubri\Core\model\CategoriaProducto;

use Lubri\Core\utils\LubriUtils;

use Lubri\Core\Test\GenericTest;

use Cose\Security\service\SecurityContext;

use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\CajaCriteria;

include_once dirname(__DIR__). '/conf/init.php';

class AddCategoriaProductoTest extends GenericTest{


	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getCategoriaProductoService();

		\Logger::getLogger(__CLASS__)->info("agregando CategoriaProducto");

		$cp = new CategoriaProducto();
		$cp->setNombre("RUBRO GENERAL");
		$service->add( $cp );


	}
}
?>
