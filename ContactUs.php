<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>فروشگاه لوازم خانگی | تماس با ما</title>
	
<?php include('Includes/Header1.php') ?>
	
	<div class="Main_Menu">
		<ul>
			<li>
				<a href="http://localhost/WebP/">
					صفحه اصلی 
				</a>
			</li>

			<li>
				<a href="http://localhost/WebP/AboutUs.php">
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
				<a href="http://localhost/WebP/ContactUs.php" class="Menu_SelectH">
					تماس با ما 
				</a>
			</li>
			
			<li>
				<a href="#CatProduct">
					محصولات 
				</a>
			</li>
		</ul>
	</div>
	
<?php include('Includes/Header2.php') ?>
	
	
<main>
	
	<div class="Cont_Main">
		<div class="Contact_">
			<form action="http://localhost/WebP/ContactUs/contact.php" class="Frm_Contact" method="post">
				<div>
					<label for="Name">نام و نام خانوادگی :</label><br/>
					<input type="text" id="Name" name="Name"/>
				</div>

				<div>
					<label for="Tel">شماره تماس :</label><br/>
					<input type="tel" id="Tel" name="Tel" placeholder="مثال: 09123456789"/>
				</div> 

				<div>
					<label for="MsgTitle">موضوع پیام :</label><br/>
					<input type="text" id="MsgTitle" name="MsgTitle"/>
				</div>

				<div>
					<textarea id="MsgBody" name="MsgBody" placeholder="پیام خود را بنویسید ..."></textarea>
				</div>

				<div>
					<button type="submit">ارسال</button>
					<button type="reset">پاک کردن</button>
				</div>
			</form>
			</div>

			<div class="Contact_">
				
				آدرس ما : اصفهان - نجف آباد<br/>
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107506.4729651805!2d51.27971386935992!3d32.644078909782166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbdd49bb4161347%3A0x44b7032107285206!2sNajafabad%2C%20Isfahan%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1597008492692!5m2!1sen!2s" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" class="map_Location"></iframe>
			</div>
	</div>
	
</main>
	
	
<?php include('Includes/Footer.php') ?>