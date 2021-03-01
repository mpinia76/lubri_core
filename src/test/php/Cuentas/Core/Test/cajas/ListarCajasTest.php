<?php

namespace Lubri\Core\Test\cajas;

include_once dirname(__DIR__). '/conf/init.php';

use Lubri\Core\Test\GenericTest;
use Lubri\Core\service\ServiceFactory;
use Lubri\Core\criteria\CajaCriteria;

use Cose\Security\service\SecurityContext;

class ListCajasTest extends GenericTest{

	/**
	 * @Security( permission="listar_cajas" )
	 */
	public function test(){


		$securityContext =  SecurityContext::getInstance();
		$securityContext->login( "bernardo", "bernardo");

		$service = ServiceFactory::getCajaService();

		$this->log("listando cajas", __CLASS__);

		$criteria = new CajaCriteria();
		$criteria->setMaxResult(5);
		//$criteria->setNombre("Ber");

		$cajas = $service->getList( $criteria );

		foreach ($cajas as $caja) {

			$this->log("Caja: " . $caja, __CLASS__);

		}

	}
}
?>
