

<p>ثبت نام</p>
		
		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div>
				<input type="text" id="FirstName" name="FirstName" class="<?php echo $Style_FirstName_Err;?>" placeholder="نام" value="<?php echo $FirstName;?>"/>
				<span class="text_Error"><?php echo $text_FirstName_Err;?></span>
			</div>
			
			<div>
				<input type="text" id="LastName" name="LastName" class="<?php echo $Style_LastName_Err;?>" placeholder="نام خانوادگی" value="<?php echo $LastName;?>"/>
				<span class="text_Error"><?php echo $text_LastName_Err;?></span>
			</div>

			<div>
				<input type="tel" id="Tel" name="Tel" class="<?php echo $Style_Terror;?>" placeholder="شماره تلفن همراه" maxlength="11" value="<?php echo $Tel;?>"/>
				<span class="text_Error"><?php echo $text_telErr;?></span>
			</div> 

			<div>
				<input type="email" id="Email" name="Email" class="<?php echo $Style_Eerror;?>" placeholder="ایمیل" value="<?php echo $Email;?>"/>
				<span class="text_Error"><?php echo $text_emailErr;?></span>
			</div>
			
			<div>
				<input type="password" id="Password" name="Password" class="<?php echo $Style_Perror;?>" placeholder="کلمه عبور" value="<?php echo $Password;?>"/>
				<span class="text_Error"><?php echo $text_passErr;?></span>
			</div>
			
			<div>
				<input type="password" id="rePassword" name="rePassword" class="<?php echo $Style_RePerror;?>" placeholder="تکرار کلمه عبور" value="<?php echo $rePassword;?>"/>
				<span class="text_Error"><?php echo $text_repassErr;?></span>
			</div>
			
			<div>
				<label for="ShowPass" class="ShowPass">نمایش کلمه عبور</label>
				<input type="checkbox" id="ShowPass" onClick="onShowPass_Check()"/>
			</div>
			
			<div>
				<button type="submit" class="btnReLo">ثبت نام</button>
			</div>
			
			<div>
				<a href="<?php echo($SITE_URL) ?>ReLoShop/Login.php">قبلا ثبت نام کرده‌ام</a>
			</div>
			
		</form>