
<di><a href="<?php echo($SITE_URL) ?>UserPanel/Add_New_User.php">افزودن کاربر جدید</a></di>
	
	<section class="Users_List">
		
		<div class="Title_UserList">
			<div>
				نام و نام خانوادگی
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
			
			<div>
				شماره تلفن
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
			
			<div>
				ایمیل
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
			<div>
				نقش
				<img class="DownIcon_UserP" id="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIconB.png"/>
			</div>
		</div>
			
		
<?php

	foreach($table as $row){

//		include(__DIR__ . "/templates/productCard.php");

		$User_FLname = $row["FirstName"]." ".$row["LastName"];

		$User_ID = $row["ID"];

		$FirstName = $row["FirstName"]; $LastName = $row["LastName"];

		$Tel = $row["Tel"]; $Email = $row["Email"];

		$State = $row["State"]; $City = $row["City"]; $Photo = $row["Photo"];

		$Role_ID = $row["Roles_ID"];
?>		

		<article class="U_Card">

			<div>
				<img class="userImg" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/userIcon.png"/>
				
				<div class="Uname" style="display: inline; font-weight: 600;"><?php echo $User_FLname; ?></div>
				
				
				
				<div id="btn_UsersList">
					<div>
						<a href="#" class="U_detail" id="U_detail">
						جزئیات
						</a>
					</div>
					
					<div>
						<a href="<?php echo($SITE_URL) ?>UserPanel/Edit_User.php?id=<?php echo $User_ID ?>" class="U_Edit" id="U_Edit">
						ویرایش
						</a>
					</div>

					<div>
						<a href="<?php echo($SITE_URL) ?>Users/Users_Delete.php?id=<?php echo $User_ID ?>" class="U_Delete" id="U_Delete">
						حذف
						</a>
					</div>
				</div>
			</div>
			
			<div>
				<img class="UP_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/PhoneIcon.png"/>
				<?php echo $Tel; ?>
			</div>
			
			<div>
				<img class="UP_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/EmailIconB.png"/>
				<?php echo $Email; ?>
			</div>
			
			<div>
				<?php echo $row["Roles_ID"]; ?>
			</div>
			
		</article>
		
<?php } ?>
		
	</section>


