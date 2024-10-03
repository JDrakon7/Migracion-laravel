<?php


namespace App\DTO;

use Serializable;

class PendienteOrdenDto implements Serializable {

    
    private $id;
	private $nombre;
	private $codigo;
	private $cantidad;
	private $cantidadPendiente;
	private $costo;
	private $idProducto;
	private $idOrden;
	private $habilitado;
	private $seleccionado;
	private $boton;
	private $campo;

	public function __construct() {
		$this->boton=array('1','','','1');
		$this->campo=array('1','','','','','');
	}
	
	public function getArray() {
		return array(
			'id' => $this->id,
			'nombre' => $this->nombre,
			'codigo' => $this->codigo,
			'cantidad' => $this->cantidad,
			'cantidadPendiente' => $this->cantidadPendiente,
			'costo' => $this->costo,
			'idProducto' => $this->idProducto,
			'idOrden' => $this->idOrden,
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
		//echo "Unserialize\n Data:$data.<br />";
        $data = unserialize($data);
		//var_dump($this);
        if(isset($data['id'])){$this->id = $data['id'];}
		if(isset($data['nombre'])){$this->nombre = $data['nombre'];}
		if(isset($data['codigo'])){$this->codigo = $data['codigo'];}
		if(isset($data['cantidad'])){$this->cantidad = $data['cantidad'];}
		if(isset($data['cantidadPendiente'])){$this->cantidadPendiente = $data['cantidadPendiente'];}
		if(isset($data['costo'])){$this->costo = $data['costo'];}
		if(isset($data['idProducto'])){$this->idProducto = $data['idProducto'];}
		if(isset($data['idOrden'])){$this->idOrden = $data['idOrden'];}
		if(isset($data['habilitado'])){$this->habilitado = $data['habilitado'];}
		if(isset($data['seleccionado'])){$this->seleccionado = $data['seleccionado'];}
		if(isset($data['boton'])){$this->boton = $data['boton'];}
		if(isset($data['campo'])){$this->campo = $data['campo'];}
		//var_dump($this);
    }
	
	public function __set($name,$value) {
		//echo "Set Nombre:$name, Valor:$value.<br />";
		switch($name) {
			case 'id': 
				return $this->setId($value);
			case 'nombre':
				return $this->setNombre($value);
			case 'codigo':
				return $this->setCodigo($value);
			case 'cantidad':
				return $this->setCantidad($value);
			case 'cantidadPendiente':
				return $this->setCantidadPendiente($value);
			case 'costo':
				return $this->setCosto($value);
			case 'idProducto':
				return $this->setIdProducto($value);
			case 'idOrden':
				return $this->setIdOrden($value);
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
			case 'nombre':
				return $this->getNombre();
			case 'codigo':
				return $this->getCodigo();
			case 'cantidad':
				return $this->getCantidad();
			case 'cantidadPendiente':
				return $this->getCantidadPendiente();
			case 'costo':
				return $this->getCosto();
			case 'idProducto':
				return $this->getIdProducto();
			case 'idOrden':
				return $this->getIdOrden();
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
			'codigo' => $this->campo[1],
			'nombre' => $this->campo[2],
			'valor' => $this->campo[3],
			'descripcion' => $this->campo[4],
			'habilitado' => $this->campo[5]
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

	private function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	private function getNombre() {
		return $this->nombre;
	}

	private function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	private function getCodigo() {
		return $this->codigo;
	}

	private function setCantidad($cantidad) {
		$this->cantidad = $cantidad;
	}

	private function getCantidad() {
		return $this->cantidad;
	}
	
	private function setCantidadPendiente($cantidadPendiente) {
		$this->cantidadPendiente = $cantidadPendiente;
	}

	private function getCantidadPendiente() {
		return $this->cantidadPendiente;
	}
	
	private function setCosto($costo) {
		$this->costo = $costo;
	}

	private function getCosto() {
		return $this->costo;
	}
	
	private function setIdProducto($idProducto) {
		$this->idProducto = $idProducto;
	}

	private function getIdProducto() {
		return $this->idProducto;
	}
	
	private function setIdOrden($idOrden) {
		$this->idOrden = $idOrden;
	}

	private function getIdOrden() {
		return $this->idOrden;
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