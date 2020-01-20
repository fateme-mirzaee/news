<?php include ("menu.php"); ?>
<?php
	if (!isset($_COOKIE["admin"])) {
		header("location:../index.php");
		exit;
	}
?>
<!--menu-->
	<div class="settBox">
		<div class="lastpostTitle">
			<p>مدیریت اجزای منوی بالایی</p>
		</div><!-- lastpostTitle --> 

		<?php
		if (isset($_GET["okdelmnu"]))
					{
					echo "<font color=green>با موفقیت پاک شد.</font>";
					}
					if (isset($_GET["nodelmnu"]))
					{
					echo "<font color=red>مشکل در حذف</font>";
					}
		?>
		<center>
            <div class="manage m-auto col-11">

			<?php        
			$mnu="SELECT * FROM  `menu` ORDER BY  `id` DESC ;";
			$mnuresult=mysqli_query($connect,$mnu);
			while($mnufetch=mysqli_fetch_assoc($mnuresult))
			{
			?>
                <div class="row">
                    <div class="col-md-5 text-box"> <?php echo $mnufetch["title"]; ?></a></div>
                    <div class="col-md-3 text-center"><a href=<?php echo "update-header.php?mnuid=$mnufetch[id]" ?> class="btn-edit">ویرایش</a></div>
					<div class="col-md-3 text-center"><a href=<?php echo "../check.php?mnuid=$mnufetch[id]" ?>   class="btn-remove">حذف</a></div>
                </div>
			<?php
			}
			?>

			</div>    
		</center>
        <div class="settBox">
		
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
				<input type="submit" name="topmnubtn" class="btn bg-success text-light font-weight-bolder" value="ارسال اطلاعات">
			</form>
		</div><!-- settBox -->
	</div><!-- settBox -->
    
    
<!--slider -->
	<div class="settBox">
		<div class="lastpostTitle">
			<p>مدیریت اجزای اسلایدر</p>
		</div><!-- lastpostTitle -->

		<?php
		if (isset($_GET["okdelslider"]))
			{
				echo "<font color=green>با موفقیت پاک شد.</font>";
			}
			if (isset($_GET["nodelslider"]))
			{
				echo "<font color=red>مشکل در حذف</font>";
			}
		?>
		<center>
			<div class="manage m-auto col-11">
				<?php        
					$slider="SELECT * FROM  `slider` ORDER BY  `id` DESC ;";
					$sliderresult=mysqli_query($connect,$slider);
					while($sliderfetch=mysqli_fetch_assoc($sliderresult))
					{
				?>
                <div class="row">
                    <div class="col-md-5 text-box"><?php echo $sliderfetch["title"]; ?></a></div>
					<div class="col-md-3 text-center"><a href=<?php echo "update-slider.php?sliderid=$sliderfetch[id]" ?> class="btn-edit">ویرایش</a></div>
					<div class="col-md-3 text-center"><a href=<?php echo "../check.php?sliderid=$sliderfetch[id]" ?>   class="btn-remove">حذف</a></div>
				</div>
				<?php
				}
				?>

             </div>   
             
		</center>
		<div class="settBox">
			<div class="lastpostTitle">
		
             <?php
				if (isset($_GET["emptyslider"]))
				{
					echo "<center><font color=red>تمام فیلدها باید پر باشد</font></center>";
				}
				if (isset($_GET["okslider"]))
				{
					echo "<center><font color=green>اطلاعات با موفقیت ارسال شد</font></center>";
				}
				if (isset($_GET["errorslider"]))
				{
					echo "<center><font color=red>مشکل در ارسال اطلاعات</font></center>";
				}
				?>
			</div><!-- lastpostTitle -->
			<form method="post" action="../check.php">
				<label>آدرس عکس</label>
				<input type="text" name="sliderimg" value=<?php  if (isset($_GET["uplod"])) echo $_GET["uplod"] ; else echo '';?>>
				<label>عنوان عکس</label>
				<input type="text" name="slidertitle" >
				<input type="submit" name="sliderbtn" class="btn bg-success text-light font-weight-bolder" value="ارسال اطلاعات">
			</form>
          
		</div><!-- settBox -->


    <!********************************************************************sendpost page end***********************************************>
<!-- ****************************Trigger/Open The Modal*********************************** -->
<button id="myBtn" class="btn bg-primary font-weight-bolder text-light px-5 ml-5 mb-5">آپلود تصویر </button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <!*****************************************************************add code most be run in pop up**********************************>
    <div class="col-12 text-center">
<div class="uploadBox text-justify">
<form method="post" enctype="multipart/form-data" >
	
	<label for="file">آدرس عکس</label>
	<input  type="file" name="file">	
	
	<input type="submit" name="uploadbtn" value="آپلود">
	
</form>
</div>
</div><!******************************************************************check upload*****************************************************>
	<?php
	if (isset($_POST["uploadbtn"])) 
	{
	
		if (empty($_FILES["file"]["name"])) 
		{
			echo '<meta http-equiv="refresh" content="0; URL=http://localhost/news/admin/show.php?uplod=فایلی برای آپلود انتخاب نشد لطفا مجددا سعی کنید ">';
		}
		else
		{
			
			$filename="../"."thumb/".$_FILES["file"]["name"];
			$filetmp=$_FILES["file"]["tmp_name"];

			if (is_uploaded_file($filetmp)) 
			{
				if(move_uploaded_file($filetmp, $filename))
				{
					echo '<meta http-equiv="refresh" content="0; URL=http://localhost/news/admin/show.php?uplod=thumb/'.$_FILES["file"]["name"].'">';
					
					
				}
			}
			else
			{
				echo '<meta http-equiv="refresh" content="0; URL=http://localhost/news/admin/show.php?uplod=مشکل در آپلود فایل لطفا مجددا سعی کنید">';
			}
		}
	}
	
?>

	<!******************************************************************check upload end ************************************************>
  		</div>

	</div>
</div><!-- settBox -->



<!--specialpost-->

    <div class="settBox">
		<div class="lastpostTitle">
			<p>مدیریت اجزای پست های ویژه</p>
		</div><!-- lastpostTitle -->

		<?php
		if (isset($_GET["okdelspecialpost"]))
					{
					echo "<font color=green>با موفقیت پاک شد.</font>";
					}
					if (isset($_GET["nodelspecialpost"]))
					{
					echo "<font color=red>مشکل در حذف</font>";
					}
		?>
		<center>
			<div class="manage m-auto col-11">	
								
				<?php        
				$specialpost="SELECT * FROM  `specialpost` ORDER BY  `id` DESC ;";
				$specialpostresult=mysqli_query($connect,$specialpost);
				while($specialpostfetch=mysqli_fetch_assoc($specialpostresult))
				{
				?>
                <div class="row">
                    <div class="col-md-5"><a href=<?php echo "../seenews.php?specialpostid=$specialpostfetch[id]" ?> class="text-box"><?php echo $specialpostfetch["title"]; ?></a></div>
                    <div class="col-md-3 text-center"><a href=<?php echo "update-specialpost.php?specialpostid=$specialpostfetch[id]" ?> class="btn-edit">ویرایش</a></div>
					<div class="col-md-3 text-center"><a href=<?php echo "../check.php?specialpostid=$specialpostfetch[id]" ?>   class="btn-remove">حذف</a></div>
                    
				</div>
				
				
                
				<?php
					}
				?>

			</div>       
 		</center>
    </div><!-- settBox -->
<!--managepostbox-->
	<div class="managepostBox">
		<div class="lastpostTitle">
			<p>مدیریت پست های وبسایت</p>
		</div><!-- lastpostTitle -->
			<center>
				<?php
				# Post Delete
				if (isset($_GET["okdel"]))
				{
				echo "<font color=green>پست با موفقیت پاک شد.</font>";
				}
				if (isset($_GET["nodel"]))
				{
				echo "<font color=red>مشکل در حذف پست</font>";
				}
				# Post Update
				if (isset($_GET["empty"]))
				{
				echo "<font color=red>تمام فیلدها باید پر باشند</font>";
				}
				if (isset($_GET["noupdate"]))
				{
				echo "<font color=red>مشکل در بروزرسانی اطلاعات</font>";
				}
				if (isset($_GET["okupdate"]))
				{
				echo "<font color=green>اطلاعات با موفقیت بروزرسانی شد</font>";
				}
				?>

				<div class="manage m-auto col-11">
					<?php
						$posrsql="SELECT * FROM  `post` ORDER BY  `id` DESC ;";
						$postquery=mysqli_query($connect,$posrsql);
						while($postfetch=mysqli_fetch_assoc($postquery))
						{
							
					?>
            
					<div class="row">
						<div class="col-md-5"><a href=<?php echo "../readmore.php?postid=$postfetch[id]" ?> class="text-box"><?php echo $postfetch["title"]; ?></a></div>
						<div class="col-md-3 text-center"><a href=<?php echo "updatePost.php?postid=$postfetch[id]" ?> class="btn-edit">ویرایش</a></div>
						<div class="col-md-3 text-center"><a href=<?php echo "../check.php?postid=$postfetch[id]" ?>   class="btn-remove">حذف</a></div>
					</div>
					<?php
					}
					?>
			
				</div>
			</center>
		</div><!-- managepostBox -->
<!--footer-->
 
    
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>

</html>
