<?php 

include('Table.php');
include('User.php');
include('Messages.php');
include('Role.php');
include('Product.php');


if(! class_exists('DB')) {

	class DB{

		private $dbc;

		public function __construct($selectDB = true){
			$this -> Connect();

			if($selectDB){
				$this -> SelectDB();
			}
			$this -> dbc -> set_charset(CHARSET);
		}

		private function Connect(){

			$this -> dbc = new mysqli(DBHOST, DBUSER, DBPASS);

			if($this -> dbc -> connect_error ){
				alert("خطا در اتصال به دیتابیس", 'danger');
				exit();
			}
		}


		private function SelectDB(){

			$this -> dbc -> select_db(DBNAME);

			if($this -> dbc -> error){
				alert("خطا در انتخاب دیتابیس", 'danger');
				exit();
			}
		}


		public function Execute($sql, $params = false){

			$result = $this -> dbc -> query($sql);

			if($this -> dbc -> error){

				alert("خطا در اجرای کوئری", 'danger');

	//			$error = "
	//			خطا در اجرای کوئری
	//			<section lang = 'en'>{$sql}<br>
	//			{$this -> dbc -> error}</section>";
	//			
	//			die($error);

				return false;

			}

			elseif($result !== true && $result !== false){ // اگر SELECT بود

				$table = $result -> fetch_all(MYSQLI_ASSOC); // آرایه انجمنی

				return $table;
			}

			elseif(isset($this -> dbc -> insert_id)){ // INSERT

				return($this -> dbc -> insert_id); // Id محصول درج شده
			}

			else // UPDATE , DELETE

				return($result); // true | false
		}


		public function __destruct(){
			$this -> dbc -> close();
		}

	}
	
}


?>











