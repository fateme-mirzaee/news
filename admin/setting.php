<?php include("menu.php"); ?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات اسلایدر</p>
		</div><!-- lastpostTitle -->
			<form>
				<label>آدرس عکس</label>
				<input type="text" name="sliderimg">
				<label>عنوان عکس</label>
				<input type="text" name="slidertitle">
				<input type="submit" name="sliderbtn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات منوی بالایی</p>
		</div><!-- lastpostTitle -->
        <?php
		if (isset($_GET["emptytopmnu"]))
		{
			echo "<center><font color=red>تمام فیلدها باید پر باشد</font></center>";
		}
		if (isset($_GET["oktopmnu"]))
		{
			echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
		}
		if (isset($_GET["errortopmnu"]))
		{
			echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
		}
		?>
			<form method="post" action="../check.php">
				<label>عنوان</label>
				<input type="text" name="topmnutitle">
				<label>لینک</label>
				<input type="text" name="topmnulink">
				<input type="submit" name="topmnubtn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

	<div class="settBox">
		<div class="lastpostTitle">
			<p>تنظیمات منوی پایینی</p>
		</div><!-- lastpostTitle -->
			<form>
				<label>عنوان</label>
				<input type="text" name="bottnmnutitle">
				<label>لینک</label>
				<input type="text" name="bottnmnulink">
				<input type="submit" name="bottommnubtn" value="ارسال اطلاعات">
			</form>
	</div><!-- settBox -->

</body>
</html>