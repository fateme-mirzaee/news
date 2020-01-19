<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
		<p>ویرایش پست ویژه</p>
	</div>
    
		<form method="post" action="../check.php">
			<label>عنوان</label>
			<input type="text" name="title" value="">
			<label>آدرس تصویر شاخص</label>
			<input type="text" name="thumb" value="">
			<label>متن</label>
			<input type="hidden" name="updatepostid" value="">
			<textarea name="content" ></textarea>
			<input type="submit" name="updatespecialpostbtn" value="ارسال اطلاعات">
		</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
</div>



</body>
</html>