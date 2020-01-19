
<?php include("menu.php"); ?>
<?php
include ("../config.php");
?>
<?php
if (!isset($_COOKIE["admin"])) {
	header("location:../index.php");
	exit;
}
?>


<!************************************************send post page*****************************************************>
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

		<form method="post" action="../check.php" class="col-11 m-auto">
		<div class="row">
			<label>نوع پست :</label>
			<label> خبر<input type="radio" name="vehicle" value="post" checked></label>
			<label>خبر ویژه<input type="radio" name="vehicle" value="specialpost" > </label>
			
		</div>
		</tr>
			</tabel>
			<label>عنوان</label>
			<input type="text" name="title" >
			<label>آدرس تصویر شاخص</label>
			<input type="text" name="thumb" value=<?php  if (isset($_GET["uplod"])) echo $_GET["uplod"] ; else echo '';?> >
			<label>متن</label>
			<textarea name="content" class="ckeditor"></textarea>
			
			<input type="submit" name="sendpostbtn" value="ارسال اطلاعات" class="btn bg-success font-weight-bolder">
		</form>
		
</div><!-- sendpostBox -->


<!********************************************************************sendpost page end***********************************************>
<!-- ****************************Trigger/Open The Modal*********************************** -->
<button id="myBtn" class="btn bg-primary font-weight-bolder text-light px-5 ml-5">آپلود تصویر </button>

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
</div>
	<!******************************************************************end code most be run in pop up***********************************>
	<!******************************************************************check upload*****************************************************>
	<?php
	if (isset($_POST["uploadbtn"])) 
	{
	
		if (empty($_FILES["file"]["name"])) 
		{
			header("location:sendpost.php?uplod= 'فایلی برای آپلود انتخاب نشد لطفا مجددا سعی کنید '");
		}
		else
		{
			
			$filename="../"."thumb/".$_FILES["file"]["name"];
			$filetmp=$_FILES["file"]["tmp_name"];

			if (is_uploaded_file($filetmp)) 
			{
				if(move_uploaded_file($filetmp, $filename))
				{
					header("location:sendpost.php?uplod=thumb/".$_FILES["file"]["name"]);
					
				}
			}
			else
			{
				header("location:sendpost.php?uplod= 'مشکل در آپلود فایل لطفا مجددا سعی کنید' ");
			}
		}
	}
	
?>

	<!******************************************************************check upload end ************************************************>
  </div>

</div>

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
