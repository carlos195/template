<?php
	require 'sys/request.php';
	class core{
		static private $controller;
		static private $action;

		static function init(){

			//echo CORE arranca app;
				//echo $_SERVER['REQUEST_URI'];
				request::retrieve();
				$controller=request::getCont();
				//echo $controller.'<br>';
				self::$controller=$controller;
				//Coder::code($controller);
				$action=request::getAct();
				//echo $action.'<br>';
				//Coder::code($action);
				$params=request::getParams();
				//print_r($params);
				//Coder::codear($params);

				self::router();
		}

		static function router(){
			//echo '<br/>Routing........';
			//Coder::code(self::$controller); //comprobar si llega el controlador a la funcion
			//Coder::code(self::$action);
			$contr_call=(self::$controller!="")?self::$controller:'home';
			$action_call=(self::$action!="")?self::$action:'home';
			// make an instance
			$filename=$contr_call.'.php';
			//$filecontroller=APP.'controllers'.DS.$filename;
			$filecontroller=APP.'controllers'.DS.$filename;
			//Coder::code($filecontroller);

			if(is_readable($filecontroller)){
				$cont=new $contr_call();
				if(is_callable(array($cont,$action_call))){
					call_user_func(array($cont,$action_call));
				}else{
					echo "No action";
				}
				//Coder::codear($cont);
			}else{
				echo "No controller";
			}
		}
	}