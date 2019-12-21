<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>
	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات پست های ویژه</p>
<?php
if (isset($_GET["empty"])) 
{
	echo "<center><font color=red>تمام فیلد ها باید ‍پر باشد</font></center>";
}
if (isset($_GET["error"])) 
{
	echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
}
if (isset($_GET["ok"])) 
{
	echo "<center><font color=green>ارسال اطلاعات با موفقیت انجام شد</font></center>";
}
?>
		</div><!-- lastpostTitle -->
			<form method="post" action="../check.php">
				<label>عنوان پست ویژه</label>
				<input type="text" name="specialposttitle">
				<label>آدرس عکس پست ویژه</label>
				<input type="text" name="specialpostimg">
				<label>متن پست ویژه</label>
				<textarea name="specialpostcontent"></textarea>
				<input type="submit" name="specialpostbtn" value="ارسال اطلاعات">
			</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
	</div><!-- settBox -->

</body>
</html>