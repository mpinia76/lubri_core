<?php
namespace Lubri\Core\criteria;

use Cose\criteria\impl\Criteria;

/**
 * criteria de MarcaProducto
 *
 * @author Marcos
 *
 */
class MarcaProductoCriteria extends Criteria{

	private $nombre;




	public function getNombre()
	{
	    return $this->nombre;
	}

	public function setNombre($nombre)
	{
	    $this->nombre = $nombre;
	}


}
