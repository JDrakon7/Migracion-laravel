<?php

namespace App\DTO;

use Serializable;


Class InventarioDto implements Serializable
{

private $id;
private $idMovimiento;
private $cif;
private $codigo;
private $nombre;
private $cantidad;
private $valor;
private $costo;
private $valorVenta;
private $valorTotVenta;
private $lote;
private $fechaRegistro;
private $cliente;
private $imagen;
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
        'idMovimiento' => $this->idMovimiento,
        'cif' => $this->cif,
        'codigo' => $this->codigo,
        'nombre' => $this->nombre,
        'cantidad' => $this->cantidad,
        'valor' => $this->valor,
        'costo' => $this->costo,
        'valorVenta' => $this->valorVenta,
        'valorTotVenta' => $this->valorTotVenta,
        'lote' => $this->lote,
        'fechaRegistro' => $this->fechaRegistro,
        'cliente' => $this->cliente,
        'imagen' => $this->imagen,
        'seleccionado' => $this->seleccionado,
        'boton' => $this->boton,
        'campo' => $this->campo
    );
}

public function serialize()
{
    return serialize($this->getArray());
}

public function unserialize($data)
{
    //echo "Unserialize\n Data:$data.<br />";
    $data = unserialize($data);
    //var_dump($this);
    if (isset($data['id'])) {
        $this->id = $data['id'];
    }
    if (isset($data['idMovimiento'])) {
        $this->idMovimiento = $data['idMovimiento'];
    }
    if (isset($data['cif'])) {
        $this->cif = $data['cif'];
    }
    if (isset($data['codigo'])) {
        $this->codigo = $data['codigo'];
    }
    if (isset($data['nombre'])) {
        $this->nombre = $data['nombre'];
    }
    if (isset($data['cantidad'])) {
        $this->cantidad = $data['cantidad'];
    }
    if (isset($data['valor'])) {
        $this->valor = $data['valor'];
    }
    if (isset($data['costo'])) {
        $this->costo = $data['costo'];
    }
    if (isset($data['valorVenta'])) {
        $this->valorVenta = $data['valorVenta'];
    }
    if (isset($data['valorTotVenta'])) {
        $this->valorTotVenta = $data['valorTotVenta'];
    }
    if (isset($data['lote'])) {
        $this->lote = $data['lote'];
    }
    if (isset($data['fechaRegistro'])) {
        $this->fechaRegistro = $data['fechaRegistro'];
    }
    if (isset($data['cliente'])) {
        $this->cliente = $data['cliente'];
    }
    if (isset($data['imagen'])) {
        $this->imagen = $data['imagen'];
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
    //var_dump($this);
}

public function __set($name, $value)
{
    //echo "Set Nombre:$name, Valor:$value.<br />";
    switch ($name) {
        case 'id':
            return $this->setId($value);
        case 'idMovimiento':
            return $this->setIdMovimiento($value);
        case 'cif':
            return $this->setCif($value);
        case 'codigo':
            return $this->setCodigo($value);
        case 'nombre':
            return $this->setNombre($value);
        case 'cantidad':
            return $this->setCantidad($value);
        case 'valor':
            return $this->setValor($value);
        case 'costo':
            return $this->setcosto($value);
        case 'valorVenta':
            return $this->setValorVenta($value);
        case 'valorTotVenta':
            return $this->setValorTotVenta($value);
        case 'lote':
            return $this->setLote($value);
        case 'fechaRegistro':
            return $this->setFechaRegistro($value);
        case 'cliente':
            return $this->setCliente($value);
        case 'imagen':
            return $this->setImagen($value);
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
    //echo "Get:\n'$name'\n";
    switch ($name) {
        case 'id':
            return $this->getId();
        case 'idMovimiento':
            return $this->getIdMovimiento();
        case 'cif':
            return $this->getCif();
        case 'codigo':
            return $this->getCodigo();
        case 'nombre':
            return $this->getNombre();
        case 'cantidad':
            return $this->getCantidad();
        case 'valor':
            return $this->getValor();
        case 'costo':
            return $this->getCosto();
        case 'valorVenta':
            return $this->getValorVenta();
        case 'valorTotVenta':
            return $this->getValorTotVenta();
        case 'lote':
            return $this->getLote();
        case 'fechaRegistro':
            return $this->getFechaRegistro();
        case 'cliente':
            return $this->getCliente();
        case 'imagen':
            return $this->getImagen();
        case 'seleccionado':
            return $this->getSeleccionado();
        case 'boton':
            return $this->getBoton();
        case 'campo':
            return $this->getCampo();
    }
}

/* GET AND SET */

private function getBoton()
{
    return array(
        'cmd_guardar' => $this->boton[0],
        'cmd_modificar' => $this->boton[1],
        'cmd_eliminar' => $this->boton[2],
        'cmd_cancelar' => $this->boton[3]
    );
}

private function setBoton($boton)
{
    if (count($boton) == 4) {
        $this->boton = $boton;
    }
}

private function getCampo()
{
    return array(
        'id' => $this->campo[0],
        'idMovimiento' => $this->campo[1],
        'cif' => $this->campo[2],
        'codigo' => $this->campo[3],
        'nombre' => $this->campo[4],
        'cantidad' => $this->campo[5],
        'valor' => $this->campo[6],
        'costo' => $this->campo[7],
        'valorVenta' => $this->campo[8],
        'valorTotVenta' => $this->campo[9],
        'lote' => $this->campo[10],
        'fechaRegistro' => $this->campo[11],
        'cliente' => $this->campo[12]
    );
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

private function setIdMovimiento($idMovimiento)
{
    $this->idMovimiento = $idMovimiento;
}

private function getIdMovimiento()
{
    return $this->idMovimiento;
}

private function setCif($cif)
{
    $this->cif = $cif;
}

private function getCif()
{
    return $this->cif;
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

private function setCantidad($cantidad)
{
    $this->cantidad = $cantidad;
}

private function getCantidad()
{
    return $this->cantidad;
}

private function setValor($valor)
{
    $this->valor = $valor;
}

private function getValor()
{
    return $this->valor;
}

private function setLote($lote)
{
    $this->lote = $lote;
}

private function getLote()
{
    return $this->lote;
}

private function setValorVenta($valorVenta)
{
    $this->valorVenta = $valorVenta;
}

private function getValorVenta()
{
    return $this->valorVenta;
}

private function setValorTotVenta($valorTotVenta)
{
    $this->costo = $valorTotVenta;
}

private function getValorTotVenta()
{
    return $this->valorTotVenta;
}

private function setCosto($costo)
{
    $this->costo = $costo;
}

private function getCosto()
{
    return $this->costo;
}

private function setFechaRegistro($fechaRegistro)
{
    $this->fechaRegistro = $fechaRegistro;
}

private function getFechaRegistro()
{
    return $this->fechaRegistro;
}

private function setCliente($cliente)
{
    $this->cliente = $cliente;
}

private function getCliente()
{
    return $this->cliente;
}

private function setImagen($imagen)
{
    $this->imagen = $imagen;
}

private function getImagen()
{
    return $this->imagen;
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
