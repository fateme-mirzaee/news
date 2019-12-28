<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
			<p>ارسال پست</p>
		</div><!-- lastpostTitle -->
     <?php
	 if (!isset($_GET["postid"]))
	 {
		 header("location:postmanage.php");
		 exit;
		 }
		 $postid=$_GET["postid"];
		$postsql="SELECT * FROM  `post` WHERE `id`='".$_GET["postid"]."'"; 
		$postquery=mysqli_query($connect,$postsql);
		if ($postquery)
		{
			$postfetch=mysqli_fetch_assoc($postquery);
	 ?>

		<form method="post" action="../check.php">
			<label>عنوان</label>
			<input type="text" name="title" value="<?php echo $postfetch["title"] ?>">
			<label>آدرس تصویر شاخص</label>
			<input type="text" name="thumb" value="<?php echo $postfetch["src"] ?>">
			<label>متن</label>
            <input type="hidden" name="updatepostid" value="<?php echo $postfetch["id"] ?>">
			<textarea name="content" ><?php echo $postfetch["content"] ?></textarea>
			<input type="submit" name="updatepostbtn" value="ارسال اطلاعات">
		</form>
			<a href="upload.php" class="uploadlink">آپلود تصویر شاخص</a>
</div><!-- sendpostBox -->
	<?php
	}
	?>


</body>
</html>