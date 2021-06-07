<?php
	if(! class_exists('Table')) {
		
		class Table{
			
			
			static protected function columnsList($vars, $sep = ', ') {
			
				// رشته‌ای شامل اسامی ستون‌های جدول را بر میگرداند
				$columns = array_keys( $vars );
			
				return join($sep , $columns);
			}
		
		
		
			static protected function valuesList($vars, $sep = "', '") {
				
				// رشته‌ای شامل مقادیر رکورد را بر میگرداند
				
				$values = array_values( $vars );
				
				return "'" . join($sep , $values) . "'";
			}
		
		
		
			static protected function columnValuesList($params, $sep = ', '){
			
				// = رشته‌ای شامل زوج اسامی و مقادیر جدول جدا شده با
				
			foreach($params as $key => $value) {
				
				$varPairs[] = "{$key} = '{$value}'";
				
			} 
			return join($sep, $varPairs);
		}
		
		
		
		
			static public function add($params) {
				
				$params['Status'] = 'default';
				
				$columnsString = self::columnsList( $params );
				
				$valuesString = self::valuesList( $params );
				
				$tableName = static::class; // self::class // __CLASS__ // get_class()
				
				// 2. create insert query
				$sql = "INSERT INTO {$tableName}({$columnsString}) 
						VALUES({$valuesString})";
				
				$result = $GLOBALS['db'] -> Execute( $sql );
				
				// C. success message
				
				//اگر با موفقیت درج شد
				
				if($result)
					
					Alert::alerts('با موفقیت اضافه شد', 'info');
				
				return($result);
			}
		
		
		
			static public function update($params, $WHERE = 'true') {
				
				$columnValuesList = self::columnValuesList( $params );
				
				$tableName = static::class; // self::class // __CLASS__ // get_class()
				
				// 2. create insert query
				$sql = "UPDATE {$tableName} SET {$columnValuesList}
						WHERE $WHERE";
				
				$result = $GLOBALS['db'] -> Execute( $sql );
				
				// C. success message
				
				//اگر با موفقیت درج شد
				
				if( $result == 0 )
					
					Alert::alerts('تغییرات شما با موفقیت ذخیره شد', 'success');
			}
		
		
		
			static public function delete($WHERE = 'true') {
				
				$tableName = static::class; // self::class // __CLASS__ // get_class()
				
				// 2. create insert query
//				$sql = "DELETE FROM {$tableName}
//						WHERE $WHERE";
				
				$sql = "UPDATE {$tableName} SET Status = 'deleted'
						WHERE $WHERE";
				
				$result = $GLOBALS['db'] -> Execute( $sql );
				
				echo($result);
				// C. success message
				
				//اگر با موفقیت درج شد
				
				if( $result == 0 )
					
					Alert::alerts('با موفقیت حذف شد', 'success');
			}
		
		
		
			static public function find($WHERE = 'true', $ORDER = 'ID DESC', $count = 10000, $offset = 0) {
				
				$tableName = static::class; // self::class // __CLASS__ // get_class()
				
				$sql = "SELECT * FROM {$tableName}
						WHERE {$WHERE}
						ORDER BY {$ORDER}
						LIMIT {$offset}, {$count}";
				
				$table = $GLOBALS['db'] -> Execute( $sql );
				
				return($table);
			}
			
			
			static public function join($where = 'TRUE', $order = 'ID DESC', $count = 10000, $offset = 0, $joinedTable = 'Users'){
				
				$tableName = static::class; // self::class // __CLASS__
				
				$sql = "SELECT * FROM {$tableName}, {$joinedTable}
						WHERE {$joinedTable}.{$tableName}_ID = {$tableName}.ID
						AND {$where} 
						AND {$tableName}.Status != 'deleted'
						AND {$joinedTable}.Status != 'deleted'
						ORDER BY {$tableName}.{$order}
						LIMIT {$offset}, {$count}";
				
				$table = $GLOBALS['db'] -> execute( $sql );
				
				return $table;
			}
		}
	}
?>