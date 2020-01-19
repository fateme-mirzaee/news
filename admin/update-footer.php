<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
		<p>ویرایش منو پایینی</p>
	</div><!-- lastpostTitle -->
    <?php
	 if (!isset($_GET["bottnmnuid"]))
	 {
		 header("location:show.php");
		 exit;
		 }
		 $bottnmnuid=$_GET["bottnmnuid"];
		$bottnmnusql="SELECT * FROM  `bottemmenu` WHERE `id`='".$_GET["bottnmnuid"]."'"; 
		$bottnmnuquery=mysqli_query($connect,$bottnmnusql);
		if ($bottnmnuquery)
		{
			$bottnmnufetch=mysqli_fetch_assoc($bottnmnuquery);
	 ?>
    <form method="post" action="../check.php">
        <label>عنوان</label>
        <input type="text" name="title" value="<?php echo $bottnmnufetch["title"] ?>">
        <label for="link">آدرس</label>
        <input type="hidden" name="updatefooterid" value="<?php echo $bottnmnufetch["id"] ?>">
        <input type="text" name="link" value="<?php echo $bottnmnufetch["link"] ?>">
        <input type="submit" name="updatefooterbtn" value="ارسال اطلاعات">
    </form>
    </div><!-- sendpostBox -->
	<?php
	}
	?>
    
</div>
</body>
</html>