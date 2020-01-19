<?php include("menu.php"); ?>

<div class="sendpostBox">
	<div class="lastpostTitle">
		<p>ویرایش منو بالایی</p>
	</div><!-- lastpostTitle -->
    <?php
	 if (!isset($_GET["mnuid"]))
	 {
		 header("location:show.php");
		 exit;
		 }
		 $mnuid=$_GET["mnuid"];
		$mnusql="SELECT * FROM  `menu` WHERE `id`='".$_GET["mnuid"]."'"; 
		$mnuquery=mysqli_query($connect,$mnusql);
		if ($mnuquery)
		{
			$mnufetch=mysqli_fetch_assoc($mnuquery);
	 ?>
  <form method="post" action="../check.php">
        <label>عنوان</label>
        <input type="text" name="title" value="<?php echo $mnufetch["title"] ?>">
        <label for="link">آدرس</label>
        <input type="hidden" name="updateheaderid" value="<?php echo $mnufetch["id"] ?>">
        <input type="text" name="link" value="<?php echo $mnufetch["link"] ?>">
        <input type="submit" name="updateheaderbtn" value="ارسال اطلاعات">
    </form> 
    </div><!-- sendpostBox -->
	<?php
	}
	?>
       
</div>
</body>
</html>