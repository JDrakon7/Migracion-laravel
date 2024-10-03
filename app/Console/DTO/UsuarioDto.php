<?php

namespace App\DTO;

use Serializable;

class UsuarioDto implements Serializable

{
    private $id;
	private $usuario;
	private $nombre;
	private $correo;
	private $celular;
	private $imagen;
	private $cargo;
	private $idCargo;
	private $habilitado;
	private $lang;
	private $seleccionado;
	private $boton;
	private $campo;
	private $clave;
	private $confirmarClave;
	private $fileImagen;

	

	public function __construct() {
		$this->lang='es';
		$this->boton=array('1','1','1','1');
		$this->campo=array('1','1','1','1','1','1','1','1','1','1','1','1');
	}

	public function getArray() {

		return array(
			'id' => $this->id,
			'usuario' => $this->usuario,
			'nombre' => $this->nombre,
			'correo' => $this->correo,
			'celular' => $this->celular,
			'imagen' => $this->imagen,
			'fileImagen' => $this->fileImagen,
			'cargo' => $this->cargo,
			'idCargo' => $this->idCargo,
			'habilitado' => $this->habilitado,
			'clave' => $this->clave,
			'confirmarClave' => $this->confirmarClave,
			'lang' => $this->lang,
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
        if(isset($data['usuario'])){$this->usuario = $data['usuario'];}
		if(isset($data['nombre'])){$this->nombre = $data['nombre'];}
		if(isset($data['correo'])){$this->correo = $data['correo'];}
		if(isset($data['celular'])){$this->celular = $data['celular'];}
		if(isset($data['imagen'])){$this->imagen = $data['imagen'];}
		if(isset($data['cargo'])){$this->cargo = $data['cargo'];}
		if(isset($data['idCargo'])){$this->idCargo = $data['idCargo'];}
		if(isset($data['habilitado'])){$this->habilitado = $data['habilitado'];}
		if(isset($data['lang'])){$this->lang = $data['lang'];}
		if(isset($data['seleccionado'])){$this->seleccionado = $data['seleccionado'];}
		if(isset($data['boton'])){$this->boton = $data['boton'];}
		if(isset($data['campo'])){$this->campo = $data['campo'];}
		if(isset($data['clave'])){$this->clave = $data['clave'];}
		if(isset($data['confirmarClave'])){$this->confirmarClave = $data['confirmarClave'];}
    }

	

	public function __set($name,$value) {
		switch($name) {
			case 'id': 
				return $this->setId($value);
			case 'usuario':
				return $this->setUsuario($value);
			case 'nombre':
				return $this->setNombre($value);
			case 'correo':
				return $this->setCorreo($value);
			case 'celular':
				return $this->setCelular($value);
			case 'imagen':
				return $this->setImagen($value);
			case 'fileImagen':
				return $this->setFileImagen($value);
			case 'cargo':
				return $this->setCargo($value);
			case 'idCargo':
				return $this->setIdCargo($value);
			case 'habilitado':
				return $this->setHabilitado($value);
			case 'lang':
				return $this->setLang($value);
			case 'seleccionado':
				return $this->setSeleccionado($value);
			case 'boton':
				return $this->setBoton($value);
			case 'campo':
				return $this->setCampo($value);
			case 'clave':
				return $this->setClave($value);
			case 'confirmarClave':
				return $this->setConfirmarClave($value);
		}

	}



	public function __get($name) {

		switch($name) {

			case 'id': 
				return $this->getId();
			case 'usuario':
				return $this->getUsuario();
			case 'nombre':
				return $this->getNombre();
			case 'correo':
				return $this->getCorreo();
			case 'celular':
				return $this->getCelular();
			case 'imagen':
				return $this->getImagen();
			case 'fileImagen':
				return $this->getFileImagen();
			case 'cargo':
				return $this->getCargo();
     		case 'idCargo':
				return $this->getIdCargo();
			case 'habilitado':
				return $this->getHabilitado();
			case 'lang':
				return $this->getLang();
			case 'seleccionado':
				return $this->getSeleccionado();
			case 'boton':
				return $this->getBoton();
			case 'campo':
				return $this->getCampo();
			case 'clave':
				return $this->getClave();
			case 'confirmarClave':
				return $this->getConfirmarClave();
		}

	}

	

	public function getNavBarNotificaciones(){

		$htmlNotificaciones = "".

			"<!-- Notifications: style can be found in dropdown.less --><li class=\"dropdown notifications-menu\">".

			"	<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">".

			"		<i class=\"fa fa-bell-o\"></i>".

			"		<span class=\"label label-warning\">10</span>".

			"	</a>".

			"	<ul class=\"dropdown-menu\">".

			"		<li class=\"header\">You have 10 notifications</li>".

			"		<li>".

			"			<!-- inner menu: contains the actual data -->".

			"			<ul class=\"menu\">".

			"				<li>".

			"					<a href=\"#\">".

			"						<i class=\"fa fa-users text-aqua\"></i> 5 new members joined today".

			"					</a>".

			"				</li>".

			"				<li>".

			"					<a href=\"#\">".

			"						<i class=\"fa fa-warning text-yellow\"></i> Very long description here that may not fit into the page and may cause design problems".

			"					</a>".

			"				</li>".

			"				<li>".

			"					<a href=\"#\">".

			"						<i class=\"fa fa-users text-red\"></i> 5 new members joined".

			"					</a>".

			"				</li>".

			"				<li>".

			"					<a href=\"#\">".

			"						<i class=\"fa fa-shopping-cart text-green\"></i> 25 sales made".

			"					</a>".

			"				</li>".

			"				<li>".

			"					<a href=\"#\">".

			"						<i class=\"fa fa-user text-red\"></i> You changed your username".

			"					</a>".

			"				</li>".

			"			</ul>".

			"		</li>".

			"		<li class=\"footer\"><a href=\"#\">View all</a></li>".

			"	</ul>".

			"</li>";

		$htmlNotificaciones = "";

		return $htmlNotificaciones;

	}

	

	public function getNavBarUsuario($sistema,$texto){

		$htmlVistaMenuSuperior = "".

			"<!-- User Account: style can be found in dropdown.less --><li class=\"dropdown user user-menu\">" .

			"	<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">".

			"		<img src=\"".$sistema->app."/imagen/usuario/".$this->getImagen()."\" class=\"user-image\" alt=\"".$texto['usuario_imagen_alt']."\" />".

			"		<span class=\"hidden-xs\">".$this->getUsuario()."</span>".

			"	</a>".

			"	<ul class=\"dropdown-menu\">".

			"		<!-- User image --><li class=\"user-header\">".

			"			<img src=\"".$sistema->app."/imagen/usuario/".$this->getImagen()."\" class=\"img-circle\" alt=\"".$texto['usuario_imagen_alt']."\" />".

			"			<p>".$this->getNombre()."<small>".$this->getCorreo()."</small></p>".

			"		</li>".

			"		<!-- Menu Footer--><li class=\"user-footer\">".

			"			<div class=\"pull-left\">".

			"				<a href=\"".$sistema->app."/tran/perfil.php\" class=\"btn btn-default btn-flat\">".$texto['perfil_a']."</a>".

			"			</div>".

			"			<div class=\"pull-right\">".

			"				<a href=\"".$sistema->app."/tran/cerrarSesion.php\" class=\"btn btn-default btn-flat\">".$texto['cerrar_sesion_a']."</a>".

			"			</div>".

			"		</li>".

			"	</ul>".

			"</li>";

		return $htmlVistaMenuSuperior;

	}

	

	public function getSeccionMenu($sistema,$texto){

		$html = "".

			"<!-- sidebar: style can be found in sidebar.less --><section class=\"sidebar\">".

			"			<!-- search form --><form action=\"#\" method=\"get\" class=\"sidebar-form\" style=\"display:none;\">".

			"				<div class=\"input-group\">".

			"					<input type=\"text\" name=\"q\" class=\"form-control\" placeholder=\"".$texto['plantilla_sidebar_buscar_placeholder']."\" />".

			"					<span class=\"input-group-btn\">".

			"						<button type=\"submit\" name=\"search\" id=\"search-btn\" class=\"btn btn-flat\"><i class=\"fa fa-search\"></i></button>".

			"					</span>".

			"				</div>".

			"			</form><!-- /.search form -->".

			"			<!-- menu form<form id=\"frmMenu\" action=\"#\" method=\"post\" class=\"sidebar-form\"> -->".

			"			<!-- sidebar menu: : style can be found in sidebar.less --><ul class=\"sidebar-menu\">".

			"				<li class=\"header\">".$texto['plantilla_sidebar_menu_header']."</li>".

			"				<li>";
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "producc") === true || str_contains(strtolower($this->getCargo()), "administrativo") === true || str_contains(strtolower($this->getCargo()), "dise") === true || str_contains(strtolower($this->getCargo()), "comercial") === true || str_contains(strtolower($this->getCargo()), "especial") === true) {
			$html .= "	<li>"
			."					
							<a name=\"menu\" href=\"#\"><i class=\"fa fa-archive text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"mtto\"><input type=\"hidden\" name=\"modulo\" value=\"kardexApartaPT\"><span>Vendido PT</span></a>".
			"				</li>".
			"				<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-archive text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"mtto\"><input type=\"hidden\" name=\"modulo\" value=\"kardexPT\"><span>Inventario PT</span></a>".

			"				</li>"." <li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-archive text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"mtto\"><input type=\"hidden\" name=\"modulo\" value=\"kardexMP\"><span>Inventario MP</span></a>".

			"				</li>";
			}
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "producc") === true) {
			$html .="				<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-reply text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"salidaPT\"><span>Salidas PT</span></a>".

			"				</li>".

			"				<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-reply text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"salidaMP\"><span>Salidas MP</span></a>".

			"				</li>".

			"				<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-reply text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"salidaApartaPT\"><span>Salidas Vendido PT</span></a>".

			"				</li>".

			"				<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-puzzle-piece text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"orden\"><span>Ordenes de Producción</span></a>".

			"				</li>
							<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-puzzle-piece text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"salidaPendiente\"><span>Pendientes Producción</span></a>".

			"				</li>
							<li>";
			}			
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "compras") === true) {
			$html .= "	<li>"
			."					<a name=\"menu\" href=\"#\"><i class=\"fa fa-share text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"entrada\"><span>Entradas</span></a>".

			"				</li>";
			}
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "producc") === true || str_contains(strtolower($this->getCargo()), "administrativo") === true) {
			$html .= "<li>".

			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-share text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"entradaAparta\"><span>Entrada Vendido PT</span></a>".

			"				</li>";
			}
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "producc") === true || str_contains(strtolower($this->getCargo()), "dise") === true || str_contains(strtolower($this->getCargo()), "administrativo") === true) {
			$html .= "<li>".
			"					<a name=\"menu\" href=\"#\"><i class=\"fa fa-puzzle-piece text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"ordenCotizacion\"><span>Cotizar Producto</span></a>".

			"				</li>".
			"	<li>"	
			."					<a class=\"disabled\" name=\"menu\" href=\"#\"><i class=\"fa fa-line-chart text-light-blue\"></i><input type=\"hidden\" name=\"carpeta\" value=\"tran\"><input type=\"hidden\" name=\"modulo\" value=\"informe\"><span>Informes</span></a>".

			"				</li>";
			}
			$html .="			</ul>".

			"			<!-- </form>/.menu form -->".

			"        </section><!-- /.sidebar -->";

		return $html;

	}

	

	public function getHtmlConfiguracionLateral($sistema,$texto){

		$html = ""

			."<div id=\"mensajeConfiguracion\"></div>"

			."<ul class=\"control-sidebar-menu\">";

		if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "producc") === true) {

			$html .= "	<li>"

			."		<button type=\"submit\" name=\"tabla\" value=\"constante\" id=\"cmdConstante\" class=\"btn btn-flat\">"

			."			<i class=\"menu-icon fa fa-filter\"></i>"

			."			<div class=\"menu-info\">"

			."				<h4 class=\"control-sidebar-subheading\">".$texto['constante_title_izquierda']."</h4>"

			."				<p>".$texto['constante_title_derecha']."</p>"

			."			</div>"

			."		</button>"

			."	</li>";

			$html .= "	<li>"

			."		<button type=\"submit\" name=\"tabla\" value=\"lista\" id=\"cmdLista\" class=\"btn btn-flat\">"

			."			<i class=\"menu-icon fa fa-list-ul\"></i>"

			."			<div class=\"menu-info\">"

			."				<h4 class=\"control-sidebar-subheading\">".$texto['lista_title_izquierda']."</h4>"

			."				<p>".$texto['lista_title_derecha']."</p>"

			."			</div>"

			."		</button>"

			."	</li>";

			$html .= "	<li>"

			."		<button type=\"submit\" name=\"tabla\" value=\"usuario\" id=\"cmdUsuarios\" class=\"btn btn-flat\">"

			."			<i class=\"menu-icon fa fa-user\"></i>"

			."			<div class=\"menu-info\">"

			."				<h4 class=\"control-sidebar-subheading\">".$texto['usuario_title_izquierda']."</h4>"

			."				<p>".$texto['usuario_title_derecha']."</p>"

			."			</div>"

			."		</button>"

			."	</li>";
			}
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "compras") === true || str_contains(strtolower($this->getCargo()), "producc") === true) {

			$html .= "	<li>"

			."		<button type=\"submit\" name=\"tabla\" value=\"producto\" id=\"cmdProducto\" class=\"btn btn-flat\">"

			."			<i class=\"menu-icon fa fa-puzzle-piece\"></i>"

			."			<div class=\"menu-info\">"

			."				<h4 class=\"control-sidebar-subheading\">".$texto['producto_title_izquierda']."</h4>"

			."				<p>".$texto['producto_title_derecha']."</p>"

			."			</div>"

			."		</button>"

			."	</li>";
			}
			if (str_contains(strtolower($this->getCargo()), "administrador") === true || str_contains(strtolower($this->getCargo()), "producc") === true) {
			$html .= "	<li>"

			."		<button type=\"submit\" name=\"tabla\" value=\"productoOrden\" id=\"cmdProductoOrden\" class=\"btn btn-flat\">"

			."			<i class=\"menu-icon fa fa-puzzle-piece\"></i>"

			."			<div class=\"menu-info\">"

			."				<h4 class=\"control-sidebar-subheading\">"." Produccion"."</h4>"

			."				<p>".$texto['producto_title_derecha']."</p>"

			."			</div>"

			."		</button>"

			."	</li>";
			}

		

		$html .= "	</ul>";

		return $html;

	}

	

	public function getMigaDePan($sistema,$texto){

		$html = "".

			"<ol class=\"breadcrumb\">".

            "	<li><a href=\"#\"><i class=\"fa fa-dashboard\"></i> Home</a></li>".

            "	<li class=\"active\">Dashboard</li>".

			"</ol>";

		$html="";

		return $html;

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
			'usuario' => $this->campo[1],
			'nombre' => $this->campo[2],
			'correo' => $this->campo[3],
			'celular' => $this->campo[4],
			'imagen' => $this->campo[5],
			'cargo' => $this->campo[6],
			'habilitado' => $this->campo[7],
			'clave' => $this->campo[8],
			'confirmarClave' => $this->campo[9],
			'lang' => $this->campo[10]
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

	private function setUsuario($usuario) {
		$this->usuario = $usuario;
	}

	private function getUsuario() {
		return $this->usuario;
	}

	private function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	private function getNombre() {
		return $this->nombre;
	}

	private function setCorreo($correo) {
		$this->correo = $correo;
	}

	private function getCorreo() {
		return $this->correo;
	}

	private function setImagen($imagen) {
		$this->imagen = $imagen;
	}

	private function getImagen() {
		return $this->imagen;
	}

	private function setCargo($cargo) {
		$this->cargo = $cargo;
	}

	private function getIdCargo() {
		return $this->idCargo;
	}

	private function setIdCargo($idCargo) {
		$this->idCargo = $idCargo;
	}

	private function getCargo() {
		return $this->cargo;
	}

	private function setFileImagen($fileImagen) {
		$this->fileImagen=$fileImagen;
	}
	
	private function getFileImagen() {
		return $this->fileImagen;
	}

	private function setHabilitado($habilitado) {
		$this->habilitado = $habilitado;
	}

	private function getHabilitado() {
		return $this->habilitado;
	}

	private function setLang($lang) {
		$this->lang = $lang;
	}

	private function getLang() {
		return $this->lang;
	}

	private function setCelular($celular) {
		$this->celular = $celular;
	}

	private function getCelular() {
		return $this->celular;
	}

	private function setSeleccionado($seleccionado) {
		$this->seleccionado = $seleccionado;
	}

	private function getSeleccionado() {
		return $this->seleccionado;
	}

	private function setConfirmarClave($confirmarClave) {
		$this->confirmarClave = $confirmarClave;
	}

	private function getConfirmarClave() {
		return $this->confirmarClave;
	}

	private function setClave($clave) {
		$this->clave = $clave;
	}

	private function getClave() {
		return $this->clave;
	}
}