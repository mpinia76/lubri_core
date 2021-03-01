<?php
namespace Lubri\Core\service;

/**
 * Factory de servicios
 *
 *
 * @author Marcos
 * @since 27-02-2018
 *
 */

use Lubri\Core\service\impl\PaisServiceImpl;
use Lubri\Core\service\impl\MarcaProductoServiceImpl;
use Lubri\Core\service\impl\IvaServiceImpl;
use Lubri\Core\service\impl\TipoProductoServiceImpl;

use Lubri\Core\service\impl\ConceptoGastoServiceImpl;
use Lubri\Core\service\impl\ConceptoMovimientoServiceImpl;
use Lubri\Core\service\impl\ProvinciaServiceImpl;
use Lubri\Core\service\impl\LocalidadServiceImpl;
use Lubri\Core\service\impl\ClienteServiceImpl;
use Lubri\Core\service\impl\ProveedorServiceImpl;


use Lubri\Core\service\impl\ProductoServiceImpl;

use Lubri\Core\service\impl\AnulacionServiceImpl;
use Lubri\Core\service\impl\CuentaServiceImpl;
use Lubri\Core\service\impl\GastoServiceImpl;

use Lubri\Core\service\impl\MovimientoGastoServiceImpl;
use Lubri\Core\service\impl\VentaServiceImpl;
use Lubri\Core\service\impl\MovimientoVentaServiceImpl;
use Lubri\Core\service\impl\MovimientoCajaServiceImpl;
use Lubri\Core\service\impl\CuentaCorrienteServiceImpl;
use Lubri\Core\service\impl\BancoServiceImpl;
use Lubri\Core\service\impl\CajaServiceImpl;
use Lubri\Core\service\impl\PagoServiceImpl;
use Lubri\Core\service\impl\MovimientoPagoServiceImpl;
use Lubri\Core\service\impl\TarjetaServiceImpl;

use Lubri\Core\service\impl\ParametroServiceImpl;

use Lubri\Core\service\impl\PresupuestoServiceImpl;

use Lubri\Core\service\impl\ComboServiceImpl;

use Lubri\Core\service\impl\ActualizacionServiceImpl;

use Lubri\Core\service\impl\MovimientoActualizacionServiceImpl;

use Lubri\Core\service\impl\PedidoServiceImpl;

use Lubri\Core\service\impl\MovimientoPedidoServiceImpl;

class ServiceFactory {








	/**
	 * Service para Pais.
	 *
	 * @return IPaisService
	 */
	public static function getPaisService(){

		return new PaisServiceImpl();
	}

	/**
	 * Service para MarcaProducto.
	 *
	 * @return IMarcaProductoService
	 */
	public static function getMarcaProductoService(){

		return new MarcaProductoServiceImpl();
	}

	/**
	 * Service para Iva.
	 *
	 * @return IIvaService
	 */
	public static function getIvaService(){

		return new IvaServiceImpl();
	}

	/**
	 * Service para TipoProducto.
	 *
	 * @return ITipoProductoService
	 */
	public static function getTipoProductoService(){

		return new TipoProductoServiceImpl();
	}




	/**
	 * Service para ConceptoGasto.
	 *
	 * @return IConceptoGastoService
	 */
	public static function getConceptoGastoService(){

		return new ConceptoGastoServiceImpl();
	}

	/**
	 * Service para ConceptoMovimiento.
	 *
	 * @return IConceptoMovimientoService
	 */
	public static function getConceptoMovimientoService(){

		return new ConceptoMovimientoServiceImpl();
	}


	/**
	 * Service para Provincia.
	 *
	 * @return IProvinciaService
	 */
	public static function getProvinciaService(){

		return new ProvinciaServiceImpl();
	}

	/**
	 * Service para Localidad.
	 *
	 * @return ILocalidadService
	 */
	public static function getLocalidadService(){

		return new LocalidadServiceImpl();
	}

	/**
	 * Service para Cliente.
	 *
	 * @return IClienteService
	 */
	public static function getClienteService(){

		return new ClienteServiceImpl();
	}

	/**
	 * Service para Proveedor.
	 *
	 * @return IProveedorService
	 */
	public static function getProveedorService(){

		return new ProveedorServiceImpl();
	}

	/**
	 * Service para Pedido.
	 *
	 * @return IPedidoService
	 */
	public static function getPedidoService(){

		return new PedidoServiceImpl();
	}



	/**
	 * Service para Producto.
	 *
	 * @return IProductoService
	 */
	public static function getProductoService(){

		return new ProductoServiceImpl();
	}



	/**
	 * Service para Anulacion.
	 *
	 * @return IAnulacionService
	 */
	public static function getAnulacionService(){

		return new AnulacionServiceImpl();
	}

	/**
	 * Service para Cuenta.
	 *
	 * @return ICuentaService
	 */
	public static function getCuentaService(){

		return new CuentaServiceImpl();
	}

	/**
	 * Service para Gasto.
	 *
	 * @return IGastoService
	 */
	public static function getGastoService(){

		return new GastoServiceImpl();
	}

	/**
	 * Service para MovimientoGasto.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getMovimientoGastoService(){

		return new MovimientoGastoServiceImpl();
	}

	/**
	 * Service para Venta.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getVentaService(){

		return new VentaServiceImpl();
	}

	/**
	 * Service para MovimientoVenta.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getMovimientoVentaService(){

		return new MovimientoVentaServiceImpl();
	}

	/**
	 * Service para MovimientoCaja.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getMovimientoCajaService(){

		return new MovimientoCajaServiceImpl();
	}

	/**
	 * Service para CuentaCorriente.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getCuentaCorrienteService(){

		return new CuentaCorrienteServiceImpl();
	}

	/**
	 * Service para Banco.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getBancoService(){

		return new BancoServiceImpl();
	}

	/**
	 * Service para Caja.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getCajaService(){

		return new CajaServiceImpl();
	}

	/**
	 * Service para Pago.
	 *
	 * @return IMovimientoCuentaService
	 */
	public static function getPagoService(){

		return new PagoServiceImpl();
	}

	/**
	 * Service para MovimientoPago.
	 *
	 * @return IMovimientoPagoService
	 */
	public static function getMovimientoPagoService(){

		return new MovimientoPagoServiceImpl();
	}

	/**
	 * Service para Tarjeta.
	 *
	 * @return ITarjetaService
	 */
	public static function getTarjetaService(){

		return new TarjetaServiceImpl();
	}



	/**
	 * Service para Parametro.
	 *
	 * @return IParametroService
	 */
	public static function getParametroService(){

		return new ParametroServiceImpl();
	}


	/**
	 * Service para Presupuesto.
	 *
	 * @return IPresupuestoService
	 */
	public static function getPresupuestoService(){

		return new PresupuestoServiceImpl();
	}

	/**
	 * Service para Combo.
	 *
	 * @return IComboService
	 */
	public static function getComboService(){

		return new ComboServiceImpl();
	}

	/**
	 * Service para Actualizacion.
	 *
	 * @return IActualizacionService
	 */
	public static function getActualizacionService(){

		return new ActualizacionServiceImpl();
	}


	/**
	 * Service para MovimientoActualizacion.
	 *
	 * @return IMovimientoActualizacionService
	 */
	public static function getMovimientoActualizacionService(){

		return new MovimientoActualizacionServiceImpl();
	}

	/**
	 * Service para MovimientoPedido.
	 *
	 * @return IMovimientoPedidoService
	 */
	public static function getMovimientoPedidoService(){

		return new MovimientoPedidoServiceImpl();
	}
}
