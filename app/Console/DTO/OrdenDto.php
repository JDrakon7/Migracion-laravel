<?php

namespace App\DTO;

use Serializable;

class OrdenDto implements Serializable 
{
    
    private $path;
    private $id;
	private $lote;
	private $cliente;
	private $proyecto;
	private $fechaEntrega;
	private $costo;	
	private $cif;	
	private $costoTotal;
	private $manoObra;
	private $otros;
	private $tornilleria;
	private $cantidad;
	private $habilitado;
	private $fechaRegistro;	
	private $idProductos;
	private $idProductosG;
	private $idProductosI;
	private $codigoProductos;
	private $nombreProductos;
	private $loteProductos;
	private $imagenProductos;
	private $cantidadProductos;
	private $cantidadProductosG;
	private $cantidadTProductos;
	private $valorUnitarioProductos;
	private $idUsuario;	
	private $idProyecto;
	private $idProductoOrden;
	private $codigoProducto;
	private $nombreProducto;
	private $nota;
	private $tipoMovimiento;
	private $registrado;
	private $pendiente;
	private $indCotizacion;
	private $boton;
	private $campo;
	private $seleccionado;
	
	function __construct()	{
		$this->idProductos= array();
		$this->idProductosG= array();
		$this->idProductosI= array();
		$this->codigoProductos= array();
		$this->nombreProductos= array();
		$this->loteProductos= array();
		$this->imagenProductos= array();
		$this->cantidadProductos= array();
		$this->cantidadProductosG= array();
		$this->cantidadTProductos= array();
		$this->valorUnitarioProductos= array();
		$this->boton=array('1','','','1','1');
		$this->campo=array('1','1','1','1','1','1','1','1','1');
	}

	public function getArray() {
		return array(
			'path' => $this->path,
			'id' => $this->id,	
			'lote' => $this->lote,	
			'cliente' => $this->cliente,
			'proyecto' => $this->proyecto,	
			'fechaEntrega' => $this->fechaEntrega,	
			'costo' => $this->costo,
			'cif' => $this->cif,
			'manoObra' => $this->manoObra,
			'otros' => $this->otros,
			'tornilleria' => $this->tornilleria,
			'costoTotal' => $this->costoTotal,
			'cantidad' => $this->cantidad,
			'habilitado' => $this->habilitado,
			'fechaRegistro' => $this->fechaRegistro,
			'idProductos' => $this->idProductos,
			'idProductosG' => $this->idProductosG,
			'idProductosI' => $this->idProductosI,
			'codigoProductos' => $this->codigoProductos,
			'nombreProductos' => $this->nombreProductos,
			'loteProductos' => $this->loteProductos,
			'imagenProductos' => $this->imagenProductos,
			'cantidadProductos' => $this->cantidadProductos,
			'cantidadProductosG' => $this->cantidadProductosG,
			'cantidadTProductos' => $this->cantidadTProductos,
			'valorUnitarioProductos' => $this->valorUnitarioProductos,
			'idUsuario' => $this->idUsuario,
			'idProyecto' => $this->idProyecto,
			'idProductoOrden' => $this->idProductoOrden,
			'codigoProducto' => $this->codigoProducto,
			'nombreProducto' => $this->nombreProducto,	
			'nota' => $this->nota,	
			'tipoMovimiento' => $this->tipoMovimiento,
			'registrado' => $this->registrado,
			'pendiente' => $this->pendiente,
			'indCotizacion' => $this->indCotizacion,
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
		if(isset($data['lote'])){$this->lote = $data['lote'];}    
		if(isset($data['cliente'])){$this->cliente = $data['cliente'];} 
		if(isset($data['proyecto'])){$this->proyecto = $data['proyecto'];} 
		if(isset($data['fechaEntrega'])){$this->fechaEntrega = $data['fechaEntrega'];} 
        if(isset($data['costo'])){$this->costo = $data['costo'];}
		if(isset($data['cif'])){$this->cif = $data['cif'];}
		if(isset($data['manoObra'])){$this->manoObra = $data['manoObra'];}
		if(isset($data['otros'])){$this->otros = $data['otros'];}
		if(isset($data['tornilleria'])){$this->tornilleria = $data['tornilleria'];}
		if(isset($data['costoTotal'])){$this->costoTotal = $data['costoTotal'];}
		if(isset($data['cantidad'])){$this->cantidad = $data['cantidad'];}
		if(isset($data['habilitado'])){$this->habilitado = $data['habilitado'];}
		if(isset($data['fechaRegistro'])){$this->fechaRegistro = $data['fechaRegistro'];}
		if(isset($data['idProductos'])){$this->idProductos = $data['idProductos'];}	
		if(isset($data['idProductosG'])){$this->idProductosG = $data['idProductosG'];}	
		if(isset($data['idProductosI'])){$this->idProductosI = $data['idProductosI'];}
		if(isset($data['codigoProductos'])){$this->codigoProductos = $data['codigoProductos'];}
		if(isset($data['nombreProductos'])){$this->nombreProductos = $data['nombreProductos'];}
		if(isset($data['loteProductos'])){$this->loteProductos = $data['loteProductos'];}
		if(isset($data['imagenProductos'])){$this->imagenProductos = $data['imagenProductos'];}
		if(isset($data['cantidadProductos'])){$this->cantidadProductos = $data['cantidadProductos'];}
		if(isset($data['cantidadProductosG'])){$this->cantidadProductosG = $data['cantidadProductosG'];}
		if(isset($data['cantidadTProductos'])){$this->cantidadTProductos = $data['cantidadTProductos'];}
		if(isset($data['valorUnitarioProductos'])){$this->valorUnitarioProductos = $data['valorUnitarioProductos'];} 
		if(isset($data['idUsuario'])){$this->idUsuario = $data['idUsuario'];}
		if(isset($data['idProyecto'])){$this->idProyecto = $data['idProyecto'];}
		if(isset($data['idProductoOrden'])){$this->idProductoOrden = $data['idProductoOrden'];}
		if(isset($data['codigoProducto'])){$this->codigoProducto = $data['codigoProducto'];} 
		if(isset($data['nombreProducto'])){$this->nombreProducto = $data['nombreProducto'];}
		if(isset($data['nota'])){$this->nota = $data['nota'];}  
		if(isset($data['tipoMovimiento'])){$this->tipoMovimiento = $data['tipoMovimiento'];}
		if(isset($data['registrado'])){$this->registrado = $data['registrado'];}     
		if(isset($data['pendiente'])){$this->pendiente = $data['pendiente'];} 
		if(isset($data['indCotizacion'])){$this->indCotizacion = $data['indCotizacion'];} 
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
			case 'lote': 
				return $this->setLote($value);	
			case 'cliente': 
				return $this->setCliente($value);
			case 'proyecto': 
				return $this->setProyecto($value);
			case 'fechaEntrega': 
				return $this->setFechaEntrega($value);		
			case 'costo': 
				return $this->setCosto($value);
			case 'cif': 
				return $this->setCif($value);
			case 'manoObra': 
				return $this->setManoObra($value);
			case 'otros': 
				return $this->setOtros($value);
			case 'tornilleria': 
				return $this->setTornilleria($value);
			case 'costoTotal': 
				return $this->setCostoTotal($value);
			case 'cantidad': 
				return $this->setCantidad($value);
			case 'habilitado': 
				return $this->setHabilitado($value);
		    case 'fechaRegistro': 
				return $this->setFechaRegistro($value);
			case 'idProductos':
				return $this->setIdProductos($value);
			case 'idProductosG':
				return $this->setIdProductosG($value);
			case 'idProductosI':
				return $this->setIdProductosI($value);
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
			case 'cantidadProductosG':
				return $this->setCantidadProductosG($value);
			case 'cantidadTProductos':
				return $this->setCantidadTProductos($value);			
			case 'valorUnitarioProductos':
				return $this->setValorUnitarioProductos($value);
			case 'idUsuario':
				return $this->setIdUsuario($value);	
			case 'idProyecto':
				return $this->setIdProyecto($value);
			case 'idProductoOrden':
				return $this->setIdProductoOrden($value);
			case 'codigoProducto':
				return $this->setCodigoProducto($value);
			case 'nombreProducto':
				return $this->setNombreProducto($value);
			case 'nota':
				return $this->setNota($value);	
			case 'tipoMovimiento':
				return $this->setTipoMovimiento($value);
			case 'registrado':
				return $this->setRegistrado($value);
			case 'pendiente':
				return $this->setPendiente($value);
			case 'indCotizacion':
				return $this->setIndCotizacion($value);
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
			case 'lote': 
				return $this->getLote();	
			case 'cliente': 
				return $this->getCliente();
			case 'proyecto': 
				return $this->getProyecto();
			case 'fechaEntrega': 
				return $this->getFechaEntrega();	
			case 'costo': 
				return $this->getCosto();
			case 'cif': 
				return $this->getCif();
			case 'manoObra': 
				return $this->getManoObra();
			case 'otros': 
				return $this->getOtros();
			case 'tornilleria': 
				return $this->getTornilleria();
			case 'costoTotal': 
				return $this->getCostoTotal();
			case 'cantidad': 
				return $this->getCantidad();
			case 'habilitado':
				return $this->getHabilitado();
			case 'fechaRegistro': 
				return $this->getFechaRegistro();
			case 'idProductos':
				return $this->getIdProductos();
			case 'idProductosG':
				return $this->getIdProductosG();
			case 'idProductosI':
				return $this->getIdProductosI();
			case 'codigoProductos':
				return $this->getCodigoProductos();
			case 'nombreProductos':
				return $this->getNombreProductos();
			case 'imagenProductos':
				return $this->getImagenProductos();
			case 'loteProductos':
				return $this->getLoteProductos();
			case 'cantidadProductos':
				return $this->getCantidadProductos();
			case 'cantidadProductosG':
				return $this->getCantidadProductosG();
			case 'cantidadTProductos':
				return $this->getCantidadTProductos();
			case 'valorUnitarioProductos':
				return $this->getValorUnitarioProductos();	
			case 'idUsuario':
				return $this->getIdUsuario();
			case 'idProyecto':
				return $this->getIdProyecto();
			case 'idProductoOrden':
				return $this->getIdProductoOrden();
			case 'codigoProducto':
				return $this->getCodigoProducto();
			case 'nombreProducto':
				return $this->getNombreProducto();
			case 'nota':
				return $this->getNota();
			case 'tipoMovimiento':
				return $this->getTipoMovimiento();
			case 'registrado':
				return $this->getRegistrado();
			case 'pendiente':
				return $this->getPendiente();
			case 'indCotizacion':
				return $this->getIndCotizacion();
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
		include_once($this->getPath().'html/tran/orden.php');
		$html = "";
		$html = getInboxHtmlDataTableHead($texto,false);
		return $html;
	}
	
	public function getHtmlDataTable($texto){
		include_once($this->getPath().'html/tran/orden.php');
		$html = "";
		$html = getInboxHtmlDataTable($this->datos,$texto,false,$this->getPath());
		return $html;
	}
	
	public function getHtmlCotizacionDataTableHead($texto){
		include_once($this->getPath().'html/tran/orden.php');
		$html = "";
		$html = getHtmlCotizacionDataTableHead($texto,false);
		return $html;
	}
	
	public function getHtmlCotizacionDataTable($texto){
		include_once($this->getPath().'html/tran/orden.php');
		$html = "";
		$html = getHtmlCotizacionDataTable($this->datos,$texto,false,$this->getPath());
		return $html;
	}

	public function getHtmlCotizacionProductosDataTable($texto,$js){
		include_once($this->getPath().'html/tran/orden.php');
		$productos = array();
		$countProductos = count($this->idProductos);
		if(count($this->idProductos) == $countProductos &&
		count($this->idProductosG) == $countProductos &&
		count($this->idProductosI) >= $countProductos &&
		count($this->codigoProductos) == $countProductos &&
		count($this->nombreProductos) == $countProductos &&
		count($this->cantidadProductos) >= $countProductos &&
		count($this->cantidadTProductos) == $countProductos &&
		count($this->valorUnitarioProductos) == $countProductos){
			foreach($this->idProductos as $key=>$val){				
				$producto = array("id"=>$val, "idProducto"=>$this->idProductosG[$key], "idProductoI"=>$this->idProductosI[$key], "nombre"=>$this->nombreProductos[$key], "imagen"=>$this->imagenProductos[$key], "cantidad"=>$this->cantidadProductos[$key], "cantidadTotal"=>$this->cantidadTProductos[$key],"valorUnitario"=>$this->valorUnitarioProductos[$key],"otros"=>$this->otros,"manoObra"=>$this->manoObra,"tornilleria"=>$this->tornilleria,"idProyecto"=>$this->idProyecto,"indCotizacion"=>$this->indCotizacion);
				array_push($productos,$producto);
			}
		} else {
			echo "<tr><td>Error"." - ID: ".count($this->idProductos)." - IDG: ".count($this->idProductosG)." - IDI: ".count($this->idProductosI)." - CO: ".count($this->nombreProductos)." - IM:".count($this->imagenProductos)." - CA:".count($this->cantidadProductos)." - VU:".count($this->valorUnitarioProductos)."</td></tr>";
		}	
       
		$html = "";
		$html = getHtmlCotizacionProductoDataTable($productos,$texto,$js,$this->getPath());
		if($js){
			echo $html;
		} else {
			return $html;
		}
	}

	public function getHtmlDataTableProd($texto){
		include_once($this->getPath().'html/mtto/productoOrden.php');
		$html = "";
		$html = getInboxHtmlDataTable($this->datos,$texto,false,$this->getPath());
		return $html;
	}
	
	public function getHtmlCotizacionDataTableHeadProd($texto){
		include_once($this->getPath().'html/mtto/productoOrden.php');
		$html = "";
		$html = getHtmlCotizacionDataTableHead($texto,false);
		return $html;
	}
	
	public function getHtmlCotizacionDataTableProd($texto){
		include_once($this->getPath().'html/mtto/productoOrden.php');
		$html = "";
		$html = getHtmlCotizacionDataTableProd($this->datos,$texto,false,$this->getPath());
		return $html;
	}

	public function getHtmlCotizacionProductosDataTableProd($texto,$js){
		include_once($this->getPath().'html/mtto/productoOrden.php');
		$productos = array();
		$countProductos = count($this->idProductos);
		if(count($this->idProductos) == $countProductos &&
		count($this->codigoProductos) == $countProductos &&
		count($this->nombreProductos) == $countProductos &&
		count($this->cantidadProductos) == $countProductos){
			foreach($this->idProductos as $key=>$val){				
				$producto = array("id"=>$val, "nombre"=>$this->nombreProductos[$key], "imagen"=>$this->imagenProductos[$key], "cantidad"=>$this->cantidadProductos[$key]);
				array_push($productos,$producto);
			}
		} else {
			echo "<tr><td>Error"." - ID: ".count($this->idProductos)." - CO: ".count($this->nombreProductos)." - IM:".count($this->imagenProductos)." - CA:".count($this->cantidadProductos)."</td></tr>";
		}
       
		$html = "";
		$html = getHtmlCotizacionProductoDataTable($productos,$texto,$js,$this->getPath());
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
		if(count($boton)==5){
			$this->boton = $boton;
		}
	}
	
	private function getCampo() {
        return array(
        	'id' => $this->campo[0],		
			'costo' => $this->campo[1],
			'cantidad' => $this->campo[2],
			'fechaRegistro' => $this->campo[3],
			'habilitado' => $this->campo[4],
			'lote' => $this->campo[5],
			'cliente' => $this->campo[6],
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

	private function setLote($lote) {
		$this->lote = $lote;
	}

	private function getLote() {
		return $this->lote;
	}

	private function setCliente($cliente) {
		$this->cliente = $cliente;
	}

	private function getCliente() {
		return $this->cliente;
	}

	private function setProyecto($proyecto) {
		$this->proyecto = $proyecto;
	}

	private function getProyecto() {
		return $this->proyecto;
	}

	private function setFechaEntrega($fechaEntrega) {
		$this->fechaEntrega = $fechaEntrega;
	}

	private function getFechaEntrega() {
		return $this->fechaEntrega;
	}

	private function setPath($path) {
		$this->path = $path;
	}

	private function getPath() {
		return $this->path;
	}

	private function setCosto($costo) {
		$this->costo = $costo;
	}

	private function getCif() {
		return $this->cif;
	}

	private function setCif($cif) {
		$this->cif = $cif;
	}

	private function getManoObra() {
		return $this->manoObra;
	}

	private function setManoObra($manoObra) {
		$this->manoObra = $manoObra;
	}

	private function getOtros() {
		return $this->otros;
	}

	private function setOtros($otros) {
		$this->otros = $otros;
	}

	private function getTornilleria() {
		return $this->tornilleria;
	}

	private function setTornilleria($tornilleria) {
		$this->tornilleria = $tornilleria;
	}

	private function getCostoTotal() {
		return $this->costoTotal;
	}

	private function setCostoTotal($costoTotal) {
		$this->costoTotal = $costoTotal;
	}

	private function getCosto() {
		return $this->costo;
	}

	private function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}

	private function getCantidad() {
		return $this->cantidad;
	}

	private function setFechaRegistro($fechaRegistro) {
		$this->fechaRegistro = $fechaRegistro;
	}

	private function getFechaRegistro() {
		return $this->fechaRegistro;
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

	private function setIdProductosI($idProductosI) {
		$this->idProductosI = $idProductosI;
	}

	private function getIdProductosI() {
		return $this->idProductosI;
	}
	
	private function setCodigoProductos($codigoProductos) {
		$this->codigoProductos = $codigoProductos;
	}

	private function getCodigoProductos() {
		return $this->codigoProductos;
	}	

	private function setLoteProductos($loteProductos) {
		$this->loteProductos = $loteProductos;
	}

	private function getLoteProductos() {
		return $this->loteProductos;
	}

	private function setNombreProductos($nombreProductos) {
		$this->nombreProductos = $nombreProductos;
	}

	private function getNombreProductos() {
		return $this->nombreProductos;
	}
	
	private function setCantidadProductos($cantidadProductos) {
		$this->cantidadProductos = $cantidadProductos;
	}
	
	private function getCantidadProductos() {
		return $this->cantidadProductos;
	}

	private function setCantidadProductosG($cantidadProductosG) {
		$this->cantidadProductosG = $cantidadProductosG;
	}
	
	private function getCantidadProductosG() {
		return $this->cantidadProductosG;
	}

	private function setCantidadTProductos($cantidadTProductos) {
		$this->cantidadTProductos = $cantidadTProductos;
	}
	
	private function getCantidadTProductos() {
		return $this->cantidadTProductos;
	}

	private function setImagenProductos($imagenProductos) {
		$this->imagenProductos = $imagenProductos;
	}

	private function getImagenProductos() {
		return $this->imagenProductos;
	}		
		
	private function setValorUnitarioProductos($valorUnitarioProductos) {
		$this->valorUnitarioProductos = $valorUnitarioProductos;
	}

	private function getValorUnitarioProductos() {
		return $this->valorUnitarioProductos;
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

	private function setIdProductoOrden($idProductoOrden) {
		$this->idProductoOrden = $idProductoOrden;
	}

	private function getIdProductoOrden() {
		return $this->idProductoOrden;
	}

	private function setCodigoProducto($codigoProducto) {
		$this->codigoProducto = $codigoProducto;
	}

	private function getCodigoProducto() {
		return $this->codigoProducto;
	}

	private function setNombreProducto($nombreProducto) {
		$this->nombreProducto = $nombreProducto;
	}

	private function getNombreProducto() {
		return $this->nombreProducto;
	}		

	private function setNota($nota) {
		$this->nota = $nota;
	}

	private function getNota() {
		return $this->nota;
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

	private function getPendiente() {
		return $this->pendiente;
	}

	private function setPendiente($pendiente) {
		$this->pendiente = $pendiente;
	}

	private function getIndCotizacion() {
		return $this->indCotizacion;
	}

	private function setIndCotizacion($indCotizacion) {
		$this->indCotizacion = $indCotizacion;
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