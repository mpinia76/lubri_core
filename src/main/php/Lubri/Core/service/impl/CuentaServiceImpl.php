<?php
namespace Lubri\Core\service\impl;


use Lubri\Core\model\MovimientoCuenta;

use Lubri\Core\model\Cuenta;

use Lubri\Core\criteria\CuentaCriteria;

use Lubri\Core\model\Empleado;

use Lubri\Core\service\ICuentaService;

use Lubri\Core\dao\DAOFactory;

use Cose\Crud\service\impl\CrudService;

use Cose\Security\service\SecurityContext;
use Cose\exception\ServiceException;
use Cose\exception\ServiceNoResultException;
use Cose\exception\ServiceNonUniqueResultException;
use Cose\exception\DuplicatedEntityException;
use Cose\exception\DAOException;

/**
 * servicio para cuenta
 *
 * @author Marcos
 * @since 09-03-2018
 *
 */
class CuentaServiceImpl extends CrudService implements ICuentaService {


	protected function getDAO(){
		return DAOFactory::getCuentaDAO();
	}

	function validateOnAdd( $entity ){

		//unicidad (numero + fecha + horaApertura )

	}


	function validateOnUpdate( $entity ){

		$this->validateOnAdd($entity);
	}

	function validateOnDelete( $oid ){}




}
