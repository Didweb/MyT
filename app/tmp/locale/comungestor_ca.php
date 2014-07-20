<?php

 class comungestor 
 { 

 
 private $footer_webde = "Web de";

 private $footer_para = "Per";

 private $footer_creadopor = "Creat per";

 private $menu_inicio = "Inici";

 private $menu_volver = "Tornar al";

 private $listado_de = "Llistat";

 private $next = "proxim";

 private $last = "ultim";

 private $first = "primer";

 private $previous = "anterior";

 private $listado_p = "Llistat de registres de la taula";

 private $getsorindex = "Gestor de continguts";

 private $gestorindexp = "Pàgina principal del Gestor de Continguts.";

 private $buscar = "Cercar";

 private $res_bus = "Resultat Cerca";

 private $aviso_busqueda = "Aquest llistat aquesta filtrat per la recerca <b>%1</b>";

 private $eliminar_filtro = "<a href='%1' title='return to the original list of %2'>Eliminar filtre de cerca</a>";

 private $title_ir_editar = "Edita Registre";

 private $h1_editar = "Modifica el registre";

 private $dela = "de la taula";

 private $modificar = "Modificar";

 private $title_idio = "Edita aquest registre en un altre idioma";

 private $vovler_listado = "Tornar al llistat de";

 private $vovler_listado2 = "Llistat";

 private $nuevoreg = "Crear nou registre";

 private $h1_crear = "Crear registre a la taula";

 private $crearboton = "Crear";

 private $eliminarreg = "Eliminar Registre";

 private $h1_eliminar = "Eliminar";
 
 private $data = array (
  'Ca' => 
  array (
    'footer_webde' => 'Web de',
    'footer_para' => 'Per',
    'footer_creadopor' => 'Creat per',
    'menu_inicio' => 'Inici',
    'menu_volver' => 'Tornar al',
    'listado_de' => 'Llistat',
    'next' => 'proxim',
    'last' => 'ultim',
    'first' => 'primer',
    'previous' => 'anterior',
    'listado_p' => 'Llistat de registres de la taula',
    'getsorindex' => 'Gestor de continguts',
    'gestorindexp' => 'Pàgina principal del Gestor de Continguts.',
    'buscar' => 'Cercar',
    'res_bus' => 'Resultat Cerca',
    'aviso_busqueda' => 'Aquest llistat aquesta filtrat per la recerca <b>%1</b>',
    'eliminar_filtro' => '<a href=\'%1\' title=\'return to the original list of %2\'>Eliminar filtre de cerca</a>',
    'title_ir_editar' => 'Edita Registre',
    'h1_editar' => 'Modifica el registre',
    'dela' => 'de la taula',
    'modificar' => 'Modificar',
    'title_idio' => 'Edita aquest registre en un altre idioma',
    'vovler_listado' => 'Tornar al llistat de',
    'vovler_listado2' => 'Llistat',
    'nuevoreg' => 'Crear nou registre',
    'h1_crear' => 'Crear registre a la taula',
    'crearboton' => 'Crear',
    'eliminarreg' => 'Eliminar Registre',
    'h1_eliminar' => 'Eliminar',
  ),
); 

 	 public function getcomungestor() { 
 	 	 return $this->data; 
 	 	 } 

  
 
 	 public function getFooter_webde() { 
 
 	 	 return $this->footer_webde;  
  	 	 } 
  
 
 	 public function setFooter_webde($valor) { 
 
 	 	  $this->footer_webde = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getFooter_para() { 
 
 	 	 return $this->footer_para;  
  	 	 } 
  
 
 	 public function setFooter_para($valor) { 
 
 	 	  $this->footer_para = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getFooter_creadopor() { 
 
 	 	 return $this->footer_creadopor;  
  	 	 } 
  
 
 	 public function setFooter_creadopor($valor) { 
 
 	 	  $this->footer_creadopor = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getMenu_inicio() { 
 
 	 	 return $this->menu_inicio;  
  	 	 } 
  
 
 	 public function setMenu_inicio($valor) { 
 
 	 	  $this->menu_inicio = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getMenu_volver() { 
 
 	 	 return $this->menu_volver;  
  	 	 } 
  
 
 	 public function setMenu_volver($valor) { 
 
 	 	  $this->menu_volver = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getListado_de() { 
 
 	 	 return $this->listado_de;  
  	 	 } 
  
 
 	 public function setListado_de($valor) { 
 
 	 	  $this->listado_de = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getNext() { 
 
 	 	 return $this->next;  
  	 	 } 
  
 
 	 public function setNext($valor) { 
 
 	 	  $this->next = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getLast() { 
 
 	 	 return $this->last;  
  	 	 } 
  
 
 	 public function setLast($valor) { 
 
 	 	  $this->last = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getFirst() { 
 
 	 	 return $this->first;  
  	 	 } 
  
 
 	 public function setFirst($valor) { 
 
 	 	  $this->first = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getPrevious() { 
 
 	 	 return $this->previous;  
  	 	 } 
  
 
 	 public function setPrevious($valor) { 
 
 	 	  $this->previous = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getListado_p() { 
 
 	 	 return $this->listado_p;  
  	 	 } 
  
 
 	 public function setListado_p($valor) { 
 
 	 	  $this->listado_p = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getGetsorindex() { 
 
 	 	 return $this->getsorindex;  
  	 	 } 
  
 
 	 public function setGetsorindex($valor) { 
 
 	 	  $this->getsorindex = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getGestorindexp() { 
 
 	 	 return $this->gestorindexp;  
  	 	 } 
  
 
 	 public function setGestorindexp($valor) { 
 
 	 	  $this->gestorindexp = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getBuscar() { 
 
 	 	 return $this->buscar;  
  	 	 } 
  
 
 	 public function setBuscar($valor) { 
 
 	 	  $this->buscar = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getRes_bus() { 
 
 	 	 return $this->res_bus;  
  	 	 } 
  
 
 	 public function setRes_bus($valor) { 
 
 	 	  $this->res_bus = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getAviso_busqueda() { 
 
 	 	 return $this->aviso_busqueda;  
  	 	 } 
  
 
 	 public function setAviso_busqueda($valor) { 
 
 	 	  $this->aviso_busqueda = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getEliminar_filtro() { 
 
 	 	 return $this->eliminar_filtro;  
  	 	 } 
  
 
 	 public function setEliminar_filtro($valor) { 
 
 	 	  $this->eliminar_filtro = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getTitle_ir_editar() { 
 
 	 	 return $this->title_ir_editar;  
  	 	 } 
  
 
 	 public function setTitle_ir_editar($valor) { 
 
 	 	  $this->title_ir_editar = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getH1_editar() { 
 
 	 	 return $this->h1_editar;  
  	 	 } 
  
 
 	 public function setH1_editar($valor) { 
 
 	 	  $this->h1_editar = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getDela() { 
 
 	 	 return $this->dela;  
  	 	 } 
  
 
 	 public function setDela($valor) { 
 
 	 	  $this->dela = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getModificar() { 
 
 	 	 return $this->modificar;  
  	 	 } 
  
 
 	 public function setModificar($valor) { 
 
 	 	  $this->modificar = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getTitle_idio() { 
 
 	 	 return $this->title_idio;  
  	 	 } 
  
 
 	 public function setTitle_idio($valor) { 
 
 	 	  $this->title_idio = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getVovler_listado() { 
 
 	 	 return $this->vovler_listado;  
  	 	 } 
  
 
 	 public function setVovler_listado($valor) { 
 
 	 	  $this->vovler_listado = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getVovler_listado2() { 
 
 	 	 return $this->vovler_listado2;  
  	 	 } 
  
 
 	 public function setVovler_listado2($valor) { 
 
 	 	  $this->vovler_listado2 = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getNuevoreg() { 
 
 	 	 return $this->nuevoreg;  
  	 	 } 
  
 
 	 public function setNuevoreg($valor) { 
 
 	 	  $this->nuevoreg = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getH1_crear() { 
 
 	 	 return $this->h1_crear;  
  	 	 } 
  
 
 	 public function setH1_crear($valor) { 
 
 	 	  $this->h1_crear = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getCrearboton() { 
 
 	 	 return $this->crearboton;  
  	 	 } 
  
 
 	 public function setCrearboton($valor) { 
 
 	 	  $this->crearboton = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getEliminarreg() { 
 
 	 	 return $this->eliminarreg;  
  	 	 } 
  
 
 	 public function setEliminarreg($valor) { 
 
 	 	  $this->eliminarreg = $valor;  
 
 	 	 return $this;  
  	 	 } 
  
 
 	 public function getH1_eliminar() { 
 
 	 	 return $this->h1_eliminar;  
  	 	 } 
  
 
 	 public function setH1_eliminar($valor) { 
 
 	 	  $this->h1_eliminar = $valor;  
 
 	 	 return $this;  
  	 	 } 
   

} ?>