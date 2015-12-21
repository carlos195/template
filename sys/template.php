<?php

	/**
	 *
	 * Template : template for making html
	 *			  loads $contents and $data
	 * @author Carlos
	 *
	 * */
	
	class template{
		static function load($contents,$data=null){
			if(is_array($data)){
				extract($data);
			}
			include APP.'tpl'.DS.'head.php';
			include APP.'tpl'.DS.$contents.'.php';
			include APP.'tpl'.DS.'footer.php';
		}
	}