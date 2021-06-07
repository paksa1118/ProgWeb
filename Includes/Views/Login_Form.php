


<p>ورود</p>
	
		<p style="color: red"><?php echo $text_Login; ?></p>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
			<div>
				<input type="email" id="Email" name="Email" class="<?php echo $Style_Eerror;?>" placeholder="ایمیل" value="<?php echo $Email;?>"/>
				<span class="text_Error"><?php echo $text_emailErr;?></span>
			</div>
			
			<div>
				<input type="password" id="Password" name="Password" class="<?php echo $Style_Perror;?>" placeholder="کلمه عبور" value="<?php echo $Password;?>"/>
				<span class="text_Error"><?php echo $text_passErr;?></span>
			</div>
			
			<div>
				<label for="ShowPass" class="ShowPass">نمایش کلمه عبور</label>
				<input type="checkbox" id="ShowPass" onClick="onShowPass_Check()"/>
			</div>
			
			<div>
				<button type="submit" class="btnReLo">ورود</button>
			</div>
			
			<div>
				<a href="<?php echo($SITE_URL) ?>ReLoShop/Register.php">ثبت نام نکرده ام</a>
			</div>
			
		</form>