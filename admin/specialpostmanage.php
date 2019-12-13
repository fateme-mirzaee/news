<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات پست های ویژه-شماره1</p>
		</div><!-- lastpostTitle -->
			<form>
				<label>عنوان پست ویژه-شماره1</label>
				<input type="text" name="specialpost1title">
				<label>آدرس عکس پست ویژه-شماره1</label>
				<input type="text" name="specialpost1img">
				<label>متن پست ویژه-شماره1</label>
				<textarea name="specialpost1content"></textarea>
				<input type="submit" name="specialpost1btn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات پست های ویژه-شماره2</p>
		</div><!-- lastpostTitle -->
			<form>
				<label>عنوان پست ویژه-شماره2</label>
				<input type="text" name="specialpost2title">
				<label>آدرس عکس پست ویژه-شماره2</label>
				<input type="text" name="specialpost2img">
				<label>متن پست ویژه-شمار2</label>
				<textarea name="specialpost2content"></textarea>
				<input type="submit" name="specialpost2btn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات پست های ویژه-شماره3</p>
		</div><!-- lastpostTitle -->
			<form>
				<label>عنوان پست ویژه-شماره3</label>
				<input type="text" name="specialpost3title">
				<label>آدرس عکس پست ویژه-شماره3</label>
				<input type="text" name="specialpost3img">
				<label>متن پست ویژه-شمار3</label>
				<textarea name="specialpost3content"></textarea>
				<input type="submit" name="specialpost3btn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

</body>
</html>