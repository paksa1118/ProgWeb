
<h3>
	محصولات مرتبط >>
</h3>
	
	<section class="Product_List2">
	
		<?php

			foreach($table as $row){
				
				$db = new DB();
				
		//		include(__DIR__ . "/templates/productCard.php");
				
		?>		
		

		<article class="P_Card2">

			<a href="<?php echo($SITE_URL) ?>Products/Product_Detail.php?id=<?php echo $row['ID']; ?>#Product_Detail" class="P_Link">
				<div class="P_Image2">
					<img src="<?php echo Assets("Uploads/Products_Image/{$row['P_Image']}") ?>"/>
				</div>

				<h3>
					<?php echo $row["P_Title"]; ?>
				</h3>
			</a>
			
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
		
			<div class="btn_2">
				
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
			
		</article>


		<?php unset($db);} ?>
		
	</section>


