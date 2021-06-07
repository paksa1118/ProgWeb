<?php
	if(! class_exists('Authorization')) {
		
		class Authorization {
			
			static public function check ($permission) {// ProductAdd
				
				if( ! Authentication::check() ){

					return false;
				}

				$uid = Authentication::uid();

				$table = Roles::join("Users.ID = {$uid}");

				$row = $table[0];
				
//				var_dump($row);

				return boolval( $row[$permission] ); // تبدیل به نوع بولین
			}
		}	
	}

?>