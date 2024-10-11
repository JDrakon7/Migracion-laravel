<?php

namespace App\Forms;

use Serializable;



class Inbox implements Serializable

{

    private $path;
    private $tipo;
    private $tipoTabla;
    private $tabla;
    private $tablaTitulo;
    private $tablaId;
    private $boton;
    private $datos;
    private $datoSeleccionado;
    private $cantidadPorPagina;
    private $pagina;


    public function __construct()
    {
        $path = '../';
        $this->boton = array('1', '1', '1', '1', '1', '1', '1');
    }


    public function serialize()
    {

        return serialize(
            array(
                'path' => $this->path,
                'tipo' => $this->tipo,
                'tipoTabla' => $this->tipoTabla,
                'tabla' => $this->tabla,
                'tablaTitulo' => $this->tablaTitulo,
                'tablaId' => $this->tablaId,
                'datos' => $this->datos,
                'cantidadPorPagina' => $this->cantidadPorPagina,
                'pagina' => $this->pagina,
                'datoSeleccionado' => $this->datoSeleccionado,
                'boton' => $this->boton
            )
        );
    }


    public function unserialize($data)
    {

        $data = unserialize($data);

        if (isset($data['path'])) {
            $this->path = $data['path'];
        }
        if (isset($data['tipo'])) {
            $this->tipo = $data['tipo'];
        }
        if (isset($data['tipoTabla'])) {
            $this->tipoTabla = $data['tipoTabla'];
        }
        if (isset($data['tabla'])) {
            $this->tabla = $data['tabla'];
        }
        if (isset($data['tablaTitulo'])) {
            $this->tablaTitulo = $data['tablaTitulo'];
        }
        if (isset($data['tablaId'])) {
            $this->tablaId = $data['tablaId'];
        }
        if (isset($data['datos'])) {
            $this->datos = $data['datos'];
        }
        if (isset($data['datoSeleccionado'])) {
            $this->datoSeleccionado = $data['datoSeleccionado'];
        }
        if (isset($data['boton'])) {
            $this->boton = $data['boton'];
        }
        if (isset($data['cantidadPorPagina'])) {
            $this->cantidadPorPagina = $data['cantidadPorPagina'];
        }
        if (isset($data['pagina'])) {
            $this->pagina = $data['pagina'];
        }
    }


    public function __set($name, $value)
    {

        switch ($name) {
            case 'path':
                return $this->setPath($value);
            case 'tipo':
                return $this->setTipo($value);
            case 'tipoTabla':
                return $this->setTipoTabla($value);
            case 'tabla':
                return $this->setTabla($value);
            case 'tablaTitulo':
                return $this->setTablaTitulo($value);
            case 'tablaId':
                return $this->setTablaId($value);
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

    public function __get($name)
    {


        switch ($name) {
            case 'path':
                return $this->getPath();
            case 'tipo':
                return $this->getTipo();
            case 'tipoTabla':
                return $this->getTipoTabla();
            case 'tabla':
                return $this->getTabla();
            case 'tablaTitulo':
                return $this->getTablaTitulo();
            case 'tablaId':
                return $this->getTablaId();
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

			if($this->getTabla()=='usuario' || $this->getTabla()=='lista' || $this->getTabla()=='productoOrden' || $this->getTabla()=='producto' || $this->getTabla()=='orden' 
					|| $this->getTabla()=='kardex' || $this->getTabla()=='kardexAparta' || $this->getTabla()=='entrada' || $this->getTabla()=='salidaPendiente'
					|| $this->getTabla()=='salidaMP' || $this->getTabla()=='salidaPT' || $this->getTabla()=='salidaApartaPT' || $this->getTabla()=='entradaAparta'){

				include_once $this->getPath().'model/Constante.php';

				$cantidadPorPagina = ModelConstante::valor("PAGINA",$this->getPath());

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

	

	public function getHtmlDataTableFoot($texto){

		$html = "";
		$totalInventario = 0;

		include_once $this->getPath().'model/Constante.php';
		include_once $this->getPath().'model/Kardex.php';
		include_once $this->getPath().'model/KardexAparta.php';
		include_once $this->getPath().'model/Orden.php';

		$cantidadPorPagina = ModelConstante::valor("PAGINA",$this->getPath());

		if($cantidadPorPagina=="0"){
			$cantidadPorPagina=15;
		}

		if ($this->getPagina()>0) {
			$cantidadInicial = ($this->getPagina() - 1) * $cantidadPorPagina;
		} else {
			$cantidadInicial = 0;
			$this->setPagina(1);
		}

		$paginas = ceil(count($this->datos)/$cantidadPorPagina);
		
		$html .= "<input id=\"hCantidadPorPagina\" type=\"hidden\" value=\"".$cantidadPorPagina."\">";
		$html .= "<input id=\"hCantidadInicial\" type=\"hidden\" value=\"".$cantidadInicial."\">";
		$html .= "<div id=\"paginador\" class=\"bg-success\">";
		if($this->getTabla()=='kardex' && $this->getTipoTabla()=='PT'){
			$totalInventario = ModelKardex::totalInventario("PTER",$this->getPath());
			$totalInventario =  Util::getFormatoMoneda($totalInventario, '$', 0);
			$html .= "<div style=\"float: right;padding: 5px;\"><b>Total Inventario: ".$totalInventario."</b></div>";
		}
		if($this->getTabla()=='kardex' && $this->getTipoTabla()=='MP'){
			$totalInventario = ModelKardex::totalInventario("MATE",$this->getPath());
			$totalInventario =  Util::getFormatoMoneda($totalInventario, '$', 0);
			$html .= "<div style=\"float: right;padding: 5px;\"><b>Total Inventario: ".$totalInventario."</b></div>";
		}
		if($this->getTabla()=='kardexAparta'){
			$totalInventarioD = ModelKardexApartado::totalInventario("DES",$this->getPath());
			$totalInventarioD =  Util::getFormatoMoneda($totalInventarioD, '$', 0);
			$totalInventarioB = ModelKardexApartado::totalInventario("BOD",$this->getPath());
			$totalInventarioB =  Util::getFormatoMoneda($totalInventarioB, '$', 0);
			$html .= "<div style=\"float: right;padding: 5px;\"><b>Total Inventario Despachado: ".$totalInventarioD."</b></div>";
			$html .= "<div style=\"float: right;padding: 5px;\"><b>Total Inventario En Bodega: ".$totalInventarioB."</b></div>";
		}
		if($this->getTabla()=='orden'){
			$totalInventario = ModelOrden::totalInventario($this->getPath());
			$totalInventario =  Util::getFormatoMoneda($totalInventario, '$', 0);
			$html .= "<div style=\"float: right;padding: 5px;\"><b>Total Inventario: ".$totalInventario."</b></div>";
		}

		if ($paginas > 1){

			for ($i=1;$i<=$paginas;$i++){

				if ($this->getPagina() == $i){
					$html .= "<div class=\"pagina\">".$this->getPagina()."</div>";
				}else{
					$html .= "<div class=\"pagina\"><a href='inbox.php?p=".$i."'>".$i."</a></div>";
				}
			}

		}

		$html .= "<div style=\"clear:both;\"</div>";

		return $html;

	}




    
    private function getBoton()
    {

        $this->boton = array('1', '1', '1', '1', '1');

        return array(
            'cmd_nuevo' => $this->boton[0],
            'cmd_modificar' => $this->boton[1],
            'cmd_eliminar' => $this->boton[2],
            'cmd_cerrar' => $this->boton[3],
            'cmd_estado' => $this->boton[4]
        );
    }


    private function setBoton($boton)
    {

        if (count($boton) == 5) {
            $this->boton = $boton;
        }
    }



    private function getPath()
    {
        return $this->path;
    }



    private function setPath($path)
    {
        $this->path = $path;
    }



    private function getTabla()
    {
        return $this->tabla;
    }



    private function setTabla($tabla)
    {
        $this->tabla = $tabla;
    }



    private function getTipo()
    {
        return $this->tipo;
    }



    private function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }

    private function getTipoTabla()
    {
        return $this->tipoTabla;
    }



    private function setTipoTabla($tipoTabla)
    {
        $this->tipoTabla = $tipoTabla;
    }



    private function getTablaTitulo()
    {
        return $this->tablaTitulo;
    }


    private function setTablaTitulo($tablaTitulo)
    {
        $this->tablaTitulo = $tablaTitulo;
    }


    private function getTablaId()
    {
        return $this->tablaId;
    }


    private function setTablaId($tablaId)
    {
        $this->tablaId = $tablaId;
    }


    private function getDatos()
    {
        return $this->datos;
    }


    private function setDatos($datos)
    {
        $this->datos = $datos;
    }


    private function getDatoSeleccionado()
    {
        return $this->datoSeleccionado;
    }


    private function setDatoSeleccionado($datoSeleccionado)
    {
        $this->datoSeleccionado = $datoSeleccionado;
    }


    private function getCantidadPorPagina()
    {
        return $this->cantidadPorPagina;
    }


    private function setCantidadPorPagina($cantidadPorPagina)
    {
        $this->cantidadPorPagina = $cantidadPorPagina;
    }


    private function getPagina()
    {
        return $this->pagina;
    }


    public function setPagina($pagina)
    {
        $this->pagina = $pagina;
    }
}
