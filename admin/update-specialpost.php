<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
		<p>ویرایش پست ویژه</p>
	</div><!-- lastpostTitle -->
        <?php
	 if (!isset($_GET["specialpostid"]))
	 {
		 header("location:show.php");
		 exit;
		 }
		 $specialpostid=$_GET["specialpostid"];
		$specialpostsql="SELECT * FROM  `specialpost` WHERE `id`='".$_GET["specialpostid"]."'"; 
		$specialpostquery=mysqli_query($connect,$specialpostsql);
		if ($specialpostquery)
		{
			$specialpostfetch=mysqli_fetch_assoc($specialpostquery);
	 ?>
    
		<form method="post" action="../check.php">
			<label>عنوان</label>
			<input type="text" name="title" value="<?php echo $specialpostfetch["title"] ?>">
			<label>آدرس تصویر شاخص</label>
			<input type="text" name="thumb" value="<?php echo $specialpostfetch["src"] ?>">
			<label>متن</label>
			<input type="hidden" name="updatespecialpostid" value="<?php echo $specialpostfetch["id"] ?>"">
			<textarea name="content" ><?php echo $specialpostfetch["content"] ?>"</textarea>
			<input type="submit" name="updatespecialpostbtn" value="ارسال اطلاعات">
		</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
        </div><!-- sendpostBox -->
	<?php
	}
	?>
    
</div>
</body>
</html>