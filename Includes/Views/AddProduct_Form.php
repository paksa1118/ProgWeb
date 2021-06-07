

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="addProduct" enctype="multipart/form-data">
			
			<div>
				<input type="text" id="P_Title" name="P_Title" placeholder="عنوان محصول" value="<?php echo $P_Title;?>"/>
				<span class="text_Error"><?php echo $text_titleErr;?></span>
			</div>

			<div>
				<textarea id="P_Detail" name="P_Description" placeholder="توضیحات محصول"><?php echo $P_Description;?></textarea>
				<span class="text_Error"><?php echo $text_descriptionErr;?></span>
			</div>

			<div class="sub_div_input">
				<div class="_sub_div_input">
					<label for="P_Number">تعداد محصول</label>
					<input type="number" id="P_Number" name="P_Number" value="<?php echo $P_Number;?>"/>
					<span class="text_Error"><?php echo $text_numberErr;?></span>
				</div>

				<div class="_sub_div_input">
					<label for="P_Date">تاریخ ثبت محصول</label>
					<input type="text" id="P_Date" name="P_Date" class="pdate" value="<?php echo $P_Date;?>"/>
					<span class="text_Error"><?php echo $text_dateErr;?></span>
				</div>

				<div class="_sub_div_input">
					<label for="P_Price">قیمت محصول / تومان</label>
					<input type="number" id="P_Price" name="P_Price" value="<?php echo $P_Price;?>"/>
					<span class="text_Error"><?php echo $text_priceErr;?></span>
				</div>

				<div>
					<label for="P_Image">تصویر محصول</label>
					<input type="file" id="P_Image" name="P_Image" accept=".png, .jpg, .jpeg" value="<?php echo $P_Image;?>"/>
					<span class="text_Error"><?php echo $text_imageErr;?></span>
				</div>
			</div>


			<div class="sub_div_input">
				<div style="text-align: right">
					دسته‌بندی محصول
				</div>

				<div class="_sub_div_input">
					<label for="G1">لوازم آشپزخانه</label>
					<input type="checkbox" id="G1" name="P_Group[]"/>
				</div>

				<div class="_sub_div_input">
					<label for="G2">مبلمان</label>
					<input type="checkbox" id="G2" name="P_Group[]"/>
				</div>

				<div class="_sub_div_input">
					<label for="G3">سرمایش گرمایش</label>
					<input type="checkbox" id="G3" name="P_Group[]"/>
				</div>

				<div class="_sub_div_input">
					<label for="G4">صوتی تصویری</label>
					<input type="checkbox" id="G4" name="P_Group[]"/>
				</div>

				<div class="_sub_div_input">
					<label for="G5">لوازم شستشو</label>
					<input type="checkbox" id="G5" name="P_Group[]"/>
				</div>

				<div>
					<span class="text_Error"><?php echo $text_groupErr;?></span>
				</div>
			</div>

			<div>
				 <button type="submit" id="submit">ثبت محصول</button>
			</div>
	
		</form>

