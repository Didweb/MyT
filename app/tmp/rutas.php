<?php

 class rutas 
 { 

 private $data = array (
  'Index' => 
  array (
    'url' => '',
    'controller' => 'Index::index',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
  'IndexIdioma' => 
  array (
    'url' => 'home/{lang:locale}',
    'controller' => 'Index::index',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
  'ruta_uno' => 
  array (
    'url' => 'pato/dos/{lang:locale}/{pagina:int}',
    'controller' => 'Index::index2',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar_anidados' => 
  array (
    'url' => 'gestor/editar-anidado/{tabla:string}/{id:string}/{idanidado:string}',
    'controller' => 'Gestor::editaranidado',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_eliminar_anidados' => 
  array (
    'url' => 'gestor/eliminar-anidado/{tabla:string}/{id:string}/{idanidado:string}/{tablaanidado:string}',
    'controller' => 'Gestor::eliminaranidado',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_ineratra_anidados' => 
  array (
    'url' => 'gestor/insertar-anidado/{tabla:string}/{id:string}',
    'controller' => 'Gestor::insertaranidado',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar_txt_img' => 
  array (
    'url' => 'gestor/editar-txt-imagen/{tabla:string}/{idreg:int}',
    'controller' => 'Gestor::editartxtimg',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar_txt_img_prin' => 
  array (
    'url' => 'gestor/editar-txt-imagen-prin/{tabla:string}/{idreg:int}',
    'controller' => 'Gestor::editartxtimgprin',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_eliminar_img' => 
  array (
    'url' => 'gestor/eliminar-img/{tabla:string}/{idimagen:int}/{idreg:int}',
    'controller' => 'Gestor::eliminarimg',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar' => 
  array (
    'url' => 'gestor/editar/{tabla:string}/{id:int}',
    'controller' => 'Gestor::editar',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar_idioma' => 
  array (
    'url' => 'gestor/editar-idioma/{tabla:string}/{id:int}/{idiomareg:string}',
    'controller' => 'Gestor::editaridioma',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar_idioma_accion' => 
  array (
    'url' => 'gestor/editar-idioma-accion/{tabla:string}/{id:int}/{idiomareg:string}',
    'controller' => 'Gestor::editaridiomaccion',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_editar_accion' => 
  array (
    'url' => 'gestor/editar-accion/{tabla:string}/{id:int}',
    'controller' => 'Gestor::editaraccion',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_buscador' => 
  array (
    'url' => 'gestor/buscador/reultado',
    'controller' => 'Gestor::buscador',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_nuevo' => 
  array (
    'url' => 'gestor/crear-nuevo/{tabla:string}',
    'controller' => 'Gestor::crear',
    'permiso' => 5,
  ),
  'Gestor_nuevo_accion' => 
  array (
    'url' => 'gestor/crear-nuevo-accion/{tabla:string}',
    'controller' => 'Gestor::crearaccion',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_eliminar' => 
  array (
    'url' => 'gestor/eliminar/{tabla:string}/{id:int}',
    'controller' => 'Gestor::eliminar',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_eliminar2' => 
  array (
    'url' => 'gestor/eliminar-accion/{tabla:string}/{id:int}',
    'controller' => 'Gestor::eliminaraccion',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_listado' => 
  array (
    'url' => 'gestor/listado/{tabla:string}/{campo_orden:string}/{pagina:int}/{orden:string}',
    'controller' => 'Gestor::listado',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_subir_foto' => 
  array (
    'url' => 'gestor/subir-foto/{tabla:string}/{id:string}',
    'controller' => 'Gestor::subirfoto',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_index' => 
  array (
    'url' => 'gestor/{lang:locale}/index',
    'controller' => 'Gestor::indexgestor',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_index_cambio_idioma' => 
  array (
    'url' => 'gestor/{lang:locale}',
    'controller' => 'Gestor::indexgestor',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'Gestor_index_cambio_idioma2' => 
  array (
    'url' => 'gestor',
    'controller' => 'Gestor::indexgestor',
    'permiso' => 5,
    'fuenteacceso' => 'sin',
  ),
  'ruta_dos' => 
  array (
    'url' => 'POLKAXY/{apellido:string}',
    'controller' => 'Index::indexpolka',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
  'ruta_tres' => 
  array (
    'url' => 'pluma',
    'controller' => 'Pluma::po',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
  'ruta_cuatro' => 
  array (
    'url' => 'pupa',
    'controller' => 'Pupa::pa',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
  'login2' => 
  array (
    'url' => 'checking',
    'controller' => 'Seguridad::check',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
  'checkout' => 
  array (
    'url' => 'checkout',
    'controller' => 'Seguridad::checkout',
    'permiso' => 0,
    'fuenteacceso' => 'sin',
  ),
); 

 public function getRutas()
{ 
 return $this->data; 
} 

} 

?>