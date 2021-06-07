

	
	<section class="Product_Detail">
	
		<?php

			foreach($table as $row){
				
				$db = new DB();
				
		//		include(__DIR__ . "/templates/productCard.php");
				
		?>		
		
		<div class="Product_Detail_1">
			
			<h1>
				<?php echo $row["P_Title"]; ?>
			</h1>
			
			<p>
				<?php echo $row["P_Description"]; ?>
			</p>
			
		</div>

		<div class="Product_Detail_2">

			<div class="image_P">
				<img src="<?php echo Assets("Uploads/Products_Image/{$row['P_Image']}") ?>"/>
			</div>

			<h1>
				<?php echo $row["P_Title"]; ?>
			</h1>
			
			<div>
				قیمت:
				<?php echo number_format($row["P_Price"]); ?>
				تومان
			</div>
			
			<div>
				تاریخ ثبت:
				<?php echo ($row["P_Date"]); ?>
			</div>
			
			<div>
				تعداد:
				<?php echo ($row["P_Number"]); ?>
				عدد
			</div>
			
			<div class="Product_Detail_btn">
				
				<?php 
				
				if(! Authentication::check()){
				
					include 'templates/Product_btn_1.php';
					
				}else{
				
					if(! Authorization::check('ProductEditOther')){ 

						if(! Authorization::check('ProductEdit')){

							include 'templates/Product_btn_1.php';

						}elseif($row['Users_ID'] == $User_ID){

							include 'templates/Product_btn_2.php';
							
						}else{
							
							include 'templates/Product_btn_1.php';
						}

					}else{

						include 'templates/Product_btn_2.php';
					}
				}
				
				?>
				
			</div>
			
		</div>


		<?php unset($db);} ?>
		
	</section>


