<?php

namespace App\DTO;

use Serializable;

class ProductoDto implements Serializable 
{
    private $id;
    private $codigo;
	private $nombre;	
	private $descripcion;
	private $costo;
	private $idTipo;
	private $idClasificacion;
	private $idUnidad;
	private $nomTipo;
	private $nomClasificacion;
	private $nomUnidad;
	private $imagen;
	private $habilitado;
	private $boton;
	private $campo;
	private $seleccionado;
	private $fileImagen;	
	
	function __construct()	{
		$this->boton=array('1','','','1');
		$this->campo=array('1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1','1');
	}

	public function getArray() {
		return array(
			'id' => $this->id,
			'codigo' => $this->codigo,
			'nombre' => $this->nombre,			
			'descripcion' => $this->descripcion,
			'costo' => $this->costo,
			'idTipo' => $this->idTipo,
			'nomTipo' => $this->nomTipo,
			'idClasificacion' => $this->idClasificacion,
			'nomClasificacion' => $this->nomClasificacion,
			'idUnidad' => $this->idUnidad,
			'nomUnidad' => $this->nomUnidad,
			'imagen' => $this->imagen,
			'habilitado' => $this->habilitado,
			'boton' => $this->boton,
			'campo' => $this->campo,
			'seleccionado' => $this->seleccionado,
			'fileImagen' => $this->fileImagen
        );
    }

    public function serialize() {
        return serialize($this->getArray());
    }

	public function unserialize($data) {
        $data = unserialize($data);
        if(isset($data['id'])){$this->id = $data['id'];}
        if(isset($data['codigo'])){$this->codigo = $data['codigo'];}
        if(isset($data['nombre'])){$this->nombre = $data['nombre'];}        
        if(isset($data['descripcion'])){$this->descripcion = $data['descripcion'];}
		if(isset($data['costo'])){$this->costo = $data['costo'];}
        if(isset($data['idTipo'])){$this->idTipo = $data['idTipo'];}
        if(isset($data['nomTipo'])){$this->nomTipo = $data['nomTipo'];}
		if(isset($data['idClasificacion'])){$this->idClasificacion = $data['idClasificacion'];}
        if(isset($data['nomClasificacion'])){$this->nomClasificacion = $data['nomClasificacion'];}
		if(isset($data['idUnidad'])){$this->idUnidad = $data['idUnidad'];}
        if(isset($data['nomUnidad'])){$this->nomUnidad = $data['nomUnidad'];}
        if(isset($data['imagen'])){$this->imagen = $data['imagen'];}
        if(isset($data['habilitado'])){$this->habilitado = $data['habilitado'];}
        if(isset($data['boton'])){$this->boton = $data['boton'];}
        if(isset($data['campo'])){$this->campo = $data['campo'];}
        if(isset($data['seleccionado'])){$this->seleccionado = $data['seleccionado'];}
        //var_dump($this);

    }

	
	public function __set($name,$value) {
		//echo "Set Nombre:$name, Valor:$value.<br />";
		switch($name) {
			case 'id': 
				return $this->setId($value);
			case 'codigo': 
				return $this->setCodigo($value);
			case 'nombre':
				return $this->setNombre($value);			
			case 'descripcion': 
				return $this->setDescripcion($value);
			case 'costo': 
				return $this->setCosto($value);
			case 'idTipo': 
				return $this->setIdTipo($value);
			case 'nomTipo': 
				return $this->setNomTipo($value);
		    case 'idClasificacion': 
				return $this->setIdClasificacion($value);
			case 'nomClasificacion': 
				return $this->setNomClasificacion($value);
			case 'idUnidad': 
				return $this->setIdUnidad($value);
			case 'nomUnidad': 
				return $this->setNomUnidad($value);
			case 'imagen': 
				return $this->setImagen($value);
			case 'habilitado': 
				return $this->setHabilitado($value);
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
		//echo "Get:\n'$name'\n";
		switch($name) {
			case 'id': 
				return $this->getId();
			case 'codigo': 
				return $this->getCodigo();
			case 'nombre':
				return $this->getNombre();			
			case 'descripcion':
				return $this->getDescripcion();
			case 'costo':
				return $this->getCosto();
			case 'idTipo': 
				return $this->getIdTipo();
			case 'nomTipo': 
				return $this->getNomTipo();
			case 'idClasificacion': 
				return $this->getIdClasificacion();
			case 'nomClasificacion': 
				return $this->getNomClasificacion();
			case 'idUnidad': 
				return $this->getIdUnidad();
			case 'nomUnidad': 
				return $this->getNomUnidad();
			case 'imagen': 
				return $this->getImagen();
			case 'habilitado':
				return $this->getHabilitado();
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
			'descripcion' => $this->campo[12],
			'idTipo' => $this->campo[13],
			'nomTipo' => $this->campo[14],
			'imagen' => $this->campo[15],
			'habilitado' => $this->campo[16]
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

	private function setCodigo($codigo) {
		$this->codigo = $codigo;
	}

	private function getCodigo() {
		return $this->codigo;
	}

	private function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	private function getNombre() {
		return $this->nombre;
	}

	private function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	private function getDescripcion() {
		return $this->descripcion;
	}

	private function setCosto($costo) {
		$this->costo = $costo;
	}

	private function getCosto() {
		return $this->costo;
	}

	private function setIdTipo($idTipo) {
		$this->idTipo = $idTipo;
	}

	private function getIdTipo() {
		return $this->idTipo;
	}

	private function setNomTipo($nomTipo) {
		$this->nomTipo = $nomTipo;
	}

	private function getNomTipo() {
		return $this->nomTipo;
	}

	private function setIdClasificacion($idClasificacion) {
		$this->idClasificacion = $idClasificacion;
	}

	private function getIdClasificacion() {
		return $this->idClasificacion;
	}

	private function setNomClasificacion($nomClasificacion) {
		$this->nomClasificacion = $nomClasificacion;
	}

	private function getNomClasificacion() {
		return $this->nomClasificacion;
	}

	private function setIdUnidad($idUnidad) {
		$this->idUnidad = $idUnidad;
	}

	private function getIdUnidad() {
		return $this->idUnidad;
	}

	private function setNomUnidad($nomUnidad) {
		$this->nomUnidad = $nomUnidad;
	}

	private function getNomUnidad() {
		return $this->nomUnidad;
	}

	private function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	private function getImagen() {
		return $this->imagen;
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



