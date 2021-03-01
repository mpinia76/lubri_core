<?php
namespace Lubri\Core\service\impl;



use Lubri\Core\model\Cuenta;

use Lubri\Core\dao\DAOFactory;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;
use Cose\Security\model\User;

use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

/**
 * servicio para MovimientoActualizacion
 *
 * @author Marcos
 * @since 13-02-2020
 *
 */
class MovimientoActualizacionServiceImpl extends MovimientoCajaServiceImpl {


	protected function getDAO(){
		return DAOFactory::getMovimientoActualizacionDAO();
	}

	function getTotales( Cuenta $cuenta=null, \Datetime $fecha = null){

		$result = $this->getDAO()->getTotales($cuenta, $fecha);
		$totales = $result[0];
		return $totales["haber"] - $totales["debe"];

	}

	function getTotalesMes( Cuenta $cuenta=null, \Datetime $fecha = null){

		$result = $this->getDAO()->getTotalesMes($cuenta, $fecha);
		return $result;

	}

	function getTotalesAnioPorMes( Cuenta $cuenta=null, $anio){

		$result = $this->getDAO()->getTotalesAnioPorMes($cuenta, $anio);
		return $result;

	}

}
