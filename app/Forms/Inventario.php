<?php	

namespace App\Forms;

use Serializable;

class Inventario implements Serializable 
{
    private $path;
    private $tabla;
	private $tipo;
	private $tablaTitulo;
	private $boton;
	private $datos;
	private $datoSeleccionado;
	
	private $cantidadPorPagina;
	private $pagina;


    public function __construct() {
		$path='../';
		$this->boton=array('1','1','1');
	}
	
	public function serialize() {

        return serialize(
            array(
				'path' => $this->path,
				'tabla' => $this->tabla,
				'tipo' => $this->tipo,
				'tablaTitulo' => $this->tablaTitulo,
				'datos' => $this->datos,
				'cantidadPorPagina' => $this->cantidadPorPagina,
				'pagina' => $this->pagina,
				'datoSeleccionado' => $this->datoSeleccionado,
				'boton' => $this->boton
            )
        );
    }


    public function unserialize($data) {
		//echo "Unserialize\n Data:$data.<br />";
        $data = unserialize($data);
		if(isset($data['path'])){$this->path = $data['path'];}
		if(isset($data['tabla'])){$this->tabla = $data['tabla'];}
		if(isset($data['tipo'])){$this->tipo = $data['tipo'];}
		if(isset($data['tablaTitulo'])){$this->tablaTitulo = $data['tablaTitulo'];}
		if(isset($data['datos'])){$this->datos = $data['datos'];}
		if(isset($data['datoSeleccionado'])){$this->datoSeleccionado = $data['datoSeleccionado'];}
		if(isset($data['boton'])){$this->boton = $data['boton'];}
		
		if(isset($data['cantidadPorPagina'])){$this->cantidadPorPagina = $data['cantidadPorPagina'];}
		if(isset($data['pagina'])){$this->pagina = $data['pagina'];}
		
    }


    public function __set($name,$value) {
		
		switch($name) {
			case 'path': 
				return $this->setPath($value);
			case 'tabla': 
				return $this->setTabla($value);
			case 'tipo': 
				return $this->setTipo($value);
			case 'tablaTitulo': 
				return $this->setTablaTitulo($value);
			case 'datos': 
				return $this->setDatos($value);
			case 'datoSeleccionado': 
				return $this->setDatoSeleccionado($value);
			case 'boton':
				return $this->setBoton($value);
			case 'cantidadPorPagina':
				return $this->setCantidadPorPagina($value);
			case 'pagina':
				return $this->setPagina($value);
		}
	}

    public function __get($name) {
		switch($name) {
			case 'tabla': 
				return $this->getTabla();
			case 'path': 
				return $this->getPath();
			case 'tipo': 
				return $this->getTipo();
			case 'tablaTitulo': 
				return $this->getTablaTitulo();
			case 'datos': 
				return $this->getDatos();
			case 'datoSeleccionado': 
				return $this->getDatoSeleccionado();
			case 'boton':
				return $this->getBoton();
			case 'cantidadPorPagina':
				return $this->getCantidadPorPagina();
			case 'pagina':
				return $this->getPagina();
		}
	}




    public function getHtmlCantidadDatos(){
		$html = "";
		if(count($this->datos)>0){
			$html .= "1-".count($this->datos); 
		} else {
			$html .= "0";
		}
		return $html;
	}

    public function getHtmlDataTableHead($texto){
		$html = "";
		if(null!==$this->getTipo() && $this->getTipo()!="" && null!==$this->getTabla() && $this->getTabla()!=""){
			include_once($this->getPath().'html/'.$this->getTipo().'/'.$this->getTabla().'.php');
			$html = getInboxHtmlDataTableHead($texto,false);
		}
		return $html;
	}

    public function getHtmlDataTable($texto){
		$html = "";
		if(null!==$this->getTipo() && $this->getTipo()!="" && null!==$this->getTabla() && $this->getTabla()!=""){
			include_once($this->getPath().'html/'.$this->getTipo().'/'.$this->getTabla().'.php');
			if($this->getTabla()=='cotizacion' || $this->getTabla()=='cliente' || $this->getTabla()=='producto'){
				include_once $this->getPath().'model/Constante.php';
				$cantidadPorPagina = Constante::valor("PAGINA",$this->getPath());
				if($cantidadPorPagina=="0"){
					$cantidadPorPagina=15;
				}
				if ($this->getPagina()>0) {
					$cantidadInicial = ($this->getPagina() - 1) * $cantidadPorPagina;
				} else {
					$cantidadInicial = 0;
				}
				$html = getInboxHtmlDataTableNew($this->datos,$texto,false,'',$cantidadPorPagina,$cantidadInicial);
			} else{
				$html = getInboxHtmlDataTable($this->datos,$texto,false,'');
			}
		} else {
			$html = "Error en los datos de configuración favor ingrese nuevamente, si persiste comunicaque con el administrador del sistema.";
		}
		return $html;
	}
	
















    /* GET AND SET */
	
	private function getBoton() {
        return array(
			'cmd_nuevo' => $this->boton[0],
			'cmd_modificar' => $this->boton[1],
			'cmd_eliminar' => $this->boton[2]
		);
    }
	
	private function setBoton($boton) {
		if(count($boton)==3){
			$this->boton = $boton;
		}
	}

	private function getPath() {
		return $this->path;
	}
		
	private function setPath($path) {
		$this->path = $path;
	}

	private function getTabla() {
		return $this->tabla;
	}
		
	private function setTabla($tabla) {
		$this->tabla = $tabla;
	}

	private function getTipo() {
		return $this->tipo;
	}
		
	private function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	private function getTablaTitulo() {
		return $this->tablaTitulo;
	}
	
	private function setTablaTitulo($tablaTitulo) {
		$this->tablaTitulo = $tablaTitulo;
	}

	private function getDatos() {
		return $this->datos;
	}
		
	private function setDatos($datos) {
		$this->datos = $datos;
	}

	private function getDatoSeleccionado() {
		return $this->datoSeleccionado;
	}
		
	private function setDatoSeleccionado($datoSeleccionado) {
		$this->datoSeleccionado = $datoSeleccionado;
	}
	
	private function getCantidadPorPagina() {
		return $this->cantidadPorPagina;
	}
		
	private function setCantidadPorPagina($cantidadPorPagina) {
		$this->cantidadPorPagina = $cantidadPorPagina;
	}
	
	private function getPagina() {
		return $this->pagina;
	}
		
	public function setPagina($pagina) {
		$this->pagina = $pagina;
	}
	
} ?>


}