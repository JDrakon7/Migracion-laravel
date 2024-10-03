<?php


 class Sistema implements Serializable {

	//Variables que unicamente se podran usar en la clase Sistema
	private $app;
	private $nombre;
	private $path;
	private $urlWww;
	private $urlApp;
	private $pathPlantilla;
	private $keyDefault;
	private $lang;
	
	public function __construct() {
		$this->app="/www/inventario";
		$this->nombre="Parques Infantiles";
		$this->path="";
		$this->urlWww='http://grupoazlo.com';
		$this->urlApp=$this->urlWww.$this->app;
		$this->pathPlantilla='templates/';
		$this->keyDefault='parquesinfantiles';
		$this->lang='es';
	}
	
	public function getArray() {
		return array(
			'app' => $this->app,
			'nombre' => $this->nombre,
			'path' => $this->path,
			'urlWww' => $this->urlWww,
			'urlApp' => $this->urlApp,
			'pathPlantilla' => $this->pathPlantilla,
			'keyDefault' => $this->keyDefault,
			'lang' => $this->lang
        );
    }
	
	public function serialize() {
        return serialize($this->getArray());
    }
    
    public function unserialize($data) {
        $data = unserialize($data);
        $this->app = $data['app'];
		$this->nombre = $data['nombre'];
		$this->path = $data['path'];
		$this->urlWww = $data['urlWww'];
        $this->urlApp = $data['urlApp'];
		$this->pathPlantilla = $data['pathPlantilla'];
		$this->keyDefault = $data['keyDefault'];
		$this->lang = $data['lang'];
    }
	
	public function __set($name,$value) {
		switch($name) {
			case 'app':
				return $this->setApp($value);
			case 'nombre':
				return $this->setNombre($value);
			case 'path':
				return $this->setPath($value);
			case 'urlWww': 
				return $this->setUrlWww($value);
			case 'urlApp':
				return $this->setUrlApp($value);
			case 'pathPlantilla':
				return $this->setPathPlantilla($value);
			case 'keyDefault':
				return $this->setKeyDefault($value);
			case 'lang':
				return $this->setLang($value);		
			
		}
	}

	public function __get($name) {
		switch($name) {
			case 'app':
				return $this->getApp();
			case 'nombre':
				return $this->getNombre();
			case 'path':
				return $this->getPath();
			case 'urlWww': 
				return $this->getUrlWww();
			case 'urlApp':
				return $this->getUrlApp();
			case 'pathPlantilla':
				return $this->getPathPlantilla();
			case 'keyDefault':
				return $this->getKeyDefault();
			case 'lang':
				return $this->getLang();
		}
	}
	
	// public function getIdioma($lang) {
	// 	include_once $this->path.'lib/Lenguaje.php';
	// 	$lenguaje = new Lenguaje();
	// 	$idioma = $lenguaje->getLenguaje($this->path.'lang',$this->lang);
	// 	return $idioma;
	// }
	
	// public function getIdiomaPdf($lang) {
	// 	include_once $this->path.'lib/Lenguaje.php';
	// 	$lenguaje = new Lenguaje();
	// 	$idioma = $lenguaje->getLenguaje($this->path.'lang',$this->lang);
	// 	return array_map("utf8_decode", $idioma );
	// }
	
	public function getPieDePagina(){
		return "<div class=\"pull-right hidden-xs\"><b>Version</b> 1.0.0</div>"
			."<strong>Copyright EULA &copy; 2015 <br />	<a href=\"http://www.diegoherrera.com\">Herrera</a>.</strong> Derechos Reservados.";
	}
	
	public function getRutaAnterior(){
		if(isset($_SESSION['pathAnterior'])){
			return $_SESSION['pathAnterior'];
		} else {
			return "";
		}
	}
	
	public function getRutaActual($rutaLocal){
		$_SESSION['pathActual'] = $rutaLocal;
		return $_SESSION['pathActual'];
	}
	
	private function setApp($app) {
		$this->app = $app;
	}

	private function getApp() {
		return $this->app;
	}

	private function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	private function getNombre() {
		return $this->nombre;
	}

	private function setPath($path) {
		$this->path = $path;
	}

	private function getPath() {
		return $this->path;
	}
	
	private function setUrlWww($urlWww) {
		$this->urlWww = $urlWww;
	}

	private function getUrlWww() {
		return $this->urlWww;
	}

	private function setUrlApp($urlApp) {
		$this->urlApp = $urlApp;
	}

	private function getUrlApp() {
		return $this->urlApp;
	}
	
	private function setPathPlantilla($pathPlantilla) {
		$this->pathPlantilla = $pathPlantilla;
	}

	private function getPathPlantilla() {
		if(isset($this->path) && $this->path!=null && $this->path!=""){
			return $this->path.$this->pathPlantilla;
		} else{
			return $this->pathPlantilla;
		}
	}
	
	private function setKeyDefault($keyDefault) {
		$this->keyDefault = $keyDefault;
	}

	private function getKeyDefault() {
		return $this->keyDefault;
	}
	
	private function setLang($lang) {
		$this->lang = $lang;
	}

	private function getLang() {
		return $this->lang;
	}
	
}

?>