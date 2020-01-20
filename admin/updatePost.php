
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
<?php
$uplod='';
?>
<!************************************************send post page*****************************************************>
<div class="sendpostBox">
	<div class="lastpostTitle">
			<p>ارسال پست</p>
		</div><!-- lastpostTitle -->
	 <?php
	 if (isset($_GET["error"])) 
	 {
		 if ($_GET["error"] == 100)
		 echo "<center><font color=red>فایلی یرای آپلود عکس انتخاب نشده است لطفا مجددا سعی کنید</font></center>";
		 else
		 echo "<center><font color=red>مشکل در آپلود تصویر</font></center>";
	 }
     if (isset($_GET["uplod"])) 
	 {
		$GLOBALS['uplod'] = $_GET["uplod"];
	 }
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
			<input type="text" name="thumb" value="<?php  if ($GLOBALS['uplod']!='') echo $GLOBALS['uplod'] ; else echo $postfetch["src"]?>">
			<label>متن</label>
            <input type="hidden" name="updatepostid" value="<?php echo $postfetch["id"] ?>">
			<textarea name="content" class="ckeditor" ><?php echo $postfetch["content"] ?></textarea>
			<input type="submit" name="updatepostbtn" value="ارسال اطلاعات">
		</form>
			
</div><!-- sendpostBox -->
	<?php
	}
	?>

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
			echo '<meta http-equiv="refresh" content="0; URL=http://localhost/news/admin/updatePost.php?postid='.$_GET["postid"].' & error=100 ">';
		
		}
		else
		{
			
			$filename="../"."thumb/".$_FILES["file"]["name"];
			$filetmp=$_FILES["file"]["tmp_name"];

			if (is_uploaded_file($filetmp)) 
			{
				
				if(move_uploaded_file($filetmp, $filename))
				{ 
					
					echo '<meta http-equiv="refresh" content="0; URL=http://localhost/news/admin/updatePost.php?postid='.$_GET["postid"].' & uplod=thumb/'.$_FILES["file"]["name"].'">';
				}
			}
			else
			{
				echo '<meta http-equiv="refresh" content="0; URL=http://localhost/news/admin/updatePost.php?postid='.$_GET["postid"].' & error=101">';
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
