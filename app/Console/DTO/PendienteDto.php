<?php

namespace App\DTO;

use Serializable;

class PendienteDto implements Serializable{

    private $path;
    private $id;
    private $idOrden;
    private $nombreProducto;
    private $lote;	
    private $cantidad;
    private $cantidadPendiente;
    private $fechasRegistro;
    
function __construct()	{
    $this->boton=array('1','','','1','1');
    $this->campo=array('1','1','1','1','1');
}

public function getArray() {
    return array(
        'path' => $this->path,
        'id' => $this->id,
        'idOrden' => $this->idOrden,
        'nombreProducto' => $this->nombreProducto,	
        'lote' => $this->lote,		
        'cantidad' => $this->cantidad,
        'cantidadPendiente' => $this->cantidadPendiente,
        'fechasRegistro' => $this->fechasRegistro
    );
}

public function serialize() {
    return serialize($this->getArray());
}

public function unserialize($data) {
    $data = unserialize($data);
    if(isset($data['path'])){$this->path = $data['path'];}
    if(isset($data['id'])){$this->id = $data['id'];}
    if(isset($data['idOrden'])){$this->idOrden = $data['idOrden'];}
    if(isset($data['nombreProducto'])){$this->nombreProducto = $data['nombreProducto'];}   
    if(isset($data['lote'])){$this->lote = $data['lote'];}      
    if(isset($data['cantidad'])){$this->cantidad = $data['cantidad'];}
    if(isset($data['cantidadPendiente'])){$this->cantidadPendiente = $data['cantidadPendiente'];}
    if(isset($data['fechasRegistro'])){$this->fechasRegistro = $data['fechasRegistro'];}
}

public function __set($name,$value) {
    switch($name) {
        case 'path': 
            return $this->setPath($value);
        case 'id': 
            return $this->setId($value);
        case 'idOrden': 
            return $this->setIdOrden($value);
        case 'nombreProducto':
            return $this->setNombreProducto($value);	
        case 'lote':
            return $this->setLote($value);		
        case 'cantidad': 
            return $this->setCantidad($value);
        case 'cantidadPendiente': 
            return $this->setCantidadPendiente($value);
        case 'fechasRegistro': 
            return $this->setFechasRegistro($value);
    }
}

public function __get($name) {
    switch($name) {
        case 'path': 
            return $this->getPath();
        case 'id': 
            return $this->getId();
        case 'idOrden': 
            return $this->getIdOrden();
        case 'nombreProducto':
            return $this->getNombreProducto();		
        case 'lote':
            return $this->getLote();	
        case 'cantidad':
            return $this->getCantidad();
        case 'cantidadPendiente': 
            return $this->getCantidadPendiente();
        case 'fechasRegistro': 
            return $this->getFechasRegistro();
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
        'idOrden' => $this->campo[1],
        'nombreProducto' => $this->campo[2],			
        'cantidad' => $this->campo[3],
        'cantidadPendiente' => $this->campo[4]
    );
}

private function setCampo($campo) {
    if(count($campo)==16){
        $this->campo = $campo;
    }
}

private function setPath($path) {
    $this->path = $path;
}

private function getPath() {
    return $this->path;
}

private function setId($id) {
    $this->id = $id;
}

private function getId() {
    return $this->id;
}

private function setIdOrden($idOrden) {
    $this->idOrden = $idOrden;
}

private function getIdOrden() {
    return $this->idOrden;
}

private function setNombreProducto($nombreProducto) {
    $this->nombreProducto = $nombreProducto;
}

private function getNombreProducto() {
    return $this->nombreProducto;
}

private function setLote($lote) {
    $this->lote = $lote;
}

private function getLote() {
    return $this->lote;
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

private function setFechasRegistro($fechasRegistro) {
    $this->fechasRegistro = $fechasRegistro;
}

private function getFechasRegistro() {
    return $this->fechasRegistro;
}

}
