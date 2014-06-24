<?php
//require_once('vendor/mustangostang/spyc/Spyc.php'); 

class LecturasInterpretes
{
	static $controlador;
	static $metodo;
	static $redirect;
	static $constantes;
	static $nueva_url;
	
	static $parametros_get;
	

	public function LectorYamlRutas($RequestUrl)
		{
		
		
		$originalFile = 'config/rutas.yml';
		$compiledFile = 'app/tmp/rutas.php';
		
		if(!$this->isCompiled($originalFile, $compiledFile)) {
			$data = Spyc::YAMLLoad('config/rutas.yml');
			$phpCode = '$data = ' . var_export($data, TRUE) . ';';
			file_put_contents('app/tmp/rutas.php', "<?php\n\n class rutas \n { \n\n private " . $phpCode . " \n\n public function getRutas()\n{ \n return \$this->data; \n} \n\n} \n\n?>");  	
			return $this->ComprobarRuta($RequestUrl,'app/tmp/rutas.php','rutas');
			}
		else {
			return $this->ComprobarRuta($RequestUrl,'app/tmp/rutas.php','rutas');	
			}
		
		}	

	/*
	 * Modificamos si es necesario la clase config donde almacenamos las constantes.
	 * */
	public function LectorYamlConfig()
		{
		
		
		$originalFile = 'config/config.yml';
		$compiledFile = 'app/tmp/config.php';
		
		if(!$this->isCompiled($originalFile, $compiledFile)) {
			$data = Spyc::YAMLLoad('config/config.yml');
			$phpCode = '$data = ' . var_export($data, TRUE) . ';';
			
			$getset='';
			$variables='';
			if (is_array($data))
{
			foreach($data as $nom=>$val){
				foreach($data[$nom] as $nom2=>$val2)
					{
					$variables.="\n private \$".$nom2." = \"".$data[$nom][$nom2]."\";\n";	

					
					$getset.=" \n \n \t public function get".ucfirst($nom2)."() {";
					$getset.=" \n \n \t \t return \$this->".$nom2."; ";	
					$getset.=" \n  \t \t } \n ";		
					}
					
				}
			} else {echo "NO ES ARRAY";}
			file_put_contents('app/tmp/config.php', "<?php\n\n class config \n { \n\n " .$variables ." \n private " .$phpCode ." \n\n \t public function getConfig() { \n \t \t return \$this->data; \n \t \t }  \n\n ".$getset." \n\n} ?>");  	
			return $this->ComprobarConstantes($RequestUrl,'app/tmp/config.php','config'); }
		else {
			return $this->ComprobarConstantes($RequestUrl,'app/tmp/config.php','config');	 }
			
			
			
		require_once ('app/tmp/config.php');	
		$constantes = new config();
		return $constantes;
		}	


	/*
	 * Esta función Comprueba si existe la ruta en nuestro config.yml
	 * */
	public function ComprobarConstantes($RequestUrl,$path,$clase)
		{
		require_once ($path);
		$elGet = 'get'.ucfirst($clase);
		$data = new $clase();
		
			foreach ($data->$elGet() as $key => $val) {
			   if ($val['url'] === $RequestUrl) {
				    $da = explode('::',$val['controller']);
				    $this->controlador = $da[0];
				    $this->metodo = $da[1];
				    if(isset($da[2])){
				    $this->redirect = $da[2];}
				    else{
					$this->redirect = 302;}
				    return true;
			   }
			}
		return null;
			
		}


	/*
	 * Esta función Comprueba si existe la ruta en nuestro rutas.yml
	 * */
	public function ComprobarRuta($RequestUrl,$path,$clase)
		{
		require_once ($path);
		$elGet = 'get'.ucfirst($clase);
		$data = new $clase();
	
			foreach ($data->$elGet() as $key => $val) {
				
			$this->JackUrl($val['url']);
				
			$verifica = preg_match($this->nueva_url,$RequestUrl);
				
			   if ($verifica===1) {
				  
				    $da = explode('::',$val['controller']);
				    $this->controlador 		= $da[0];
				    $this->metodo 			= $da[1];
				    $this->parametros_get 	= $this->JackParametros($RequestUrl,$val['url']);
				    

				    if(isset($da[2])){
						$this->redirect = $da[2];}
						else{
						$this->redirect = 302;}
				    return true;
			   }
			}
		return null;
			
		}


	
	
	public function JackUrl($url)
	{
		
		$nueva_url = '';
		$url1 = explode('/',$url);
		foreach ($url1 as $nom=>$val)
		{
		
		if(preg_match('/^{/',$url1[$nom])){
			

			$url2 = $this->LimpioPara($url1[$nom]);
			foreach($url2 as $nom2=>$val2){
				
				if($nom2==1)
				{
				if($url2[$nom2]=='string'){
					$nueva_url .= '(.*\w)/';
					} elseif ($url2[$nom2]=='int') {
					$nueva_url .= '(\d[^aA-zZ_-]*)/';
					}
					
				}
				
				}
				
			}else{
				$nueva_url .= $url1[$nom].'/';}
		
		}
		
		if(substr($nueva_url, -1)=='/') {
			$nueva_url = substr($nueva_url, 0, -1); }
		$this->nueva_url = "#^".$nueva_url."(/)?$#";
		return $this;
	}


	public function JackParametros($RequestUrl,$ModeloUrl)
	{
		$des_RequestUrl = explode('/',$RequestUrl);
		$des_ModeloUrl	= explode('/',$ModeloUrl);
		$parametros = array();
		
		foreach($des_RequestUrl as $nom=>$val){
			
			foreach($des_ModeloUrl as $nom2=>$val){
				
					if($des_RequestUrl[$nom]!= $des_ModeloUrl[$nom]){
						$ordenes = $this->LimpioPara($des_ModeloUrl[$nom]);
						$parametros[$ordenes[0]] = strip_tags($des_RequestUrl[$nom]);
						
						}
			}
			
		}
		return $parametros;
		
	}
	
	
	
	public function LimpioPara($tramo)
	{
		$limpio = str_replace(array('{','}'), "", $tramo);
		$desglose = explode(":",$limpio);
		return $desglose;	
	}


	public function isCompiled($originalFile, $compiledFile) 
	 { 
	   if (file_exists($compiledFile)) 
	   { 
		
		if (filemtime($originalFile) < filemtime($compiledFile)) { 
		  return TRUE; 
			} 
	   } 
	   
	   return FALSE; 
	 }
	
}

?>
