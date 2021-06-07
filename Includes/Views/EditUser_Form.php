

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="EditUserPage">
			
			<div class="Name_input">
				<div>
					<input type="text" id="FirstName" name="FirstName" class="<?php echo $style_FirstName_Err;?>" placeholder="نام" value="<?php echo $FirstName;?>"/>
					<span class="text_Error"><?php echo $text_FirstName_Err;?></span>
				</div>

				<div>
					<input type="text" id="LastName" name="LastName" class="<?php echo $style_LastName_Err;?>" placeholder="نام خانوادگی" value="<?php echo $LastName;?>"/>
					<span class="text_Error"><?php echo $text_LastName_Err;?></span>
				</div>
			</div>

			<div>
				<input type="tel" id="Tel" name="Tel" class="<?php echo $style_Tel_Err;?>" placeholder="شماره تلفن همراه" maxlength="11" value="<?php echo $Tel;?>"/>
				<span class="text_Error"><?php echo $text_Tel_Err;?></span>
			</div> 

			<div>
				<input type="email" id="Email" name="Email" class="<?php echo $style_Email_Err;?>" placeholder="ایمیل" value="<?php echo $Email;?>"/>
				<span class="text_Error"><?php echo $text_Email_Err;?></span>
			</div>
			
			<div>
				<input type="text" id="State" name="State" placeholder="استان" value="<?php echo $State;?>"/>
			</div>
			
			<div>
				<input type="text" id="City" name="City" placeholder="شهر" value="<?php echo $City;?>"/>
			</div>
			
			<div>
				<input type="password" id="Password" name="Password" class="<?php echo $style_Password_Err;?>" placeholder="کلمه عبور" />
				<span class="text_Error"><?php echo $text_Password_Err;?></span>
			</div>
			
			<div>
				<label for="ShowPass" class="ShowPass">نمایش کلمه عبور</label>
				<input type="checkbox" id="ShowPass" onClick="onShowPass_Check()"/>
			</div>

			<div>
				<button type="submit">تاید</button>
			</div>

		</form>