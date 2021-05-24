<?php
	class token {
	
		public static function generate(){
			return $_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		}
		
		public static function check($token){
			if(isset($_SESSION['token']) && $token === $_SESSION['token']){
				unset($_SESSION['token']);
				return true;
			}
			return false;
		}

		public static function sessionStart(){
		session_set_cookie_params(0,'/','localhost',true,true);
		session_start();
		}
	}
?>