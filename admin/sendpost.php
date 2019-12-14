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

		<form method="post" action="../check.php">
			<label>عنوان</label>
			<input type="text" name="title">
			<label>آدرس تصویر شاخص</label>
			<input type="text" name="thumb">
			<label>متن</label>
			<textarea name="content"></textarea>
			<input type="submit" name="sendpostbtn" value="ارسال اطلاعات">
		</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
</div><!-- sendpostBox -->



</body>
</html>