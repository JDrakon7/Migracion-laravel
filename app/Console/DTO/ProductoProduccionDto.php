<?php 

namespace App\DTO;

use Serializable;

class ProductoProduccionDto implements Serializable 

{
	private $id;
    private $idProducto;
    private $idProductoI;
    private $codigo;
	private $nombre;
    private $lote;
    private $cliente;
    private $otros;
    private $tornilleria;
    private $manoObra;
    private $idProyecto;
    private $imagen;
	private $descripcion;
    private $cantidad;
    private $cantidadG;
    private $cantidadTotal;
    private $valorUnitario;
    private $valorUnitarioOld;
    private $indCotizacion;

    public function getArray() {
        return array(
            'id' => $this->id,
            'idProducto' => $this->idProducto,
            'idProductoI' => $this->idProductoI,
			'codigo' => $this->codigo,
			'nombre' => $this->nombre,
            'lote' => $this->lote,
            'cliente' => $this->cliente,
            'otros' => $this->otros,
            'tornilleria' => $this->tornilleria,
            'manoObra' => $this->manoObra,
            'idProyecto' => $this->idProyecto,
            'imagen' => $this->imagen,
			'descripcion' => $this->descripcion,
            'cantidad' => $this->cantidad,
            'cantidadG' => $this->cantidadG,
            'cantidadTotal' => $this->cantidadTotal,
            'valorUnitario' => $this->valorUnitario,
            'indCotizacion' => $this->indCotizacion,
            'valorUnitarioOld' => $this->valorUnitarioOld
        );
    }

    public function serialize() {
        return serialize($this->getArray());
    }

    public function unserialize($data) {

        $data = unserialize($data);
        if (isset($data['id'])) {
            $this->id = $data['id'];
        }
        if (isset($data['idProducto'])) {
            $this->idProducto = $data['idProducto'];
        }
        if (isset($data['idProductoI'])) {
            $this->idProductoI = $data['idProductoI'];
        }
		if (isset($data['codigo'])) {
            $this->codigo = $data['codigo'];
        }
		if (isset($data['nombre'])) {
            $this->nombre = $data['nombre'];
        }
        if (isset($data['lote'])) {
            $this->lote = $data['lote'];
        }
        if (isset($data['cliente'])) {
            $this->cliente = $data['cliente'];
        }
        if (isset($data['otros'])) {
            $this->otros = $data['otros'];
        }
        if (isset($data['tornilleria'])) {
            $this->tornilleria = $data['tornilleria'];
        }
        if (isset($data['manoObra'])) {
            $this->manoObra = $data['manoObra'];
        }
        if (isset($data['idProyecto'])) {
            $this->idProyecto = $data['idProyecto'];
        }
        if (isset($data['imagen'])) {
            $this->imagen = $data['imagen'];
        }		
		if (isset($data['descripcion'])) {
            $this->descripcion = $data['descripcion'];
        }
        if (isset($data['cantidad'])) {
            $this->cantidad = $data['cantidad'];
        }
        if (isset($data['cantidadG'])) {
            $this->cantidadG = $data['cantidadG'];
        }
        if (isset($data['cantidadTotal'])) {
            $this->cantidadTotal = $data['cantidadTotal'];
        }
        if (isset($data['valorUnitario'])) {
            $this->valorUnitario = $data['valorUnitario'];
        }
        if (isset($data['valorUnitarioOld'])) {
            $this->valorUnitarioOld = $data['valorUnitarioOld'];
        }
        if (isset($data['indCotizacion'])) {
            $this->indCotizacion = $data['indCotizacion'];
        }
    }

    public function __get($property) {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
    }
}


