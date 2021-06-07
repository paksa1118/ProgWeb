<?php
	if(! class_exists('Authentication')) {
		
		class Authentication {
			
			static public function login($User_ID) {
				
//				$_SESSION['athenticated'] = true;
				$_SESSION['uid'] = $User_ID;
//				$_SESSION['role'] = $role;
				$_SESSION['lastLogin'] = time();
			}
			
			static public function check() {
				
				return isset($_SESSION['uid']);
			}
			
			static public function logout() {
				
				unset($_SESSION['uid']);
			}
			
			static public function uid() {
				
				return $_SESSION['uid'];
			}
			
			static public function autoLogout(){
			
				if( self :: check() ){

					if( time() - $_SESSION['lastLogin'] > LOGIN_DEADLINE * 24 * 60 * 60 ){ // 30 days

						Alert::alerts('با ورود مجدد به ما کمک کتید امنیت شما را تامین کنیم!', 'warning');

						$_SESSION['redirect'] = $_SERVER['REQUEST_URI'];

						self::logout();
					}

					if( time() - $_SESSION['lastActivity'] > ACTIVITY_DEADLINE * 60){ // 10 min

						Alert::alerts('مدتی غیرفعال بودید، لطفا مجددا وارد شوید!', 'warning');
						
						$_SESSION['redirect'] = $_SERVER['REQUEST_URI'];

						self::logout();
					}

					$_SESSION['lastActivity'] = time();
				}
			}
		}
	}

?>