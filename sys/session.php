<?php

	class session{
		static function session_ini(){
			session_start();
			self::set('id',session_id());
		}
		static function set($key,$value){
			$_SESSION[$key]=$value;
		}
		static function get($key){
			if(self::if_exists($key)){
				return $_SESSION[$key];
			}else{
				return null;
			}
		}

		static function if_exists($key){
			if(array_key_exists($key, $_SESSION)){
				return true;
			}else{
				return false;
			}
		}

		static function destroy(){
			session_destroy();
		}
	}