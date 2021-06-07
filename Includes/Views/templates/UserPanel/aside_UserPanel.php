

<aside class="aside_userPanel">
	
	<div class="baner_aside">
		
		<?php
		
			$formatter = new IntlDateFormatter(
				"fa_IR@calendar=persian",
				IntlDateFormatter::FULL,
				IntlDateFormatter::FULL,
				'Asia/Tehran',
				IntlDateFormatter::TRADITIONAL,
				"EEEE، d MMMM Y");
		
			$now = new DateTime();
		?>
		
		<div>
			<?php echo $formatter -> format($now); ?>
		</div>
		
	</div>
	
	
	
	<div class="asidMenu">
	
		<a href="<?php echo($SITE_URL) ?>">
			<div class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/SiteIcon.png") ?>"/>
				فروشگاه لوازم خانگی
			</div>
		</a>

		<a href="<?php echo($SITE_URL) ?>ReLoShop/Logout.php">
			<div class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/LoginIcon.png") ?>"/>
				خروج از سایت
			</div>
		</a>

		<hr>

		<a href="<?php echo($SITE_URL) ?>UserPanel">
			<div id="Dashboard" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/DashboardIcon.png") ?>"/>
				داشبورد
			</div>
		</a>

		<hr>

		<a href="<?php echo($SITE_URL) ?>UserPanel/Edit_User_Info.php">
			<div id="User_Info" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/EditIcon.png") ?>"/>
				ویرایش و تکمیل مشخصات فردی
			</div>
		</a>

		<a href="<?php echo($SITE_URL) ?>UserPanel/Edit_User_Bank_Info.php">
			<div id="User_Bank_Info" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/BankIcon.png") ?>"/>
				ویرایش و تکمیل اطلاعات بانکی
			</div>
		</a>

		<a href="<?php echo($SITE_URL) ?>UserPanel/User_Password.php">
			<div id="User_Password" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/PasswordIcon.png") ?>"/>
				تغیر کلمه عبور
			</div>
		</a>

		<hr>

		<a href="<?php echo($SITE_URL) ?>UserPanel/Add_Product.php">
			<div id="Add_Product" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/AddProductIcon.png") ?>"/>
				افزودن محصول 
			</div>
		</a>

		<a href="<?php echo($SITE_URL) ?>UserPanel/User_Products_List.php">
			<div id="User_Products_List" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/ProductsIcon.png") ?>"/>
				لیست محصولات شما
			</div>
		</a>
		
<?php 
	
	$db = new DB();
	
	if(Authorization::check('UsersList')){

//		Alert::alerts("شما مجوز دیدن لیست کاربران را ندارید");
//
//		redirect("index.php");
?>
		
		<a href="<?php echo($SITE_URL) ?>UserPanel/Users_List.php">
			<div id="Users_List" class="aside_menu">
				<img class="aside_MenuIcon" src="<?php echo Assets("Images/Icon/RegisterIcon.png") ?>"/>
				لیست کاربران
			</div>
		</a>	
		
<?php
	} 
   unset($db);
?>
		
	</div>
	
</aside>