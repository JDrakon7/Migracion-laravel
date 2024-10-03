<?php

namespace App\DTO;

use Serializable;

class MovimientoDto implements Serializable
{

    private $path;
    private $id;
	private $factura;
	private $cotizacion;	
	private $lote;
	private $proveedor;
	private $costo;
	private $nota;
	private $habilitado;
	private $fechaRegistro;
	private $idTipo;
	private $idProductos;
	private $idProductosG;
	private $codigoProductos;
	private $nombreProductos;
	private $loteProductos;
	private $imagenProductos;
	private $cantidadProductos;
	private $cantidadTProductos;
	private $valorUnitarioProductos;
	private $valorUnitarioProductosOld;
	private $clienteProductos;
	private $idUsuario;
	private $idProyecto;
	private $idVendedor;
	private $idOrden;
	private $nombreVendedor;
	private $tipoMovimiento;
	private $registrado;
	private $boton;
	private $campo;
	private $seleccionado;
	
	function __construct()	{
		$this->idProductos= array();
		$this->idProductosG= array();
		$this->codigoProductos= array();
		$this->nombreProductos= array();
		$this->loteProductos= array();
		$this->imagenProductos= array();
		$this->cantidadProductos= array();
		$this->cantidadTProductos= array();
		$this->valorUnitarioProductos= array();
		$this->valorUnitarioProductosOld= array();
		$this->clienteProductos= array();
		$this->boton=array('1','','','1','1');
		$this->campo=array('1','1','1','1','1','1','1','1','1','1','1');
	}

	public function getArray() {
		return array(
			'path' => $this->path,
			'id' => $this->id,
			'factura' => $this->factura,
			'cotizacion' => $this->cotizacion,			
			'lote' => $this->lote,
			'proveedor' => $this->proveedor,
			'costo' => $this->costo,
			'nota' => $this->nota,
			'habilitado' => $this->habilitado,
			'fechaRegistro' => $this->fechaRegistro,
			'idTipo' => $this->idTipo,	
			'idProductos' => $this->idProductos,
			'idProductosG' => $this->idProductosG,
			'codigoProductos' => $this->codigoProductos,
			'nombreProductos' => $this->nombreProductos,
			'loteProductos' => $this->loteProductos,
			'imagenProductos' => $this->imagenProductos,
			'cantidadProductos' => $this->cantidadProductos,
			'cantidadTProductos' => $this->cantidadTProductos,
			'valorUnitarioProductos' => $this->valorUnitarioProductos,
			'valorUnitarioProductosOld' => $this->valorUnitarioProductosOld,
			'clienteProductos' => $this->clienteProductos,
			'idUsuario' => $this->idUsuario,
			'idProyecto' => $this->idProyecto,
			'idVendedor' => $this->idVendedor,
			'idOrden' => $this->idOrden,
			'nombreVendedor' => $this->nombreVendedor,	
			'tipoMovimiento' => $this->tipoMovimiento,
			'registrado' => $this->registrado,
			'boton' => $this->boton,
			'campo' => $this->campo,
			'seleccionado' => $this->seleccionado
        );
    }

    public function serialize() {
        return serialize($this->getArray());
    }

	public function unserialize($data) {
        $data = unserialize($data);
		if(isset($data['path'])){$this->path = $data['path'];}
        if(isset($data['id'])){$this->id = $data['id'];}
        if(isset($data['factura'])){$this->factura = $data['factura'];}
        if(isset($data['cotizacion'])){$this->cotizacion = $data['cotizacion'];}        
        if(isset($data['lote'])){$this->lote = $data['lote'];}
        if(isset($data['proveedor'])){$this->proveedor = $data['proveedor'];}
        if(isset($data['costo'])){$this->costo = $data['costo'];}
		if(isset($data['nota'])){$this->nota = $data['nota'];}
		if(isset($data['habilitado'])){$this->habilitado = $data['habilitado'];}
		if(isset($data['fechaRegistro'])){$this->fechaRegistro = $data['fechaRegistro'];}
        if(isset($data['idTipo'])){$this->idTipo = $data['idTipo'];}
		if(isset($data['idProductos'])){$this->idProductos = $data['idProductos'];}	
		if(isset($data['idProductosG'])){$this->idProductosG = $data['idProductosG'];}		
		if(isset($data['codigoProductos'])){$this->codigoProductos = $data['codigoProductos'];}
		if(isset($data['nombreProductos'])){$this->nombreProductos = $data['nombreProductos'];}
		if(isset($data['loteProductos'])){$this->loteProductos = $data['loteProductos'];}
		if(isset($data['imagenProductos'])){$this->imagenProductos = $data['imagenProductos'];}
		if(isset($data['cantidadProductos'])){$this->cantidadProductos = $data['cantidadProductos'];}
		if(isset($data['cantidadTProductos'])){$this->cantidadTProductos = $data['cantidadTProductos'];}
		if(isset($data['valorUnitarioProductos'])){$this->valorUnitarioProductos = $data['valorUnitarioProductos'];}
		if(isset($data['valorUnitarioProductosOld'])){$this->valorUnitarioProductosOld = $data['valorUnitarioProductosOld'];} 
		if(isset($data['clienteProductos'])){$this->clienteProductos = $data['clienteProductos'];}
		if(isset($data['idUsuario'])){$this->idUsuario = $data['idUsuario'];}   
		if(isset($data['idProyecto'])){$this->idProyecto = $data['idProyecto'];}
		if(isset($data['idVendedor'])){$this->idVendedor = $data['idVendedor'];} 
		if(isset($data['idOrden'])){$this->idOrden = $data['idOrden'];}
		if(isset($data['nombreVendedor'])){$this->nombreVendedor = $data['nombreVendedor'];} 
		if(isset($data['tipoMovimiento'])){$this->tipoMovimiento = $data['tipoMovimiento'];} 
		if(isset($data['registrado'])){$this->registrado = $data['registrado'];}     
        if(isset($data['boton'])){$this->boton = $data['boton'];}
        if(isset($data['campo'])){$this->campo = $data['campo'];}
        if(isset($data['seleccionado'])){$this->seleccionado = $data['seleccionado'];}

    }

	public function __set($name,$value) {
		switch($name) {
			case 'path': 
				return $this->setPath($value);
			case 'id': 
				return $this->setId($value);
			case 'factura': 
				return $this->setFactura($value);
			case 'cotizacion':
				return $this->setCotizacion($value);			
			case 'lote': 
				return $this->setLote($value);
			case 'proveedor': 
				return $this->setProveedor($value);
			case 'costo': 
				return $this->setCosto($value);
			case 'nota': 
				return $this->setNota($value);
			case 'habilitado': 
				return $this->setHabilitado($value);
		    case 'fechaRegistro': 
				return $this->setFechaRegistro($value);
			case 'idTipo': 
				return $this->setIdTipo($value);	
			case 'idProductos':
				return $this->setIdProductos($value);
			case 'idProductosG':
				return $this->setIdProductosG($value);
			case 'codigoProductos':
				return $this->setCodigoProductos($value);
			case 'nombreProductos':
				return $this->setNombreProductos($value);
			case 'loteProductos':
				return $this->setLoteProductos($value);
			case 'imagenProductos':
				return $this->setImagenProductos($value);
			case 'cantidadProductos':
				return $this->setCantidadProductos($value);	
			case 'cantidadTProductos':
				return $this->setCantidadTProductos($value);		
			case 'valorUnitarioProductos':
				return $this->setValorUnitarioProductos($value);
			case 'valorUnitarioProductosOld':
				return $this->setValorUnitarioProductosOld($value);	
			case 'clienteProductos':
				return $this->setClienteProductos($value);
			case 'idUsuario':
				return $this->setIdUsuario($value);	
			case 'idProyecto':
				return $this->setIdProyecto($value);	
			case 'idVendedor':
				return $this->setIdVendedor($value);
			case 'idOrden':
				return $this->setIdOrden($value);	
			case 'nombreVendedor':
				return $this->setNombreVendedor($value);
			case 'tipoMovimiento':
				return $this->setTipoMovimiento($value);
			case 'registrado':
				return $this->setRegistrado($value);
			case 'boton': 
				return $this->setBoton($value);
			case 'campo': 
				return $this->setCampo($value);
			case 'seleccionado': 
				return $this->setSeleccionado($value);
			case 'fileImagen': 
				return $this->setFileImagen($value);
		}
	}

	public function __get($name) {
		switch($name) {
			case 'path': 
				return $this->getPath();
			case 'id': 
				return $this->getId();
			case 'factura': 
				return $this->getFactura();
			case 'cotizacion':
				return $this->getCotizacion();			
			case 'lote':
				return $this->getLote();
			case 'proveedor': 
				return $this->getProveedor();
			case 'costo': 
				return $this->getCosto();
			case 'nota': 
				return $this->getNota();
			case 'habilitado':
				return $this->getHabilitado();
			case 'fechaRegistro': 
				return $this->getFechaRegistro();
			case 'idTipo': 
				return $this->getIdTipo();	
			case 'idProductos':
				return $this->getIdProductos();
			case 'idProductosG':
				return $this->getIdProductosG();
			case 'codigoProductos':
				return $this->getCodigoProductos();
			case 'nombreProductos':
				return $this->getNombreProductos();
			case 'loteProductos':
				return $this->getLoteProductos();
			case 'imagenProductos':
				return $this->getImagenProductos();
			case 'cantidadProductos':
				return $this->getCantidadProductos();
			case 'cantidadTProductos':
				return $this->getCantidadTProductos();
			case 'valorUnitarioProductos':
				return $this->getValorUnitarioProductos();
			case 'valorUnitarioProductosOld':
				return $this->getValorUnitarioProductosOld();	
			case 'clienteProductos':
				return $this->getClienteProductos();	
			case 'idUsuario':
				return $this->getIdUsuario();	
			case 'idProyecto':
				return $this->getIdProyecto();
			case 'idVendedor':
				return $this->getIdVendedor();
			case 'idOrden':
				return $this->getIdOrden();
			case 'nombreVendedor':
				return $this->getNombreVendedor();
			case 'tipoMovimiento':
				return $this->getTipoMovimiento();
			case 'registrado':
				return $this->getRegistrado();
			case 'boton':
				return $this->getBoton();
			case 'campo':
				return $this->getCampo();
			case 'seleccionado':
				return $this->getSeleccionado();
			case 'fileImagen':
				return $this->getFileImagen();
		}
	}

	public function getHtmlDataTableHead($texto){
		include_once($this->getPath().'html/tran/movimiento.php');
		$html = "";
		$html = getInboxHtmlDataTableHead($texto,false);
		return $html;
	}
	
	public function getHtmlDataTable($texto){
		include_once($this->getPath().'html/tran/movimiento.php');
		$html = "";
		$html = getInboxHtmlDataTable($this->datos,$texto,false,$this->getPath());
		return $html;
	}
	
	public function getHtmlCotizacionDataTableHead($texto){
		include_once($this->getPath().'html/tran/movimiento.php');
		$html = "";
		$html = getHtmlCotizacionDataTableHead($texto,false);
		return $html;
	}

	public function getHtmlCotizacionDataTableHeadSal($texto){
		include_once($this->getPath().'html/tran/salidaPT.php');
		$html = "";
		$html = getHtmlCotizacionDataTableHeadSal($texto,false);
		return $html;
	}
	
	public function getHtmlCotizacionDataTable($texto){
		include_once($this->getPath().'html/tran/movimiento.php');
		$html = "";
		$html = getHtmlCotizacionDataTable($this->datos,$texto,false,$this->getPath());
		return $html;
	}

	public function getHtmlCotizacionProductosDataTable($texto,$js){
		include_once($this->getPath().'html/tran/movimiento.php');
		$productos = array();
		//var_dump($this->valorUnitarioProductos);
		//exit;
		$countOld = count($this->valorUnitarioProductosOld);
		$countProductos = count($this->idProductos);
		if(count($this->idProductos) == $countProductos &&
		count($this->nombreProductos) == $countProductos &&
		count($this->imagenProductos) == $countProductos &&
		count($this->cantidadProductos) == $countProductos &&
		count($this->cantidadTProductos) == $countProductos &&
		count($this->loteProductos) == $countProductos &&
		count($this->valorUnitarioProductos) == $countProductos){
			foreach($this->idProductos as $key=>$val){				
				$producto = array("id"=>$val, "nombre"=>$this->nombreProductos[$key], "lote"=>$this->loteProductos[$key], "imagen"=>$this->imagenProductos[$key], "cantidad"=>$this->cantidadProductos[$key], "cantidadTotal"=>$this->cantidadTProductos[$key],"valorUnitario"=>$this->valorUnitarioProductos[$key],"valorUnitarioOld"=>$countOld > 0 ? $this->valorUnitarioProductosOld[$key] : "0");
				array_push($productos,$producto);
			}
		} else {
			echo "<tr><td>Error"." - ID: ".count($this->idProductos)." - CO: ".count($this->nombreProductos)." - LT: ".count($this->loteProductos)." - IM:".count($this->imagenProductos)." - CA:".count($this->cantidadProductos)." - CAT:".count($this->cantidadTProductos)." - VU:".count($this->valorUnitarioProductos)."</td></tr>";
		}
		$html = "";
		$html = getHtmlCotizacionProductoDataTable($productos,$texto,$js,$this->getPath());
		if($js){
			echo $html;
		} else {
			return $html;
		}
	}

	public function getHtmlCotizacionProductosDataTableSal($texto,$js){
		include_once($this->getPath().'html/tran/salidaPT.php');
		$productos = array();
		$countProductos = count($this->idProductos);
		//var_dump(empty($this->clienteProductos));
		//exit;
		if(count($this->idProductos) == $countProductos &&
		count($this->idProductosG) == $countProductos &&
		count($this->codigoProductos) == $countProductos &&
		count($this->nombreProductos) == $countProductos &&
		count($this->loteProductos) == $countProductos &&
		count($this->imagenProductos) == $countProductos &&
		count($this->cantidadTProductos) == $countProductos &&
		count($this->cantidadProductos) == $countProductos &&
		count($this->valorUnitarioProductos) == $countProductos){
			foreach($this->idProductos as $key=>$val){		
				if(empty($this->clienteProductos)){
					$producto = array("id"=>$val, "idProducto"=>$this->idProductosG[$key], "nombre"=>$this->nombreProductos[$key], "lote"=>$this->loteProductos[$key], "imagen"=>$this->imagenProductos[$key], "cantidad"=>$this->cantidadProductos[$key], "cantidadTotal"=>$this->cantidadTProductos[$key],"valorUnitario"=>$this->valorUnitarioProductos[$key]);
				}else{		
					$producto = array("id"=>$val, "idProducto"=>$this->idProductosG[$key], "nombre"=>$this->nombreProductos[$key], "lote"=>$this->loteProductos[$key], "imagen"=>$this->imagenProductos[$key], "cantidad"=>$this->cantidadProductos[$key], "cantidadTotal"=>$this->cantidadTProductos[$key],"valorUnitario"=>$this->valorUnitarioProductos[$key],"cliente"=>$this->clienteProductos[$key]);
				}
				array_push($productos,$producto);
			}
		} else {
			echo "<tr><td>Error"." - ID: ".count($this->idProductos)." - IDG: ".count($this->idProductosG)." - CO: ".count($this->nombreProductos)." - LT: ".count($this->loteProductos)." - IM:".count($this->imagenProductos)." - CA:".count($this->cantidadProductos)." - VU:".count($this->valorUnitarioProductos)."</td></tr>";
		}
		$html = "";
		$html = getHtmlCotizacionProductoDataTableSal($productos,$texto,$js,$this->getPath());
		if($js){
			echo $html;
		} else {
			return $html;
		}
	}


	private function getBoton() {
        return array(
			'cmd_guardar' => $this->boton[0],
			'cmd_modificar' => $this->boton[1],
			'cmd_eliminar' => $this->boton[2],
			'cmd_cancelar' => $this->boton[3],
			'cmd_nuevo' => $this->boton[4]
		);
    }
	
	private function setBoton($boton) {
		if(count($boton)==4){
			$this->boton = $boton;
		}
	}
	
	private function getCampo() {
        return array(
        	'id' => $this->campo[0],
			'factura' => $this->campo[1],
			'cotizacion' => $this->campo[2],			
			'lote' => $this->campo[3],
			'proveedor' => $this->campo[4],
			'costo' => $this->campo[5],
			'fechaRegistro' => $this->campo[6],
			'idTipo' => $this->campo[7],
			'habilitado' => $this->campo[8],
			'idOrden' => $this->campo[9]
		);
    }
	
	private function setCampo($campo) {
		if(count($campo)==16){
			$this->campo = $campo;
		}
	}

	private function setId($id) {
		$this->id = $id;
	}

	private function getId() {
		return $this->id;
	}

	private function setPath($path) {
		$this->path = $path;
	}

	private function getPath() {
		return $this->path;
	}

	private function setFactura($factura) {
		$this->factura = $factura;
	}

	private function getFactura() {
		return $this->factura;
	}

	private function setCotizacion($cotizacion) {
		$this->cotizacion = $cotizacion;
	}

	private function getCotizacion() {
		return $this->cotizacion;
	}

	private function setLote($lote) {
		$this->lote = $lote;
	}

	private function getLote() {
		return $this->lote;
	}

	private function setProveedor($proveedor) {
		$this->proveedor = $proveedor;
	}

	private function getProveedor() {
		return $this->proveedor;
	}

	private function setCosto($costo) {
		$this->costo = $costo;
	}

	private function getCosto() {
		return $this->costo;
	}

	private function setNota($nota) {
		$this->nota = $nota;
	}

	private function getNota() {
		return $this->nota;
	}

	private function setFechaRegistro($fechaRegistro) {
		$this->fechaRegistro = $fechaRegistro;
	}

	private function getFechaRegistro() {
		return $this->fechaRegistro;
	}

	private function setIdTipo($idTipo) {
		$this->idTipo = $idTipo;
	}

	private function getIdTipo() {
		return $this->idTipo;
	}	

	private function setIdProductos($idProductos) {
		$this->idProductos = $idProductos;
	}

	private function getIdProductos() {
		return $this->idProductos;
	}	

	private function setIdProductosG($idProductosG) {
		$this->idProductosG = $idProductosG;
	}

	private function getIdProductosG() {
		return $this->idProductosG;
	}
	
	private function setCodigoProductos($codigoProductos) {
		$this->codigoProductos = $codigoProductos;
	}

	private function getCodigoProductos() {
		return $this->codigoProductos;
	}	

	private function setNombreProductos($nombreProductos) {
		$this->nombreProductos = $nombreProductos;
	}

	private function getNombreProductos() {
		return $this->nombreProductos;
	}

	private function setLoteProductos($loteProductos) {
		$this->loteProductos = $loteProductos;
	}

	private function getLoteProductos() {
		return $this->loteProductos;
	}
	
	private function setImagenProductos($imagenProductos) {
		$this->imagenProductos = $imagenProductos;
	}

	private function getImagenProductos() {
		return $this->imagenProductos;
	}	
	
	private function setCantidadProductos($cantidadProductos) {
		$this->cantidadProductos = $cantidadProductos;
	}

	private function getCantidadProductos() {
		return $this->cantidadProductos;
	}	

	private function setCantidadTProductos($cantidadTProductos) {
		$this->cantidadTProductos = $cantidadTProductos;
	}
	
	private function getCantidadTProductos() {
		return $this->cantidadTProductos;
	}
		
	private function setValorUnitarioProductos($valorUnitarioProductos) {
		$this->valorUnitarioProductos = $valorUnitarioProductos;
	}

	private function getValorUnitarioProductos() {
		return $this->valorUnitarioProductos;
	}

	private function setValorUnitarioProductosOld($valorUnitarioProductosOld) {
		$this->valorUnitarioProductosOld = $valorUnitarioProductosOld;
	}

	private function getValorUnitarioProductosOld() {
		return $this->valorUnitarioProductosOld;
	}

	private function setClienteProductos($clienteProductos) {
		$this->clienteProductos = $clienteProductos;
	}

	private function getClienteProductos() {
		return $this->clienteProductos;
	}

	private function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}

	private function getIdUsuario() {
		return $this->idUsuario;
	}

	private function setIdProyecto($idProyecto) {
		$this->idProyecto = $idProyecto;
	}

	private function getIdProyecto() {
		return $this->idProyecto;
	}

	private function setIdVendedor($idVendedor) {
		$this->idVendedor = $idVendedor;
	}

	private function getIdVendedor() {
		return $this->idVendedor;
	}

	private function setIdOrden($idOrden) {
		$this->idOrden = $idOrden;
	}

	private function getIdOrden() {
		return $this->idOrden;
	}

	private function setNombreVendedor($nombreVendedor) {
		$this->nombreVendedor = $nombreVendedor;
	}

	private function getNombreVendedor() {
		return $this->nombreVendedor;
	}	

	private function setTipoMovimiento($tipoMovimiento) {
		$this->tipoMovimiento = $tipoMovimiento;
	}

	private function getTipoMovimiento() {
		return $this->tipoMovimiento;
	}

	private function setRegistrado($registrado) {
		$this->registrado = $registrado;
	}

	private function getRegistrado() {
		return $this->registrado;
	}

	private function setHabilitado($habilitado) {
		$this->habilitado = $habilitado;
	}

	private function getHabilitado() {
		return $this->habilitado;
	}

	private function setSeleccionado($seleccionado) {
		$this->seleccionado = $seleccionado;
	}

	private function getSeleccionado() {
		return $this->seleccionado;
	}
	
	private function setFileImagen($fileImagen) {
		$this->fileImagen=$fileImagen;
	}
	
	private function getFileImagen() {
		return $this->fileImagen;
	}

}



