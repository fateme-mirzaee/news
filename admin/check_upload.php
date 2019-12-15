<?php include("menu.php"); ?>

<div class="uploadBigbox" >



<?php
	if (isset($_POST["uploadbtn"])) 
	{
	
		if (empty($_FILES["file"]["name"])) 
		{
			echo "<center>فایلی انتخاب نشده است</center>";
		}
		else
		{
			
			$filename="../"."thumb/".$_FILES["file"]["name"];
			$filesize=floor($_FILES["file"]["size"]/1024)." کیلوبایت";
			$filetype=$_FILES["file"]["type"];
			$filetmp=$_FILES["file"]["tmp_name"];

			if (is_uploaded_file($filetmp)) 
			{
				if(move_uploaded_file($filetmp, $filename))
				{
					echo "<p>فایل با موفقیت آپلود شد</p>"."<br/>";
					echo "<p>نام فایل : ".$filename."</p>"."<br/>";
					echo "<p>سایز فایل : ".$filesize."</p>"."<br/>";
					echo "<p>نوع فایل : ".$filetype."</p>"."<br/>";
					echo "<p>آدرس فایل: ".$filename."</p>"."<br/>";
					
					
				}
			}
			else
			{
				echo "<center>مشکل در آپلود</center>";
			}
		}
	}
	
?>

</div><!-- uploadBigbox -->

</body>
</html>