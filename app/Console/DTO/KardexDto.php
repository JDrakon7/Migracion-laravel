<?php 

namespace App\DTO;

use Serializable;


class KardexDto implements Serializable

{
    private $id;
	private $cantidad;
	private $costo;
	private $valorVenta;
	private $lote;
	private $idProducto;
	private $nombreProducto;
	private $codigoProducto;
	private $imagen;
	private $nit;
	private $cliente;
	private $estado;
	private $habilitado;
	private $seleccionado;
	private $boton;
	private $campo;

	public function __construct() {
		$this->boton=array('1','','','1');
		$this->campo=array('1','','','','','','','');
	}
	
	public function getArray() {
		//echo "getArray\n";
		return array(
			'id' => $this->id,
			'cantidad' => $this->cantidad,
			'costo' => $this->costo,
			'valorVenta' => $this->valorVenta,
			'lote' => $this->lote,
			'idProducto' => $this->idProducto,
			'nombreProducto' => $this->nombreProducto,
			'codigoProducto' => $this->codigoProducto,
			'imagen' => $this->imagen,
			'nit' => $this->nit,
			'cliente' => $this->cliente,
			'estado' => $this->estado,
			'habilitado' => $this->habilitado,
			'seleccionado' => $this->seleccionado,
			'boton' => $this->boton,
			'campo' => $this->campo
        );
    }
	
	public function serialize() {
        return serialize($this->getArray());
    }
    
    public function unserialize($data) {
        $data = unserialize($data);

        if(isset($data['id'])){$this->id = $data['id'];}
		if(isset($data['cantidad'])){$this->cantidad = $data['cantidad'];}
		if(isset($data['costo'])){$this->costo = $data['costo'];}
		if(isset($data['valorVenta'])){$this->valorVenta = $data['valorVenta'];}
		if(isset($data['lote'])){$this->lote = $data['lote'];}
		if(isset($data['idProducto'])){$this->idProducto = $data['idProducto'];}
		if(isset($data['nombreProducto'])){$this->nombreProducto = $data['nombreProducto'];}
		if(isset($data['codigoProducto'])){$this->codigoProducto = $data['codigoProducto'];}
		if(isset($data['imagen'])){$this->imagen = $data['imagen'];}
		if(isset($data['nit'])){$this->nit = $data['nit'];}
		if(isset($data['cliente'])){$this->cliente = $data['cliente'];}
		if(isset($data['estado'])){$this->estado = $data['estado'];}
		if(isset($data['habilitado'])){$this->habilitado = $data['habilitado'];}
		if(isset($data['seleccionado'])){$this->seleccionado = $data['seleccionado'];}
		if(isset($data['boton'])){$this->boton = $data['boton'];}
		if(isset($data['campo'])){$this->campo = $data['campo'];}
    }
	
	public function __set($name,$value) {
		switch($name) {
			case 'id': 
				return $this->setId($value);
			case 'cantidad':
				return $this->setCantidad($value);
			case 'costo':
				return $this->setCosto($value);
			case 'valorVenta':
				return $this->setValorVenta($value);
			case 'lote':
				return $this->setLote($value);
			case 'idProducto':
				return $this->setIdProducto($value);
			case 'nombreProducto':
				return $this->setNombreProducto($value);
			case 'codigoProducto':
				return $this->setCodigoProducto($value);
			case 'imagen':
					return $this->setImagen($value);
			case 'nit':
				return $this->setNit($value);
			case 'cliente':
				return $this->setCliente($value);
			case 'estado':
				return $this->setEstado($value);
			case 'habilitado':
				return $this->setHabilitado($value);
			case 'seleccionado':
				return $this->setSeleccionado($value);
			case 'boton':
				return $this->setBoton($value);
			case 'campo':
				return $this->setCampo($value);
		}
	}

	public function __get($name) {
		//echo "Get:\n'$name'\n";
		switch($name) {
			case 'id': 
				return $this->getId();
			case 'cantidad':
				return $this->getCantidad();
			case 'costo':
				return $this->getCosto();
			case 'valorVenta':
				return $this->getValorVenta();
			case 'lote':
				return $this->getLote();
			case 'idProducto':
				return $this->getIdProducto();
			case 'nombreProducto':
				return $this->getNombreProducto();
			case 'codigoProducto':
				return $this->getCodigoProducto();
			case 'imagen':
					return $this->getImagen();
			case 'nit':
				return $this->getNit();
			case 'cliente':
				return $this->getCliente();
			case 'estado':
				return $this->getEstado();
			case 'habilitado':
				return $this->getHabilitado();
			case 'seleccionado':
				return $this->getSeleccionado();
			case 'boton':
				return $this->getBoton();
			case 'campo':
				return $this->getCampo();
		}
	}
	
	/* GET AND SET */
	
	private function getBoton() {
        return array(
			'cmd_guardar' => $this->boton[0],
			'cmd_modificar' => $this->boton[1],
			'cmd_eliminar' => $this->boton[2],
			'cmd_cancelar' => $this->boton[3]
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
			'cantidad' => $this->campo[1],
			'costo' => $this->campo[2],
			'lote' => $this->campo[3],
			'idProducto' => $this->campo[4],
			'nombreProducto' => $this->campo[5],
			'codigoProducto' => $this->campo[6],
			'habilitado' => $this->campo[7]
		);
    }
	
	private function setCampo($campo) {
		if(count($campo)==count($this->getCampo())){
			$this->campo = $campo;
		}
	}	
	
	private function setId($id) {
		$this->id = $id;
	}

	private function getId() {
		return $this->id;
	}

	private function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}

	private function getCantidad() {
		return $this->cantidad;
	}
	
	private function setCosto($costo) {
		$this->costo = $costo;
	}

	private function getCosto() {
		return $this->costo;
	}

	private function setValorVenta($valorVenta) {
		$this->valorVenta = $valorVenta;
	}

	private function getValorVenta() {
		return $this->valorVenta;
	}
	
	private function setLote($lote) {
		$this->lote = $lote;
	}

	private function getLote() {
		return $this->lote;
	}
	
	private function setIdProducto($idProducto) {
		$this->idProducto = $idProducto;
	}

	private function getIdProducto() {
		return $this->idProducto;
	}
	
	private function setNombreProducto($nombreProducto) {
		$this->nombreProducto = $nombreProducto;
	}

	private function getNombreProducto() {
		return $this->nombreProducto;
	}

	private function setCodigoProducto($codigoProducto) {
		$this->codigoProducto = $codigoProducto;
	}

	private function getCodigoProducto() {
		return $this->codigoProducto;
	}

	private function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	private function getImagen() {
		return $this->imagen;
	}

	private function setNit($nit) {
		$this->nit = $nit;
	}

	private function getNit() {
		return $this->nit;
	}

	private function setCliente($cliente) {
		$this->cliente = $cliente;
	}

	private function getCliente() {
		return $this->cliente;
	}

	private function setEstado($estado) {
		$this->estado = $estado;
	}

	private function getEstado() {
		return $this->estado;
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
}