<?php

///CAMBIAR TODOS LOS TDO Y LA PROGRAMACION ORIENTADO A ELLA EN Eloquent
namespace App\DTO;

use Serializable;


class ConstanteDto implements Serializable
{

	private $id;
	private $codigo;
	private $nombre;
	private $valor;
	private $descripcion;
	private $habilitado;
	private $seleccionado;
	private $boton;
	private $campo;


    public function __construct()
    {
        $this->boton = array('1', '', '', '1');
        $this->campo = array('1', '', '', '', '', '');
	}


    public function getArray()

    {
        return array(
			'id' => $this->id,
			'codigo' => $this->codigo,
			'nombre' => $this->nombre,
			'valor' => $this->valor,
			'descripcion' => $this->descripcion,
			'habilitado' => $this->habilitado,
			'seleccionado' => $this->seleccionado,
			'boton' => $this->boton,
			'campo' => $this->campo
		);

    }

    public function serialize()
    {
        return serialize ($this->getArray());
    }

    public function unserialize(string $data)

    {
        //echo "Unserialize\n Data:$data.<br />";
		$data = unserialize($data);
		//var_dump($this);
		if (isset($data['id'])) {
			$this->id = $data['id'];
		}
		if (isset($data['codigo'])) {
			$this->codigo = $data['codigo'];
		}
		if (isset($data['nombre'])) {
			$this->nombre = $data['nombre'];
		}
		if (isset($data['valor'])) {
			$this->valor = $data['valor'];
		}
		if (isset($data['descripcion'])) {
			$this->descripcion = $data['descripcion'];
		}
		if (isset($data['habilitado'])) {
			$this->habilitado = $data['habilitado'];
		}
		if (isset($data['seleccionado'])) {
			$this->seleccionado = $data['seleccionado'];
		}
		if (isset($data['boton'])) {
			$this->boton = $data['boton'];
		}
		if (isset($data['campo'])) {
			$this->campo = $data['campo'];
		}
    }


    public function __set($name, $value)
	{
		//echo "Set Nombre:$name, Valor:$value.<br />";
		switch ($name) {
			case 'id':
				return $this->setId($value);
			case 'codigo':
				return $this->setCodigo($value);
			case 'nombre':
				return $this->setNombre($value);
			case 'valor':
				return $this->setValor($value);
			case 'descripcion':
				return $this->setDescripcion($value);
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



    public function __get($name)
    {
        switch ($name) {
			case 'id':
				return $this->getId();
			case 'codigo':
				return $this->getCodigo();
			case 'nombre':
				return $this->getNombre();
			case 'valor':
				return $this->getValor();
			case 'descripcion':
				return $this->getDescripcion();
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


    private function getBoton()
    {
        return array(
			'cmd_guardar' => $this->boton[0],
			'cmd_modificar' => $this->boton[1],
			'cmd_eliminar' => $this->boton[2],
			'cmd_cancelar' => $this->boton[3]
		);
    }

    
	private function getCampo()
	{
		return array(
			'id' => $this->campo[0],
			'codigo' => $this->campo[1],
			'nombre' => $this->campo[2],
			'valor' => $this->campo[3],
			'descripcion' => $this->campo[4],
			'habilitado' => $this->campo[5]
		);
	}

    private function setBoton($boton)
    {
        if (count($boton) === 4)
        $this->boton = $boton;
    }




    private function setCampo($campo)
	{
		if (count($campo) == count($this->getCampo())) {
			$this->campo = $campo;
		}
	}

	private function setId($id)
	{
		$this->id = $id;
	}

	private function getId()
	{
		return $this->id;
	}

	private function setIdLista($idLista)
	{
		$this->idLista = $idLista;
	}

	private function getIdLista()
	{
		return $this->idLista;
	}

	private function setCodigo($codigo)
	{
		$this->codigo = $codigo;
	}

	private function getCodigo()
	{
		return $this->codigo;
	}

	private function setNombre($nombre)
	{
		$this->nombre = $nombre;
	}

	private function getNombre()
	{
		return $this->nombre;
	}

	private function setValor($valor)
	{
		$this->valor = $valor;
	}

	private function getValor()
	{
		return $this->valor;
	}

	private function setDescripcion($descripcion)
	{
		$this->descripcion = $descripcion;
	}

	private function getDescripcion()
	{
		return $this->descripcion;
	}

	private function setHabilitado($habilitado)
	{
		$this->habilitado = $habilitado;
	}

	private function getHabilitado()
	{
		return $this->habilitado;
	}

	private function setSeleccionado($seleccionado)
	{
		$this->seleccionado = $seleccionado;
	}

	private function getSeleccionado()
	{
		return $this->seleccionado;
	}
}

