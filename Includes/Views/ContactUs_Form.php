

<div class="Cont_Main" id="Form">
		<div class="Contact_">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>#Form" class="Frm_Contact" method="post">
				<div>
					<label for="Name">نام و نام خانوادگی :</label><br/>
					<input type="text" id="Name" name="Name" class="<?php echo $style_Name_Err;?>" value="<?php echo $Name;?>"/>
					<span class="text_Error"><?php echo $text_Name_Err;?>
				</div>

				<div>
					<label for="Email">ایمیل :</label><br/>
					<input type="email" id="Email" name="Email" class="<?php echo $style_Email_Err;?>" placeholder="مثال: example@gmail.com" value="<?php echo $Email;?>"/>
					<span class="text_Error"><?php echo $text_Email_Err;?>
				</div> 

				<div>
					<label for="Title">موضوع پیام :</label><br/>
					<input type="text" id="Title" name="Title" class="<?php echo $style_Title_Err;?>" value="<?php echo $Title;?>"/>
					<span class="text_Error"><?php echo $text_Title_Err;?>
				</div>

				<div>
					<textarea id="Text" name="Text" class="<?php echo $style_Text_Err;?>" placeholder="پیام خود را بنویسید ..."><?php echo $Text;?></textarea>
					<span class="text_Error"><?php echo $text_Text_Err;?>
				</div>

				<div>
					<button type="submit">ارسال</button>
				</div>
			</form>
			</div>

			<div class="Contact_">
				
				آدرس : اصفهان - نجف آباد<br/>
				
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d107506.4729651805!2d51.27971386935992!3d32.644078909782166!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3fbdd49bb4161347%3A0x44b7032107285206!2sNajafabad%2C%20Isfahan%20Province%2C%20Iran!5e0!3m2!1sen!2s!4v1597008492692!5m2!1sen!2s" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0" class="map_Location"></iframe>
			</div>
	</div>