
<h3>پیام ها</h3>
	<section class="Messages_List">
		
		<div class="Title_MessagesList">
			<div>
				نام و نام خانوادگی
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
			
			<div>
				ایمیل
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
			
			<div>
				موضوع پیام
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
			<div>
				متن پیام
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
		</div>
			
		
<?php

	foreach($table as $row){

//		include(__DIR__ . "/templates/productCard.php");

		$M_ID = $row["ID"]; $Name = $row["Name"];

		$Email = $row["Email"]; $Title = $row["Title"];

		$Text = $row["Text"]; $Status = $row["Status"];
?>		

		<article class="M_Card">

			<div>
				<img class="userImg" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/userIcon.png"/>
				
				<div class="Mname" style="display: inline; font-weight: 600;"><?php echo $Name; ?></div>
				
				
				
				<div id="btn_UsersList">
					<div>
						<a href="#" class="M_detail" id="M_detail">
						جزئیات
						</a>
					</div>
					
					<div>
						<a href="#" class="M_Edit" id="M_Edit">
						ویرایش
						</a>
					</div>

					<div>
						<a href="#" class="M_Delete" id="M_Delete">
						حذف
						</a>
					</div>
				</div>
			</div>
			
			<div>
				<img class="UP_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/EmailIconB.png"/>
				<?php echo $Email; ?>
			</div>
			
			<div>
				
				<?php echo $Title; ?>
			</div>
			
			<div>
				
				<?php echo $Text; ?>
			</div>
			
		</article>
		
<?php } ?>
		
	</section>


