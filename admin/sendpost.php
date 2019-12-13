<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
<div class="sendpostBox">
	<div class="lastpostTitle">
			<p>ارسال پست</p>
		</div><!-- lastpostTitle -->

		<form>
			<label>عنوان</label>
			<input type="text" name="title">
			<label>آدرس تصویر شاخص</label>
			<input type="text" name="thumb">
			<label>متن</label>
			<textarea name="content"></textarea>
			<input type="submit" name="sendpostbtn" value="ارسال اطلاعات">
		</form>
			<a href="#" class="uploadlink">آپلود تصویر شاخص</a>
</div><!-- sendpostBox -->



</body>
</html>