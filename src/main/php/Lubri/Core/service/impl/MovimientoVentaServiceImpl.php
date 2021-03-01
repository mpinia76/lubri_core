<?php
namespace Lubri\Core\service\impl;


use Lubri\Core\model\CategoriaProducto;

use Lubri\Core\model\Cuenta;

use Lubri\Core\service\IMovimientoCuentaService;

use Lubri\Core\model\MovimientoVenta;

use Lubri\Core\service\ServiceFactory;

use Lubri\Core\model\Caja;

use Lubri\Core\model\Venta;

use Lubri\Core\model\EstadoVenta;

use Lubri\Core\service\IVentaService;

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
 * servicio para MovimientoVenta
 *
 * @author Marcos
 * @since 12-03-2018
 *
 */
class MovimientoVentaServiceImpl extends MovimientoCajaServiceImpl {


	protected function getDAO(){
		return DAOFactory::getMovimientoVentaDAO();
	}

	public function getTotalesCajaVentasOnlineCtaCte( Caja $caja ){

		$result = $this->getDAO()->getTotalesCajaVentasOnlineCtaCte($caja);
		$totales = $result[0];
		return $totales["haber"] - $totales["debe"];

	}

	function getTotales( Cuenta $cuenta=null, \Datetime $fecha = null){

		$result = $this->getDAO()->getTotales($cuenta, $fecha);
		$totales = $result[0];
		return $totales["haber"] - $totales["debe"];

	}



	function getTotalesPorCategoria( Cuenta $cuenta=null, \Datetime $fecha = null){

		$result = $this->getDAO()->getTotalesPorCategoria($cuenta, $fecha);
		return $result;

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
