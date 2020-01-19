<?php include("menu.php"); ?>

    <div class="sendpostBox">
        <div class="lastpostTitle">
            <p>ویرایش اسلایدر </p>
        </div><!-- lastpostTitle -->
        <?php
	 if (!isset($_GET["sliderid"]))
	 {
		 header("location:show.php");
		 exit;
		 }
		 $sliderid=$_GET["sliderid"];
		$slidersql="SELECT * FROM  `slider` WHERE `id`='".$_GET["sliderid"]."'"; 
		$sliderquery=mysqli_query($connect,$slidersql);
		if ($sliderquery)
		{
			$sliderfetch=mysqli_fetch_assoc($sliderquery);
	 ?>
     
        <form method="post" action="../check.php">
            <label>آدرس عکس</label>
            <input type="text" name="sliderimg" value="<?php echo $sliderfetch["src"] ?>">
            <label>عنوان عکس</label>
            <input type="hidden" name="updatesliderid" value="<?php echo $sliderfetch["id"] ?>">
            <input type="text" name="slidertitle" value="<?php echo $sliderfetch["title"] ?>">
            <input name="sliderdelbtn" type="submit" id="sliderdelbtn" value="ارسال اطلاعات">
        </form>
        </div><!-- sendpostBox -->
	<?php
	}
	?>
    
</div>
</body>
</html>