<body>
<header>
	
	<div class="Top_Menu">
		<ul id="topmR">
			<li id="Relink" style="display: inline;">
				<a href="<?php echo($SITE_URL) ?>ReLoShop/Register.php">
					<img class="Top_m_Icon" src="<?php echo Assets("Images/Icon/RegisterIcon.png") ?>"/>
					ثبت نام 
				</a>
			</li>

			<li id="Lolink" style="display: inline;">
				<a href="<?php echo($SITE_URL) ?>ReLoShop/Login.php">
					<img class="Top_m_Icon" src="<?php echo Assets("Images/Icon/LoginIcon.png") ?>"/>
					ورود 
				</a>
			</li>
			
			
			
<?php

	if(isset($_SESSION["uid"])){

		$db = new DB();

		$table = Users::find("ID = {$_SESSION['uid']}");

		foreach($table as $row){

			$User_FLname = $row["FirstName"]." ".$row["LastName"];

			$User_ID = $row["ID"];

			$FirstName = $row["FirstName"]; $LastName = $row["LastName"];

			$Tel = $row["Tel"]; $Email = $row["Email"];

			$State = $row["State"]; $City = $row["City"]; $Photo = $row["Photo"];

			$Roles_ID = $row["Roles_ID"];

		}

		unset($db);			
	?>
			
<script>
	document.getElementById("Relink").style.display = "none";
	document.getElementById("Lolink").style.display = "none";
</script>
			
			<li id="userOn" onClick="userOn()" style="display: inline;">
				<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/Default_userIcon.png"/>
				<?php echo $User_FLname; ?>
				<img id="DownIcon" class="DownIcon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/DownIcon.png"/>
			</li>

<?php 
	}else{
?>
			
<script>
	document.getElementById("Relink").style.display = "inline";
	document.getElementById("Lolink").style.display = "inline";
	document.getElementById("userOn").style.display = "none";
</script>
			
<?php } ?>
			

			<li>
				<a href="#">
					<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/BuyIcon.png"/>
					سبد خرید 
				</a>
			</li>
		</ul>


		<ul id="topmL">
			<li>
				<a href="#">
					<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/InstagramIcon.png"/>
				</a>
			</li>

			<li>
				<a href="#">
					<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/TelegramIcon.png"/> 
				</a>
			</li>

			<li>
				<a href="#">
					<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/WhatsappIcon.png"/> 
				</a>
			</li>
		</ul>
	</div>
	
	
<script>
	
	var Show_subMenuUser = false;

	function userOn(){
		
		if(!Show_subMenuUser){
			
			document.getElementById("subMenu_userOn").style.transform = "translateX(0)";
			document.getElementById("DownIcon").style.transform = "rotate(-90deg)";
			Show_subMenuUser = true;

		}else{
			
			document.getElementById("subMenu_userOn").style.transform = "translateX(120%)";
			document.getElementById("DownIcon").style.transform = "rotate(90deg)";
			Show_subMenuUser = false;
		}
	}
	
</script>
	
	
	
	<div id="subMenu_userOn">
				<ul>
					<li>
						<a href="<?php echo($SITE_URL) ?>UserPanel">
							<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/userIcon.png"/>
							پنل کاربری
						</a>
					</li>
					
					<li>
						<a href="<?php echo($SITE_URL) ?>">
							<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/EditIcon.png"/>
							ویرایش و تکمیل اطلاعات 
						</a>
					</li>
					
					<hr>
					
					<li>
						<a href="<?php echo($SITE_URL) ?>">
							<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/AddProductIcon.png"/>
							محصولات شما 
						</a>
					</li>
					
					<li>
						<a href="<?php echo($SITE_URL) ?>Products/Add_Product.php">
							<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/AddProductIcon.png"/>
							افزودن محصول 
						</a>
					</li>
					
					
					<hr>
					
					<li>
						<a href="<?php echo($SITE_URL) ?>ReLoShop/Logout.php">
							<img class="Top_m_Icon" src="<?php echo($SITE_URL) ?>Assets/Images/Icon/LogoutIcon.png"/>
							خروج از سایت 
						</a>
					</li>
				</ul>
			</div>
	
	
	
	<div class="Main_Menu">
		<ul>
			<li>
<!--				class="Menu_SelectH"-->
				<a href="<?php echo($SITE_URL) ?>" > 
					صفحه اصلی 
				</a>
			</li>

			<li>
				<a href="<?php echo($SITE_URL) ?>AboutUs.php">
					درباره ما 
				</a>
			</li>

			<li>
				<a href="#">
					برند ها 
				</a>
			</li>

			<li>
				<a href="#">
					وبلاگ 
				</a>
			</li>

			<li>
				<a href="<?php echo($SITE_URL) ?>ContactUs.php">
					تماس با ما 
				</a>
			</li>
			
			<li>
				<a href="#CatProduct">
					دسته‌بندی محصولات 
				</a>
			</li>
		</ul>
	</div>
	
	
	<div class="TopMiddle">
		<div class="search_Top">
			<form action="#" method="get">
				<input type="search" placeholder="کالای مورد نظر خود را جستجو کنید ..." class="SearchBox" id="search"/>
				<button type="button" class="btnSearch" id="btnSearch"><img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/SearchIcon.png"/></button>
			</form>
		</div>

		<div class="telNum_Top">
			<a href="tel:09380521118">
				09380521118
				<img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/PhoneIcon.png"/>
			</a>
		</div>

		<div class="telNum_Top">
			<a href="tel:091234567890">
				09123456789
				<img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/PhoneIcon.png"/>
			</a>
		</div>
	</div>


	<div class="BannerImg">
		<img src="<?php echo($SITE_URL) ?>Assets/Images/Banner/Banner1.jpg"/>
		<img src="<?php echo($SITE_URL) ?>Assets/Images/Banner/Banner2.jpg"/>
		<img src="<?php echo($SITE_URL) ?>Assets/Images/Banner/Banner3.jpg"/>
	</div>


	<div class="Product_Menu" id="CatProduct">
		<div class="P_M">
			<a href="#"><img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/KitchenIcon.png"/>
			<div>لوازم آشپزخانه</div></a>
		</div>

		<div class="P_M">
			<a href="#"><img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/SofaIcon.png"/>
			<div>مبلمان</div></a>
		</div>

		<div class="P_M">
			<a href="#"><img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/CoHeIcon.png"/>
			<div>سرمایش و گرمایش</div></a>
		</div>

		<div class="P_M">
			<a href="#"><img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/TVIcon.png"/>
			<div>صوتی و تصویری</div></a>
		</div>

		<div class="P_M">
			<a href="#"><img src="<?php echo($SITE_URL) ?>Assets/Images/Icon/WashingIcon.png"/>
			<div>لوازم شستشو</div></a>
		</div>
	</div>

</header>
	
	
	
	
	
	
	
	
	
	
	